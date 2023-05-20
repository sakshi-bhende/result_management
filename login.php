<!DOCTYPE html>
<html>
    <head>
        <title>Successfully</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url("img/bg.jpg");
                background-position-x: -100px;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: 100vh;
                overflow: hidden;
            }
            
            .success {
                margin-top: 25%;
                background-color: rgba(0,0,0,0.28);
                padding: 15px;
                border-radius: 30px;
                font-size: 300%;
                color: white;
            }
        </style>
    </head>
    <body>
	<nav class="navbar navbar-inverse navbar-fixed-top navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle tgl" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand logo">Education4ol</a>
                </div>
                <div class="collapse navbar-collapse" id='myNavbar'>
                    <ul class="nav navbar-nav navbar-right menue">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                       

                    </ul>
                </div>
            </div>
        </nav>
<?php
  if(isset($_POST['email'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
   
 }
 $con = new mysqli("localhost","root","","test");
 if($con->connect_error)
 {
	 die("Failed to connect:" . $con->connect_error);

 }
 else{
	 $stmt = $con->prepare("SELECT * FROM login WHERE email = ?");
	 $stmt->bind_param("s",$email);
	 $stmt->execute();
	 $stmt_result = $stmt->get_result();
	 ?>
	 <div class="container">
	 <div class="success">
	 <?php
	
	 if($stmt_result->num_rows >0 )
	 {
          $data = $stmt_result->fetch_assoc();
		  if($data['password'] === $password)
		  {
			  echo " <h2><center>Login Successfully</center></h2> ";
		  }
		  else{
			  echo "<h2><center>Invalid Email or Password</center></h2>";
		  }
	 }
	 else{
		 echo  "";
	 }

 }
 ?>
  
            </div>
        </div>
    </body>
</html>
 