<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    }
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>My Profile</title>    
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/donor.css">
    <link rel="stylesheet" href="css/footer.css">
</head>    
<body>    
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
<?php
          if($_SESSION['name']){
                ?>
                <li><a class="active" href="profile.php">Profile</a></li> 
                <li><a  href="logout.php">Logout</a></li>
                <?php
            }  else{
                ?>
                <li><a class="active" href="login.php">Login</a></li>
                <?php
            }
            ?>
                <li><a href="donorList.php">Find Donor</a></li>
                <li><a href="bloodBanks.php">Blood Banks</a></li>
        </ul>
    </nav>  

    <?php
echo "<h2 style='text-align:center;padding-bottom:5px;'>Welcome, {$_SESSION['name']}. Here is your account info: </th> <hr>";
?>


<table id='donor'>

<?php
$uname = $_SESSION['name'];
$conn = mysqli_connect("localhost", "root", "", "vbb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration WHERE uname = '$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo"<th>UserName</th>";
        echo "<td>".$row['uname']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Age</th>";
        echo "<td>".$row['age']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Gender</th>";
        echo "<td>".$row['gender']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Blood Group</th>";
        echo "<td>".$row['blood_group']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Number</th>";
        echo "<td>".$row['num']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Password</th>";
        echo "<td>".$row['psw']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Address</th>";
        echo "<td>".$row['addr']."</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<th>Creation Date</th>";
        echo "<td>".$row['date_created']."</td>";
        echo "</tr>";
        }
        echo "</table>";
}
$conn->close();
?>
</table>
    <div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
</body>
</html>
    </body>
</head>