<?php
$lang_users_title="Users";
$lang_groups_title="Groups";
$lang_group_structure_title="Group Structure";
$lang_department_title="Department";
$lang_location_title="Location";


?>
<html>
    <head>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        -->
        <script src="./js/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    </head>
<body>
<?php include "header.php"; ?>
  
     
  <center>
      <div class="container">
       <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <a href="user_list.php"><li class="list-group-item"><?php echo $lang_users_title; ?></li></a>
    <a href="group_list.php"><li class="list-group-item"><?php echo $lang_groups_title; ?></li></a>
    <a href=""><li class="list-group-item"><?php echo $lang_group_structure_title; ?></li></a>
    <a href=""><li class="list-group-item"><?php echo $lang_department_title; ?></li></a>
    <a href=""><li class="list-group-item"><?php echo $lang_location_title; ?></li></a>
  </ul>
</div>
      </div>
    </center>
  <div class="container">
 <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
             <div class="card-deck mb-3 text-center">
           footer content goes here
         </div>
          </div>
        </footer>
      </div>
</body>
</html>