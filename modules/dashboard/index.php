<?php

  include("../../config/db.php");
  
  $username = "";

  $userid = 0;
  $email = "";
  $location = "";
  $phone = "";
  $fullname = "";

  if(isset($_COOKIE["username"])){
    $username = $_COOKIE["username"];
  }
  else{
    // echo "user not logged in";
    header("location: ../authentication/login.php");
  }

  $sql = "SELECT * FROM accounts WHERE username = '$username'";

  $query = mysqli_query($conn, $sql);

  if($query){

    $row = mysqli_fetch_assoc($query);

    $userid = $row["userid"];
    $email = $row["email"];
    $location = $row["location"];
    $phone = $row["phone"];
    $fullname = $row["fullname"];

  }
  else{
    echo "Error making the query";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../libraries/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/feed.css">
  <script src="../../libraries/jquery/jquery-3.3.1.min.js"></script>
  <script src="../../libraries/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../js/dash.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0 !important; position: fixed !important; z-index: 9999999; width: 100%;">
  <a class="navbar-brand" href="javascript:void(0)">Twitter</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
       <li class="nav-item">
        <a class="nav-link" href="../authentication/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<br>
<br>
<br>
<br>
  <div class="row">

    <div class="col-md-4">
        <div class="card" style="width:100%">
    <img class="card-img-top" src="../../img/img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <center>
      <div class="btn-group">
        <a href="#" class="btn btn-primary">About</a>
        <a href="#" class="btn btn-primary">Message</a>
        <a href="#" class="btn btn-primary">Follow</a>
      </div>
      </center>
    </div>
  </div>
    </div>
    <div class="col-md-8">

    <div class="form-group">
      <input type="text" class="form-control" id="tweet" style="height: 100px;" >
    </div>
    <button type="submit" id="postBtn" class="btn btn-primary">Post</button>

    <hr>

    <div class="container">

      <?php

          $sql = "SELECT * FROM posts WHERE userid = '$userid'";

          $query = mysqli_query($conn, $sql);

          $self_posts = Array();

          while($row = mysqli_fetch_assoc($query)){
            $self_posts[] = $row;
          }

          for($i = 0; $i < count($self_posts); $i++){

              echo "<div class='post-container' style='background: #dfdfdf; border: 1px solid #ccc; padding: 8px;'>";
              echo "<a href='profile.php?userid=$userid'>$fullname</a>";
              echo "<hr>";
              echo $self_posts[$i]["content"];
              echo "<hr>";
              echo "<button class='likeBtn btn btn-primary'>Like</button>";
              echo "<button class='likeBtn btn btn-sm btn-danger' style='float: right;'>Delete</button>";
              echo "<span style='float: right;'>".date("H:i", $self_posts[$i]["posted_at"])."&nbsp;&nbsp;&nbsp;</span><br>";
              echo "</div><br><br>";

          }

      ?>
    </div>
    </div>
  </div>
</div>

</body>
</html>