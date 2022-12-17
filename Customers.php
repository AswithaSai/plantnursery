<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customers</title>
    <style>
        .ur{
            color:green
        }
        .app{
            color:red;
        }
        .infoTable{
            border-color:brown;
            
        }
        .info{
            margin:1%;
            background-color:beige;
            
        }
        .tab{
            padding-top:3%;
            padding-left:10%;
            
        }
    </style>
</head>
<body>
<nav class="navbar sticky navbar-light bg-dark text-success">
        <table>
            <td><h1 style="font-size:50px;color:ghostwhite" ><big>Green<span class="ur"> Bliss</span> Nursery</big></h1></td>
        </table>
    </nav>
    <nav class="navbar sticky-top navbar-light bg-dark link-text-white text-white" >
        <a class="navbar-brand" href="adminUserPage.php"><span style="color:ghostwhite">Home</span></a>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="ViewOrders.php"><span style="color:ghostwhite">View Orders</span></a>
        <a class="navbar-brand" href="adminBuy.php"><span style="color:ghostwhite">Place Orders</span></a>
        <a class="navbar-brand" href="signOut.php"><span style="color:ghostwhite">Sign Out </span></a>
    </nav>
    <div class="info">
    <?php
            echo '<h1 align="center" style="color:blue">******Customers Details******</h1>';
            include("conn.php");
            $sql="select Customer_name, Address, City ,Phone_No , Email , User_Id from customer";
            $res=mysqli_query($conn, $sql);
            echo '<div class="tab">';
            echo '<table border="2" class="infoTable"><tr align="center"><th width="150px" >Customer_name</th>
            <th width="150px"> Address</th><th width="150px"> City </th>
            <th width="150px">Phone_No</th><th width="150px">Email</th>
            <th width="250px">User_Id</th></tr>';
            while($result=mysqli_fetch_assoc($res)){
                echo '<tr align="center" height="80px"><td>'. $result['Customer_name'] . '</td><td>'. 
                $result['Address'] . '</td><td>' . $result['City'] . '</td><td>' . $result['Phone_No'] 
                . '</td><td>' . $result['Email'] . '</td><td> '. 
                $result['User_Id'] .'</td><td></td>'.'</tr>';
            }
            echo '</div>';
    ?>
    </div>
    
</body>
</html>