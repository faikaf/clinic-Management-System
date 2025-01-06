
<!doctype html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name= "viewport" content = "width=device-width, initial-scale =1.0">
    
    <title>Patient_REGISTRATION_PAGE</title>
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
            width:50%;
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
            Patient Registration Form
        </div>

        <div class="form">
        <h3 class="subHDline">Personal information</h3>
            <div class="form-grid">
            <div class="inf">
                    <label >ID proof type </label>
                    <select class ="selectbox" name= "idtype" required>
                    <option value= "Select">SELECT</option>
                            <option value="Pan no:">PAN CARD</option>
                            <option value="Adhar no:">ADHAR CARD</option>
                            <option value="ABHA card">ABHA CARD</option>
                    </select>
                </div>
                <div class="inf">
                    <label >ID number :</label>
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
                    <label >Date of birth :</label>
                    <input type ="date" class="input" name="dtb"
                    
                    required>
                </div>

                <div class="inf">
                    <label >Age :</label>
                    <input type= "text" class="input" name="age" required>
                </div>
                

                <div class="inf">
                    <label >Gender </label>
                    <select class ="selectbox" name= "gender" required>
                        <option value="">Select</option>
                        <option value= "M">male</option>
                        <option value ="F">Female</option>
                    </select>
                </div>
                <div class="inf">
                    <label >marital Status </label>
                    <select class ="selectbox" name= "maritalstatus" required>
                    <option value="single">Single</option>
                            <option value ="married">Married</option>
                            <option value= "divorced">Divorced</option>
                            <option value=" widowed">Widowed</option>
                    </select>
                </div>

            </div>

            <h3 class="subHDline">Contact Information</h3>
            <div class="form-grid">
                <div class="inf">
                    <label >Phone Number :</label>
                    <input type= "text" class="input" name="phone1" maxlength="10" >
                </div>

                
                <div class="inf">
                    <label >Alternative Number :</label>
                    <input type= "text" class="input" name="phone2" maxlength="10" >
                </div>
                <div class="inf">
                    <label >Email Address :</label>
                    <input type ="email" class="input" name="email" required>
                </div>

                <div class="inf">
                    <label >Address :</label>
                    <textarea class="txar" name="address"></textarea>
                </div>

            </div>
            <h3 class="subHDline">Medical History</h3>
            
            <div class="form-grid">
                <div class="inf">
                    <label >Blood Group </label>
                    <select class ="selectbox" name= "bloodgroup" required>
                    <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="inf">
                    <label >weight (kg) :</label>
                    <input type= "number" class="input" name="weight" required>
                </div>

                <div class="inf">
                    <label >height (Cm) :</label>
                    <input type= "number" class="input" name="height" required>
                </div>

                <div class="inf">
                    <label >Occupation :</label>
                    <input type= "text" class="input" name="occupation" >
                </div>
                

            </div>
        <h3 class="subHDline">Existing medical condition</h3>
        <div class="form-grid">
                <div >
                    <input type="checkbox" name="pb[]" value="diabetes">
                    <label for="diabetes">Diabetes</label>
                </div>
                <div >
                    <input type="checkbox" name="pb[]" value="hypertension">
                    <label for="hypertension">Hypertension</label>
                </div>
                <div >
                    <input type="checkbox"  name="pb[]" value="heartDisease">
                    <label for="heartDisease">Heart Disease</label>
                </div>

                <div >
                    <input type="checkbox"  name="pb[]" value="asthma">
                    <label for="asthma">Asthma</label>
                </div>

                <div class="inf">
                    <label >Allergies</label>
                    <textarea class="txar" name="allergies" rows="3" placeholder="List any known allergies"></textarea>
                </div>

                <div class="inf">
                    <label >Surgical History</label>
                    <textarea class="txar" name="surgicalHistory" rows="3" placeholder="List any previous surgeries with dates"></textarea>
                </div>
                <div class="inf">
                    <label for="specialization">Department Alloted</label>
                    <select class="selectbox" name="specialization" id="specialization" required>
                        <option value="">Select Department</option>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output each specialization as an option
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' .($row['Specialization']) . '">' .($row['Specialization']) . '</option>';
                            }
                        } else {
                            echo '<option value="">No departments available</option>';
                        }
                        ?>
                    </select>
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

        $idtype  =$_POST['idtype'];
        $idnum  =$_POST['Idnum'];
        $fname  =$_POST['firstname'];
        $lname  =$_POST['lastname'];
        $dtb    =$_POST['dtb'];
        $age    =$_POST['age'];
        $gen    =$_POST['gender'];
        $mar    =$_POST['maritalstatus'];
        $contact1=$_POST['phone1'];
        $contact2=$_POST['phone2'];
        $email  =$_POST['email'];
        $address=$_POST['address'];
        $boold=$_POST['bloodgroup'];
        $weight=$_POST['weight'];
        $height=$_POST['height'];
        $occupation=$_POST['occupation'];
       /* $pb1=$_POST['pb1'];
        $epb2=$_POST['pb2'];
        $pb3=$_POST['pb3'];
        $pb4=$_POST['pb4'];
        $all_pb = $pb1 ." ". $pb2 . " " . $pb3 . " " . $pb4;
        */
        $emc = isset($_POST['pb']) ? implode(", ", $_POST['pb']) : '';
        $allergies=$_POST['allergies'];
        $surgicalHistory=$_POST['surgicalHistory'];

        

        


        //Check if patient already exist
        $checkQuery = "select * from patient_detail WHERE PatientID = '$idnum'";
        $rv = mysqli_query($conne, $checkQuery);
        if (mysqli_num_rows($rv) > 0)
        {
            echo "This patient is already registered.";
        } 
        else 
        {
            $query = "insert into patient_detail (ID_Name, PatientID, First_Name, Last_Name, DateOfBirth, Age, Gender,Marital_status, Phone_no,Alternative_no, Email_Address, Address, Blood_Group, Weight, Height, Occupation, Existing_Medical_record, Allergies, Surgical_history)
            values( '$idtype','$idnum','$fname','$lname','$dtb','$age','$gen','$mar','$contact1','$contact2','$email','$address','$boold','$weight','$height','$occupation','$emc','$allergies','$surgicalHistory')";
        $data=mysqli_query($conne,$query);


            if ($data) {
            
            echo "patient registered successfully";
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



