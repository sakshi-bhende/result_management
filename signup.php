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
                        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                       

                    </ul>
                </div>
            </div>
        </nav>
     <?php
            if(isset($_POST['FullName'])){
                $FullName = $_POST['FullName'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirmPassword'];
               
                
            }
            if(!isset($email)){
                $email = 'Variable name is not set';

            }
           

          
            // Create connection 
            $conn = new mysqli('localhost','root' ,'','test');
             // Check connection 
            if ($conn->connect_error) { 
                      die("Unable to Connect database: " . $conn->connect_error);
             }
               
                $check_email = mysqli_query($conn, "SELECT email FROM registration  WHERE email = '".$email."' ");

               
           
        
                if(mysqli_num_rows($check_email) > 0){
                   echo('Email Already exists');
                }
           ?>
                 <div class="container">
            <div class="success">
            <?php
                if(mysqli_num_rows($check_email) > 0){
                   echo('Email Already exists');
                }

                else {
                        $stmt = $conn->prepare("INSERT INTO registration(FullName, email,password, confirmPassword) values(?, ?, ?, ?)");
                        $stmt->bind_param("ssss", $FullName, $email, $password, $confirmPassword);
                        $execval = $stmt->execute();
                        echo $execval;
                        
                        echo "<center>" . "Registration successfully...!" . "</center>";

                        $stmt->close();
                        $conn->close();
                }
             ?>
            </div>
        </div>
    </body>
</html>