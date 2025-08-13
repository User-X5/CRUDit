<?php

require_once("../database/db.php");
require_once("../functions/auth.php");

$doctorData = $_POST;
/*
    echo "<pre>";
        print_r($doctorData);
    echo "</pre>";
    */

if (isset($doctorData['btn'])) {
    $name = trim($doctorData['name']);
    $age = $doctorData['age'];
    $address = $doctorData['address'];
    $salary = $doctorData['salary'];
    
    

    $insertQuery = "INSERT INTO doctors VALUES(null, '$name' , $age ,'$address' , $salary)";
    $insertResult = mysqli_query($connect,$insertQuery);
   if($insertResult) {
        echo "
                <div class='container alert-container '>
                    <div class='row alert-x animate__animated animate__lightSpeedInLeft'>
                        <div class=' '>
                            <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                                <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                                </symbol>
                                <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                                </symbol>
                                <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                                </symbol>
                            </svg>

                            
                            <div class='alert alert-success d-flex align-items-center' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                                <div>
                                    Added Succesfuly
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            ";
        } else {
            echo "
            
                <div class='container alert-container '>
                    <div class='row alert-x animate__animated animate__lightSpeedInLeft'>
                        <div class=' '>
                            <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                                <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                                </symbol>
                                <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
                                </symbol>
                                <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                                </symbol>
                            </svg>

                            
                            <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                                <div>
                                    There is a problem try again !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            ";
        }
}



?>


<?php (!($authAdmin || $authSubAdmin)) ? header("location: /finalproject/notfound.php") : '' ;?>
<?php include("../shared/opening.php") ?>

<?php include("../shared/opennav.php")?>



<section class="w-100 bg-section py-5">
    <h1 class="text-center fw-bold text-white text-uppercase">Doctor Add</h1>
    <div class="container doctor-container">
        <div class="row justify-content-evenly animate__animated animate__fadeIn">
            <div class="col-6">
                <form action="" method="POST" class="form-container text-white fw-bold text-uppercase">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label>
                        <input type="text" required name="name" class="form-control" id="exampleInputEmail1"">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">age</label>
                        <input type="number" required name="age" class="form-control" id="exampleInputEmail1"">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">address</label>
                        <input type="text" required name="address" class="form-control" id="exampleInputEmail1"">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">salary</label>
                        <input type="text" required name="salary" class="form-control" id="exampleInputEmail1"">
                    </div>
                    
                    <div class=" btns-form d-flex justify-content-evenly ">
                        <button type=" submit" name="btn" class="btn btn-primary">Submit</button>
                        <button class="btn btn-primary back-button"><a href="../doctors/doctor.php" class="w-100 h-100 text-white ">Back</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include("../shared/closing.php") ?>