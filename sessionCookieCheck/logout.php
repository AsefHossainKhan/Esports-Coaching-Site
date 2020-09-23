<?php
    session_start();
    session_destroy();
    setcookie("userId","", time()-3600, '/');
    setcookie("username","", time()-3600, '/');
    setcookie("userType","", time()-3600, '/');
    header("Location: ../views/index.php");
?>
