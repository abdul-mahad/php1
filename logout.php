<?php
session_start();

unset($_SESSION["id"]);
unset($_SESSION["role"]);
unset($_SESSION["username"]);
unset($_SESSION["email"]);
header("location:index.php")

?>