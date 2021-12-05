<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Add Meal';?>
<?php

// Restrict access to admin only
if(!is_admin()) {
    print '
        <h2>Access Denied!</h2>
        <p class="error">You do not have permission to access this page.</p>';
    include(TEMPLATE_PATH.'\footer.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Check meal items are not empty
    if(!empty($_POST['day']) && !empty($_POST[$meal.'_1']) && !empty($_POST[$meal.'_2']) && !empty($_POST[$meal.'_3']) && !empty($_POST[$meal.'_4'])) {

        if(isset($_POST[$meal.'_1'])) {
            $meal_1 = $_POST[$meal.'_1'];
        }

        // Database connection
        include('../mysql_connect.php');

        // Prep database entry
        $day = prepare_data($dbc, 'day');

        // SQL statement for meal entry
        mysqli_query($dbc, update_row($day, $meal.'_1', prepare_data($dbc, $meal.'_1')));
        mysqli_query($dbc, update_row($day, $meal.'_2', prepare_data($dbc, $meal.'_2')));
        mysqli_query($dbc, update_row($day, $meal.'_3', prepare_data($dbc, $meal.'_3')));
        mysqli_query($dbc, update_row($day, $meal.'_4', prepare_data($dbc, $meal.'_4')));

        // Close connection to db
        mysqli_close($dbc);

    } // End of IF

} // Leave PHP and display form
?>

<!-- Form -->
<td>
    <form action="meal_plan.php" method="post">
        <h5><?php echo $meal?></h5>
        <ul>
            <li>
            <input type="hidden" id="day" name="day" value="<?php echo $day?>">
            </li>
            <li>
                <?php
                $column_name = $meal.'_1';
                include('./dropdown.php');
                ?>
            </li>
            <li>
                <?php
                    $column_name = $meal.'_2';
                    include('./dropdown.php');
                ?>
            </li>
            <li>
                <?php
                $column_name = $meal.'_3';
                include('./dropdown.php');
                ?>
            </li>
            <li>
                <?php
                    $column_name = $meal.'_4';
                    include('./dropdown.php');
                ?>
            </li>
        </ul>
        <button class="btn " type="submit">Enter</button>
    </form>
</td>
<!-- ===================================================================== -->
