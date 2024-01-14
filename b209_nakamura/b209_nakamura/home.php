<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>進級制作B209</title>
   
</head>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

img {
    width: 40%;
    margin: 20px 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    width: 100%;
    text-align: center;
}

.ddmenu {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.ddmenu li {
    display: inline-block;
    margin: 0 15px;
}

.ddmenu a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
}
button {
    background-color: #cc0000; /* メニュー項目の背景色(濃い赤色) */
   color: white;   
    padding: 10px 20px; /* 上下左右の余白 */
    font-size: 16px;
    border: none;
    border-radius: 5px; /* 角丸 */
    cursor: pointer;
    transition: background-color 0.3s; /* ホバー時のアニメーション */
}

/* ボタンのホバー時のスタイル */
button:hover {
    background-color: #ffdddd; /* メニュー項目にマウスが載ったときの背景色(淡いピンク) */
   color: #dd0000;    
}
</style>
<body>

    <img src="img/youtube_PNG102353.png" width="40%">
    <header class="hed">
        <ul class="ddmenu">
            <li><a href="home.php">HOME</a></li>
            <li><a href="setumei.php">説明</a>
            </li>
            <li><a href="osusume.php">おすすめ動画</a>
            </li>
            <li><a href="mypage.php">マイページ</a>
            </li>
            <li><a href="game.php">ミニゲーム</a>
            </li>
         </ul>
    </header>
    
    <div class="main">
        <h1>
            <?php
            // セッションにユーザー情報がある場合はユーザーネームを表示
            if (isset($_SESSION["username"])) {
                echo "<p>ようこそ、" . $_SESSION["username"] . "さん！</p>";

            } 
            
            ?>
        </h1>
        <h1>あなたに合ったおすすめの実況動画を</h1>
        <p>数多くあるゲーム実況からあなたにおすすめの動画を選抜します。<br>
            新たな動画や実況者に出会えるかも！</p>
        <button onclick="location.href='osusume.php'">おすすめ動画</button>
    </div>
    <div class="setumei">
        <h1>ゲーム実況とは？</h1>
        <p>ゲーム実況とは、プレイヤーが実況しながらはゲームを遊ぶことをいいます。<br>これらを行う人のことを</p>
        <h3>『ゲーム実況者』</h3>
        <p>と呼びます。</p>
        <button onclick="location.href='setumei.php'">実況者</button>
    </div>
    <div class="osusume">
        <h1>私のおすすめの実況者</h1>
        <p>私がおすすめする実況者はNoelchannelです</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NKelkj-HozM?si=OcV-JlkIIcN9M8GD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Noelchannelは中高の同級生５人の実況者グループです<br>
            2021年3月31日に活動を終了し、現在は個別で配信をしています。<br>
            だらだらと日常的な雰囲気が好きな人にはおすすめの実況者です。
        </p>
        </div>

<!-- ナビゲーションバーやその他のヘッダーのコンテンツ -->



</body>
</html>