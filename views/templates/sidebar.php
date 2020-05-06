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