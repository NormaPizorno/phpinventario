<?php
    session_start();
    $_SESSION['usuarios'] = null;
    unset($_SESSION['usuarios']);
    $url = "index.php";
    header("Location:".$url);
?>

