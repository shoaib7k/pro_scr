<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
     <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> 
    <a href="" class="my-2 my-md-0 mr-md-auto"><img src="./images/rf-logo-intranet.svg" alt="Responsive image"></a>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Calender</a>
      <a class="p-2 text-dark" href="#">Information</a>
      <a class="p-2 text-dark" href="#">Contacts</a>
      <a class="p-2 text-dark" href="#">Training</a>
      <a class="p-2 text-dark" href="#">Templates</a>

      <a class="btn btn-outline-primary" href="#">Sign up</a>
      <img src='images/button-login.svg' name='button-login' onmouseover="this.src='images/button-login-red.svg'" onmouseout="this.src='images/button-login.svg'" onclick='' class="img_button_40" />

      <a href="settings.php" class="btn btn-outline-primary"><img src="images/button-gear.svg" alt="button config" onmouseover="javascript:this.src='images/button-gear-red.svg'" onmouseout="javascript:this.src='images/button-gear.svg'" class="svg_image_button_2"></a>

      <select class="selectpicker" data-width="fit">
        <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
        <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>German</option>
      </select>
    </nav>
  </div> -->
<div>
  <nav class="navbar navbar-default" >
    <div class="container-fluid" style="height:auto;	width: 1150px;">
      <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar5">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="./images/rf-logo-intranet.svg" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar5" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Calender</a></li>
          <li><a href="#">Information</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Templates<a></li>
   
      <img src='images/button-login.svg' name='button-login' onmouseover="this.src='images/button-login-red.svg'" onmouseout="this.src='images/button-login.svg'" onclick='' class="img_button_40" data-toggle="modal" data-target="#exampleModal"/>

      <a href="settings.php" class="btn btn-outline-primary"><img src="images/button-gear.svg" alt="button config" onmouseover="javascript:this.src='images/button-gear-red.svg'" onmouseout="javascript:this.src='images/button-gear.svg'" class="svg_image_button_2"></a>

      <select class="selectpicker" data-width="fit">
        <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
        <option data-content='<span class="flag-icon flag-icon-mx"></span> Deutsch'>Deutsch</option>
      </select>
        </ul>
      </div>

    </div>
  </nav>
</div>
      <!--/.nav-collapse -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login Now</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="login.php">
                    <div class="form-group row">
                      <label for="loginName" class="col-sm-4 col-form-label">Login Name</label>
                      <div class="col-sm-8">
                        <input type="text" name="login_name" id="login_name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">password</label>
                      <div class="col-sm-8">
                        <input type="text" name="password" id="password" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Login">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>