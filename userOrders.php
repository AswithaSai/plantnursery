<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Orders</title>
    <style>
        body{
            margin:0%;
            padding:0%;
        }
        .dropdown ul{
            list-style-type: none;
            overflow: hidden;
            margin:0%;
            padding-left:0;
            display:inline;
        }
        .dropdown ul li{
            float: right;
        }
        .dropdown ul li a{
            text-decoration:none;
            padding:30px;
            background-color:transparent;
        }
        .dropdown ul li a:hover{
            color:red;
            background-color:lightgreen;
        }
        .heading{
            text-align: center;
            font-size: 30px;
        }
        .Search{
            width: 500px;
            height: 50px;
            border-radius: 20px;
        }
        .orders{
            margin-left:5%;
            margin-right:5%;
            height:400px;
            background-color:lightgrey;
            padding-top:5%;
            
        }
        .intro{
            margin-top:0%;
            background-color: forestgreen;
            height:500px;
            padding-top:15%;
        }
        .input{
            height:50px;
            width:25%;
        }
        .block {
            display: block;
            border: none;
            background-color: #04AA6D;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
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
            <td>
            <form action="search.php" method="post">
                <input class="Search"  type="search" name="Requirements" placeholder="Enter Your Requirements">
                <button type="submit" value ="Search">
                    Search
                </button>
            </form>
            </td>
        </table>
    </nav>
    <nav class="navbar sticky-top navbar-light bg-dark link-text-white text-white" >
        <br>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="home.php"><span style="color:ghostwhite">Home</span></a>
        <a class="navbar-brand" href="YourOrders.php"><span style="color:ghostwhite">View Orders</span></a>
        <a class="navbar-brand" href="signOut.php"><span style="color:ghostwhite">Sign Out</span></a>
    </nav>
    <?php
    include('conn.php');
    session_start();
    $name = $_SESSION['USERID'];
    echo '<div style="background-color:aliceblue"><h2 >Nice To See You Here Mr . '.$name.'</h2>';
    echo '<h2 >You choose the nice one.</h2></div>';
    ?>
    <div class="intro">
        <br>
        <h5  style="font-size:30px;color:ghostwhite" align="center"> Hello Every one Here You can Order different type<br>
         of plants like Lily , hibiscus , Rose, etc.,</h5>
    </div><br>
    <div class="orders" align="center">
        <h3 style="font-family:Lucida Sans">Select The Plants You want to Order and its Quantity<br><br></h3>
        <form action="OrdersInsert.php" method="POST">
    <label for="Plant_name" style="font-size:20px">Plants: </label> 
        <select name = "Plant_Id" class="input">
            <option value='1' class="input">callalily</option>
            <option value='2' class="input">chysanthimum</option>
            <option value='3' class="input">hibiscus</option>
            <option value='4' class="input">lily</option>
            <option value='5' class="input">neves chrysanthemum</option>
            <option value='6' class="input">pink lily</option>
            <option value='7' class="input">pink callalily</option>
            <option value='8' class="input">red lily</option>
            <option value='9' class="input">Rose Type-1</option>
            <option value='10' class="input">Rose Type-2</option>
            <option value='11' class="input">Rose Type-3</option>
            <option value='12' class="input">Rose Type-4</option>
        </select><br><br>
        <label for="Quantity" style="font-size:20px">Quantity: </label> 
        <input type="number" name="Quanti" class="input" min="1" max="30">

        <br><br><br>
        <button type="submit" value="submit" class="block">
                Place Order
        </button>
        </form>
        <br><br><br><br>
    </div>

    
</body>
</html>