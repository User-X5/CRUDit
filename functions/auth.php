


<?php
        function authAdmin () {
            if(isset($_SESSION['name'])) {
                if(($_SESSION['role'] == 'admin')) {
                    return true;
                }
            }
        }
        function authSubAdmin (){
            if(isset($_SESSION['name'])) {
                if(($_SESSION['role'] == 'subadmin')) {
                    return true;
                }
            }
        }
        function authMember (){
            if(isset($_SESSION['name'])) {
                if(($_SESSION['role'] == 'member')) {
                    return true;
                }
            }
        }
    $authAdmin = authAdmin();
    $authSubAdmin = authSubAdmin();
    $authMember = authMember();

    
    



?>