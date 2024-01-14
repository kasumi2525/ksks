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
<style>body {
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

.setumei {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px;
    text-align: center;
}

.syurui, .twopla {
    margin-top: 20px;
}

.haisin, .platform {
    margin-bottom: 20px;
}

.haisin h2, .platform h2 {
    color: #4caf50;
    border-bottom: 2px solid #4caf50;
    padding-bottom: 5px;
    margin-bottom: 10px;
}
.haisin-container {
    display: flex;
    justify-content: space-between;
}

.haisin {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: calc(48% - 20px); /* 3分割で横に並べる */
    margin-bottom: 20px;
    text-align: center;
}
.platform-container {
    display: flex;
    justify-content: space-between;
}

.platform {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: calc(48% - 20px); /* 幅を調整 */
    margin-bottom: 20px;
    text-align: center;
}

/* 最後の要素には margin を追加しない */
.platform:last-child {
    margin-right: 0;
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

<div class="setumei">
    <h1>ゲーム実況とは？</h1>
    
    <p>ゲーム実況者とは、ゲームのプレイ風景を実況し、動画を投稿したり、<br>
        ライブ配信をする人のことで、ストリーマーとも言います。<br>
        動画投稿サイトには多くのゲーム実況動画がアップされており、<br>
        YouTuberと混同されがちですが、ゲーム実況をメインに行う人が「ゲーム実況者」です。<br>
        2000年代初頭に動画サイトでゲーム実況をする人が現れ、徐々に人気が高まり、<br>
        現在では多くの実況者がいます。
    </p>
    <div class="syurui">
    <h1>ゲーム実況の種類</h1>
    <div class="haisin-container">
        <div class="haisin">
            <h2>動画配信</h2>
            <p>動画配信は、自分で録画した動画をYouTubeなどのプラットフォームに投稿することをいいます。</p>
        </div>
        <div class="haisin">
            <h2>ライブ配信</h2>
            <p>「ライブ」という名前からもわかる通り、リアルタイムでゲームを実況し、その様子を配信します。リアルタイムで配信することから、編集の必要がなく、視聴者と会話しながらゲームを進めていきます。</p>
        </div>
    </div>
</div>
<div class="twopla">
    <h1>プラットフォーム</h1>
    <div class="platform-container">
        <div class="platform">
            <h2>Youtube</h2>
            <p>世界最大の動画共有サービス<br>YouTubeでは、ユーザーが自由に動画を視聴、アップロード、共有することが出来ます。</p>
        </div>
        <div class="platform">
            <h2>Twitch</h2>
            <p>Amazonが提供するライブ配信プラットフォームで、主にゲーム実況を中心としている「Twitch」<br>世界中のユーザーが利用をしており、150万人以上の配信者と1億人以上の視聴者を抱える規模の大きさが魅力</p>
        </div>
    </div>
</div>


    
</body>
</html>