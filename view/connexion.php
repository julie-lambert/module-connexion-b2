<?php
session_start();

require_once('../controller/connexion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleHeader.css">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<?php require_once('header.php') ?>
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