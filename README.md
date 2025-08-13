# CRUDit – Role-Based CRUD Web Application

CRUDit is a **full-stack role-based CRUD system** for managing students, doctors, courses, and users.  
It provides **three permission levels** to ensure security and operational efficiency:
- **Admin:** Full control (add, edit, delete) over all records.
- **Sub-admin:** Can add data but cannot modify or delete existing records.
- **User:** View-only access.

---

## 🚀 Features
- Role-based access control (Admin, Sub-admin, User)
- Secure authentication system
- Responsive design using Bootstrap
- Optimized MySQL queries for fast performance
- Easy to set up with XAMPP

---

## 🛠 Tech Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap  
- **Backend:** PHP (Core PHP)  
- **Database:** MySQL  

---

## 📦 Installation & Setup

Follow these steps to run CRUDit locally using **XAMPP**:

### 1. Download & Install XAMPP
[Download XAMPP](https://www.apachefriends.org/index.html) and install it on your system.

### 2. Clone or Download the Project
Place the extracted folder inside the `htdocs` directory of your XAMPP installation.  
Example:


### 3. Import the Database
- Open **phpMyAdmin** (`http://localhost/phpmyadmin/`)  
- Create a new database (e.g., `crud_it_db`)  
- Import the `.sql` file from the `sql` folder included in this project.

### 4. Configure Database Connection
- Open `db.php` (or equivalent) in the project.  
- Update the database name, username, and password as needed.  
  *(Default for XAMPP: `root` user with no password)*

### 5. Run the Project
- Start **Apache** and **MySQL** from the XAMPP Control Panel.  
- Visit the project in your browser

## 📄 License
This project is for educational purposes. You are free to modify and adapt it to your needs.
