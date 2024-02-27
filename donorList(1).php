<?php
session_start();
?>
<html lang="en" dir="ltr">
<head>
<title></title>
<link rel="stylesheet" href="css/donor.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/footer.css">
<script>
function usersearchTxt(str) {
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
document.getElementById('searchTxt').innerHTML = this.responseText;
    }
}
xmlhttp.open("GET","finder.php?search="+str,true);
xmlhttp.send();
console.log(str);
}
</script>
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
            <?php
          if(isset($_SESSION['name'])){
                ?>
                <li><a  href="profile.php">Profile</a></li> 
                <li><a  href="logout.php">Logout</a></li>

                <?php
            }  else{
                ?>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>

                <?php
            }
            ?>

            <li><a class="active" href="donorList.php">Find Donor</a></li>
            <li><a href="bloodBanks.php">Blood Banks</a></li>
        </ul>
    </nav>
<div id="search">
<label for="search"> Search Name or Blood Group: </label>
<input id="searchBox" type="text" placeholder="Seacrh..." name="search"autofocus onkeyup="usersearchTxt(document.getElementById('searchBox').value);">

</div>
<div id="searchTxt">
<table id="donor">
<?php
include 'finder.php';
echo fetch('');
?>
</table>
</div>
    <div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
</body>
</html>