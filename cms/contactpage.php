
<!doctype html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name= "viewport" content = "width=device-width, initial-scale =1.0">
    
    <title>contact</title>
<style>
        body {
            font-family: arial,sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 0;
            background-color:white;
        }

        .box{
            width:100%;
            max-width:auto;
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

        input:focus{
            border:1px solid rgba(236, 151, 23, 0.996) !important;
            outline: none;
        }

        .box .form .inf .btn{
            width:100%;
            border-radius:3px;
            padding:8px 10px;
            font-size:24px;
            background-color: #00873e;
            color:white;
            cursor: pointer;
            outline: none;
            border: none;
            
        }
        .box .form .inf .btn:hover{
            background:  #004d23;
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
            contact Us
        </div>

        <div class="form">
            <div class="inf">
                <label >Name :</label>
                <input type= "text" class="input" name="fname" required>
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
                <label >product Number :</label>
                <input type= "text" class="input" name="phone" maxlength="10" >
            </div>

            
            
            <div class="inf">
                <input type= "submit" value = "Register" class="btn" name= "register">
            </div>

            <div style="margin-top: 30px;">
                <h3>Direct Contact Information:</h3>
                <p>Email:<a href="mailto:faikftalib@gmail.com"><img src="img/Gmail_1.png" height="30px"></a></p>
                <p style="text-align: justify">whatsapp: <a href="https://wa.me/+918226845424" target="_blank" ><img  src="img/WhatsApp.png" alt="" height="30px"></a></p>
                <p>Working Hours: Monday - Friday, 9:00 AM - 5:00 PM
                    <br>
                    jay abme chowkdhi, vaghodia, vadodra, gujarat, india.
                </p>
            </div>
        </div>

        </form>
    </DIV>




</body>


</html>



