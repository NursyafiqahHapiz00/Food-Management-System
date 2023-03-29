<?php

session_start();

session_destroy();

echo "<script>window.open('nurse_login.php','_self')</script>";


?>