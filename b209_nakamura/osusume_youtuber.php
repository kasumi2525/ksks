<?php
session_start();

// セッション変数がセットされていない場合はログイン画面にリダイレクト
if (!isset($_SESSION["username"])) {
    header("Location: login_form.php");
    exit();
}

// データベースへの接続情報（適切な情報に変更してください）
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
            <li><a href="setumei.php">説明</a></li>
            <li><a href="osusume.php">おすすめ動画</a></li>
            <li><a href="mypage.php">マイページ</a></li>
            <li><a href="game.php">ミニゲーム</a></li>
         </ul>
    </header>
<?php

// $_SESSION['numberArray']からデータの取得（サニタイジングが必要）
$numberArray = $conn->real_escape_string($_SESSION['numberArray']);

// youtubersテーブルからデータを取得
$sql = "SELECT name, explanation, img FROM youtubers WHERE id = '$numberArray'";
$result = $conn->query($sql);

// 結果の確認
if ($result->num_rows > 0) {
    // データがある場合は表示
    while ($row = $result->fetch_assoc()) {
        echo "<h1>あなたにおすすめの実況者は</h1>";
        echo "<h1>" . $row["name"] . "</h1>";
        echo "<img src='". $row["img"] . "' alt='youtuber_image' width='40%'><br>";
        echo "<h2>". $row["name"] . "とは？" ."</h1>";
        echo $row["explanation"] ;
    }
} else {
    // データがない場合の処理（エラーメッセージなど）
    // 完全一致するものがない場合、似ているidを一つ取得する
    $sqlSimilar = "SELECT name, explanation, img FROM youtubers WHERE id LIKE '%$numberArray%' LIMIT 1";
    $resultSimilar = $conn->query($sqlSimilar);

    if ($resultSimilar->num_rows > 0) {
        while ($rowSimilar = $resultSimilar->fetch_assoc()) {
            echo "<h1>あなたにおすすめの実況者は</h1>";
            echo "<h1>" . $rowSimilar["name"] . "</h1>";
            echo "<img src='". $rowSimilar["img"] . "' alt='youtuber_image' width='40%'><br>";
            echo "<h2>". $rowSimilar["name"] . "とは？" ."</h1>";
            echo $rowSimilar["explanation"] ;
        }
    } else {
        echo "Youtuberが見つかりませんでした。";
    }
}
// MySQL接続のクローズ
$conn->close();
?>

</body>
</html>
