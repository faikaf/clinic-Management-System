# 🏥 Clinic Management System

A simple web-based Clinic Management System built using PHP and MySQL to manage patient records, doctor details, appointments, and feedback for clinics or small healthcare centers.

## 🚀 Features

- Patient registration and detail management
- Doctor detail management
- Appointment scheduling (based on included pages)
- Feedback system for users
- Contact and homepage interfaces

## 📁 Project Structure

clinic-Management-System-main/
└── cms/
├── index.php # Main landing page
├── connect.php # Database connection file
├── patientregistration.php # Patient registration form
├── patientdetail.php # Patient detail viewer
├── doctordetail.php # Doctor information page
├── feedback.php # Feedback form
├── contactpage.php # Contact interface
└── other supporting pages...


## 🛠️ Tech Stack

- **Frontend:** HTML, CSS (inline/embedded)
- **Backend:** PHP
- **Database:** MySQL

## 🧑‍💻 How to Run

1. **Clone the Repository**
   ```bash
   git clone https://github.com/faikaf/clinic-Management-System.git
2.Set Up the Environment

Install XAMPP or any PHP server with MySQL.

Place the cms/ folder inside the htdocs/ directory of XAMPP.

3.Start Services

Open XAMPP and start Apache and MySQL.

4.Import Database

Open phpMyAdmin in your browser (http://localhost/phpmyadmin)

Create a new database (e.g., clinic_db)

Import the .sql file (if provided) to initialize tables.

5Run the Application

Visit http://localhost/cms/index.php

✍️ Author
Faikaf Ahmad

📜 License
This project is open-source and available under the MIT License.
