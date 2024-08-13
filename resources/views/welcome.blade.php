
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JisiINE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .button {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .ranking-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .ranking-item {
            width: 30%;
            height: 200px;
            border: 1px solid #000;
        }
        .recipe_image {
            width: 300px;
            height: 100px;
            border: 1px solid #111;
        }
    </style>
</head>
<body>
    <header>
        <h1>JisiNE!</h1>
        <input type="text" placeholder="定番シチュー類、肉・魚野菜など">
        <button class="button">新規登録/ログイン</button>
    </header>

    <div class="search-container">
        <h2>今日は何作る？</h2>
        <input type="text" placeholder="Search">
        <button class="button">レシピ検索</button>
    </div>

    <div style="text-align: center;">
        <a href='/recipes/create'>レシピ作成</a>
    </div>

    <div class="ranking-container">
        <div>
            <h3>いいね!ランキング</h3>
            <div class="ranking-item"></div>
        </div>
        <div>
            <h3>閲覧ランキング</h3>
            <div class="ranking-item"></div>
        </div>
        <div>
            <a href="/recipes_updated">新着レシピ</a>
            <div class="ranking-item">
                @foreach ($recipes as $recipe)
                <div class="recipe">
                    <h2 class="title"><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></h2><!--タイトル表示-->
                    <p class="body">{{ $recipe->introduction }}</p><!--紹介文表示-->
                    
                    <div class="image"><!--画像の表示-->
                        <img class="recipe_image" src="{{ $recipe->image_path }}" alt="画像が読み込めません。">
                    </div>
                    
                    <p class="tag">
                    @foreach($recipe->tags as $tag)   
                        {{ $tag->name }}<!--タグの表示-->
                    @endforeach
                    </p>
                    
                    <p class="updated_at">{{ $recipe->updated_at }}</p>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
</body>
</html>