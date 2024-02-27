<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vbb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

session_start();

if (isset($_POST['login'])){
    $uname = $_POST['name'];
    $psw = $_POST['psw'];
}
      
      $sql = "SELECT uname,psw FROM registration WHERE uname = '$uname' AND psw = '$psw'";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) == 1){
          $_SESSION['login'] = true;
          $_SESSION['name'] =$uname;
        header("location: profile.php");
      }
      else {
        echo"Invalid UserName or Password. Redirecting to Login Page...";
        header("Refresh:1.5; url=login.php");
      }
?>