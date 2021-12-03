<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Daycare - Delete a food item';?>
<?php include(TEMPLATE_PATH.'\header.php');?>
<?php

print '<h2>Delete a Food Item</h2>';

// Restrict access to administrators only:
if (!is_admin()) {
	print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
	include(TEMPLATE_PATH.'\footer.php');
	exit();
}

// Database connection
include('../mysql_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) { // Display Food Item in a form:

	// Define the query:
	$query = "SELECT food_item, food_type FROM food WHERE id={$_GET['id']}";
	
	if ($result = mysqli_query($dbc, $query)) { // Run the query.

		$row = mysqli_fetch_array($result); // Retrieve the information.

		// Make the form:
		print '<form action="delete_item.php" method="post">
		<p>Are you sure you want to delete this food item?</p>
		<div><blockquote>' . $row['food_item'] . '</blockquote>- ' . $row['food_type'];


		print '</div><br><input type="hidden" name="id" value="' . $_GET['id'] . '">
		<p><input type="submit" name="submit" value="Delete this Food!"></p>
		</form>';

	} else { // Couldn't get the information.
		print '<p class="error">Could not retrieve the food item because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0) ) { // Handle the form.

	// Define the query:
	$query = "DELETE FROM food WHERE id={$_POST['id']} LIMIT 1";
	$result = mysqli_query($dbc, $query); // Execute the query.

	// Report on the result:
	if (mysqli_affected_rows($dbc) == 1) {
		print '<p>The food item entry has been deleted.</p>';
	} else {
		print '<p class="error">Could not delete the food item because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} else { // No ID received.
	print '<p class="error">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc); // Close the connection.

include(TEMPLATE_PATH.'\footer.php');
?>