<?php

require_once("../database/db.php");
require_once("../functions/auth.php");

$selectQuery = mysqli_query($connect, "SELECT * FROM courses");

if($authAdmin){
    if (isset($_GET['delete'])) {

        //ASKED FOR UPDATING FIRST BECAUSE MYSQL PROTECT INTGERTIY

        $deleteQueryStudent_Courses = mysqli_query($connect, "DELETE FROM student_courses WHERE id = " . $_GET['delete']);

        $deleteQuery = "DELETE FROM courses WHERE id = " . $_GET['delete'];
        $deleteResult = mysqli_query($connect, $deleteQuery);
        if ($deleteResult) {
            header("location: /finalproject/courses/course.php");
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
}

?>


<?php (!($authMember || $authAdmin || $authSubAdmin)) ? header("location: /finalproject/notfound.php") : '';?>


<?php include("../shared/opening.php") ?>






<style>
    body {
        overflow-y: auto !important;
    }
</style>



<?php include("../shared/opennav.php")?>

<section class="w-100 bg-section py-5">
    <h1 class="text-center fw-bold text-white text-uppercase">Course List</h1>
    <div class="container doctor-container">
        <div class="row justify-content-center animate__animated animate__fadeIn">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <table>
                    <thead class="text-uppercase">
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>hours</th>
                        <?php if (isset($_SESSION['name']) && $authAdmin) {?>
                            <th>action</th>
                        <?php }?>
                    </thead>
                    <tbody>
                        <?php foreach ($selectQuery as $item) { ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['price'] ?> $</td>
                                <td><?php echo $item['hours'] ?></td>
                                <?php if (isset($_SESSION['name']) && $authAdmin) {?>
                                    <td>
                                        <a href="/finalproject/courses/update.php?edit=<?php echo $item['id'] ?>" class="text-white link-hover fs-5"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="/finalproject/courses/course.php?delete=<?php echo $item['id'] ?>" class="text-danger mx-2 link-hover fs-5"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php if($authAdmin || $authSubAdmin) {?>
<div class="add ">
    <a href="./add.php" class="w-100 h-100 animate__animated animate__fadeIn"><i class="fa-solid fa-plus fs-4 text-white"></i></a>
</div>
<?php }?>
<?php include("../shared/closing.php") ?>