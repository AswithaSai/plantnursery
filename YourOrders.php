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
            background-color:beige;
        }
        .php1{
            padding-left:10%;

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
            background-color:yellow;
            padding-left:10%;
            padding-right:10%;
            padding-top:5%;
            padding-bottom:5%;
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
        .can{
            background-color:Tomato;
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
        .nor1{
            padding-top:1.5%;
            padding-bottom:1.5%;
        }
        .block {
            display: block;
            border: none;
            background-color: #04AA6D;
            color: white;
            padding: 14px 28px;
            width:30%;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }
        .div1{
            padding-top:2%;
            padding-left:40%;
            
        }
        .div1 a{
            text-decoration: none;
        }
        .block1 {
            display: block;
            background-color:lime;
            cursor: pointer;
            padding-left:10%;
            padding-right:10%;
            padding-top:5%;
            padding-bottom:5%;
            border:none;
            text-align: center;
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
    <a class="navbar-brand" href="home.php"><span style="color:ghostwhite">Home</span></a>
        <a class="navbar-brand" href="signUp.html"><span style="color:ghostwhite">Sign Up</span></a>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="Login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="userOrders.php"><span style="color:ghostwhite">Place Orders</span></a>
    </nav>
    <div class="login">
    
    <div class="info">
        <div class="php1">
        <?php
            include("conn.php");
            session_start();
            $User_Id = $_SESSION['USERID'];
            
            $sql1 = "select Customer_name from customer where User_Id ='$User_Id' ";
            $res1=mysqli_query($conn, $sql1);
            $result1=mysqli_fetch_assoc($res1);
            if($result1){
                echo '<h1>Welcome '.$User_Id.'</h1>';
                echo '<h1 align="Center" style="font-family:Gill Sans"> Your Orders : </h1><br>';
                $sql="select Order_Id,Plant_Id, Quantity,Amount , User_Id , Delivery from orders where User_Id = '$User_Id' ";
                $res=mysqli_query($conn, $sql);
                echo '<table border="2" class="infoTable"><tr align="center"><th width="150px" >Order_Id</th>
                <th width="150px">Plant_Id</th><th width="150px">Quantity</th>
                <th width="150px">Amount</th><th width="150px">User_Id</th>
                <th width="250px">Delivery Status</th><th width="250px">Cancel</th></tr>';
                while($result=mysqli_fetch_assoc($res)){
                if($result['Delivery']=="Canceled"){
                    echo '<tr align="center" height="60px"><td>'. $result['Order_Id'] . '</td><td>'. 
                    $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                    . '</td><td>' . $result['User_Id'] . '</td><td> '. 
                    '<span class="can">'.$result['Delivery'] .'<span></td>'.'</tr>';
                }
                else if($result['Delivery']!="Success" ){
                    echo '<tr align="center"><td>'. $result['Order_Id'] . '</td><td>'. 
                $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                . '</td><td>' . $result['User_Id'] . '</td><td class="nor1"> '. '<span class="nor">'. $result['Delivery'].'</span>'.
                '</td><td>
                <form action="cancel.php" method="POST">
                             <button type="submit" value="submit" class= "block1">
                                Cancel
                            </button>
                </form>
                </td>
                </tr>';
                }

                else{
                    echo '<tr align="center" height="60px"><td>'. $result['Order_Id'] . '</td><td>'. 
                    $result['Plant_Id'] . '</td><td>' . $result['Quantity'] . '</td><td>' . $result['Amount'] 
                    . '</td><td>' . $result['User_Id'] . '</td><td> '. 
                    '<span class="suc">'.$result['Delivery'] .'<span></td>'.'</tr>';
                }
                
            }
        }
            echo "</table>";
        echo '<br><br>
        <div class="div1">
        <span class="block"><a href="userOrders.php"><span 
        style="color:ghostwhite" >Shop Here</span></a></span>
        </div></h3>';
               
            
        ?>
        <br><br>
        </div>
        
    </div>
    
</body>
</html>