<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $recipe->title }}</title>
    </head>
    <body>
        <div class="recipe_content"><!--レシピ内容-->
            
            <h1 class="title">
            {{ $recipe->title }}
            </h1>
            
            <div class="image">
                <img src="{{ $recipe->image_path }}" alt="画像が読み込めません。">
            </div>
            
            <!--レシピについているタグを全部表示-->
            <h1 class="tag">タグ</h1>
            <p class="recipe_tag">
            @foreach($recipe->tags as $tag)   
            {{ $tag->name }}
            @endforeach
            </p>
            
            <div class="ingredients">
                <h2>用意するもの・材料</h2>
                <p>{{ $recipe->ingredients }}</p>    
            </div>
            
            <div class="recipe">
                <h2>作り方</h2>
                <p>{{ $recipe->recipe }}</p>    
            </div>
            
            <div class="introduction">
                <h2>レシピ紹介</h2>
                <p>{{ $recipe->introduction }}</p>    
            </div>
        </div>
        
        <div class="edit"><a href="/recipes/{{ $recipe->id }}/edit">投稿の編集</a></div>
        
        <form action="/recipes/{{ $recipe->id }}" id="form_{{ $recipe->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deleteRecipe({{ $recipe->id }})">投稿削除</button> 
        </form>
        
        <div class="footer">
            <a href="/recipes_updated">戻る</a>
        </div>
        
        <script>
            function deleteRecipe(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>