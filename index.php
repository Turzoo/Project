<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Blood Bank</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/app.js"></script>
</head>
<body>
    <h2 data-text="Donate Blood, Save Life...">Donate Blood, Save Life...</h2>
    <div class="links">
    <?php
          if(isset($_SESSION['name'])){
                ?>
                <a href="profile.php">Profile </a>
                <a href="logout.php">Logout</a>
                <a href="donorList.php"><b>Find Donor </b></a>

                <?php
            }  else{
                ?>   
                <a href="registration.php"><b>Become Donor</b></a> 
                <a href="login.php" ><b>Login </b></a>
                <a href="donorList.php"><b>Find Donor </b></a>
                <?php
            }
            ?>
    <hr>
    </div>
    
</body>
</html>