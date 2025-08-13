<?php

require_once("../database/db.php");
require_once("../functions/auth.php");

$selectQuery = mysqli_query($connect, "SELECT * FROM departments");


if($authAdmin) {
    if (isset($_GET['delete'])) {

        //ASKED FOR UPDATING FIRST BECAUSE MYSQL PROTECT INTGERTIY

        $deleteQuery = "DELETE FROM departments WHERE id = " . $_GET['delete'];
        $deleteResult = mysqli_query($connect, $deleteQuery);
        if ($deleteResult) {
            header("location: /finalproject/departments/department.php");
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
    <h1 class="text-center fw-bold text-white text-uppercase">Department List</h1>
    <div class="container doctor-container">
        <div class="row justify-content-center animate__animated animate__fadeIn">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <table>
                    <thead class="text-uppercase">
                        <th>id</th>
                        <th>name</th>
                        <?php if (isset($_SESSION['name']) && $authAdmin) {?>
                            <th>action</th>
                        <?php }?>
                    </thead>
                    <tbody>
                        <?php foreach ($selectQuery as $item) { ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <?php if (isset($_SESSION['name']) && $authAdmin) {?>
                                    <td>
                                        <a href="/finalproject/departments/update.php?edit=<?php echo $item['id'] ?>" class="text-white link-hover fs-5"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="/finalproject/departments/department.php?delete=<?php echo $item['id'] ?>" class="text-danger mx-2 link-hover fs-5"><i class="fa-solid fa-trash-can"></i></a>
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