<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        .button{
            background-color: aliceblue;
            padding-left: 10%;
            padding-top:2%;
            padding-bottom:2%;
        }
        .div1{
            padding-left: 10%;
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
        <a class="navbar-brand" href="chatwithBot.html"><span style="color:ghostwhite">Chat with bot</span></a>
        <a class="navbar-brand" href="Login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="#"><span style="color:ghostwhite">Place Orders</span></a>
    </nav>

    <div class="button">
            <h3  style="font-family:Gill Sans"><span style="color:Blue"> Enter Your User Id Here : </span></h3><br>
            <form action="Yorders.php" method="POST">
                <div style="font-size:20px" >User Id: </div><input type="text" name="User_Id" width="200%"> <br><br>
                <div style="font-size:20px" >Password: </div><input type="text" name="Password" width="200%"> <br>
                    <div class="div1">
                        <button type="login" value="login" class="block">Login Now</button>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>