<?php
    require("config.php");
    if ($conn){
        
        if (isset($_POST['signup'])){
            $FirstName=$_POST['FirstName'];
            $LastName=$_POST['LastName'];
            $YourEmail=$_POST['YourEmail'];
            $YourPhone=$_POST['YourPhone'];
            $Password=$_POST['Password'];
            // echo ($FirstName.$LastName.$YourEmail.$YourPhone.$Password);
            $sql="INSERT INTO clientsdata values(
               '$FirstName','$LastName','$YourEmail','$YourPhone','$Password'
               )";
            // $sql = "INSERT INTO clientsdata (First_Name, Last_Name, Email, Phone_Number, Password) VALUES ('$FirstName', '$LastName', '$YourEmail', '$YourPhone', '$Password')";
            if(mysqli_query($conn,$sql)){
              $signed_up=true;
            } else{
              echo("error inserting");
            }
        }
      if(isset($_POST['login'])){
        $email=$_POST['email'];
        $Password=$_POST['password'];

        $sql="SELECT * FROM clientsdata WHERE "
      }
        
    } else {
        echo ("Connection error: ".mysqli_connect_error());}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Signin Form Template Example</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="/Assets/signupicon.png">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>

<?php
if (isset($signed_up)){
  if ($signed_up){
    echo ("
    <script>
  alert('Signed up succesfully');
</script>
    ");
  }
}
?>

<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <h2 class="text-uppercase text-center">SAKU PHARMACY</h2>
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <form id="signup" action="signup.php" method="POST">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label>First Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off" name="FirstName">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label> Last Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" id="last_name" required data-validation-required-message="Please enter your name." autocomplete="on" name="LastName">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="on" name="YourEmail">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Your Phone<span class="req">*</span> </label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="on" name="YourPhone">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off" name="Password">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block" name="signup">
                Sign up
                </button>
                
              </div>
            </form>
            <a href="/index.html"><button class="btn btn-larger btn-block">
              Back to Home ?
              </button></a>
          </div>
          <div class="tab-pane fade in" id="login">
            <h2 class="text-uppercase text-center"> Log in</h2>
            <form id="login" action="connect.php" method="post">
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="on" name="Password">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" name="login" class="btn btn-larger btn-block">
                Log in                
              </div>
            </form>
          </button>
          <a href="http://localhost:8000/doc.php"><button class="btn btn-larger btn-block">
            Switch To PHARMACIST
            </button></a>
            <a href="/index.html"><button class="btn btn-larger btn-block">
              Back to Home ?
              </button></a>
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
