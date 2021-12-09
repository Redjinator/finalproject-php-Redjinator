<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Meal Plan';?>
<?php include(TEMPLATE_PATH.'/header.php');?>

 <?php include('../mysql_connect.php');?>

 <?php
function add_meal($day, $meal, $meal1, $meal2, $meal3, $meal4){
    include('./meal.php');
}
?>
<div class="schedule">
    <table class="table table-sm">
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <?php add_meal('Monday', 'breakfast', 'breakfast_1', 'breakfast_2', 'breakfast_3', 'breakfast_4'); ?>
            <?php add_meal('Tuesday', 'breakfast', 'breakfast_1', 'breakfast_2', 'breakfast_3', 'breakfast_4'); ?>
            <?php add_meal('Wednesday', 'breakfast', 'breakfast_1', 'breakfast_2', 'breakfast_3', 'breakfast_4'); ?>
            <?php add_meal('Thursday', 'breakfast', 'breakfast_1', 'breakfast_2', 'breakfast_3', 'breakfast_4'); ?>
            <?php add_meal('Friday', 'breakfast', 'breakfast_1', 'breakfast_2', 'breakfast_3', 'breakfast_4'); ?>
        </tr>
        <tr>
            <?php add_meal('Monday', 'snack_am', 'snack_am_1', 'snack_am_2', 'snack_am_3', 'snack_am_4'); ?>
            <?php add_meal('Tuesday', 'snack_am', 'snack_am_1', 'snack_am_2', 'snack_am_3', 'snack_am_4'); ?>
            <?php add_meal('Wednesday', 'snack_am', 'snack_am_1', 'snack_am_2', 'snack_am_3', 'snack_am_4'); ?>
            <?php add_meal('Thursday', 'snack_am', 'snack_am_1', 'snack_am_2', 'snack_am_3', 'snack_am_4'); ?>
            <?php add_meal('Friday', 'snack_am', 'snack_am_1', 'snack_am_2', 'snack_am_3', 'snack_am_4'); ?>
        </tr>
        <tr>
            <?php add_meal('Monday', 'lunch', 'lunch_1', 'lunch_2', 'lunch_3', 'lunch_4'); ?>
            <?php add_meal('Tuesday', 'lunch', 'lunch_1', 'lunch_2', 'lunch_3', 'lunch_4'); ?>
            <?php add_meal('Wednesday', 'lunch', 'lunch_1', 'lunch_2', 'lunch_3', 'lunch_4'); ?>
            <?php add_meal('Thursday', 'lunch', 'lunch_1', 'lunch_2', 'lunch_3', 'lunch_4'); ?>
            <?php add_meal('Friday', 'lunch', 'lunch_1', 'lunch_2', 'lunch_3', 'lunch_4'); ?>
        </tr>
        <tr>
            <?php add_meal('Monday', 'snack_pm', 'snack_pm_1', 'snack_pm_2', 'snack_pm_3', 'snack_pm_4'); ?>
            <?php add_meal('Tuesday', 'snack_pm', 'snack_pm_1', 'snack_pm_2', 'snack_pm_3', 'snack_pm_4'); ?>
            <?php add_meal('Wednesday', 'snack_pm', 'snack_pm_1', 'snack_pm_2', 'snack_pm_3', 'snack_pm_4'); ?>
            <?php add_meal('Thursday', 'snack_pm', 'snack_pm_1', 'snack_pm_2', 'snack_pm_3', 'snack_pm_4'); ?>
            <?php add_meal('Friday', 'snack_pm', 'snack_pm_1', 'snack_pm_2', 'snack_pm_3', 'snack_pm_4'); ?>
        </tr>
    </table>
</div>

<?php include(TEMPLATE_PATH.'/footer.php');?>