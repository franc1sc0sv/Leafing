<?php
session_start();
$lang = $_SESSION['lang'];
session_destroy();

session_start();
$_SESSION['lang'] = $lang;

header("location:../../../client/public/php/index.php");
