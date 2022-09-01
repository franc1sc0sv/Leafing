<?php

if (isset($_SESSION['estatus'])) {
    if ($_SESSION['typeof'] != 1) {
        header("location:../../../error/access_denied.php");
    }
} else {
    header("location:../../../error/access_denied.php");
}
?>

<link rel="stylesheet" href="../../../error/access_denied.php"