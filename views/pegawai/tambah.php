 <div class="container-fluid" style="z-index: 99">
    <div class="card-header py-3">
        <a href="<?= base_url('pegawai'); ?>"><i class="fa fa-backspace mx-3 float-left my-0" title="Daftar Pegawai"></i></a>
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai
        
    </div>
	<hr>
	<br>

	<form action="<?= base_url(); ?>pegawai/prosesTambahData" method="POST" autocomplete="off" >
		<div class="ml-10">

		<input type="hidden" name="id_pasien" id="id_pasien">

        <div class="form-group row">
            <label for="nama_pegawai" class="col-sm-2 col-form-table my-2">Nama Pegawai</label>
            <div class="my-2">:</div>	
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="nip" class="col-sm-2 col-form-table my-2">NIP</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nip" name="nip" required>
	        </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-table my-2">Jabatan</label>
            <div class="my-2 mr-3">:</div>
            <select class="form-control col-sm-4" id="jabatan" name="jabatan" required>
                <option value="Owner">Owner</option>
                <option value="Manager">Manager</option>
                <option value="Terapis">Terapis</option>
                <option value="Customer Service">Customer Service</option>
            </select>
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