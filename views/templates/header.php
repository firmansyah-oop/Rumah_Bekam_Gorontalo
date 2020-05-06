<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lokal style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- FontAwesome 5.13.0 -->
    <script src="<?= base_url(); ?>/assets/fontawesome-free-5.13.0/js/all.min.js"></script>
    <link href="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title><?= $judul; ?></title>

</head>

<body>

    <div class="wrapper">
        <!-- Navigation Bars -->
        <div class="top_navbar" style="z-index: 99999">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="top_menu">
                <div class="logo">
                    <span class="logo_img">
                        <img src="<?= base_url(); ?>/assets/icons/home.png" width="60" height="40" alt="">
                    </span>
                    <span class="logo_title">
                        <b>Rumah Bekam Gorontalo</b>
                    </span>

                </div>
                <ul class="my-2">
                    <!-- <li><i class="fas fa-search"></i></a></li> -->
                    
                    <li>
                        <span class="my-3 mx-2"> 
                            <i class="fas fa-user"></i>
                            Selamat datang <?= $user['NamaLengkap'] ?>
                        </span>  
                    </li>
                    |
                    <a class="mx-2" href="<?= base_url('login/logout');?>">logout</a>
                    
                    
                    <!-- <li><i class="fas fa-user"></i></a></li> -->
                </ul>
            </div>
        </div>

       
        <!-- Side Bars Navigation -->
        <div class="sidebar_menu">
            <ul>
                <li>
                    <a href="<?= base_url(); ?>index.php/home">
                        <span class="icon">
                            <i class="fa fa-home"></i></span>
                        <span class="list">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fa fa-user-tie" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Pegawai
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= base_url(); ?>index.php/pegawai">
                                    <span class="icon">
                                        <i class="fas fa-user-tie"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Pegawai
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fas fa-clipboard"></i>
                                    </span>
                                    <span class="list">
                                        Absen
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </span>
                                    <span class="list">
                                        Gaji
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fa fa-user-injured" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Pasien
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= base_url(); ?>index.php/pasien">
                                    <span class="icon">
                                        <i class="fa fa-user-injured" aria-hidden="true"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Pasien
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>index.php/rekam medik">
                                    <span class="icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </span>
                                    <span class="list">
                                        Rekam Medik
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="dropdown-btn">
                        <span class="icon">
                            <i class="fas fa-donate" aria-hidden="true"></i>
                        </span>
                        <span class="list">
                            Transaksi
                        </span>
                        <span class="drop">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-container">
                        <ul>
                            <li>
                                <a href="<?= base_url(); ?>index.php/barang">
                                    <span class="icon">
                                        <i class="fas fa-cubes"></i>
                                    </span>
                                    <span class="list">
                                        Daftar Barang
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fas fa-parachute-box"></i>
                                    </span>
                                    <span class="list">
                                        Pengadaan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </span>
                                    <span class="list">
                                        Penjualan
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </span>
                        <span class="list ml-1">
                            About
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('login/logout');?>">
                        <span class="icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </span>
                        <span class="list ml-1">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="container ml-0 mr-2 ">
            <div class="main_content">
                <!-- <div class="title-main">
                    <span class="icon">
                        <i class="<?= $data['icon']; ?>"></i>
                    </span>
                    <span class="list">
                        <?= $data['judul']; ?>
                    </span>
                    <hr> -->

                <!-- <div class="card mb-2" style="width: calc(100% - 0px);">
                    <div class="card-body">
                        <span class="icon">
                            <i class="<?= $data['icon']; ?>"></i>
                        </span>
                        <span class="list">
                            <?= $data['judul']; ?>
                        </span>
                    </div>
                </div> -->


                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav> -->