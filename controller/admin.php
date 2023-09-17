<?php
require_once('../classes/Admin.php');

$admin = new Admin();

if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])){
        $login = $_POST['login'];
        $id = $_POST['id'];
        $admin->deleteUser($login,$id);
    }
}
?>