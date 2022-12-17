<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html {
            scroll-behavior: smooth;
            font-family: Helvetica, sans-serif, Arial;
        }

        body {
            margin: 0 auto;
            background-color: #222;
        }
        .sai{
            background-color:chartreuse;
        }
        .Search{
            width: 500px;
            height: 50px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky navbar-light bg-dark text-success">
        <table>
            <td><h1 style="font-size:50px" ><big>N<span class="ur">UR</span>SERY <span class="app">APP</span></big></h1></td>
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
        <a class="navbar-brand" href="signUp.html"><span style="color:ghostwhite">Sign Up</span></a>
        <a class="navbar-brand" href="aboutUs.html"><span style="color:ghostwhite">About Us</span> </a>
        <a class="navbar-brand" href="chatwithBot.html"><span style="color:ghostwhite">Chat with bot</span></a>
        <a class="navbar-brand" href="login.html"><span style="color:ghostwhite">Login</span></a>
        <a class="navbar-brand" href="contactUs.html"><span style="color:ghostwhite">Contact Us</span></a>
        <a class="navbar-brand" href="YourOrders.php"><span style="color:ghostwhite">ViewOrders</span></a>
    </nav>
    
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: rgb(22, 48, 243);" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="Script/responses.js"></script>
<script src="Script/chat.js"></script>

</html>