<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php ehco page_title?></title>
  </head>
  <body>
    <!-- Global Public Nav -->
    <nav>
      <ul>
        <li title="home"><a href="#">Home</a></li>
        <li title="about"><a href="#">About Us</a></li>
        <li title="projects"><a href="#">Projects</a></li>
        <li title="contact"><a href="#">Contact Us</a></li>
        <li title="register"><a href="#">Register</a></li>
        <li title="login"><a href="#">Login</a></li>
        <?php
        //<!-- clients tools when a general user has logged in -->

        if (condition) {
          ehco ' <li title="user tools"><a href="#">User Tools</a></li> ';
        }// Admin tools for users logged in as Admin's
        elseif (condition) {
          ehco ' <li title="user tools"><a href="#">User Tools</a></li> ';
          ehco ' <li title="admin tools"><a href="#">Admin Tools</a></li> ';
        }
         ?>
      </ul>
    </nav>
