<?php
require_once('../controller/connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="style.less">
    <script type="text/javascript" src="less.js"></script>
    <title>Document</title>
</head>
<body>

<div class="wrapper">
	<div class="container">
        <form action="" method="POST" id="form-connect">
            <h1>Connexion</h1>
            <input type="text" name="login" id="login" placeholder="Login">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <p id="mess_form"></p>
            <button type="submit" id = "submit" name="submit">Se connecter</button>
        </form>
        </div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</body>
</html>