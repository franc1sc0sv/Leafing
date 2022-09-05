<?php
session_start();
if (!isset($_SESSION['aña'])) {
    echo "
        <script>
            alert('Error');
            window . location . href = 'http://localhost/LEAFING/Crea-J-2022/client/public/php/public_account.php?desiree=1';
        </script>
        ";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        alert('Error');
        window.location.href = "http://localhost/LEAFING/Crea-J-2022/client/public/php/public_account.php?desiree=1";
    </script>
</body>

</html>