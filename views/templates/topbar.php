    <div class="wrapper">
        <!-- Navigation Bars -->
        <div class="top_navbar">
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
                            Selamat datang <?= $user['namaLengkap'] ?>
                        </span>  
                    </li>
                    |
                    <a class="mx-2" href="<?= base_url('login/logout');?>">logout</a>
                    
                    
                    <!-- <li><i class="fas fa-user"></i></a></li> -->
                </ul>
            </div>
        </div>

