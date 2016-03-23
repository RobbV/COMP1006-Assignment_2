<?php
require('auth.php');
$page_title = 'Client Tools';
require('head.php');
 ?>
 <h1> Edit or delete clients</h1>
<?php
// connect
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832', 'gc200326832', '^jE8zPj3');
//prepare the query
$sql = "SELECT * FROM users_db WHERE gen_user = 1;";
$cmd = $conn -> prepare($sql);
// run the query and store the results
$cmd -> execute();
$users = $cmd -> fetchAll();
//start the grid with html
echo '<table class="table table-striped"><thead><th>User ID</th><th>Username</th><th>Email</th><th>Delete</th></thead><tbody>';
foreach ($users as $user) {
	echo '<tr><td>' . $user['user_id'] . '</td>
	<td>' . $user['username'] . '</td>
  <td>' . $user['email'] . '</td>
	<td><a href="register.php?user_id=' . $user['user_id'] . '" title="Edit">Edit</a></td>
	<td><a href="delete-user.php?user_id=' . $user['user_id'] . '"
			title="Delete" class="confirmation">Delete</a></td></tr>';
}
echo '</tbody></table>';

$conn = null;
?>

 <?php require('footer.php') ?>
