<?php
    session_start();
    if (! isset($_SESSION['logged-user'])) {
        header("Location: ../index.php");
    }
?>