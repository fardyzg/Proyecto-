<?php
session_start();
session_destroy();

header('location:indep.php');
?>