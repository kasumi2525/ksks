<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login_form.php");
    exit();
}

// セッション変数にnumberArrayのデータを登録
if (isset($_POST['numberArray'])) {
    $_SESSION['numberArray'] = $_POST['numberArray'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>進級制作B209</title>
    
<style>#yes, #no {
   background-color: #7D0022; /* ボタンの背景色 */
   color: white; /* ボタンの文字色 */
   padding: 10px 20px; /* ボタンの内側の余白 */
   border: none; /* ボーダーなし */
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px; /* ボタンの文字サイズ */
   margin: 4px 2px;
   cursor: pointer;
   border-radius: 8px; /* ボタンの角を丸くする */
}

/* ボタンのホバーエフェクト */
#yes:hover, #no:hover {
   background-color: #4C444D; /* ホバー時の背景色 */
}</style>
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
    
    <div id="question-container"></div>
    <div id ="hiaretu"></div>
    <div id="answer">
        <button id="yes">はい</button>
        <button id="no">いいえ</button>
     </div>      
     <p id="result"></p>
    <script>
        // 質問の表示を管理するインデックス
        let questionIndex = 0;
        let questions;
        var numberArray = "";

        // 質問を表示する関数
        function displayQuestion() {
            const questionContainer = document.getElementById('question-container');
            // Check if there are more questions
            if (questionIndex < questions.length) {
                questionContainer.innerHTML = "<p>" + questions[questionIndex] + "</p>";
            } else {     
                // ボタンが押された後、numberArrayのデータをPHPに送信
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("numberArray=" + encodeURIComponent(numberArray));

                // ページ遷移
                location.href = "osusume_youtuber.php";
            }
        }

        document.getElementById("answer").onclick = function() {
            questionIndex++;
            displayQuestion();
        };

        document.getElementById("yes").addEventListener("click", function() {
            addToArray(1);
        });

        document.getElementById("no").addEventListener("click", function() {
            addToArray(0);
        });

        function addToArray(number) {
            numberArray += number;
            console.log(numberArray);
        }

        // データベースから質問を取得
        function getQuestions() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_questions.php", true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    questions = JSON.parse(xhr.responseText);

                    // 最初の質問を表示
                    displayQuestion();
                }
            };

            xhr.send();
        }
        // ページ読み込み時に質問を取得
        getQuestions();
    </script>

</body>
</html>
