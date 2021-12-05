<?php

/*
    Student:        Reginald McPherson
    Course:         course
    Last Modified:  date_modified
    Filename:       filename
    Purpose:        purpose or description
*/

    // Constants for file paths, hopefully to avoid errors
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("TEMPLATE_PATH", PROJECT_PATH . '\templates');
    define("STYLESHEET_PATH", PROJECT_PATH . '\css');

    // root url to constant, checks that public is in the path
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '\public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    // This file 'initialize.php' will be included with most other php files
    // so I'll call 'functions.php' here instead of in the other php files.
    require_once('functions.php');


?>