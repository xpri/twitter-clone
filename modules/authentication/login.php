<?php

  if(isset($_COOKIE["username"])){
    header("location: ../dashboard");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login - Twitter</title>
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
              <form class="form-signin" action="login.do.php" method="post">
                <div class="form-label-group">
                  <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUsername">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>