<?php 
include('../mysql_connect.php');
$query = 'SELECT * FROM food';
$result1 = mysqli_query($dbc, $query);

/* Eventually I'll add the day to the call */

?>


<select class="dropdown" name='item'>
    <?php while($row1 = mysqli_fetch_array($result1)):; ?>
    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
    <?php endwhile;?>
</select>




