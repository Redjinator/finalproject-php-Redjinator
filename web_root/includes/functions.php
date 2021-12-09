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


// Prepare data for entry into DB
function prepare_data($conn, $sub_item){
    return mysqli_real_escape_string($conn, trim(strip_tags($_POST[$sub_item])));
}

function update_row($day, $column, $prepared_data){
    return "UPDATE `meals_and_snacks`.`schedule` SET `$column` = '$prepared_data' WHERE (`day` = '$day')";
}



// Grabs all 4 items from a particular day and meal
function get_meal($from_day, $from_meal) {

    $column1 = $from_meal.'_1';
    $column2 = $from_meal.'_2';
    $column3 = $from_meal.'_3';
    $column4 = $from_meal.'_4';

    include('../mysql_connect.php');

    $query = "SELECT `$column1`, `$column2`, `$column3`, `$column4`   FROM `schedule` WHERE (`day` = '$from_day')";
    //$query = "SELECT `$column1`  FROM `schedule` WHERE (`day` = '$from_day')";
    $result = mysqli_query($dbc, $query);

    
    return mysqli_fetch_array($result);

    
}


