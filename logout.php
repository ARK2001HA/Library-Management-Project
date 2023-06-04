<?php
include('connection.php');
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logout!')</script>";
echo "<script>window.location.href='homepage.php'</script>";
?>