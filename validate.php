<?php
ob_start();
$page_title ="Logn IN";

require('head.php');

$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

require('db.php');


$sql = "SELECT user_id FROM users_db WHERE username = :username AND password = :password";


$cmd = $conn->prepare($sql);
$cmd->bindParam(':username', $username, PDO::PARAM_STR, 50);
$cmd->bindParam(':password', $password, PDO::PARAM_STR, 128);
$cmd->execute();
$users = $cmd->fetchAll();

$count = $cmd->rowCount();


if ($count == 0) {
    echo 'Invalid Login';
    //exit
}
else {
    session_start(); // access the exsiting user session.

    foreach  ($users as $user) {
        $_SESSION['user_id'] = $user['user_id'];
        header('location:index.php');

    }
}
$conn = null;

include('footer.php');
ob_flush();
 ?>
