<?php
session_start();
if (isset($_SESSION['name'])) {
    header('Location: profile.php');
    }
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/app.js"></script>
</head>    
<body>    
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="donorList.php">Find Donor</a></li>
            <li><a href="bloodBanks.php">Blood Banks</a></li>
        </ul>
    </nav>

    <div class='rForm'>
        <form action="loginValidation.php" method="post">
            <h2>Login</h2>

            <div class="row">
                <div class="col-25">
                    <label for="name">UserName:</label>
                </div> 
                <div class="col-75">
                <input type="text" id="name" name="name" autofocus placeholder="Type UserName(No White Space)" pattern="^\S+$">
                </div> 
            </div>  
 
            <div class="row">
                <div class="col-25">
                    <label for="psw">Password:</label>
                 </div>  
                <div class="col-75">
                    <input type="password" id="psw" name="psw" minlength="8" placeholder="Type Password"required>
  
                </div>
            </div>  

            <div class="row">
                <input type="submit" value="Login" name='login'>
            </div>  
        </form>   
  </div> 

  <div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
</body>    
</html>     
