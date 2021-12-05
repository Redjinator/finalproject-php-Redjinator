<?php

/*
    Student:        Reginald McPherson
    Course:         DGL-123 PHP Fundamentals
    Last Modified:  Dec 02, 2021
    Filename:       header.php
    Purpose:        Part of the course final project.
*/

// Check if user is an administrator, returns boolean
function is_admin($name = 'Rocketship', $value = 'Laundromat') {

    // Check for the cookie and check it's value
    if(isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
        return true;
    }

    return false;

} // End



// add the leading '/' to path if not present
function url_for($script_path) {

    if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}


// creates a meal
function create_meal($weekday, $mealtime){
    $day = $weekday;
    $meal = $mealtime;
    return include('./meal.php');
}