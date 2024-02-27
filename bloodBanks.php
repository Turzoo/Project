<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Banks</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/donor.css">
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
            <li><a class="active" href="bloodBanks.php">Blood Banks</a></li>
        </ul>
    </nav>

    <table id="donor">
        <tr>
            <th>Name</th>
            <th>Catagory</th>
            <th>Location</th>
            <th>Contact</th>
        </tr>
        <tr>
            <td>Red Crescent Blood Bank</td>
            <td>International</td>
            <td>Aurangeb Rd, Dhaka</td>
            <td>8802-9116563</td>
        </tr>
        <tr>
            <td>Islami Bank Hospital Blood Bank</td>
            <td>National</td>
            <td>Purobi,Mirpur</td>
            <td>8802-8317090</td>
        </tr>
        <tr>
            <td>Quantum Blood Bank</td>
            <td>National</td>
            <td>Shantinagar, Dhaka</td>
            <td>8802-9351969</td>
        </tr>

        <tr>
            <td>Shandhani, Dhaka Dental College Branch</td>
            <td>National</td>
            <td>Mirpur, Dhaka</td>
            <td>8802-9011887</td>
        </tr>

        <tr>
            <td>Shandhani, Dhaka Medical College Branch</td>
            <td>National</td>
            <td>Secretarit Rd, National</td>
            <td>8802-9668690</td>
        </tr>

        <tr>
            <td>Sir Salimullah College Blood Bank</td>
            <td>National</td>
            <td>Mitford Rd,Dhaka</td>
            <td>8802-7319123</td>
        </tr>

        <tr>
            <td>Alif Blood Bank & Transfusion Center</td>
            <td>Private</td>
            <td>West Panthapath,Dhaka</td>
            <td>01712392923</td>
        </tr>

        <tr>
            <td>Badhan Blood Bank</td>
            <td>Private</td>
            <td>T.S.C, DU</td>
            <td>01534982674</td>
        </tr>

        <tr>
            <td>Police Blood Bank</td>
            <td>Private</td>
            <td>Rajarbag, Dhaka</td>
            <td>01534982674</td>
        </tr>

        <tr>
            <td>Oriental Blood bank</td>
            <td>Private</td>
            <td>Dhanmondi, Dhaka</td>
            <td>01812700053</td>
        </tr>

        <tr>
            <td>Mukti Blood Bank & Pathology Lab</td>
            <td>Private</td>
            <td>Shafiullah Road, Dhaka</td>
            <td>8802-8624249</td>
        </tr>

        <tr>
            <td>Creative Blood Bank</td>
            <td>Private</td>
            <td>Chalkbazar, Dhaka</td>
            <td>01772829082</td>
        </tr>

        
        <tr>
            <td>Ideal Blood Bank</td>
            <td>Private</td>
            <td>Naya Paltan,Dhaka</td>
            <td>01988877800</td>
        </tr>

        <tr>
            <td>City Blood Bank</td>
            <td>Private</td>
            <td>Ishakhan Road, Narayanganj</td>
            <td>01190839171</td>
        </tr>
    </table>

    <div class="footer">
        <p class="p"><a href="contactUs.php">Contact Us</a> &#169; 2021 - CSE482L	</p>
    </div>
    
</body>
</html>