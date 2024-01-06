<?php

require ("config.php");
if ($conn){
  if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM admin WHERE Email='$email'";
    $result=mysqli_query($conn,$sql);
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $db_password=$data[0]['Password'];
      if ($password===$db_password){
        session_start();
        $_SESSION['idAdmin']=$data[0]['idAdmin'];
        $_SESSION['logged_in']=true;
        header("Location:/Dashboard/index.php");
      } else {
        echo ("Wrong password");
      }
  }
} else {
  echo ("Error connecting: ".mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Signin Form Template Example</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="/Assets/loginicon.png">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        
          <div class="tab-pane fade in" id="login">
            <h2 class="text-uppercase text-center"> ADMIN LOGIN</h2>
            <form id="login" action="doc.php" method="POST">
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name ="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="on">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top"> 
                <button type="submit" name="login" class="btn btn-larger btn-block">
                <a href="#">Log in</a> 
                </button>
                <button type="submit" class="btn btn-larger btn-block">
                <a href="/user.html">Patient Sign Up and Login</a> 
              </button>
              <button type="submit" class="btn btn-larger btn-block">
                <a href="/index.html">Back to Home</a>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
