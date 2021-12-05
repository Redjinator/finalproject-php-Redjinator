<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Index';?>
<?php include(TEMPLATE_PATH.'\header.php');?>

<h2>To-do list 3</h2>
<ul style="margin-bottom: 1rem;">
    <li>Make a mock up front page</li>
    <li>Create a meal plane page</li>
    <li class="error">My db entries don't check for duplicates yet</li>
    <li class="bg-success">public facing meal plan, 5 days, 20 food slots (4 food 1 drink per meal/snack)</li>
    <li>Add to schedule page, uses drop downs based on user selection to enter items onto the meal plan slots</li>
    <li>Use combo of bootstrap and sass for document style</li>
</ul>
_
<h2>Connection Test</h2>

<div style="margin-bottom: 1rem;">
    <?php include('../mysql_connect.php');?>
    <?php $dbc ? print '<p class="success">Connected</p>' : print '<p class="error">Disconnected</p>';?>
</div>


<!-- Temp Links -->
<a href="login.php">Login</a>


<?php
include('../mysql_connect.php');


// Define query
$query = 'SELECT id, food_item, food_type FROM food ORDER BY food_type DESC';
if(isset($_GET['food_type'])){
    $query = 'SELECT id, food_item, food_type FROM food ORDER BY food_type DESC';
}

// Run query
if ($result = mysqli_query($dbc, $query)) {

    // Retrieve record
    $row = mysqli_fetch_array($result);

    // Print the record
    print "<div><blockquote>{$row['food_item']}</blockquote>-{$row['food_type']}</div>";
    
}

//





include(TEMPLATE_PATH.'\footer.php');




