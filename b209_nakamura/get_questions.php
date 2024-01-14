<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "b209";

$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーの確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// データベースから質問を取得
$result = $conn->query("SELECT * FROM questions1");

$questions = array();
while ($row = $result->fetch_assoc()) {
    $questions[] = $row['question_text'];
}

echo json_encode($questions);

$conn->close();
?>