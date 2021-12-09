<?php
/* ADMIN ONLY LINKS */
if((is_admin() && (basename($_SERVER['PHP_SELF']) != 'logout.php')) OR (isset($loggedin) && $loggedin)) {

    // Create links
    print '<hr><h3>Admin commands</h3><p><a href="add_item.php">Add Food</a> |
    <a href="view_items.php">View Items</a> |
    <a href="meal_plan.php">Meal Plan</a> |
    <a href="logout.php">Logout</a></p>';
}
?>

<!--FOOTER
=======================================================-->
<div id="footer">
    <p class="">Content &copy; 2021</p>
</div> <!-- end of footer -->

</div><!-- main -->


<!-- Bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script>
	$(function () {
		$('[data-toggle="popover"]').popover();
	})
</script>


</body>
</html>