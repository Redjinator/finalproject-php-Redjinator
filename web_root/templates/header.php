<?php if(!isset($page_title)) { $page_title = 'Page title not set';} ?>
<!--
    Student:        Reginald McPherson
    Course:         DGL-123 PHP Fundamentals
    Last Modified:  Dec 02, 2021
    Filename:       header.php
    Purpose:        Part of the course final project.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LH&H - <?php echo $page_title ?></title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../menu.css">
</head>


<body>

<nav class="navbar">
  <ul class="navbar-nav">

    <li class="logo nav-item">
      <a href="/index.php" class="nav-link">
        <span class="logo-text">Home</span>
        <img src="./img/arrow-right-solid.svg" alt="home">
      </a>
    </li>

    <li class="nav-item">
      <a href="/login.php" class="nav-link">
        <img src="./img/house-user-solid.svg" alt="About me">
        <span class="link-text">Sign In</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="/add_item.php" class="nav-link">
        <img src="/img/plus.svg" alt="View items">
        <span class="link-text">Add Food</span>
      </a>
    </li>

    <li class="nav-item ">
      <a href="/view_items.php" class="nav-link">
        <img src="./img/tasks-solid.svg" alt="View items">
        <span class="link-text">View All Items</span>
      </a>
    </li>

    <li class="nav-item ">
      <a href="/meal_plan.php" class="nav-link">
        <img src="./img/tasks-solid.svg" alt="View items">
        <span class="link-text">Weekly Meal Plan</span>
      </a>
    </li>

    <li class="nav-item ">
      <a href="/logout.php" class="nav-link">
        <img src="../img/sign-out-alt-solid.svg" alt="log out">
        <span class="link-text">Sign Out</span>
      </a>
    </li>

  </ul>
</nav> <!-- #endregion -->

<div class="main">
<!-- BEGIN CHANGEABLE CONTENT -->


