<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Nursery App</title>
    <style>
        .sai{
            background-color:chartreuse;
        }
        .Search{
            width: 500px;
            height: 50px;
            border-radius: 20px;
        }
        /* .login{
            height: 300px;
            background-color: aliceblue;
        } */
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
        .login{
            padding-top:3%;
            padding-left: 3%;
            background-color: aliceblue;
            height: 300px;
        }
        .signUp{
            padding-top:3%;
            padding-left: 50%;
            background-color: aliceblue;
            height: 300px;
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
        .table1{
            padding-left : 5%;
            padding-top :3%;
        }
        .table2{
            padding-left : 35%;
            padding-top :3%;
        }
        .column{
            width:22.5%;
            float:left;
            cursor:pointer;
            margin-left:2%;
        }
        .row::after{
            
            content:"";
            display:table;
            clear:both;
        }
        .fori{
            padding-top:3%;
            background-color:beige;
        }
        .portFolio{
            background-color:blanchedalmond;
            height:300px;
        }
        .fotter{
            background-color:rgb(249, 243, 235);
            height:500px;
        }
        .contact{
            background-color:darkgray;
            color:ghostwhite
        }
        .contact1{
            padding-left: 10%;
        }
        .c{
            font-family: cursive;
            color:ghostwhite
        }
        .block1{
            background-color: #04AA6D;
            color: ghostwhite;
            font-size: 25px;
            width:100px;
            cursor: pointer;
        }
        .go{
            padding-left: 5%;
            padding-right: 5%;
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
            <td><h1 style="font-size:300%;color:ghostwhite" ><big>Green<span class="ur"> Bliss</span> Nursery</big></h1></td>
            <td>
            <form action="search.php" method="post">
                <input class="Search"  type="search" name="Requirements" placeholder="Enter Your Requirements">
                <button type="submit" value ="Search" class="block1">
                   <span class="go">Go </span>
                </button>
            </form>
            </td>
        </table>
    </nav>
    <nav class="navbar sticky-top navbar-light bg-dark link-text-white text-white" >
        <br>
        <a class="navbar-brand" href="signUp.html"><span style="color:ghostwhite">Sign Up</span></a>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="adminLogin.html"><span style="color:ghostwhite">Admin Login</span> </a>
        <a class="navbar-brand" href="login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="orders.php"><span style="color:ghostwhite">Place Orders</span></a>
        <a class="navbar-brand" href="page.php"><span style="color:ghostwhite">View Orders</span></a>

    </nav>
    <br>
    <div >
        <p class="imgH" align="center">
        <img src = "images/nur.webp" width="90%" height="90%;">
        </p>
    </div>
    <br>
    <div>
    <div class="login" >
        <h2>If you already have account then<br><br>Login Here</h2>
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
        <h2 style="padding-left:5%">If you don't have an account then<br></h2>
        <h2 style="padding-left:10%">Sign Up Here</h2>
        <div  class="table2">
            <form action ="signUp.html">
                <div>
                    <button type="Sign Up" value="sign Up" class="block">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
    <br>
    
    <h2 align="center">Best Sellers</h2>
    <br>
    <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/callalily.jpg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Calla lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                <br><br>
                    <img src="images/plants/chrysanthimum.jpg" width="90%" height="40%">
                    <br><br><br>
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Chrysanthimum</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/hibiscus.jpg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Hibiscus</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/hibiscus2.jpg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Hibiscus</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <br>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/hibiscus3.jpg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Hibiscus</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily1.jpg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/NevesChrysanthemum.jpg" width="90%" height="50%">
                    
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Neves Chrysanthemum</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily2.jpg" width="90%" height="30%">
                    <br><br>
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
    <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pink_lilies.jpg" width="90%" height="40%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Pink Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <br>
                <p align="center">
                    <img src="images/plants/pinkcallalily.jpg" width="90%" height="40%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Pink Calla Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinklily2.jpg" class="imgfig" >
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Pink Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori"><br><br><br>
                <p align="center" width="90%" height="30%">
                    <img src="images/plants/redlily.jpg" >
                </p><br><br><br>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Red Lily</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
    </div>
    </div><br><br></div>
    <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/rose.jpeg" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Rose Type-1</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center"><br>
                    <img src="images/plants/rose3.jpeg" width="90%" height="30%"><br><br><br>
                </p>
                <h1 align="center"style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Rose Type-2</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/rose1.webp" width="90%" height="30%">
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Rose Type-3</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        <div class="column">
            <div class="fori">
                <p align="center"><br><br>
                    <img src="images/plants/rose4.jpeg" width="90%" height="30%"><br><br><br>
                </p>
                <h1 align="center" style="padding-left:10%;font-size:150%;"><span style="font-family: Cambria;">Rose Type-4</span></h1>
                <h1 align="center" style="padding-left:10%;font-size:150%"><span style="font-family: Cambria;">Price: 249/-</span></h1>
                <br>
            </div>
            
        </div>
        

    </div>
    <br>
    <div class="portFolio">
        <div class="row">
            <div class="column">
                <pre align="center" style="padding-top:30%">
<span style="font-size:170%;font-family:Gill Sans;">Newly Plant<br></span><span style="font-size:100%;font-family:Gill Sans;">Opened new at<br> Sadar Jabalpur</span>
        
                </pre>

            </div>
            <div class="column">
                
                <pre align="center" style="padding-top:30%">
<span style="font-size:170%;font-family:Gill Sans;">Life Time Support</span><span style="font-size:100%;font-family:Gill Sans;"><br>We help you <br>grow your garden  <br>  for lifetime</span>
 </pre>

            </div><div class="column">
                <pre align="center" style="padding-top:30%">
<span style="font-size:170%;font-family:Gill Sans;">Free Delivery if amount<br>Greater than 500</span>
        
                </pre>

            </div><div class="column">
                <pre align="center" style="padding-top:30%">
<span style="font-size:170%;font-family:Gill Sans;">Secure Shipping</span><span style="font-size:100%;font-family:Gill Sans;"><br>Diligent care taken<br> to deliver healthy  plants</span>
        
                </pre>
        </div>
        
    </div>
    <br><br><br><br>
    <div class="contact">
        <br>
        <h1 align="center">CONTACT</h1>
            <p style="font-family:sans-serif;padding-left: 80px;font-size: 20px;">
                Contact us and we'll get back to you within 24 hours.
            </p>
            <pre class="c">
                <table style="margin-left:10%">
                    <tr>
                        <td><img src="images/mail.png" width="15px"></td>
                        <td>NurseryDbmsProject@gmail.com</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><img src="images/ph.png" width="15px"> </td>
                        <td>1234567890 (Only Whatsapp)</td>
                    </tr>
                </table>
                <br>
                
            </pre>
        
    </div>
</body>
</html>