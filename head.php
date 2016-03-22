<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $page_title;?></title>
    <!-- link external style sheet, bootsrap, and font Awesome -->
    <link rel="stylesheet" href="css/main.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Global Public Nav -->
    <header>
      <img src="image/Logo.svg" alt="logo" />
        <nav>
          <a href="#" id="menu-icon">☰</a>
          <ul>
            <li title="home"><a href="index.php">Home</a></li>
            <li title="about"><a href="about.php">About Us</a></li>
            <li title="projects"><a href="projects.php">Projects</a></li>
            <li title="contact"><a href="contact.php">Contact Us</a></li>
            <li title="register"><a href="register|login.php">Register | Log In</a></li>
            <li title="client tools"><a href="client.php">Client Tools</a></li>
            <li title="admin tools"><a href="admin.php">Admin Tools</a></li>

            <?php
            // session_start();
            // //<!-- clients tools when a general user has logged in -->
            // require('db.php');
            // $sql = "SELECT user_id FROM users_db WHERE admin = :admin AND gen_user = :client";
            // $cmd = $conn->prepare($sql);
            // $cmd->bindParam(':admin', $admin, PDO::PARAM_STR);
            // $cmd->bindParam(':client', $client, PDO::PARAM_STR);
            // $cmd->execute();
            // if ($client == true) {
            //   echo ' <li title="user tools"><a href="#">User Tools</a></li> ';
            // }
            // // Admin tools for users logged in as Admin's
            // if ($admin == true ) {
            //   echo ' <li title="user tools"><a href="#">User Tools</a></li> ';
            //   echo ' <li title="admin tools"><a href="#">Admin Tools</a></li> ';
            // }
            // $conn = null;
            ?>
          </ul>
        </nav>
  </header>
  <section>
  <main>  
