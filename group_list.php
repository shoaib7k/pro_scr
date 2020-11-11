<?php
include 'db_connect.php';
$lang_first_name = "First Name";
$lang_last_name = "Last Name";
$lang_login_name = "Login Name";
$lang_password = "Password";
$lang_type = "Type";
$lang_group = "Group";
$lang_group_name = "Group Name";

?>
<?php
if ($_GET['act'] == 'add_group') {
  $group_name = $_POST['group_name'];
  if (!empty($group_name)) {
    if ($db_connection) {
      $sql = "insert into groups (group_name) values ('" . $group_name . "')";
      $db_result = pg_query($db_connection, $sql);
      if ($db_result) {
        pg_free_result($db_result);
        header("location: group_list.php");
      }
    }
  }
}
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


  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            New Group Add
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Group</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="group_list.php?act=add_group">
                    <div class="form-group row">
                      <label for="groupName" class="col-sm-4 col-form-label"><?php echo $lang_group_name; ?></label>
                      <div class="col-sm-8">
                        <input type="text" name="group_name" id="group_name" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Add">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>