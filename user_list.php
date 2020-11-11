<?php
$lang_users_title = "Users";
$lang_groups_title = "Groups";
$lang_group_structure_title = "Group Structure";
$lang_department_title = "Department";
$lang_location_title = "Location";


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
  <?php include "header.php" ;?>


  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-s box-shadow">
        <div class="card-header">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
             Add New User
          </button>
          <!-- Modal -->
          <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">First Name</label>
                      <input type="text" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Last Name</label>
                      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Login Name</label>
                      <input type="email" class="form-control" id="login_name" aria-describedby="emailHelp" placeholder="Login Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      
    </div>

  </div>
</body>

</html>