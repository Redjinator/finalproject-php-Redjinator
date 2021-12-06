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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<header>

    <!-- Nav menu -->
    <nav class="nav">
        <ul class="menu-nav">

            <li class="menu-nav__item">
                <a href="index.php"     class="menu-nav__link">Home</a>
            </li>

            <li class="menu-nav__item">
                <a href="add_item.php"  class="menu-nav__link">Add Item</a>
            </li>

            <li class="menu-nav__item">
                <a href="meal_plan.php" class="menu-nav__link">Meal Plan</a>
            </li>

            <li class="menu-nav__item">
                <a href="logout.php"    class="menu-nav__link">Logout</a>
            </li>

        </ul>
    </nav> <!-- End nav -->
</header> <!-- End header -->
<!-- BEGIN CHANGEABLE CONTENT -->


