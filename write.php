<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$speed = $_POST["speed"];
$power = $_POST["power"];
$technique = $_POST["technique"];
$intelligence = $_POST["intelligence"];
$charm = $_POST["charm"];

// 作成日時,名前,メールアドレス
$str = date("Y-m-d:H:i:s").",".$name.",".$mail.",".$speed.",".$power.",".$technique.",".$intelligence.",".$charm;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);

header("Location: read.php");
exit();
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>read.phpで確認しましょう！</h2>

<ul>
<li><a href="read.php">read.php</a></li>
</ul>
</body>
</html>