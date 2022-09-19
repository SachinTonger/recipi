<!DOCTYPE html>
<html>
<style>
    /*set border to the form*/
     
    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/
     
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
     
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
     
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
     
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
     
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
     
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/
     
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
     
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
     
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
    .form1{
        width:500px;
        margin: auto;
    }
</style>
 
<body>
 
    <h2>Login Form</h2>
    <div class="form1">
    <!--Step 1 : Adding HTML-->
    <form action=" " method="post">
        <div class="imgcontainer">
            <img src="image/avtar.png"
                 alt="Avatar" class="avatar">
        </div>
 
        <div class="container">
            <label><b>Email</b></label>
            <input type="email" placeholder="Enter Username" name="email" required>
 
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
 
            <button type="submit" name="login">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>
 
        <div class="container" style="background-color:#f1f1f1">
            <button type="button"  class="cancelbtn">Cancel</button>
            
        </div>
</div>
    </form>
 
</body>
 
</html>
<?php
include "config.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

$sql = ("SELECT * FROM tble WHERE email = '$email' AND password = '$password'");

if($sql){
    echo "ok";
}else{
    echo 'alert("Kindly Sign Up first")';  
}
}
?>