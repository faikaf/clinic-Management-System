<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Green Strip Example</title>
      <style>
          .top-strip {
              background-color: #00873E;
              width:100%;
              height:50px;
              display:flex;
              align-items:center;
              padding:0 20px;
              position:fixed;
              top: 0;
              left: 0;
          }

          .hospital-logo {
              height: 40px;
          }

          .menu-btn {
              width: 30px;
              height: 30px;
              margin-right: 20px;
              cursor: pointer;
              display: flex;
              flex-direction: column;
              justify-content: space-around;
          }

          .menu-btn span {
              width: 100%;
              height: 3px;
              background-color: white;
              border-radius: 2px;
              transition: all 0.3s ease;
          }

          .sidebar {
              height: 100%;
              width: 0;
              position: fixed;
              top: 50px;
              left: 0;
              background-color: #004d23;
              overflow-x: hidden;
              transition: 0.3s;
              padding-top: 20px;
          }

          .sidebar.active {
              width: 250px;
          }

          .sidebar a {
              padding: 15px 25px;
              text-decoration: none;
              font-size: 18px;
              color: white;
              display: block;
              white-space: nowrap;
              transition: 0.3s;
          }

          .sidebar a:hover {
              background-color: #00873E;
          }

          .sidebar a i {
              margin-right: 10px;
          }

          .main-content {
              margin-left: 0;
              padding: 20px;
              transition: margin-left 0.3s;
              margin-top: 50px;
          }

          .main-content.shifted {
              margin-left: 250px;
          }

          #contentFrame {
              width: 100%;
              height: calc(100vh - 70px);
              border: none;
          }
      </style>
  </head>
  <body>
      <div class="top-strip">
          <div class="menu-btn" onclick="toggleSidebar()">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="hospital-logo.png" alt="Hospital Logo" class="hospital-logo">
      </div>
          



      <div class="sidebar" id="sidebar">
          <a href="#"  onclick="loadhome()"><i class="fas fa-user-plus"></i>Home</a>
          <a href="#" onclick="loadPatientReg()"><i class="fas fa-user-plus"></i>Patient Registration</a>
          <a href="#" onclick="loadPatientdetail()"><i class="fas fa-user-plus"></i>Patient Drtails</a>
          <a href="#" onclick="loadappointment()"><i class="fas fa-calendar-check"></i>Appointment</a>
          <a href="#" onclick="loaddoctordetail()"><i class="fas fa-user-md"></i>Doctors</a>
          <a href="#" onclick="loadcontact()"><i class="fas fa-phone"></i>Contact</a>
          <a href="#" onclick="loadfeedback()"><i class="fas fa-comment"></i>Feedback</a>
          <a href="#" onclick="loadlogout()"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </div>

      <div class="main-content" id="mainContent">
          <iframe id="contentFrame" style="display: none;"></iframe>
      </div>

     


      <script>
            // Add this line to trigger on page load
            window.onload = function() {
            loadhome();
            }

          function toggleSidebar() {
              document.getElementById('sidebar').classList.toggle('active');
              document.getElementById('mainContent').classList.toggle('shifted');
          }

          function loadPatientReg() {
              const frame = document.getElementById('contentFrame');
              frame.src = 'patientregistration.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadhome() {
              const frame = document.getElementById('contentFrame');
              frame.src = 'page1.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadcontact() {
              const frame = document.getElementById('contentFrame');
              frame.src = 'contactpage.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadPatientdetail(){
              const frame = document.getElementById('contentFrame');
              frame.src = 'patientdetail.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loaddoctordetail(){
              const frame = document.getElementById('contentFrame');
              frame.src = 'doctordetail.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadappointment(){
              const frame = document.getElementById('contentFrame');
              frame.src = 'appointmentpage.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadfeedback(){
              const frame = document.getElementById('contentFrame');
              frame.src = 'feedback.php';
              frame.style.display = 'block';
              toggleSidebar();
          }
          function loadlogout() {
            window.location.href ='index.php';
          }

      </script>
      
      



  </body>
  </html>