<?php

    require_once("../finalproject/database/db.php");



    
    $doctors = mysqli_query($connect,"SELECT doctors.id FROM doctors");
    $count_d = mysqli_num_rows($doctors);
    $Students = mysqli_query($connect,"SELECT students.id FROM students");
    $count_s = mysqli_num_rows($Students);
    $courses = mysqli_query($connect,"SELECT courses.id FROM courses");
    $count_c = mysqli_num_rows($courses);
    $departments = mysqli_query($connect,"SELECT departments.id FROM departments");
    $count_ds = mysqli_num_rows($departments);
    $employees = mysqli_query($connect,"SELECT employees.id FROM employees");
    $count_em = mysqli_num_rows($employees);
?>






<?php include("./shared/opening.php"); ?>  

<?php include("./shared/opennav.php")?>



<section class="w-100 bg-section py-5">
    <div class="container">
        <div class="row row-index justify-content-evenly animate__animated animate__fadeIn">
            <div class="left col-lg-6 col-md-6 col-sm-12 d-flex ">
                <p class="title-left my-gray">Create | Retreive | Update | Delete</p>
                <p class="details-left fs-1 fw-bold text-white">Editing All Data in DataBase <br><span>from the ground</span> up in record time.</p>
                <p class="info-left mb-5 my-gray">Do more faster than ever before with engineerd for you software that propets your data in DataBases</p>
                <div class="btn d-flex p-0 ">
                    <div class="modal fade" style="z-index: 5000;" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel">Results</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-uppercase fw-bold fs-3">
                                    <p style="color:black;">Our Result is</p>
                                    <p><span class="t1">Doctors: </span><?php echo $count_d?></p>
                                    <p><span class="t2">Students: </span><?php echo $count_s?></p>
                                    <p><span class="t3">Courses: </span><?php echo $count_c?></p>
                                    <p><span class="t4">Departments: </span><?php echo $count_ds?></p>
                                    <p><span class="t5">Employees: </span><?php echo $count_em?></p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Show Info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel2">INFO</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    All Copyright &copy; reserved to Mohamed Abdelnasseer This Website Created by him
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to Results</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Show Results</a>
                </div>
            </div>
            <div class="right col-lg-6 col-md-6 col-sm-12 ">
                <div class="img w-100 d-flex justify-content-center animate__animated animate__fadeInBottomLeft">
                    <img src="./images/rightx.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("./shared/closing.php") ?>