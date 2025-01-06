<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page</title>
 <style>
    /* General reset */
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
        font-family:Arial,sans-serif;
    }

    /* Body styling */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height:100vh;
        background-color:white;
    }

    /* Login container styling */
    .box{
        width:300px;
        padding:20px;
        border-radius:8px;
        box-shadow: 0px 0px 15px black;
        background-color:white;
        text-align:center;
    }

    /* Form group styling */
    .usr{
        margin-bottom:15px;
        text-align:left;
    }

    /*Label styling */
    .usr label {
        font-size:14px;
        color:#333333;
    }

    /* Input styling */
    .usr input {
        width:100%;
        padding:10px;
        border:1px solid rgb(237,230,230);
        border-radius:4px;
        font-size:14px;
        color:#333333;
    }

    /* Button styling */
    .btn {
        width:100%;
        height: 40px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        border: none;
        border-radius:4px;
        cursor:pointer;
    }

    .btn:hover {
        background-color: #2d7131;
    }

    /* Register link styling */
    .registerlink{
        margin-top:15px;
        font-size:14px;
        color: black;
    }

    .registerlink a{
        color: #4CAF50;
        text-decoration: none;
    }

    .registerlink a:hover{
        text-decoration:underline;
    }

    </style>
</head>
<body>
<Form action ="#" method ="POST" autocmplete="off">
    <div class ="box">
        <h2>Login</h2>
        <form action ="#" method ="POST">
            <div class="usr">
                <label>Email </label>
                <input type ="text" name=" email" placeholder="Enter your email" required>
            </div>
            
            <div class="usr">
                <label>Password</label>
                <input type ="password" name =" password1" placeholder="Enter your password" required>
            </div>
            
            <button type ="submit" class ="btn" name="submit1">Login</button>


            <p class ="registerlink">Don’t have an account?<a href ="registration.php">Register here</a>
            </p>
        </form>
        
        
    </div>
</form>

</body>


<?php
     include("connect.php");

    if (isset($_POST['submit1'])){
        $usn=$_POST['email'];
        $pwd=$_POST['password1'];
        $query = "SELECT * FROM admin_user WHERE Email_Address = '$usn' AND  Password = '$pwd'";
        $data = mysqli_query($conne, $query);
        $total = mysqli_num_rows($data);
        if ($total == 1){
            header('Location: homepage.php');
            exit;
        }
        else{
            echo "Login Failed";

        
    }
    }
?>


</html>
