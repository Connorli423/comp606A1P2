<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["userid"]);
    // session_destroy();
    echo "<script>window.location='./index.php';</script>";
?>