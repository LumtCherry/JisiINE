<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Tag;
use App\Http\Requests\RecipeRequest;
use Cloudinary;

class RecipeController extends Controller
{
    //新着順に並べた画面用
    public function updated(Recipe $recipe)//インポートしたRecipeモデルをインスタンス化して$recipeとして使用。
    {
         return view('recipes.updated')->with(['recipes' => $recipe->getPaginateByLimit()]); //Recipeモデルの10個制限ページネーションを呼び出す
    }
    
    //Welcome画面での新着順用
    public function updated_welcome(Recipe $recipe)//インポートしたRecipeモデルをインスタンス化して$recipeとして使用。
    {
         return view('welcome')->with(['recipes' => $recipe->getPaginateByLimit_welcome()]); //Recipeモデルの10個制限ページネーションを呼び出す
    }
    
    
    //レシピの詳細表示
    public function show(Recipe $recipe)
    {
        return view('recipes.show')->with(['recipe' => $recipe]);//$recipeの中身はid=1のRecipeインスタンス
    }
    
    //レシピの作成
    public function create(Tag $tag)
    {
        return view('recipes.create')->with(['tags' => $tag->get()]);
    }
    
    public function store(Recipe $recipe , RecipeRequest $request)//ユーザーからのリクエストを扱う場合、Requestインスタンスを利用
    {
        $input_recipe = $request['recipe'];//$request['recipe']で、recipeをキーにもつリクエストパラメータを取得。キーはHTMLのFormタグ内で定義した各入力項目のname属性と一致する。
        $input_tags = $request->tags_array;
        if($request->file('image')){//画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath(); //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
            $input += ['image_path' => $image_url];  //$input = $input + ['image_path' => $image_url]の省略形
        }
        $recipe->fill($input_recipe)->save();//$recipe->fill($input_recipe)とすることで、store関数が実行時点で空だったPostインスタンスのプロパティを、受け取ったキーごとに上書きできる。fillを実行する時、RecipeModel側でfillableというプロパティにfillが可能なプロパティを指定しておく必要あり。save()でDBへデータを追加
        $recipe->tags()->attach($input_tags);//attachメソッドを使って中間テーブルにデータを保存
        
        return redirect('/recipes/' . $recipe->id);//今回保存したpostのIDを含んだURLにリダイレクトさせる
    }
    
    //レシピ編集
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit')->with(['recipe' => $recipe]);
    }
    
    public function update(RecipeRequest $request, Recipe $recipe)
    {
        $input_recipe = $request['recipe'];
        $recipe->fill($input_recipe)->save();

        return redirect('/recipes/' . $recipe->id);
    }
    
    //レシピ削除
    public function delete(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('/recipes_updated');
    }
}
