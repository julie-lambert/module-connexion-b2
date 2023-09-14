<?php
session_start();
require_once('../controller/profil.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" id="form-update">
            <h1>Modifier votre profil</h1>
            <input type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?>">
            <input type='text' name='firstname' id='firstname' value="<?php echo $_SESSION['firstname'] ?>">
            <input type='text' name='lastname' id='lastname' value="<?php echo $_SESSION['lastname'] ?>">
            <input type="password" name="password" id="password" value="">
            <input type="password" name="repeat-pass" id="repeat-pass" value="">
            <p id="mess_form"></p>
            <button type="submit" id="btn-update" name="submit">Modifier le profil</button>
        </form>
</body>
</html>