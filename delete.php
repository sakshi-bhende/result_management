<!DOCTYPE html>
<html>
    <head>
        <title>Delete</title>
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
if(isset($_POST['FullName'])){
	
	$FullName = $_POST['FullName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	
   
 }
 if(!isset($email)){
	$email = 'Variable name is not set';

}

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 ?>
 <div class="container">
	 <div class="success">
	 <?php
 
 // sql to delete a record
 $sql = "DELETE FROM login WHERE email= '$email' ";
 
 if (mysqli_query($conn, $sql)) {
   echo "<h2><center>Record deleted successfully</center></h2>";
 } else {
   echo "Error deleting record: " . mysqli_error($conn);
 }
 
 mysqli_close($conn);
 ?>
  
            </div>
        </div>
    </body>
</html>
 
