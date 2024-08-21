<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class LikeController extends Controller
{
    public function like(Recipe $recipe)
    {
        //auth->userで認証されているユーザを取得
        //likes()はUserモデルで定義したlikesリレーションを呼び出し、認証されているユーザーが「いいね」したレシピの一覧を取得
        //toggleで指定されたレシピが「いいね」一覧に含まれている場合、削除し、含まれていない場合は追加
        
        
        if (auth()->user()->likes()->where('recipe_id', $recipe->id)->exists()) {
        return back()->with('error', '既にいいねしています');
        }//いいねの重複を防ぐ処理
        
        auth()->user()->likes()->toggle($recipe);
        
        return back();
    }

    public function unlike(Recipe $recipe)
    {
        //toggleで指定されたレシピがいいね一覧から削除される
        auth()->user()->likes()->toggle($recipe);

        return back();
    }
}
