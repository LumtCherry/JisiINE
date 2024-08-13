<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>レシピ一覧</title>
    </head>
    <body>
        <div class="recipes">
            @foreach ($recipes as $recipe)
                <div class="recipe">
                    <h2 class="title"><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></h2><!--タイトル表示-->
                    <p class="body">{{ $recipe->introduction }}</p><!--紹介文表示-->
                    <div class="image"><!--画像の表示-->
                        <img src="{{ $recipe->image_path }}" alt="画像が読み込めません。">
                    </div>
                    <!--レシピについているタグを全部表示-->
                    <h3 class="recipe_tag">
                    @foreach($recipe->tags as $tag)   
                        {{ $tag->name }}
                    @endforeach
                    </h3>
                    <p class="updated_at">{{ $recipe->updated_at }}</p>
                </div>
            @endforeach
        </div>
        
        <div class="paginate"><!--ページネーション-->
            {{ $recipes->links() }}
        </div>
    </body>
</html>