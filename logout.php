<?php 
setcookie("code", "", time() - (86400 * 30), "/");
setcookie("token", "", time() - (86400 * 30), "/");
session_start();
session_unset();
session_destroy();
header("location:./login");

