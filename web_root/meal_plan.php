<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Meal Plan';?>
<?php include(TEMPLATE_PATH.'/header.php');?>

 <?php include('../mysql_connect.php');?>



<div class="schedule">
    <table class="table table-bordered">
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <?php create_meal('Monday', 'Breakfast'); ?>
            <?php create_meal('Tuesday', 'Breakfast'); ?>
            <?php create_meal('Wednesday', 'Breakfast'); ?>
            <?php create_meal('Thursday', 'Breakfast'); ?>
            <?php create_meal('Friday', 'Breakfast'); ?>
        </tr>
        <tr>
            <?php create_meal('Monday', 'Morning Snack'); ?>
            <?php create_meal('Tuesday', 'Morning Snack'); ?>
            <?php create_meal('Wednesday', 'Morning Snack'); ?>
            <?php create_meal('Thursday', 'Morning Snack'); ?>
            <?php create_meal('Friday', 'Morning Snack'); ?>
        </tr>
        <tr>
            <?php create_meal('Monday', 'Lunch'); ?>
            <?php create_meal('Tuesday', 'Lunch'); ?>
            <?php create_meal('Wednesday', 'Lunch'); ?>
            <?php create_meal('Thursday', 'Lunch'); ?>
            <?php create_meal('Friday', 'Lunch'); ?>
        </tr>
        <tr>
            <?php create_meal('Monday', 'Afternoon Snack'); ?>
            <?php create_meal('Tuesday', 'Afternoon Snack'); ?>
            <?php create_meal('Wednesday', 'Afternoon Snack'); ?>
            <?php create_meal('Thursday', 'Afternoon Snack'); ?>
            <?php create_meal('Friday', 'Afternoon Snack'); ?>
        </tr>
    </table>
</div>