<?php require_once('./includes/initialize.php');

// Destroy the cookie, if it exists:
if (isset($_COOKIE['Rocketship'])) {
	setcookie('Rocketship', FALSE, time()-300);
}

// Define page title
$page_title = 'Daycare logout page';

// Include header
include(TEMPLATE_PATH.'\header.php');

// Print a confirmation message:
echo '<p>You are now logged out.</p><br>';
echo '<a href="./index.php">Home</a><br>';


// Include footer
include(TEMPLATE_PATH.'\footer.php');?>
