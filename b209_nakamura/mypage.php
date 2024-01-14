<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login_form.php");
    exit();
}
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "b209";

// MySQLへの接続
$conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>進級制作B209</title>
   
</head>
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
    


</body>
</html>