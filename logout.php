<?php
        session_start();
        if(isset($_SESSION['faclogin'])){
                unset($_SESSION['faclogin']);
                header('Location:faclogin.php');
        }
?>

