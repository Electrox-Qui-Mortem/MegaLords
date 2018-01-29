<!DOCTYPE html>
<html>

        <style>
            body {font-family: Arial;}
            * {box-sizing: border-box}
            /* Full-width input fields */
            input[id = "usernameLogin"], input[id = "passwordLogin"] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            input[id = "usernameSignUp"], input[id = "passwordSignUp"] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            /* Add a background color when the inputs get focus */
            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for all buttons */
            button[class = "signUpButton"] {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }
            button[class = "loginButton"] {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover {
                opacity:1;
            }
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: #474e5d; /* Black w/ opacity */
                padding-top: 60px;
            }
            /* Extra styles for the cancel button */
            .cancelSignUpbtn {
                padding: 14px 20px;
                background-color: #f44336;
                float: left;
                width: 50%;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                opacity: 0.9;
                
            }
            .cancelLoginbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336; 
                color: white;
                margin: 8px 0;
                border: none;
                cursor: pointer;
            }
            /* Float cancel and signup buttons and add an equal width */
            .signupbtn {
                float: left;
                width: 50%; 
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                opacity: 0.9;
            }

            /* Add padding to container elements */
            .container {
                padding: 16px;
            }   

            /* The Modal (background) */


            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
            width: 40%;
            border-radius: 50%;
            }
            /* Style the horizontal ruler */
            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
 
            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 35px;
                top: 15px;
                font-size: 40px;
                font-weight: bold;
                color: #f1f1f1;
            }

            .close:hover,
            .close:focus {
            color: #f44336;
            cursor: pointer;
            }

            /* Clear floats */
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }
            span.psw {
                float: right;
                padding-top: 16px;
            }
            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
                .cancelbtn, .signupbtn {
                    width: 100%;
                }
            }
        </style>
    <body>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class = "signUpButton">Sign Up</button>
<!---->
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class = "loginButton">Login</button>

        <div id="id02" class="modal">
  
  
            <form class="modal-content animate" name="form1" method="post" action="checklogin.php">      
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="/images/loginformimg.png" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name = "username" id = usernameLogin required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required id = "passwordLogin">
                    <label>
                        <input type="checkbox" checked="checked" name = "cookies"> Remember me
                    </label>
                    <button type="submit">Login</button>
      
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelLoginbtn loginButton">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <!---->
        <script>
            // Get the modal
            var modalLogin = document.getElementById('id01');
            var modalSignUp = document.getElementById('id02');
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modalLogin) {
                    modalLogin.style.display = "none";
                }
            }
            window.onclick = function(event) {
                if (event.target == modalSignUp) {
                    modalSignUp.style.display = "none";
                }
            }
        </script>
    </body>
</html>
