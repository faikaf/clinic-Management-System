<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Patients List</title>
    <style>
        body{
            font-family:arial, sans-serif;
            margin:20px;
        }
        .box{
            width:95%;
            margin:auto;
            background-color:white;
            padding:20px;
            box-shadow:0px 0px 15px black;
            border-radius:8px;
        }
        .header{
            color:#00873E;
            text-align:center;
            font-size:24px;
            font-weight:bold;
            margin-bottom:20px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }
        th, td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }
        th{
            background-color:#00873E;
            color:white;
        }
        .view-btn{
            background-color:#45a049;
            color:white;
            padding:5px 10px;
            text-decoration:none;
            border-radius:3px;
        }
        .view-btn:hover{
            background-color:#1d7221;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class=" header">Patient Records</div>
        
        <?php
        include("connect.php");
        
        $query = "SELECT * FROM patient_detail";
        $data= mysqli_query($conne, $query);
        
        if(mysqli_num_rows($data) > 0) {
            echo "<table>
                    <tr>
                        <th>ID Type</th>
                        <th>Patient ID</th>
                        <th>Name </th>
                        <th>Age</th>
                        <th>Gender </th>
                        <th> Phone</th>
                        <th> Blood Group</th>
                    </tr>";
            
            while($row = mysqli_fetch_assoc($data)) {
                echo "<tr>
                        <td>".$row['ID_Name']."</td>
                        <td>".$row['PatientID']."</td>
                        <td>".$row['First_Name']." ".$row['Last_Name']."</td>
                        <td>".$row['Age']."</td>
                        <td>".$row['Gender']."</td>
                        <td>".$row['Phone_no']."</td>
                        <td>".$row['Blood_Group']."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No patient records found.</p>";
        }
        ?>
    </div>
</body>
</html>
