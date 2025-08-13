<nav class="navbar navbar-light bg-nav">
    <div class="container animate__animated animate__fadeInDown">
        <a class="navbar-brand d-flex align-items-center justify-content-between " href="#">
            <h1 class="mx-3 my-gray"><span class="fw-bold text-white">Crud</span>It</h1>
        </a>
        <ul class="nav nav-pills justify-content-end align-items-center">


            <li class="nav-item">
                <a class="nav-link nav-home" aria-current="page" href="/finalproject/index.php">Home</a>
            </li>
            <?php if((isset($_SESSION['name']))) {?>
                <li class="nav-item">
                    <a class="nav-link nav-doctors" href="/finalproject/doctors/doctor.php">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-students" href="/finalproject/students/student.php">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-courses" href="/finalproject/courses/course.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-departments" href="/finalproject/departments/department.php">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-employees" href="/finalproject/employees/employee.php">Employees</a>
                </li>
            <?php }?>
            <?php if((isset($_SESSION['name'])) && $_SESSION['role'] === 'admin' ) {?>
                <li class="nav-item">
                    <a class="nav-link nav-users" href="/finalproject/users/user.php">users</a>
                </li>
            <?php }?>

            <?php if(!(isset($_SESSION['name']))) {?>
                <li class="nav-item">
                    <a class="btn btn-login mx-3" href="/finalproject/auth/login.php">login</a>
                </li>
            <?php }?>
            
            <?php if((isset($_SESSION['name']))) {?>
                <li class="nav-item mx-3">
                    <a class="btn btn-danger" href="/finalproject/auth/logout.php">logout</a>
                </li>
            <?php }?>
            

            
            <?php if(isset($_SESSION['name'])){?> 
                <li class="nav-item mx-3 ">
                    <div class="img profile-pic" style="width:50px; height:50px;">
                        <img src="/finalproject/uploads/<?php
                               
                                
                                $name = mysqli_real_escape_string($connect, $_SESSION['name']);
                                $selectQueryx = "SELECT * FROM users WHERE name = '$name'";
                                $selectResultx = mysqli_query($connect,$selectQueryx);
                                $userData = mysqli_fetch_assoc($selectResultx);
                                if( $userData['image_url'] != NULL && $userData['image_url'] != "" ) {
                                    print($userData['image_url']);
                                    $flag = true;
                                }else {
                                    echo 'default.png';
                                }
                           
                        ?>" alt=""  style="width:100%;">
                    </div>
                </li>
            <?php }?>
            
        </ul>
    </div>
</nav>