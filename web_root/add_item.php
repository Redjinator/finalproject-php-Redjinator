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

        // Need the database connection
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
            print '<p class="error">Could not store the quote because: <br>'.mysqli_error($dbc).'.</p><p>The query being run was: '.$query.'</p>';
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
    <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="fruit" name="food_type" value="fruit">
        <label class="custom-control-label" for="fruit">Fruit</label>
    </div>

    <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="grains" name="food_type" value="grains">
        <label class="custom-control-label" for="grains">Grains</label>
    </div>

    <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="veggies" name="food_type" value="veggies" checked>
        <label class="custom-control-label" for="veggies">Veggies</label>
    </div>

    <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="protien" name="food_type" value="protien">
        <label class="custom-control-label" for="protien">Protien</label>
    </div>

    <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="dairy" name="food_type" value="dairy">
        <label class="custom-control-label" for="dairy">Dairy</label>
    </div>

    <p><input class="btn btn-primary mt-2" type="submit" name="submit" value="Add Food"></p>

</form>

<?php include(TEMPLATE_PATH.'\footer.php');?>