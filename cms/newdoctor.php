
<!doctype html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name= "viewport" content = "width=device-width, initial-scale =1.0">
    
    <title>Doctor_REGISTRATION_PAGE</title>
<style>
        body {
            font-family: arial,sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background-color:white;
        }

        .box{
            width:80%;
            max-width:100%;
            background-color:white;
            margin:20px;
            padding:30px;
            box-shadow: 0px 0px 15px black;
            border-radius:8px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .box .hd{
            font-size:24px;
            font-weight:700;
            margin-bottom:20px;
            color: #45a049;
            text-align: center;
            text-transform: uppercase;
        }
        .subHDline{
            color: #00873E;
            border-bottom: 2px solid #00873E;
            padding-bottom: 5px;
            margin: 20px 0;
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
            width:20%;
            margin-right:5px;
            font-size:14px;
        }


        .box .form .inf .input
        {
            width:50%;
            font-size:12px;
            padding:8px 20x;
            border-radius:3px;
            border:1px solid black;
            height:25px;
        }

        input:focus{
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
            Doctor Registration Form
        </div>

        <div class="form">
        <h3 class="subHDline">Personal information</h3>
            <div class="form-grid">
            <div class="inf">
                  <label >Dpctor ID :</label>
                  <input type= "text" class="input" name="Idnum" required>
              </div>
              <div class="inf">
                  <label >First Name :</label>
                  <input type= "text" class="input" name="firstname" required>
              </div>

              <div class="inf">
                  <label >Last Name :</label>
                  <input type= "text" class="input" name="lastname" required>
              </div>
              <div class="inf">
                  <label >Specialization :</label>
                  <input type= "text" class="input" name="specialization" required>
              </div>
              
              <div class="inf">
                  <label >Phone Number :</label>
                  <input type= "text" class="input" name="phone2" maxlength="10" >
                </div>
                <div class="inf">
                    <label >DepartmentAlloted :</label>
                    <input type= "text" class="input" name="department" required>
                </div>
                
                <div class="inf">
                    <label >AvailabilitySchedule :</label>
                    <input type= "text" class="input" name="availabilitySchedule" required>
                </div>
                

        </div>

            <div class="inf">
                <input type= "submit" value = "Register" class="btn" name= "register">
            </div>


        </div>

        </form>
    </DIV>


    <div class= "error">
    <?php 
    include("connect.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['register'])) {

        $idnum  =$_POST['Idnum'];
        $fname  =$_POST['firstname'];
        $lname  =$_POST['lastname'];
        $spec   =$_POST['specialization'];
        $contact2=$_POST['phone2'];
        $dept   =$_POST['department'];
        $sch    =$_POST['availabilitySchedule'];


        //Check if Doctor already exist
        $checkQuery = "select * from doctors WHERE DoctorID = '$idnum'";
        $rv = mysqli_query($conne, $checkQuery);
        if (mysqli_num_rows($rv) > 0)
        {
            echo "This Doctor is already registered.";
        } 
        else 
        {
            $query = "insert into doctors (DoctorID, FirstName, LastName, Specialization, PhoneNumber, AvailabilitySchedule,DepartmentAlloted) values ('$idnum','$fname','$lname','$spec','$contact2','$sch','$dept')";
            
        $data=mysqli_query($conne,$query);


            if ($data) {
            
            echo "Doctor registered successfully";
                exit; // Ensure no further code executes
            } else {
                echo "Failed to create account: " . mysqli_error($conne);
            }
        }
        }

    ?>

    </div>



</body>


</html>



