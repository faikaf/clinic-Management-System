<?php 
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $fname  =$_POST['firstname'];
    $lname  =$_POST['lastname'];
    $pass   =$_POST['pass'];
    $conpass =$_POST['cpass'];
    $gen    =$_POST['gender'];
    $dtb    =$_POST['dtb'];
    $email  =$_POST['email'];
    $contact=$_POST['phone'];
    $address=$_POST['address'];
    
    // Check if password match
    if ($pass !== $conpass) {
        $error_message = "Passwords do not match!";
    } else {
        
        // Check if email already exists using prepared statements
        $stmt = $conne->prepare("SELECT * FROM admin_user WHERE Email_Address = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            
            $error_message = "This email address is already registered. Please use a different email.";
        } else {
            // Insert user data using prepared statements
            $query = "insert into admin_user (First_Name, Last_Name, Password, Confirm_Password, Gender, DateOfBirth, Email_Address, Phone, Address)
              values('$fname','$lname','$pass','$conpass','$gen','$dtb','$email','$contact','$address')";
              $data = mysqli_query($conne,$query);

            if ($data) {
                header("Location: loginpage.php");
                exit;
            } else {
                $error_message = "Failed to create account: " . $conne->error;
            }
        }
        $stmt->close();
    }
}

// Display any error message
if (isset($error_message)) {
    echo "<div class='error'>$error_message</div>";
}
?>

<!doctype html>
  <html lang ="en">
  <head>
      <meta charset = "UTF-8">
      <meta name= "viewport" content = "width=device-width, initial-scale =1.0">
    
      <title>REGISTRATION_PAGE</title>
  <style>
          body {
              font-family: arial,sans-serif;
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              margin: 0;
              background-color:white;
          }

          .box{
              width:100%;
              max-width:350px;
              background-color:white;
              margin:20px;
              padding:30px;
              box-shadow: 0px 0px 15px black;
              border-radius:8px;
          }
          .box .hd{
              font-size:24px;
              font-weight:700;
              margin-bottom:20px;
              color: #45a049;
              text-align: center;
              text-transform: uppercase;
          }

          .box .form{
              width:100%;
          }
          .box .form .inf { 
              margin-bottom:20px;
              display: flex;
              align-items: center;

          }

          .box .form .inf label{
              width:60%;
              margin-right:10px;
              font-size:14px;
          }


          .box .form .inf .input
          {
              width:100%;
              font-size:12px;
              padding:8px 20x;
              border-radius:3px;
              border:1px solid black;
              height:25px;
          }
          .box .form .inf .txar{
              width:100%;
              font-size:12px;
              padding: 8px 20x;
              border-radius:3px;
              border:1px solid black;
          resize: none;
          height: 50px;
          }

          .box .form .inf .selectbox{
          border-radius:3px;
              width:100%;
              position:relative;
              height: 25px;
          }
          input:focus, .selectbox:focus, .txar:focus {
              border:1px solid rgba(236, 151, 23, 0.996) !important;
              outline: none;
          }
          .infterm {
              margin-top:20px;
              font-size:16px;
              color:#635a5a;
          }
          .linktext{
          text-decoration:none;
          opacity: 50%;
          color: black;
          }
          .linktext:focus{
              color: blue;
          }
          .linktext:hover{
              color: blue;
              opacity: 100%;
          }
          .box .form .inf .btn{
              width:100%;
              border-radius:3px;
              padding:8px 10px;
              font-size:24px;
              background-color: #45a049;
              color:white;
              cursor: pointer;
              outline: none;
              border: none;
            }

          .box .form .inf .btn:hover{
              background:  #1d7221;
          }
          @media(max-width:405px){
              .box .form .inf { 
              flex-direction: column;
              align-items: flex-start;
              }
          }


          .error {
              word-wrap: break-word; /* Forces text to wrap */
              white-space: normal; /* Prevents horizontal scrolling */
              max-width:100%; /* Restricts the width */
          }


  </style>


  </head>
  <body>
      <DIV class="box">
          <form action ="#" method="POST">
          <div class="hd">
              registration
          </div>

          <div class="form">
              <div class="inf">
                  <label >First Name :</label>
                  <input type= "text" class="input" name="firstname" required>
              </div>

              <div class="inf">
                  <label >Last Name :</label>
                  <input type= "text" class="input" name="lastname" required>
              </div>

             <div class="inf">
                  <label > Password :</label>
                  <input type="password" class="input" name="pass" required>
              </div>

              <div class="inf">
                  <label >Confirm password :</label>
                  <input type="password" class="input" name="cpass" required>
              </div>

              <div class="inf">
                  <label >Gender </label>
                  <select class ="selectbox" name= "gender" required>
                      <option value="">Select</option>
                      <option value="M">male</option>
                      <option value="F">Female</option>
                  </select>
              </div>

              <div class="inf">
                  <label >Date of birth :</label>
                  <input type ="date" class="input" name="dtb"
                  required>
              </div>

              <div class="inf">
                  <label >Email Address :</label>
                  <input type ="email" class="input" name="email"
                  required>
              </div>

              <div class="inf">
                  <label >Phone Number :</label>
                  <input type= "text" class="input" name="phone" maxlength="10" >
              </div>

              <div class="inf">
                  <label >Address :</label>
                  <textarea class="txar" name="address"></textarea>
              </div>

              <div class="infterm">
                <label class="check" required>
                  <input type="checkbox"><a href="google.com  " class="linktext">agree to terms & conditions</a>
                </label>
              </div>
            
              <div class="inf">
                  <input type= "submit" value = "Register" class="btn" name= "register">
              </div>

            </div>

          </form>
      </DIV>

      <div class= "error">

      </div>


    </body>
</html>
