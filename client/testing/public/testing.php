<?php
$data = '$2y$10$u1EDRk8dYw8DGV9sj3w7kOmhjeIJYbVuccecHVAqDaiJDvP6hlQkG';
$pass = '123456789';
echo password_verify($pass, $data);