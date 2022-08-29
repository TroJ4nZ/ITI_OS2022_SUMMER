<?php
    session_start();
    unset($_SESSION["name"]);
    header("Location: lab_5_login.php");
?>