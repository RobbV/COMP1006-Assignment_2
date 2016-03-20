<?php
$pager_title = 'Regerister/LogIn';
// link head to pager
require('head.php');?>
<!-- form -->
  <h2>User Registration</h1>
    <form class="" action="save-reg.php" method="post">
      <!-- username input -->
      <div class="">
        <label for="username">Username:</label>
        <input type="username" name="username" placeholder="username">
      </div><!-- close username div -->
      <!-- password input -->
      <div class="">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password">
      </div><!-- close password div -->
      <!-- confirm password input -->
      <div class="">
        <label for="confirm">Confirm Password</label>
        <input type="password" name="confirm" placeholder="password">
      </div><!-- close confirm password div -->
      <!-- register as client -->
      <div class="">
        <label for="client"> Register as Client:</label>
        <input name="client" id="client" type="checkbox" />
      </div><!-- close register as client -->
      <!-- register as admin -->
      <div class="">
        <label for="admin"> Register as Admin:</label>
        <input name="admin" id="admin" type="checkbox" />
      </div><!-- close register as admin -->
      <!-- submit -->
      <div class="">
            <input type="submit" value="Register" />
        </div>
    </form>
    <!-- login form -->
      <h2>Log In</h2>
      <form class="" action="validate.php" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-2">Username:</label>
            <input name="username" />
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2">Password:</label>
            <input type="password" name="password" />
        </div>
        <div class="col-sm-offset-2">
            <input type="submit" value="Login" class="btn btn-primary" />
        </div>
    </form>
<!-- link footer to page -->
<?php require('footer.php') ?>
