<?php

$time = date('Y-m-d H:i:s') . "_";
$name = $_POST['name'] . "_";
$birthPlace = $_POST['birthPlace'] . "_";
$email = $_POST['email'] . "///";

file_put_contents('data/data.txt', $time . $name . $birthPlace . $email , FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
