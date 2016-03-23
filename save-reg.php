<?php
$page_title = 'Processing you Registration!';
// linking the head page.
require('head.php');
//generate 10 digit unique user id and store to variable
$user_id = rand(1000000000,9999999999);
// sql querry to check for if the user id is unique
// require('db.php');
// $querr = sql_querry
// echo $user_id;
//pass the user input to variables
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$client = $_POST['client'];
$admin = $_POST['admin'];
$ok = true;

//validation
if (empty($username)) {
    echo 'Username is required />';
    $ok = false;
}
if (empty($email)) {
    echo 'email is required />';
    $ok = false;
}
if (empty($password)) {
    echo 'Password required! />';
    $ok = false;
}
if (empty($confirm)) {
    echo 'Passwords do not match />' ;
    $ok = false;
}
if ($client == false && $admin == false) {
  echo 'please choose and client or admin role! />';
  $ok = false;
}
if ($client == true && $admin == true ) {
  echo 'Please only select one option Client or Admin! />';
  $ok = false;
}
// save if the form is ok
if ($ok == true){
    require('db.php'); // database connection

    $sql = "INSERT INTO users_db (user_id, username, email, password, admin, gen_user) VALUES (:user_id, :username, :email, :password, :admin, :gen_user)";
    // SQL query to check for duplicate emails
    $sql_emailcheck = "SELECT email FROM users_db WHERE email = $email";
    // SQL query to check if user_id is unique
    $sql_userIdcheck = "SELECT user_id FROM users_db WHERE user_id = $user_id";

    // duplicate email check
    if ($sql_emailcheck == $email){
      echo 'Email already in use Please LogIn or use an alternate email';
      $ok = false;
      header('location:login.php');
    }
    // user_id check
    if ($sql_userIdcheck == $user_id){
      $user_id = rand(1000000000,9999999999);
    }

    // hash the password
        $hashed_password = hash('sha512', $password);

        $cmd = $conn ->prepare($sql);
        $cmd ->bindParam(':user_id', $user_id, PDO::PARAM_STR, 50);
        $cmd ->bindParam(':username', $username, PDO::PARAM_STR, 50);
        $cmd ->bindParam(':email', $email, PDO::PARAM_STR, 50);
        $cmd ->bindParam(':password', $hashed_password, PDO::PARAM_STR, 128);
        $cmd ->bindParam(':admin', $admin, PDO::PARAM_STR, 50);
        $cmd ->bindParam(':gen_user', $client, PDO::PARAM_STR, 50);
        $cmd ->execute();

    $conn = null;
}
?>
<div class="jumbotron">
  <h2>Hello <?php echo $username;?> and Welcome!</h2>
  <p> You have registere, your user id # is: <?php echo $user_id;?> and your have:
    <?php if ($admin == true) {
      echo "ADMIN";
    } else {
      echo "CLIENT";
    }?> privliages.</p> <h3><a href="login.php"> LOG IN <i class="fa fa-sign-in"></i></a></h3>
</div>
<?php
require('footer.php');
?>
