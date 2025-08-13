<?php
require_once("../database/db.php");


//get departments name
$selectQueryDo = "SELECT departments.id , departments.name FROM departments";
$selectResultDo = mysqli_query($connect, $selectQueryDo);

/*SELECT DATA AND DISPLAY IT*/
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $selectQuery = "SELECT * FROM employees WHERE id = $edit_id";
    $selectResult = mysqli_query($connect, $selectQuery);

    $count = mysqli_num_rows($selectResult);
    if ($count > 0) {
        $item = mysqli_fetch_assoc($selectResult);

        /*echo "<pre>";
                print_r($item);
            echo "</pre>";*/

        $name    =  $item['name'];
        $age     =  $item['age'];
        $salary =  $item['salary'];
        $department_id  =  $item['department_id'];
    }
}

/*UPDATE DATA*/
if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $department_id = $_POST['department_id'];


    $updateQuery = "UPDATE employees SET name= '$name' , age = $age , 
        salary = $salary, 
        department_id = $department_id
        WHERE id = $id";

    $updateResult = mysqli_query($connect, $updateQuery);
    if($updateResult) {
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
                                    Updated Succesfuly
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


<?php include("../shared/opening.php") ?>

<style>
    body {
        overflow: auto !important;
    }
</style>

<?php include("../shared/opennav.php")?>


<section class="w-100 bg-section py-5">
    <h1 class="text-center fw-bold text-white text-uppercase">Employee Update</h1>
    <div class="container doctor-container">
        <div class="row justify-content-evenly animate__animated animate__fadeIn">
            <div class="col-6">
                <form action="" method="POST" class="form-container text-white fw-bold text-uppercase">
                    <input type="hidden" name="id" value="<?php echo $edit_id ?>" class="form-control"">
                    <div class=" mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" required name="name" value="<?php echo $name ?>" class="form-control" id="name"">
                    </div>
                    <div class=" mb-3">
                        <label for="age" class="form-label">age</label>
                        <input type="number" required name="age" value="<?php echo $age ?>" class="form-control" id="age"">
                    </div>
                    <div class=" mb-3">
                        <label for="salary" class="form-label">salary</label>
                        <input type="number" required name="salary" value="<?php echo $salary ?>" class="form-control" id="age"">
                    </div>
                    
                    
            <div class=" mb-3">
                    <label for="department" class="form-label">department</label>
                    <select class="form-select" id="department" name="department_id">
                        <option selected disabled value="null">Select One</option>
                        <?php foreach ($selectResultDo as $department) { ?>
                            <option value="<?php echo $department['id'] ?>" <?php $department['id'] === $department_id ?  print('selected') : ''; ?>><?php echo $department['name'] ?></option>
                        <?php } ?>
                    </select>
            </div>



            <div class="btns-form d-flex justify-content-evenly ">
                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                <button class="btn btn-primary back-button"><a href="../employees/employee.php" class="w-100 h-100 text-white ">Back</a></button>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>


<?php include("../shared/closing.php") ?>