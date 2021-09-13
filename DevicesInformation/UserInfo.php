<?php
Session_start();
if($_SESSION['userlogin'] == null || $_SESSION['userlogin'] != "user logged in" ){
    header("Location: ./index.php");
}
$row = null;
ini_set('display_errors', true);
error_reporting(-1);
$host="127.0.0.1";
$username="root";
$dbname="DevicesInformation";

$connect= mysqli_connect($host, $username,'',  $dbname);

if(mysqli_connect_errno()){
    print_r("cannot connect to database field:".mysqli_connect_error());  
}
$query="SELECT * FROM `Devices`";
    $result = mysqli_query($connect,$query);
    if(!$result){
    
        die("No Device Found");
    }

if(isset($_POST['search'])){
    $search=$_POST['device'];
    
    $query="SELECT * FROM `Devices` where `Device name`='${search}'";
    $result = mysqli_query($connect,$query);
    if(!$result){
    
        die("No Device Found");
    }
    
    
    }
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
       header("Location: ./index.php");
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/UserInfo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <title>Devices Information</title>
</head>

<body>
    <form method="POST">
<input style="font-size: large ;" type="submit" class="logout"  name="logout" value="LogOut">
</form>
<h1>Devices Information</h1>
    <hr>
    <form method="POST">
    <div id="spacer" style="width: 200px; height: 25px; margin-right:0px;"></div>

    <div class= "Insert">
        <input type="text"required name="device" placeholder="Device name ">
        <input type="submit" name="search" value="Search">
    </div>
    </form>

<div class="table" style="display: block;">
    <table>
        <thead>
        <tr class="header">
            <th>Device ID</th>
            <th>Device name</th>
            <th>Type</th>
            <th>City</th>
            <th>Location</th>
            <th>IP</th>
            <th>User</th>
            <th>Password</th>
            <th>Protocol</th>
            <th>Port</th>

        </tr>
        </thead>
        <tbody>

        <?php while(    $row=mysqli_fetch_assoc($result)):?>
            <tr>
            <td><?php echo $row['Device ID']?></td>
            <td><?php echo $row['Device name']?></td>
            <td><?php echo $row['Type']?></td>
            <td><?php echo $row['City']?></td>
            <td><?php echo $row['location']?></td>
            <td><?php echo $row['IP']?></td>
            <td><?php echo $row['User']?></td>
            <td><?php echo $row['Password']?></td>
            <td><?php echo $row['Protocol']?></td>
            <td><?php echo $row['Port']?></td>
            </tr>

    <?php endwhile?> 
        </tbody>

    </table>
    </div>
</body>

</html>