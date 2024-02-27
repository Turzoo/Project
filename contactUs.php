<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.row{
    margin-top:10px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
h2{
    color:black;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>

<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/footer.css">
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
            <li><a href="donorList.php">Find Donor</a></li>
            <li><a href="bloodbanks.php">Blood Banks</a></li>
        </ul>
    </nav>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/sany.jpg" alt="Sany Mohammad Khaled" style="width:100%;height:380px">
      <div class="container">
        <h2>Sany Mohammad Khaled</h2>
        <p class="title">ID : 1711853042</p>
        <p><a href="mailto:sany.khaled@northsouth.edu"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/fatema.jpg" alt="Fatema Kishwar Jahan" style="width:100%;height:380px">
      <div class="container">
        <h2>Fatema Kishwar Jahan</h2>
        <p class="title">ID : 1731925642</p>
        <p><a href="mailto:fatema.kishwar@northsouth.edu"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/dipro.jpg" alt="Sate Ishraq Nawar Dipro" style="width:100%;height:380px">
      <div class="container">
        <h2>Sate Ishraq Nawar Dipro</h2>
        <p class="title">ID : 1530363642</p>
        <p><a href="mailto:sate.dipro@northsouth.edu"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
<div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
</body>
</html>
