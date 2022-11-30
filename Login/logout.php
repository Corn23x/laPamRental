<?php

session_start();
session_destroy();
unset($_SESSION["id"]);
unset($_SESSION["role"]);
header('Location: ../index.php');

?>