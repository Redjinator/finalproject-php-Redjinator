<?php require_once('./includes/initialize.php');?>
<?php $page_title = 'MealOut';?>
<?php include(TEMPLATE_PATH.'\header.php');?>



<div class="container">
  <div class="row text-center">
    <div class="col-sm">Monday</div>
    <div class="col-sm">Tuesday</div>
    <div class="col-sm">Wednesday</div>
    <div class="col-sm">Thursday</div>
    <div class="col-sm">Friday</div>
  </div>


  <!-- BREAKFAST ============================== -->
  <div class="row">
    <div class="col-sm">
        <?php
            $day = 'Monday';
            $meal = 'breakfast';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
        <?php
            $day = 'Tuesday';
            $meal = 'breakfast';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Wednesday';
            $meal = 'breakfast';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Thursday';
            $meal = 'breakfast';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Friday';
            $meal = 'breakfast';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
  </div>

    <!-- SNAKC AM ============================== -->
    <div class="row">
    <div class="col-sm">
        <?php
            $day = 'Monday';
            $meal = 'snack_am';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
        <?php
            $day = 'Tuesday';
            $meal = 'snack_am';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Wednesday';
            $meal = 'snack_am';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Thursday';
            $meal = 'snack_am';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Friday';
            $meal = 'snack_am';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
  </div>




  <!-- LUNCH ============================== -->
  <div class="row">
    <div class="col-sm">
        <?php
            $day = 'Monday';
            $meal = 'lunch';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
        <?php
            $day = 'Tuesday';
            $meal = 'lunch';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Wednesday';
            $meal = 'lunch';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Thursday';
            $meal = 'lunch';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Friday';
            $meal = 'lunch';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
  </div>



  <!-- SNACK PM ============================== -->
  <div class="row">
    <div class="col-sm">
        <?php
            $day = 'Monday';
            $meal = 'snack_pm';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
        <?php
            $day = 'Tuesday';
            $meal = 'snack_pm';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Wednesday';
            $meal = 'snack_pm';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Thursday';
            $meal = 'snack_pm';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
    <div class="col-sm">
    <?php
            $day = 'Friday';
            $meal = 'snack_pm';
            include(TEMPLATE_PATH.'\showmeal.php');
        ?>
    </div>
  </div>
</div>


<?php include(TEMPLATE_PATH.'\footer.php');?>
