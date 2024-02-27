<?php
session_start();
if (isset($_SESSION['name'])) {
    header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="donorList.php">Find Donor</a></li>
            <li><a href="bloodBanks.php">Blood Banks</a></li>
        </ul>
    </nav>
    <div class='rForm'>
        <form action="Info.php" method="post">
            <h2>Registration Form</h2>

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
                    <label for="age">Age:</label>
                </div>  
                <div class="col-75">
                    <input type="number" name="age" id="age" placeholder="Type Age"required >
                </div>
            </div>   

            <div class="row">
                <div class="col-25">
                    <label for="addr">Address:</label>
                </div>  
                <div class="col-75">
                    <input type="text" name="addr" id="addr" placeholder="Type address"required >
                </div>
            </div>   

            <div class="row">
                <div class="col-25">
                    <label for="gender">Gender:</label>
                </div>  
                <div class="col-75">
                    <input type="radio" id="male" name="gender" value="Male" required>
                        <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label><br>                
                </div>
            </div>  
            
            <div class="row">
                <div class="col-25">
                    <label for="bg">Your Blood Group:</label>
                </div>  
                <div class="col-75">
                    <select name="bg" id="bg" required>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>   

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>  
                <div class="col-75">
                    <input type="email" name="email" id="email" placeholder="Type Email"required>   
                </div>
            </div>  
           
            <div class="row">
                <div class="col-25">
                    <label for="num">Phone Number</label>               
                 </div>  
                <div class="col-75">
                    <input type="tel" name="num" id="num" minlength="11" placeholder="Type Phone Number" required>   
                </div>
            </div>  
 
            <div class="row">
                <div class="col-25">
                    <label for="psw">Password</label>
                 </div>  
                <div class="col-75">
                    <input type="password" id="psw" name="psw" minlength="8" placeholder="Type Password"required>
  
                </div>
            </div>  

            <div class="row">
                <input type="submit" value="Submit">
            </div>  
        </form>
    </div>
    <div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
</body>
</html>