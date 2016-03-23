<?php
$pager_title = 'Regerister/LogIn' ;
// link head to pager
require('head.php');?>
<button id="myregister" type="button" class="btn btn-default"><a href="register.php" id="myregister">Register</a></button>
<button id="mylogin" type="button" class="btn btn-default"><a href="login.php" id="mylogin">LogIn</a></button>
<!-- login form -->
<div id="login">
  <h2>Log In</h2>
  <form class="login" action="validate.php" method="post">
    <div class="form-group">
        <label for="username" class="col-sm-2">Username:</label>
        <input class="form-control" type="username" name="username" />
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2">Password:</label>
        <input class="form-control" type="password" name="password" />
    </div>
    <div class="col-sm-offset-2">
        <input type="submit" value="Login" class="btn btn-primary" />
    </div>
</form>
</div><!-- login closing div -->
<!-- link footer to page -->
<?php require('footer.php') ?>
