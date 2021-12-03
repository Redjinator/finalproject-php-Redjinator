<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Daycare - Edit food item';?>
<?php include(TEMPLATE_PATH.'\header.php');?>
<?php

// Restrict access to admin only
if(!is_admin()) {
    print '
        <h2>Access Denied!</h2>
        <p class="error">You do not have permission to access this page.</p>';
    include(TEMPLATE_PATH.'\footer.php');
    exit();
}

// Need the database connection
include('../mysql_connect.php');

// Validate numeric ID was reveived in the URL
if(isset($_GET['id']) && ($_GET['id'] > 0)) { // Display entry form

    // Define the query
    $query = "SELECT food_item FROM food WHERE id={$_GET['id']}";

    if($result = mysqli_query($dbc, $query)) { // Run query

        $row = mysqli_fetch_array($result); // Retrieve infomation

        // Make form
        print '<form action="edit_item.php" method="post">
        <p><label>Food item: <input type="text" name="food_item" value="'.htmlentities($row['food_item']).'"></label></p>';

        include(TEMPLATE_PATH.'\type_select.php');

        // Complete the form
        print '</label></p>
            <input type="hidden" name="id" value="'.$_GET['id'].'">
            <p><input type="submit" name="submit" value="Update This Item!"></p>
            </form>';

    } else { // Couldn't retreive the information
        print '<p class="error">Could not retrieve the quotation because:<br>'.mysqli_error($dbc).'.</p><p>The query being run was: ' . $query.'</p>';
    }

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) { // Handle form

    // Validate and secure the form data:
    $problem = FALSE;
    if(!empty($_POST['food_item']) && !empty($_POST['food_type'])) {

        // Prepare the values for storing
        $food_item = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['food_item'])));
        $food_type = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['food_type'])));
    } else {
        print '<p class="error">Please submit both a food item and food type.</p>';
        $problem = TRUE;
    }

    if(!$problem) {

        // Define the query
        $query = "UPDATE food SET food_item='$food_item', food_type='$food_type' WHERE id={$_POST['id']}";

        if($result = mysqli_query($dbc, $query)) {
            print '<p>The food item has been updated.</p>';
        } else {
            print '<p class="error">Could not update the food item because:<br>'.mysqli_error($dbc).'.</><p>The query being run was: '.$query.'</p>';
        }

    } // No problem

} else { // No ID set
    print '<p class="error">This page has been accessed in error.</p>';
} // End main IF

mysqli_close($dbc); // Close connection

include(TEMPLATE_PATH.'\footer.php');