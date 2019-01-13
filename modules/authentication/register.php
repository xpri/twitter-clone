<?php

  if(isset($_COOKIE["username"])){
    header("location: ../dashboard");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register - Twitter</title>
    <link rel="stylesheet" href="../../css/login.css" />
    <!--- Include CSS from css/login.css --->
    <!--- Include Boostrap CSS --->
    <link rel="stylesheet" href="../../libraries/bootstrap/css/bootstrap.min.css" />
    <!--- Include jQuery --->
    <script src="../../libraries/jquery/jquery-3.3.1.min.js"></script>
    <!--- Include Bootstrap JS --->
    <script src="../../libraries/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" action="register.do.php" method="post" >
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="username" required>
                  <label for="inputUsername">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputFullname" name="inputFullname" class="form-control" placeholder="Full Name" required>
                  <label for="inputFullname">Full Name</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="9123xxxxxx" required>
                  <label for="inputPhone">Phone Number</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputLocation" name="inputLocation" class="form-control" placeholder="City, Country" required autofocus>
                  <label for="inputLocation">Location</label>
                </div>

                <div class="form-label-group">
                  <input type="date" id="inputDob" name="inputDob" class="form-control" required autofocus>
                  <label for="inputDob">Date of Birth</label>
                </div>

                <div class="form-label-group">
                  <label>Gender</label>
                  <br />
                  <br />
                  <div class="container">
                    <label class="radio-inline">
                      <input type="radio" name="gender" value="1" checked> Male
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label class="radio-inline">
                      <input type="radio" name="gender" value="2"> Female
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label class="radio-inline">
                      <input type="radio" name="gender" value="3"> Other
                    </label>
                  </div>

                </div>

                <hr />

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>