<?php
require_once('./includes/functions.php');
?>
<ul class="list-group">
    <li class="list-group-item-success"><span class="px-2"><?php echo $meal ?></span></li>
    <li class="list-group-item"><?php echo get_meal($day, $meal)[0].'<br>' ?></li>
    <li class="list-group-item"><?php echo get_meal($day, $meal)[1].'<br>' ?></li>
    <li class="list-group-item"><?php echo get_meal($day, $meal)[2].'<br>' ?></li>
    <li class="list-group-item mb-2"><?php echo get_meal($day, $meal)[3].'<br>' ?></li>
</ul>

