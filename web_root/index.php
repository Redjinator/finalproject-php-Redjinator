<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'Daycare - Home';?>
<?php include(TEMPLATE_PATH.'\header.php');?>

<h2>To-do list</h2>
<ul style="margin-bottom: 1rem;">
    <li>Make a mock up front page</li>
    <li>Create a meal plane page</li>
    <li class="error">My db entries don't check for duplicates yet</li>
    <li class="bg-success">public facing meal plan, 5 days, 20 food slots (4 food 1 drink per meal/snack)</li>
    <li>Add to schedule page, uses drop downs based on user selection to enter items onto the meal plan slots</li>
    <li>Use combo of bootstrap and sass for document style</li>
</ul>

<h2>File paths test</h2>
<div style="margin-bottom: 1rem;">
    <?php
    echo PRIVATE_PATH.'<br>';
    echo PROJECT_PATH.'<br>';
    echo TEMPLATE_PATH.'<br>';
    ?>
</div>

<h2>Connection Test</h2>
<div style="margin-bottom: 1rem;">
    <?php include('../mysql_connect.php');?>
    <?php $dbc ? print '<p style="color: green;">Connected</p>' : print '<p style="color: red">Disconnected</p>';?>
</div>







<?php include(TEMPLATE_PATH.'\footer.php');?>




