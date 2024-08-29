<html>

<head>
	<meta charset="utf-8">
	<title>POST練習</title>
</head>

<body>
	<h1>ステータスDB</h1>
	<form action="write.php" method="post">
		お名前: <input type="text" name="name">
		EMAIL: <input type="email" name="mail">
		<div class="container">
			素早さ <input type="range" name="speed" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
			<output>50</output>
		</div>
		<div class="container">
			技　　 <input type="range" name="technique" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
			<output>50</output>
		</div>
		<div class="container">
			パワー <input type="range" name="power" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
			<output>50</output>
		</div>
		<div class="container">
			賢さ　 <input type="range" name="intelligence" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
			<output>50</output>
		</div>
		<div class="container">
			魅力　 <input type="range" name="charm" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
			<output>50</output>
		</div>
		<input type="submit" value="送信">
	</form>
</body>
<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f2f2f2;
		padding: 20px;
	}

	h1 {
		text-align: center;
	}

	form {
		max-width: 400px;
		margin: 0 auto;
		background-color: #fff;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}

	input[type="email"],
	input[type="text"],
	input[type="range"],
	input[type="submit"] {
		display: block;
		width: 100%;
		margin-bottom: 10px;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}

	input[type="range"] {
		width: auto;
	}

	.container {
		display: flex;
		align-items: center;
		justify-content: space-evenly
	}

	output {
		margin-left: 10px;
		font-weight: bold;
	}

	input[type="submit"] {
		background-color: #4CAF50;
		color: #fff;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #45a049;
	}

	input[type="submit"]:focus {
		outline: none;
	}
</style>

</html>