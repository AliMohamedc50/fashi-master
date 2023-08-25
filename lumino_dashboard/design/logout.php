<?php
session_start();
session_unset();
// echo "rrter";
session_destroy();
header('location:../login.php')
?>