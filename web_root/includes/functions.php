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


