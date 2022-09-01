<?php

if (isset($_SESSION['estatus'])) {
    if ($_SESSION['typeof'] != 1) {
        header("location:../php/accessDenied.php");
    }
} else {
    header("location:../php/accessDenied.php");
}
