<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Daycare - View food items';?>
<?php include(TEMPLATE_PATH.'\header.php');?>
<?php

print '<h2>View Food Items</h2>';

// Restrict access to admin only
/*
if(!is_admin()) {
    print '
        <h2>Access Denied!</h2>
        <p class="error">You do not have permission to access this page.</p>';
    include(TEMPLATE_PATH.'\footer.php');
    exit();
}
*/

// Connect to database
include('../mysql_connect.php');

// Define query
$query = 'SELECT id, food_item, food_type FROM food ORDER BY id DESC';

// Run query
if($result = mysqli_query($dbc, $query)) {

    // Retrieve the returned records
    while ($row = mysqli_fetch_array($result)) {

        // Print the record:
        print "<div><blockquote>{$row['food_item']}</blockquote>- {$row['food_type']}\n";

        // Add administrative links
        print "<p><b>Admin:</b> <a href=\"edit_item.php?id={$row['id']}\">Edit</a>
        <->
        <a href=\"delete_item.php?id={$row['id']}\">Delete</a></p></div>\n";
    } // End of while loop

} else { // Query didn't run

    print '<p class="error">Could not retrieve the data because:<br>'.mysqli_error($dbc).'.</p><p>The query being run was: '.$query.'</p>';
} // End of query IF

mysqli_close($dbc); // Close connection

include(TEMPLATE_PATH.'\footer.php');