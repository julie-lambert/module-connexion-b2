<?php
session_start();
require_once('../classes/Admin.php');
require_once('../classes/User.php');
require_once('../controller/admin.php');

$admin = new Admin();
$user=$admin->displayUser();

?>

<?php if($_SESSION['login'] == 'adminN1337$'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleHeader.css">
    <title>Document</title>
</head>
<?php require_once('header.php') ?>
<body>
<div class="container">
  <table id="container-user">
    <tr>
      <th>id</th>
      <th>Login</th>
      <th>firstname</th>
      <th>lastname</th>
      <th></th>
    </tr>
    <?php foreach($user as $value) : ?>
    <tr>
      <td><?= $value['id'] ?></td>
      <td><?= $value['login'] ?></td>
      <td><?= $value['firstname'] ?></td>
      <td><?= $value['lastname'] ?></td>
      <td>
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $value['id'] ?>">
          <button type="submit" class = "submit" data-id=<?= $value['id'] ?>name="submit">Supprimer</button>
        </form>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</div>
</body>
</html>
<?php ; else: ?>
<?php header('location: ./index.php')?>
<?php endif;?>