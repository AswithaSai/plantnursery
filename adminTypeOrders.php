<?php   
    include('conn.php');
    session_start();
    $name = $_SESSION['USERID'];
    $plant_Id = $_POST['Plant_Id'];
    $Quantity = $_POST['Quanti'];

    $query = "select Price from plants where Plant_Id= '$plant_Id' ";
    $res=mysqli_query($conn,$query);
    $result  = mysqli_fetch_assoc($res);
    $amount = $result['Price']*$Quantity;

    $sql = "insert into orders values (DEFAULT,'$plant_Id','$Quantity','$amount','$name',DEFAULT)";
    $res1=mysqli_query($conn,$sql);

    $sql2 = "select MAX(Order_Id) from orders";
    $res2 = mysqli_query($conn,$sql2);
    $result2  = mysqli_fetch_assoc($res2);
    $max = $result2['MAX(Order_Id)'];

    
    $sql1 = "delete from orders where Order_Id = '$max' ";
    $res2=mysqli_query($conn,$sql1);
    if($conn->query($sql) == TRUE ){
        header('location: home.php');
    }
    else{
        header('location: adminBuy.php');
    }
?>
