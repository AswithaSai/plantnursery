<?php
    include('conn.php');
    session_start();
    
    $User_Id = $_POST['User_Id'];
    $Pass= $_POST['pass'];
    $query = "select User_Id , Password from customer where User_Id = '$User_Id' and Password = '$Pass'";
    $query1 = "select Customer_name from customer where User_Id = '$User_Id' and Password = '$Pass'";
    $res1=mysqli_query($conn,$query1);
    $result1  = mysqli_fetch_assoc($res1);
    $res=mysqli_query($conn,$query);
    if($res == true ){
        $count = mysqli_num_rows($res);
    }
    if($count == 1){
        session_start();
        $_SESSION['USERID'] = $User_Id;
    }
    if($result=mysqli_fetch_assoc($res)){
        header('location:home.php');
    }
    else{
        header('location: signUp.html');
    }
?>