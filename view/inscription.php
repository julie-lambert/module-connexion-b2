<?php
require_once('../controller/inscription.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styleHeader.css">
    <title>Document</title>
</head>
<?php require_once('header.php') ?>
<body>
<div class="wrapper">
	<div class="container">
        <form action="" method="POST" id="form-subscribe">
            <h1>Inscription</h1>
            <input type="text" name="login" id="login" placeholder="Login">
            <input type="text" name="lastname" id="lastname" placeholder="Nom">
            <input type="text" name="firstname" id="firstname" placeholder="Prénom">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="password" name="repeat-pass" id="repeat-pass" placeholder="Confirmation du mot de passe">
            <p id="mess_form"></p>
            <button type="submit" name="submit">S'inscrire</button>
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