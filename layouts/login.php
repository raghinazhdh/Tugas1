<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>PLN</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.png" type="image/x-icon">
	<style>
		body {
			background: #FF8985;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 95vh;
			flex-direction: column;
		}

		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 450px;
			border: 2px solid #ccc;
			padding: 40px;
			background: #fff;
			border-radius: 15px;
		}

		h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		input {
			display: block;
			border: 2px solid #ccc;
			width: 130%;
			padding: 10px;
			margin: 10px auto;
			border-radius: 5px;
		}
		label {
			color: #888;
			font-size: 18px;
			padding: 10px;
		}

		button {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
		}
		button:hover{
			opacity: .7;
		}
		.error {
		background: #F2DEDE;
		color: #A94442;
		padding: 10px;
		width: 95%;
		border-radius: 5px;
		margin: 20px auto;
		}

		h1 {
			text-align: center;
			color: #fff;
		}

		a {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
			text-decoration: none;
		}
		a:hover{
			opacity: .7;
		}
	</style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>