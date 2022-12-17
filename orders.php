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
        .signUp{
            padding-top:3%;
            padding-left: 50%;
            background-color: aliceblue;
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
        .login{
            padding-top:3%;
            padding-left: 3%;
            background-color: aliceblue;
            height: 300px;
        }
        .Search{
            width: 500px;
            height: 50px;
            border-radius: 20px;
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
        <a class="navbar-brand" href="page.php"><span style="color:ghostwhite">ViewOrders</span></a>
        <a class="navbar-brand" href="login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="signOut.php"><span style="color:ghostwhite">Sign Out</span></a>
    </nav>

    <div class="login" >
        <h2>If You want to Place Orders You want to Login first<br><br>Login Here</h2>
        <br>
        <div  class="table1">
            <table>
                <td>
                    <form action ="login.html">
                        <div>
                            <button type="login" value="login" class="block">
                                Login
                            </button>
                        </div>
                    </form>
                </td>
                <td width="100px"></td>
                <td>
                    <form action="adminLogin.html">
                        <div>
                            <button type="login" value="login" class="block">
                                Admin Login
                            </button>
                        </div>
                    </form>
                </td>
            </table>
        </div>
    </div>

    <div class="signUp">
        <h2 style="padding-left:5%">If you are not Sign Up then<br></h2>
        <h2 style="padding-left:10%">Sign Up Here</h2>
        <div  class="table2">
            <br>
            <form action ="signUp.html">
                <div style="padding-left:20%"> 
                    <button type="Sign Up" value="sign Up" class="block">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
        <br><br>
    </div>
    <br>
    
</body>
</html>