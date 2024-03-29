<?php //print_r($_SESSION); 
// date_default_timezone_set('America/El_Salvador');
// $time = time();
// echo date('y-m-d-G-i-s', $time)
$objconexionuser = new conection();
$id    = $_SESSION['dataID'];
$img_user = $objconexionuser->consultar("SELECT img_path FROM `user_data` WHERE id_user_data = $id");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Leafing</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- <link rel="icon" type="image/png" href="assets/AT-pro-logo.png" /> -->
    <link rel="stylesheet" type="text/css" href="../css/modal.css">
    <link rel="stylesheet" type="text/css" href="../css/crud.css">
    <link rel="stylesheet" type="text/css" href="../css/notification.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="overlay-scrollbar dark">
    <?php include_once('alerts.php') ?>
    <!-- navbar -->
    <div class="navbar">
        <!-- nav left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class=" nav-link nav-linkIcon ">
                    <img src="../assets/icons/menu.svg" alt="menuIcon" onclick="collapseSidebar()" class="MenuIcon">
                </a>
            </li>
            <li class="nav-item">
                <h1 class="leafing">Leafing</h1>
            </li>
        </ul>
        <!-- end nav left -->
        <!-- nav right -->
        <ul class="navbar-nav nav-right">
            <li class="nav-item avt-wrapper">
                <div class="avt dropdown">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $img_user[0]['img_path'] ?>" alt="User image">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-cog"></i>
                                </div>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="far fa-credit-card"></i>
                                </div>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-spinner"></i>
                                </div>
                                <span>Projects</span>
                            </a>
                        </li>

                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="./admin.php" class="sidebar-nav-link adminNav">
                    <div>
                        <img src="../assets/icons/admin.svg" alt="adminIcon">
                    </div>
                    <span>Admin</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./dashborad.php" class="sidebar-nav-link dashboardNav">
                    <div>
                        <img src="../assets/icons/dashboard.svg" alt="dashboard">
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./categories.php" class="sidebar-nav-link categoryNav">
                    <div>
                        <img src="../assets/icons/category.svg" alt="category">
                    </div>
                    <span>Categorias</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./places.php" class="sidebar-nav-link LuagaresNav">
                    <div>
                        <img src="../assets/icons/place.svg" alt="Lugares">
                    </div>
                    <span>Lugares</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./reports.php" class="sidebar-nav-link reportsNav">
                    <div>
                        <img src="../assets/icons/monitoring.svg" alt="email">
                    </div>
                    <span>Reportes</span>
                </a>
            </li>

            <li class="sidebar-nav-item userview">
                <a href="/LEAFING/Crea-J-2022/client/public/php/index.php" target="_blank" class="sidebar-nav-link ">
                    <div>
                        <img src="../assets/icons/user.svg" alt="email">
                    </div>
                    <span>Usuario</span>
                </a>
            </li>

            <li class="sidebar-nav-item logout">
                <a href="./close.php" class="sidebar-nav-link">
                    <div>
                        <img src="../assets/icons/logout.svg" alt="email">
                    </div>
                    <span>Salir</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->