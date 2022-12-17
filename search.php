<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
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
        .column{
            width: 35%;
            float:left;
            margin-left:2%;
        }
        .fori{
            padding-left:20%;
        }
        .row::after{
            
            content:"";
            display:table;
            clear:both;
        }
        .info{
            padding-top:10%;
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
            <td><h1 style="font-size:50px" ><big>Green<span class="ur"> Bliss</span> Nursery</big></h1></td>
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
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="YourOrders.php"><span style="color:ghostwhite">ViewOrders</span></a>
        <a class="navbar-brand" href="YourOrders.php"><span style="color:ghostwhite">Place Orders</span></a>
        <a class="navbar-brand" href="signOut.php"><span style="color:ghostwhite">Sign Out</span></a>
    </nav>
    <?php
    $search = $_POST['Requirements'];
    $Search = strtolower($search);
    echo '<h4 align="center" style="color:red;font-family:Lucida sans"><br>Your Results on '.$search.' are :</h4> ';
    if(strpos($Search, 'lily') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/callalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Calla lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is one of the type of Lily <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily1.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily2.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pink_lilies.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinkcallalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink Calla Lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink calla Lily <br>
                It is one of the type of Lily<br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinklily2.jpg" width="90%" height="10%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p><br><br><br>
                    <img src="images/plants/redlily.jpg" width="90%" height="30%" align="left"><br>
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Red Lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Red Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>';
    }
    else if(strpos($Search, 'red lily') !== false){
            echo '<br><br><div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/callalily.jpg" width="90%" height="30%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Calla lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is one of the type of Lily <br>
                    The flowers gives nice smell which you love it.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/lily1.jpg" width="90%" height="30%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Lily <br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/lily2.jpg" width="90%" height="30%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Lily <br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/pink_lilies.jpg" width="90%" height="30%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Pink Lily <br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/pinkcallalily.jpg" width="90%" height="30%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink Calla Lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Pink calla Lily <br>
                    It is one of the type of Lily<br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p align="center">
                        <img src="images/plants/pinklily2.jpg" width="90%" height="10%" align="left">
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Pink Lily <br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>
            <div class="row">
            <div class="column">
                <div class="fori">
                    <p><br><br><br>
                        <img src="images/plants/redlily.jpg" width="90%" height="30%" align="left"><br>
                    </p>
                    <br>
                </div>
                
            </div>
            <div class="column">
                <p class="info">
                <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Red Lily</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                    <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                    It is the Red Lily <br>
                    The flowers gives nice smell which you love it
                    It is One of the best flowers in our Nursery.<br>
                    </h1>
                </p>
                
            </div>
            </div>';


        }
    else if(strpos($Search, 'calla lily') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/callalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Calla lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is one of the type of Lily <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinkcallalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink Calla Lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink calla Lily <br>
                It is one of the type of Lily<br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        ';
    }

    else if(strpos($Search, 'crysantimum') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/chrysanthimum.jpg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Chrysanthimum</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is chrysanthimum <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/Neveschrysanthemum.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Neves chrysanthemum</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Neves chrysanthemum <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        ';
    }

    else if(strpos($Search, 'hibiscus') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/hibiscus.jpg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/hibiscus2.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/hibiscus3.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus </h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        ';
    }
    else if(strpos($Search, 'rose') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose1.webp" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose3.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>';
    }
    else if(strpos($Search, 'plant') !== false){
        echo '<br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/callalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Calla lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is one of the type of Lily <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily1.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/lily2.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pink_lilies.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinkcallalily.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink Calla Lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink calla Lily <br>
                It is one of the type of Lily<br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p align="center">
                    <img src="images/plants/pinklily2.jpg" width="90%" height="10%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Pink lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Pink Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p><br><br><br>
                    <img src="images/plants/redlily.jpg" width="90%" height="30%" align="left"><br>
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Red Lily</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is the Red Lily <br>
                The flowers gives nice smell which you love it
                It is One of the best flowers in our Nursery.<br>
                </h1>
            </p>
            
        </div>
        </div><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/chrysanthimum.jpg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Chrysanthimum</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is chrysanthimum <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/Neveschrysanthemum.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Neves chrysanthemum</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Neves chrysanthemum <br>
                The flowers gives nice smell which you love it.<br>
                </h1>
            </p>
            
        </div>
        </div><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/hibiscus.jpg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/hibiscus2.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <div class="row">
        <div class="column">
            <div class="fori">
                <p >
                    <img src="images/plants/hibiscus3.jpg" width="90%" height="30%" align="left">
                </p>
                <br>
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus </h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Hibiscus <br>
                The flowers gives nice smell which you love it.<br>
                All you know this plant is widely used in Homes.<br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose1.webp" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose3.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br><div class="row">
        <div class="column">
            <div class="fori">
                <p ><br><br><br>
                    <img src="images/plants/rose.jpeg" width="90%" height="30%" align="left">
                </p>
                
            </div>
            
        </div>
        <div class="column">
            <p class="info">
            <h1 style="padding-left:10%;font-size:150%;"><span style="color:blue;font-family:Cursive">Plant name:</span>Hibiscus</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Price :</span> Rs 249/-</h1>
                <h1 style="padding-left:10%;font-size:150%"><span style="color:blue;font-family:Cursive">Description :<br></span> 
                It is Rose <br>
                The flowers gives nice smell which you love it.<br>
                All you know this flower is used in proposing purposes <br>
                </h1>
            </p>
            
        </div>
        </div>
        <br>';  
    }
    else{
        echo '<p align="center" style="color:blue;font-size:150%;">These type of plants are not availiable in our Nursery<br>Sorry.......<br>Search for Other Plants.......</p>';
    }
?>
</body>
</html>