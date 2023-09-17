<?php
session_start();
require_once('../controller/profil.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleProfil.css">
    <link rel="stylesheet" href="../styleHeader.css">
    <title>Document</title>
</head>
<?php require_once('header.php') ?>
<body>
    <div id="container-update">
        <form action="" method="POST" id="form-update">
                <h1>Modifier votre profil</h1>
                <input type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?>">
                <input type='text' name='firstname' id='firstname' value="<?php echo $_SESSION['firstname'] ?>">
                <input type='text' name='lastname' id='lastname' value="<?php echo $_SESSION['lastname'] ?>">
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                <input type="password" name="repeat-pass" id="repeat-pass" placeholder="Confirmer le mot de passe">
                <p id="mess_form"></p>
                <button type="submit" id="btn-update" name="submit">Modifier le profil</button>
        </form>
    </div>
</body>
</html>