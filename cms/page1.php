<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            margin:0;
            padding: 0;
            background-color:white;
        }
        .box{
            max-width:800px;
            margin:50px auto;
            text-align:center;
            padding:20px;
        }
        .uphed{
            color:#2c3e50;
            font-size:2.5em;
            margin-bottom:20px;
        }
        .subtitle{
            color:#34495e;
            font-size:1.2em;
            margin-bottom:30px;
        }
        .btn{
            display:inline-block;
            padding:12px 24px;
            background-color:#00873e;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin:10px;
            transition:background-color 0.3s;
        }
        .btn:hover{
            background-color: #004d23;
        }
        .features{
            margin-top: 50px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1 class="uphed">
            Welcome to Our Clinic Management System 
        </h1>
        <p class="subhed">
            Providing efficient healthcare management solutions
        </p>
        
        <div >
            <a href="#" onclick="loadPatientReg()" class="btn">
                Patient Registration
            </a>
            <a href="#" onclick="loadappointment()" class="btn">
                Book Appointment
            </a>
            <a href="#" onclick="loaddoctordetail()" class="btn">
                Our Doctors
            </a>
        </div>

        <div class="features">
            <h2>Our Services:</h2>
            <ul>
                <li>Easy patient registration</li>
                <li>Online appointment booking</li>
                <li>Medical records management</li>
                <li>Expert healthcare Professionals</li>
                <li>24/7 Emergency services</li>
            </ul>
        </div>
    </div>


    <script>
        function loadPatientReg() {
            window.location.href = "patientregistration.php";
        }
        function loadappointment(){
            window.location.href = "appointmentpage.php";
        }
        function loaddoctordetail() {
            window.location.href = "doctordetail.php";
        }
    </script>
</body>
</html>
