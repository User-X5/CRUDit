<?php

require_once("../database/db.php");




if( isset($_SESSION['name']))
    { 
        header("location: /finalproject/index.php"); 
    }



if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $selectQuery = "SELECT users.name as user_name , users.password , roles.name as role_name ,users.id , roles.id , users.role_id 
    FROM users LEFT JOIN roles on users.role_id = roles.id
     HAVING user_name = '$name' and `password` = '$password'";

    $selectResult = mysqli_query($connect, $selectQuery);


    $count = mysqli_num_rows($selectResult);

    if ($count > 0) {
        $userData = mysqli_fetch_assoc($selectResult);
        $_SESSION['name'] = $userData['user_name'];
        $_SESSION['role'] = $userData['role_name'];

        header("location: /finalproject/index.php");
    }else {
        echo "
            
                <div class='container alert-container' '>
                    <div class='row alert-x animate__animated animate__lightSpeedInLeft' style='top:0 !important;>
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
                                    Username or Password is Wrong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            ";
    }
}else if (isset($_POST['register'])){
    header("location: /finalproject/auth/register.php");
}




    /*echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
?>



<?php include("../shared/opening.php") ?>


<div class="bg-section">
    <div class="container" >
        <h1 class="text-white text-uppercase fw-bold text-center mb-5 login-title">login page</h1>
        <div class="row justify-content-center text-white fw-bold">
            <div class="col-6 p-5 login-container" >
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                    <div class=" mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class=" mb-3 d-flex justify-content-evenly flex-wrap">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                    
                </form>
            </div>
        </div>
            <a href="/finalproject/index.php" class="btn btn-primary position-absolute end-0 bottom-0" style="border-top-left-radius: 10px;">To Home</a>
    </div>
</div>


<?php include("../shared/closing.php") ?>