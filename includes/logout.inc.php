<?php 
    if(isset($_SESSION['valid_user'])){
        unset($_SESSION['valid_user']);
        echo "you are now logged out!";
    }

?>