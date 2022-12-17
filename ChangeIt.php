<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChangeForm</title>
</head>
<body>
    <?php
        include("conn.php");
        $Order_Id = $_POST['id1'];
        $Change_To = $_POST['Change'];

        $sql = "update orders set Delivery = '$Change_To' where Order_Id = '$Order_Id'";
        
        $res = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            
        header('location: ViewOrders.php');
        } 
        else {
            echo "Error: ".$sql."<br>".$conn->error;
        }

    ?>

</body>
</html>