<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Absensi Peserta Didik</title>

    <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="assets/jquery/jquery-3.6.0.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <img src="assets/img/logo.png" width="80" alt=""> &nbsp;
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">SMKN 1 Jakarta</a>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item active">
                <a href="dashboard.php">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pages</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Table Siswa
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="ksXII.php">
                            Kelas XII
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="ksXI.php">
                            Kelas XI
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="ksX.php">
                            Kelas X
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                    Rekap Absensi
                </a>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-calendar-event-line sidebar-menu-item-icon"></i>
                    Jadwal Pelajaran
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="jpXII.php">
                            Kelas XII
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="jpXI.php">
                            Kelas XI
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="jpX.php">
                            Kelas X
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">More</li>
            <li class="sidebar-menu-item">
                <a href="#">
                    <i class="ri-equalizer-line sidebar-menu-item-icon"></i>
                    Pengaturan
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="#">
                    <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->
