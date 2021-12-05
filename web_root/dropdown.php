<?php

include('../mysql_connect.php');

$query = 'SELECT * FROM food';

$result = mysqli_query($dbc, $query);

?>

<select id="<?php echo $column_name ?>" name="<?php echo $column_name ?>">
    <?php while($row=mysqli_fetch_array($result)): ?>
        <option value="<?php echo $row[1]; ?>"><?php echo $row[1];?></option>
    <?php endwhile;?>
</select>