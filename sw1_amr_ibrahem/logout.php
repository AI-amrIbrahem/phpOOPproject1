<?php
session_start();
session_unset();
session_destroy();
header('Location:H-VISA/index1.php');
?>