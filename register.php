<?php
$page_title = "Regerister/LogIn" ;
// link head to pager
require('head.php');
?>
<button id="myregister" type="button" class="btn btn-default"><a href="register.php" id="myregister">Register</a></button>
<button id="mylogin" type="button" class="btn btn-default"><a href="login.php" id="mylogin">LogIn</a></button>
<!-- form -->
<?php
//check if we have an beer ID in the querystring
if (is_numeric($_GET['user_id'])) {
    //if we do, store in a variable
    $user_id = $_GET['user_id'];
    //connect
    $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832', 'gc200326832', '^jE8zPj3');
    //select all the data for the selected beer
    $sql = "SELECT * FROM users_db WHERE user_id = :user_id";
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $cmd->execute();
    $users = $cmd->fetchAll();
    //disconnect
    $conn = null;
    //store each value from the database into a variable
    foreach ($users as $user) {
        $user_id  = $user['user_id'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        if ($user['admin'] == true) {
            $admin = "checked";
        }
        if ($user['gen_user'] == true) {
            $gen_user = "checked";
        }
      }
    }
  ?>
<div id="content">
  <div id="register">
  <h2>User Registration</h1>
    <form class="reg" action="save-reg.php" method="post">
      <!-- username input -->
      <div class="">
        <label for="username">Username:</label>
        <input class="form-control" type="username" name="username" placeholder="username" value="<?php echo $username; ?>" />
      </div><!-- close email div -->
      <div class="">
        <label for="email">email:</label>
        <input class="form-control" type="email" name="email" placeholder="email" value="<?php echo $email; ?>" />
      </div><!-- close email div -->
      <!-- password input -->
      <div class="">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" placeholder="password" value="<?php echo $password; ?>" />
      </div><!-- close password div -->
      <!-- confirm password input -->
      <div class="">
        <label for="confirm">Confirm Password</label>
        <input class="form-control" type="password" name="confirm" placeholder="password" />
      </div><!-- close confirm password div -->
      <!-- register as client -->
      <div class="">
        <label for="client"> Register as Client:</label>
        <input name="client" id="client" type="checkbox"  <?php echo $gen_user; ?>/>
      </div><!-- close register as client -->
      <!-- register as admin -->
      <div class="">
        <label for="admin"> Register as Admin:</label>
        <input name="admin" id="admin" type="checkbox"  <?php echo $admin; ?>/>
      </div><!-- close register as admin -->
      <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>" />
      <!-- submit -->
      <div class="">
            <input type="submit" value="Register" />
        </div>
    </form>
  </div> <!-- register closing div -->
<!-- link footer to page -->
<?php require('footer.php') ?>
