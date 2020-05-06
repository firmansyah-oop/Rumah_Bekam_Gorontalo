  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi Akun</h1>
              </div>
              <form action="<?= base_url('login/registrasi') ?>" method="POST" class="user">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="NamaLengkap" name="NamaLengkap" placeholder="Nama Lengkap" value="<?= set_value('NamaLengkap') ?>" autocomplete="off">
                  <?= form_error('nama','<small class="text-danger pd-7">'),'</small>' ?>

                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>"autocomplete="off">
                  <?= form_error('username','<small class="text-danger pd-7">'),'</small>' ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pd-7">'),'</small>' ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Konfirmasi Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Buat Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url();?>login">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>