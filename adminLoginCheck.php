<?php
include('conn.php');
session_start();
$User_Id = $_POST['User_Id'];
$Pass= $_POST['pass'];
$query = "select * from admin where User_Id = '$User_Id' and password = '$Pass'";
$res=mysqli_query($conn,$query);
    if($result=mysqli_fetch_assoc($res)){
        $_SESSION['USERID']=$result['User_Id'];
        header('location: adminUserPage.php');
    }
    else{
        header('location: adminLogin.html');
    }


?>