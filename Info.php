<?php
$uname = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$num = $_POST['num'];
$psw = $_POST['psw'];
$blood_group = $_POST['bg'];
$today = date("d/m/Y");
$addr = $_POST['addr'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vbb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, "INSERT INTO registration (id,uname, age,gender,email,num,psw,blood_group,date_created,addr) VALUES ('','$uname', '$age','$gender','$email','$num','$psw','$blood_group','$today','$addr')")) {
echo "New record created successfully, Redirecting to Login Page";
header("Refresh:1; url=login.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);

header('Location: registration.php');
}


mysqli_close($conn);
?>