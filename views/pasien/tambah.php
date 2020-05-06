 <div class="container-fluid" style="z-index: 99">
    <div class="card-header py-3">
        <a href="<?= base_url('pasien'); ?>"><i class="fa fa-backspace mx-3 float-left my-0" title="Daftar Pasien"></i></a>
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pasien
        
    </div>
	<hr>

	<form action="<?= base_url(); ?>pasien/prosesTambahData" method="POST" autocomplete="off" >
		<div class="ml-10">

		<input type="hidden" name="id_pasien" id="id_pasien">

        <div class="form-group row">
            <label for="tgl_regis_pasien" class="col-sm-2 col-form-table my-2">Tanggal Registrasi</label>
            <div class="my-2">:</div>	
            <div class="col-sm-5">
	            <input type="date" class="form-control" id="tgl_regis_pasien" name="tgl_regis_pasien" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_pasien" class="col-sm-2 col-form-table my-2">Nama</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-table my-2">NIK</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nik" name="nik" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-table my-2">Jenis Kelamin</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <select class="form-control col-sm-4" id="jk" name="jk" required>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
	        </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-table my-2">Umur</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="umur" name="umur" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="no_hp" class="col-sm-2 col-form-table my-2">No Telp/Hp</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="pekerjaan" class="col-sm-2 col-form-table my-2">Pekerjaan</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-table my-2">Alamat</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="alamat" name="alamat" required>
	        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-table my-2"></label>
            <div class="col-sm-5">
	            <button type="submit" class="btn btn-primary">Tambah</button>
	            <button type="reset" class="btn btn-danger">Batal</button>
	        </div>
        </div>
        </div>
	</form>

</div>
