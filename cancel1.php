<?php
    include('conn.php');
    session_start();
    $userId = $_SESSION['USERID'];
    $orderid = $_POST['Order'];
    $sql = "update orders set Delivery = 'Canceled' where User_Id = '$userId' and Order_Id = '$orderid' ";
    $res = mysqli_query($conn,$sql);
    if($conn->query($sql) == TRUE ){
        header('location: YourOrders.php');
    }
    else{
        header('location: YourOrders.php');
    }
?>