<?php

require_once('./includes/initialize.php');

/*
This login script controls people logging into the site, it both displays
and handles a form, sending a cookie upon a successful login attempt.
*/

$loggedin = false;
$error = false;


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Ensure email and password are not empty
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        // Verify values are correct
        if ((strtolower($_POST['email']) == 'reginald@mcpherson.com') && ($_POST['password'] == 'mypassword')) { //Correct login info

            // If correct, create the cookie
            setcookie('Rocketship', 'Laundromat', time()+3600);

            // Indicate log in
            $loggedin = true;

        } else { // Incorrect login info
            $error = 'The submitted email address and password do not match those on file!';
        }
    } else { // Forgot field
        $error = 'Please make sure you enter both an email address and a password!';
    }
}



// Set the page title and include the header file
$page_title = 'Daycare - Login';
include(TEMPLATE_PATH.'\header.php');

// Print an error if exists
if($error) {
    print '<p class = "error">'.$error.'</p>';
}

// Indicate user is logged in, or show the form
if($loggedin) {
    print '<p>You are now logged in!</p>';
} else {
    print '<h2>Login Form</h2>
    <form action="login.php" method="post">
    <p><label>Email Address <input type="email" name="email"></label></p>
    <p><label>Password<input type="password" name="password"></label></p>
    <p><input type="submit" name="submit" value="Log In!"></p>
    </form>';
}

include(TEMPLATE_PATH.'\footer.php');
?>
