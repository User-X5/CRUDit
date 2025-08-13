CRUDit is a full-stack role-based CRUD system for managing students, doctors, courses, and users.
It provides three permission levels to ensure security and operational efficiency:

Admin: Full control (add, edit, delete) over all records.

Sub-admin: Can add data but cannot modify or delete existing records.

User: View-only access.

🚀 Features
Role-based access control (Admin, Sub-admin, User)

Secure authentication system

Responsive design using Bootstrap

Optimized MySQL queries for fast performance

Easy to set up with XAMPP

🛠 Tech Stack
Frontend: HTML, CSS, JavaScript, Bootstrap

Backend: PHP (Core PHP)

Database: MySQL

📦 Installation & Setup
Follow these steps to run CRUDit locally using XAMPP:

Download & Install XAMPP

Download XAMPP and install it on your system.

Clone or Download the Project

Place the extracted folder inside the htdocs directory of your XAMPP installation.
Example:

makefile
Copy
Edit
C:\xampp\htdocs\finalproject
Import the Database

Open phpMyAdmin (http://localhost/phpmyadmin/)

Create a new database 

Import the .sql file from the sql folder included in this project.

Configure Database Connection

Open the db.php file in the project.

Update the database name, username, and password as needed (default for XAMPP is root with no password).

Run the Project

Start Apache and MySQL from XAMPP Control Panel.

Visit the project in your browser:
