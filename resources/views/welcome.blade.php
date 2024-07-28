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
        <button class="button">レシピ作成</button>
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
            <h3>新着レシピ</h3>
            <div class="ranking-item"></div>
        </div>
    </div>
</body>
</html>