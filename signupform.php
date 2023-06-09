<?php
?>
<html>
    <head>

    <link rel="stylesheet" href="signupform.css">
   
    </head>
<div id="signupform">
                <input type="button"  id="closesignup" value="x" style="margin-left:97%;cursor:pointer;">
                <p style="text-align: center;font-size:200%;margin-bottom: 3%;"><b>SIGNUP</b></p>
                <form>
                    <label>NAME</label><br>
                    <input type="text" id="username" placeholder="enter the username" required><br>
                    <label>EMAIl</label><br>
                    <input type="email" id="email" placeholder="enter email" required><br>
                    <label>PASSWORD</label><br>
                    <input type="password" id="password" placeholder="enter password" required><br>
                    <label>CONFIRM PASSWORD</label><br>
                    <input type="password" id="cpassword" placeholder="re-enter password" required><br>
                    <input type="submit" value="signup" id="signupuser">

                </form>
                <p>Already have an account? <button id="loginfromsignup">login</button></p>
                <p id="signupmessageshown"></p>
               
            </div>
            </html>