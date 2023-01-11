<?php
    session_start();
    unset($_SESSION['logged-user']);
    session_destroy();
    header("Location: ../index.php");
?>