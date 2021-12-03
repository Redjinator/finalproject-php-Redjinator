<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Daycare - Add a food item';?>
<?php include(TEMPLATE_PATH.'\header.php');?>
<?php

print '<h2>Add a Food Item</h2>';

// Restrict access to admin only

if(!is_admin()) {
    print '
        <h2>Access Denied!</h2>
        <p class="error">You do not have permission to access this page.</p>';
    include(TEMPLATE_PATH.'\footer.php');
    exit();
}

// Check for a form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle form

    if(!empty($_POST['food_item']) && !empty($_POST['food_type'])) {

        // Database connection
        include('../mysql_connect.php');

        // Prep database entry
        $food_item = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['food_item'])));
        $food_type = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['food_type'])));

        // SQL statement food entry
        $query = "INSERT INTO food (food_item, food_type) VALUES ('$food_item', '$food_type')";
        mysqli_query($dbc, $query);

        if(mysqli_affected_rows($dbc) == 1) {

            // Show entry success/failure message
            print '<p>Your item has been stored.</p>';
        } else {
            print '<p class="error">Could not store the item because: <br>'.mysqli_error($dbc).'.</p><p>The query being run was: '.$query.'</p>';
        }

        // Close connection
        mysqli_close($dbc);
    } else { // Failed to enter an item
        print '<p class="error">Please enter an item</p>';
    }

} // End of submitted IF

// Leave PHP and display the form
?>


<form action="add_item.php" method="post">

    <p><label>Food item: <input type="text" name="food_item"></label></p>

    <?php // Food catagory selection ?>

    <?php include(TEMPLATE_PATH.'\type_select.php');?>

    <p><input class="btn btn-primary mt-2" type="submit" name="submit" value="Add Food"></p>

</form>

<?php include(TEMPLATE_PATH.'\footer.php');?>