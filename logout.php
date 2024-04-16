<?php 

session_start();

if (!isset($_SESSION["akun-admin"]) && !isset($_SESSION["akun-user"])) {

    header("Location: login.php");

    exit;

} 



session_unset();

session_destroy();



?>

<script>

    alert('welcome back our guess!');

    location.href = 'login.php';

</script>