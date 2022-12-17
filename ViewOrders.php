<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Orders</title>
    <style>
        .infoTable{
            border-color:brown;
        }
        .info{
            margin:1%;
            margin : 1%;
            background-color:beige;
        }
        .php1{
            padding-left:3%;

        }
        .submit {
            display: block;
            border: none;
            background-color: #04AA6D;
            color: white;
            margin-top:5%;
            margin-bottom:5%;
            padding:10%;
            cursor: pointer;
            text-align: center;
        }
        .nor{
            background-color:lawngreen;
            padding-left:15%;
            padding-right:15%;
            border-radius:30px;
        }
        .suc{
            background-color:lime;
            padding-left:15%;
            padding-right:15%;
            padding-top:5%;
            padding-bottom:5%;
            border-radius:30px;
        }
        .some{
            padding-top:0.5%;
        }
        .input1{
            width:200px;
        }
        .input2{
            width:70px;
        }
        .order{
            padding-top: 2%;
            padding-bottom: 2%;
        }
        .input3{
            padding-top:2%;
        }
        .ur{
            color:green
        }
        .app{
            color:red;
        }
    </style>

</head>
<body>
    <nav class="navbar sticky navbar-light bg-dark text-success">
        <table>
            <td><h1 style="font-size:50px" ><big>Green<span class="ur"> Bliss</span> Nursery</big></h1></td>
        </table>
    </nav>
    <nav class="navbar sticky-top navbar-light bg-dark link-text-white text-white" >
        <a class="navbar-brand" href="signUp.html"><span style="color:ghostwhite">Sign Up</span></a>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="adminLogin.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="adminBuy.php"><span style="color:ghostwhite">Place Orders</span></a>
    </nav>
    <div class="info">
        <h1 align="Center" style="font-family:Gill Sans">Total Orders By Customers : </h1>
        <br>
        <div class="php1">
        <?php
            include("conn.php");
            $sql="select Order_Id,Plant_Id, Quantity,Amount , User_Id , Delivery from orders";
            $res=mysqli_query($conn, $sql);
            echo '<table border="2" class="infoTable"><tr align="center"><th width="150px" >Order_Id</th>
            <th width="150px">Plant_Id</th><th width="150px">Quantity</th>
            <th width="150px">Amount</th><th width="150px">User_Id</th>
            <th width="250px">Delivery Status</th><th width="150px">change</th></tr>';
            while($result=mysqli_fetch_assoc($res)){
                if($result['Delivery']=="Preparing to dispatch"){
                    echo '<tr align="center"><td>'. $result['Order_Id'] . '</td><td>'. 
                    $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                    . '</td><td>' . $result['User_Id'] . '</td><td class="some">
                    <form action="ChangeIt.php" method="post">'.'<span class="nor">'. $result['Delivery'].'</span>'.'
                    <input class="input1" type="text" name="Change" placeholder="Change to...." >
                    <div class="order"><input class="input2" type="text" name="id1" placeholder="Order_Id"></div>' .'</td><td>
                    
                        <button type="submit" value ="Search" class="submit">
                        Change it
                        </button>
                    </form></td>'.'</tr>';
                }
                else if($result['Delivery']!="Success"){
                    echo '<tr align="center"><td>'. $result['Order_Id'] . '</td><td>'. 
                $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                . '</td><td>' . $result['User_Id'] . '</td><td> '. '<span class="nor">'. $result['Delivery'].'</span>'.
                '<form action="ChangeIt.php" method="post" >
                <div class="input3"><input class="input1" type="text" name="Change" placeholder="Change to...." ></div>
                    <div class="order"><input class="input2" type="text" name="id1" placeholder="Order_Id"></div>' .'</td><td>
                    <button type="submit" value ="Search" class="submit">
                    Change it
                    </button>
                </form></td>'.'</tr>';
                }
                else{
                    echo '<tr align="center" height="60px"><td>'. $result['Order_Id'] . '</td><td>'. 
                    $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                    . '</td><td>' . $result['User_Id'] . '</td><td> '. 
                    '<span class="suc">'.$result['Delivery'] .'<span></td><td></td>'.'</tr>';
                }
                
            }
            echo "</table>"
        ?>
        </div>
        
    </div>
</body>
</html>