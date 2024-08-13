<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レシピの編集</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        textarea {
            height: 150px;
        }
    </style>
</head>
<body>
        <h1>レシピ編集</h1>
        
         <form action="/recipes/{{ $recipe->id }}" method="POST" enctype="multipart/form-data"><!--entype~は画像のアップロードに必要-->
            @csrf<!--CSRFトークンフィールド　formタグを使う時は必須-->
            @method('PUT')<!--formタグのmethod属性はPOSTを指定したうえで,@method('PUT')を記述することでPutリクエストとして送信できる-->
            <div class="title">
                <h2>レシピ名</h2>
                <input type="text" name="recipe[title]" placeholder="レシピ名を入力：最大50文字" value="{{ old('recipe.title') }}"/><!--name部分は入れ子構造にすることによって、サーバ側で扱う時、recipe => [ 'title' => 'aaaa', 'body' => 'bbbb']というような形で、recipeの配列に入れ子で扱うことができる。old内には直前で入力していた内容が入っている-->
                <p class="title__error" style="color:red">{{ $errors->first('recipe.title') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            
            <!--<div class="image">
                <h2>差し替える画像をアップロード</h2>
                <input type="file" name="recipe[image_path]" value="料理の画像をここにアップロード">
            </div>-->
            
            
            <div class="ingredients">
                <h2>材料</h2>
                <textarea name="recipe[ingredients]" placeholder="材料を書こう!　例:豚バラ100g">{{ old('recipe.ingredients') }}</textarea><!--old内には直前で入力していた内容が入っている-->
                <p class="ingredients__error" style="color:red">{{ $errors->first('recipe.ingredients') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
            
            <div class="recipe">
                <h2>レシピ</h2>
                <textarea name="recipe[recipe]" placeholder="レシピを書こう!　例:1.豚バラを細かく切る">{{ old('recipe.recipe') }}</textarea><!--old内には直前で入力していた内容が入っている-->
                <p class="recipe__error" style="color:red">{{ $errors->first('recipe.recipe') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
        
            <div class="introduction">
                <h2>料理紹介</h2>
                <textarea name="recipe[introduction]" placeholder="あなたの素晴らしい料理の紹介を書こう！：最大500文字">{{ old('recipe.introduction') }}</textarea><!--old内には直前で入力していた内容が入っている-->
                <p class="introduction__error" style="color:red">{{ $errors->first('recipe.introduction') }}</p><!--赤文字でバリデーションエラーの英文を表示する-->
            </div>
        
        
            <input type="submit" value="更新"/>
        </form>
            
            <div class="footer"><!--戻るURL-->
            <a href="/recipes_updated">戻る</a>
            </div>
</body>
</html>