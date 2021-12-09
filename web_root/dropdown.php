<?php

include('../mysql_connect.php');

$query = 'SELECT * FROM food';

$result = mysqli_query($dbc, $query);

?>
<div class="input-group mb-1">
<div class="input-group-prepend">
    <label class="input-group-text" for="<?php echo $column_name ?>">item</label>
  </div>
<select class="custom-select" id="<?php echo $column_name ?>"  name="<?php echo $column_name ?>">

    <?php while($row=mysqli_fetch_array($result)): ?>
        <option value="<?php echo $row[1]; ?>"><?php echo $row[1];?></option>
    <?php endwhile;?>

</select>
</div>

