<?php
/**
 * Created by PhpStorm.
 * User: joerinehart
 * Date: 2019-01-20
 * Time: 11:18
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if (empty($title)) {
      echo "Rinehart Photography";
    } else {
      echo $title;
    }
    ?>
  </title>
  <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script src="../js/index.js"></script>
</head>
<body class="clearfix">
<header>
  <?php
  include "navigation.php"
  ?>
<!--  <img id="header-img" src="../images/bridgeval2.jpg" alt="Lewiston/Clarkston Blue Bridge">-->
</header>

