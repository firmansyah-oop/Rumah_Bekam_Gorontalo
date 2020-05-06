  	<div class="container">

    	<!-- Outer Row -->
    	<div class="row justify-content-center">

      		<div class="col-lg-5">

        		<div class="card o-hidden border-0 shadow-lg my-5">
         			<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            			<div class="row">
              				<div class="col-lg">
                				<div class="p-5">
                  					<div class="text-center">
                    					<h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                  					</div>
                            <?= $this->session->flashdata('danger') ?>
                            <?= $this->session->flashdata('pesan') ?>

                  					<form action="<?= base_url('login') ?>" method="POST" class="user">
                    					<div class="form-group">
                      						<input type="text" class="form-control form-control-user" id="username"
                      						name="username"  placeholder="Username" autocomplete="off" value="<?= set_value('username') ?>">
                                  <?= form_error('username','<small class="text-danger pd-7">'),'</small>' ?>
                    					</div>

					                    <div class="form-group">
					                      	<input type="password" class="form-control form-control-user" id="password"
					                      	name="password" placeholder="Password">
                                  <?= form_error('password','<small class="text-danger pd-7">'),'</small>' ?>
					                    </div>
					                    <button type="submit" class="btn btn-primary btn-user btn-block">
					                      Login
					                    </button>
                                    </form>
                  					<hr>
					                <!-- <div class="text-center">
					                	<a class="small" href="forgot-password.html">Lupa Password?</a>
					                </div> -->
					                <div class="text-center">
					                	<a class="small" href="<?= base_url(); ?>login/registrasi">Belum punya akun? Daftar!</a>
					                </div>
                				</div>
              				</div>
            			</div>
         			</div>
        		</div>

      		</div>

    	</div>

  	</div>