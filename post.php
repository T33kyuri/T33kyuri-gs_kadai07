<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P>

    <form action="write.php" method="post">
        お名前 : <input type="text" name="name"><br>
        出身　 : <input type="text" name="birthPlace"><br>
        EMAIL : <input type="text" name="email"><br>
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
    
</body>

</html>
