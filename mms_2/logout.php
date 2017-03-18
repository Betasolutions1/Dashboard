<?php
session_start();
$exe=session_destroy();
header("location:index.php");
?>