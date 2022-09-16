<?php
    if(isset($_SESSION["user"])){
        header("Location: admin/dashboard.php");
        exit;
    }
?>