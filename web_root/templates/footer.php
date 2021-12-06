<?php

// Display admin links if the user is admin & it's not logout.php page
// or if the $loggedin variable is true (i.e., the user just logged in)

if((is_admin() && (basename($_SERVER['PHP_SELF']) != 'logout.php')) OR (isset($loggedin) && $loggedin)) {
    
    // Create links
    print '<hr><h3>Admin commands</h3><p><a href="add_item.php">Add Food</a> <->
    <a href="view_items.php">View Items</a> <->
    <a href="meal_plan.php">Meal Plan</a> <->
    <a href="logout.php">Logout</a></p>';
}

?>


    <div id="footer">

        <p class="footer__paragraph">Content &copy; 2021</p>

    </div> <!-- end of footer -->
</div><!-- main -->

</body>
</html>