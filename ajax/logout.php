<?php

session_start();

session_destroy();

if (isset($_SESSION['logger'])) {
    session_destroy();
}

header("location:index.php");
exit;
?>
<a href="index.php"