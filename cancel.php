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
            height:500px;
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
        .div1{
            padding-top:2%;
            padding-left:40%;
            
        }
        .div1 a{
            text-decoration: none;
        }
        .block {
            display: block;
            border: none;
            padding-left:3%;
            padding-right:3%;
            padding-top:1%;
            padding-bottom:1%;
            background-color: #04AA6D;
            cursor: pointer;
            text-align: center;
        }
        .input{
            height:40px;
            width:20%;
        }
        .cancel{
            padding-top:5%;
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
        <a class="navbar-brand" href="chatwithBot.html"><span style="color:ghostwhite">Chat with bot</span></a>
        <a class="navbar-brand" href="Login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="#"><span style="color:ghostwhite">Place Orders</span></a>
    </nav>
    <div align="center" class="cancel">
        <h3>Enter Order Id to Cancel it .</h3><br>
        <form action="cancel1.php" method="POST">
            <input type="text" name="Order" class="input" placeholder="Order Id......">
            <br><br>
            <button type="submit" value="submit" class= "block">
                                Cancel
            </button>
         </form>
    </div>
</body>
</html>