<?php

// Pull food items from the food table and populate the drop down list

// Connect to db
include('../mysql_connect.php');

// Define query
$query = 'SELECT * FROM food';

// Get results
$result = mysqli_query($dbc, $query);

// Close db connection
mysqli_close($dbc);



// Get previously set food to pre-populate the dropdown selected attr
$current = get_meal($day, $meal);

$prev_meal = $current[$column_name];
?>


<div class="input-group mb-1">
    <div class="input-group-prepend">
        <label class="input-group-text" for="<?php echo $column_name ?>"><?php echo $column_name ?></label>
    </div>

    <!-- Create drop down -->
<select class="custom-select" id="<?php echo $current[$column_name] ?>"  name="<?php echo $column_name ?>">

    <?php 
    echo '<option value="'.$current[$column_name].'" selected>'.$current[$column_name].'</option>';

    while($row=mysqli_fetch_array($result)):

        echo '<option value="'.$row[1].'">'.$row[1].'</option>';
    endwhile;
    ?>

</select>
</div>

