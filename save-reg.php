<?php
$page_title = 'Processing you Registration!'
// linking the head page.
require('head.php');
//generate 10 digit unique user id and store to variable
$user_id = rand(1000000000,9999999999);
echo '<h1>'$user_id'</h1>';
?>
// pass the user input to variables
