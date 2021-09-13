
<?php

Session_start();
ini_set('display_errors', true);
error_reporting(-1);
$host="127.0.0.1";
$username="root";
$dbname="DevicesInformation";

$connect= mysqli_connect($host, $username,'',  $dbname);

if(mysqli_connect_errno()){
    print_r("cannot connect to database field:".mysqli_connect_error());  
}


if(isset($_POST['login'])){
$username=$_POST['user'];
$password=$_POST['pass'];

$query="SELECT * FROM Users where User_name ='${username}' and Password ='${password}'";
$result = mysqli_query($connect,$query);
if(!$result){

    die("Username or password is incorrect");
}else{

    
while($row=mysqli_fetch_assoc($result)){
    if( $username == $row['User_name'] && $password==$row['Password']){

        $_SESSION['userlogin']="user logged in";
        header("Location: ../UserInfo.php");
        die();

    }
}
header("Location: ../index.php");
die();

}


}else{
    print_r ("error");
}



?>