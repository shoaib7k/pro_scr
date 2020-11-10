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
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
        <a href="" class="my-2 my-md-0 mr-md-auto"><img src="./images/rf-logo-intranet.svg"  alt="Responsive image"></a>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="#">Features</a>
          <a class="p-2 text-dark" href="#">Enterprise</a>
          <a class="p-2 text-dark" href="#">Support</a>
          <a class="p-2 text-dark" href="#">Pricing</a>
         
        <a class="btn btn-outline-primary" href="#">Sign up</a>
                            <img src='images/button-login.svg' name='button-login' onmouseover="this.src='images/button-login-red.svg'" onmouseout="this.src='images/button-login.svg'" onclick='' class="img_button_40"/>
                        
          <a href="settings.php" class="btn btn-outline-primary"><img src="images/button-gear.svg" alt="button config" onmouseover="javascript:this.src='images/button-gear-red.svg'" onmouseout="javascript:this.src='images/button-gear.svg'" class="svg_image_button_2"></a>
          
        <select class="selectpicker" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
          <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
        </select>
        </nav>
      </div>
  
     
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