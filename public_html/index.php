<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>MegaLords</title>
        <link rel="stylesheet" href="styles/main.css">
        <style>
            #fileToUpload {
                display:none;
            }
            #logout {
                all: initial;
                font-family: "Comic Sans MS", "Comic Sans", cursive;
                cursor: pointer;
            }
            #logout:hover{
                color: blue;
            }
        </style>
        <script src="script/main.js"></script>
    </head>
    <body>
        <div id="test" class = "topnav">
            <a class=active>Home</a>
            <a href=news.php>News</a>
            <a href=contact.php>Contact</a>
            <a href=about.php>About</a>
            <a href=buy.php>Buy</a>
            <?php
                if(isset($_COOKIE['username'])){
                    echo    "<a href=game.php>Play</a>";
                    echo    "<button onclick=" . "document.getElementById('id04').style.display='block'" . ">Profile</button>";

                }else{
                    echo "<button onclick=" . "document.getElementById('id01').style.display='block'" . ">Sign Up</button>";
                    echo "<button onclick=" . "document.getElementById('id02').style.display='block'" . "> Login</button>";
                }
                ?>
        </div>
        <div id="id01" class="modal" style = 'padding-top: 50px;'>
            <form id=signUpForm class="modal-content">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <p id ="errusra" class="err"></p>
                    <label><b>Username</b></label>
                    <input id="signUpUsername" type="text" placeholder="Enter Username" class = "profile" required>
                    <p id="erremaila" class="err"></p>
                    <label><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" id="signUpEmail" class = "profile" required>
                    <p id="errpswa" class="err"></p>
                    <label><b>Password</b></label>
                    <input id="signUpPassword"type="password" placeholder="Enter Password" class = "profile" required>
                    <p id="errrepswa" class="err"></p>
                    <label><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" id="passwordRepeat" class = "profile" required>
                    <label>
                        <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
                    </label>
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelSignUpbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="id02" class="modal" style = "padding-top: 50px;">
            <form id="loginform"class="modal-content animate">      
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="images/loginformimg.png" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <p id="loginerr" class = 'err'></p> 
                    <label><b>Username</b></label>
                    <input id="loginUsername"type="text" placeholder="Enter Username" class="profile" required>
                    <label><b>Password</b></label>
                    <input id="loginPassword"type="password" placeholder="Enter Password" class = "profile" required>
                    <label>
                        <input type="checkbox" checked="checked" name = "cookies"> Remember me
                    </label>
                </div>
                <div class="container" style="background-color:#f1f1f1; overflow:auto;">
                    <button type="submit"style="background-color: #4CAF50;
                                                color: white;
                                                padding: 14px 20px;
                                                margin: 8px 0;
                                                border: none;
                                                cursor: pointer;
                                                width: 100%;">Login</button>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelLoginbtn loginButton">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div id="id04" class="modal" style = "padding-top: 50px;">
            <form id="changeInfoForm"class = "modal-content animate">
                <div class="imgcontainer">
                    <?php
                        if(isset($_COOKIE['profilepic'])){
                            echo "<span onclick=" . '"document.getElementById(' . "'id04').style.display='none' " .  '" class="close" title="Close Modal">&times;</span>
                                <label for="fileToUpload">
                                    <img src="players/'. $_COOKIE['username']. '/' . $_COOKIE['profilepic'] . '" alt="Avatar" class="avatar" id="img">
                                </label>
                                <input type="file" name="fileToUpload" id="fileToUpload">';
                        }else{
                            echo "<span onclick=" . '"document.getElementById(' . "'id04').style.display='none' " .  '" class="close" title="Close Modal">&times;</span>
                                <label for="fileToUpload">
                                    <img src="images/loginformimg.png" alt="Avatar" class="avatar">
                                </label>
                                <input type="file" name="fileToUpload" id="fileToUpload">';
                        }
                    ?>
                </div>
                <div class="container">
                    <label>
                        <b>Username:</b> <input id=changeusername class="profile" name="username"value = <?php echo $_COOKIE['username'];?>>
                    </label>
                    <br>
                    <label>
                        <b>Email:</b> <input id=changeemail class="profile" name="email"value = <?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>>
                    </label>
                    <br>
                    <label>
                        <b>New Password:</b> <input id=changepassword type="password" name="new-password"class="profile">
                    </label>
                    <br>
                    <label>
                        <b>Current Password:</b><input id="changerepassword"type="password" name="password"class="profile" required>
                    </label>
                    <br>
                </div>
                <div class="container" style="background-color:#f1f1f1; overflow:auto;">
                    <input type="submit"style="background-color: #4CAF50;
                                                color: white;
                                                padding: 14px 20px;
                                                margin: 8px 0;
                                                border: none;
                                                cursor: pointer;
                                                width: 100%;" value="Change Profile Info"name="submit">
                    <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelLoginbtn loginButton">Cancel</button>
                    <span class="psw"><a id="logout"onclick="logout()">Logout</a></span>
                </div>
            </form>
        </div>
        <script src="profile.js"></script>
        <?php include 'selectimage.php'?>
        <h1>Welcome to MegaLords</h1>
        <p>MegaLords is a place where mortals can become gods, and fallen gods can become true gods once more. Becoming a god is a very difficult process, and cannot be explained. Contact me if you wish to become a god.
            <h4>Requirements</h4>
            <ul>
                <li>You must have beaten the game</li>
                <li>You must be a mortal or fallen god</li>
                <li>You must be weaker than a lower god</li>
                <li>You cannot be a mythical creature, but we are looking for mythical creatures</li>
            </ul>
            <h4>Instructions</h4>
            <ol>
                <li>Beat the game</li>
                <li>The Owner will immediately contact you, if not contact them</li>
                <li>The Owner will grant you goddhood</li>
            </ol>
        </p>
        <footer>
            <p>Posted by: Electrox</p>
            <p>Contact information: <a href="mailto:quimortemking@gmail.com">QuiMortemKing@gmail.com</a>.</p>
        </footer>
    </body>
</html>
