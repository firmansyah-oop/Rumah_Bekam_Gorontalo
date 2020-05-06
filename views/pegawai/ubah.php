 <div class="container-fluid" style="z-index: 99">
    <div class="card-header py-3">
        <a href="<?= base_url('pasien'); ?>"><i class="fa fa-backspace mx-3 float-left my-0" title="Daftar Pasien"></i></a>
        <h6 class="m-0 font-weight-bold text-primary">Ubah Data Pegawai
        
    </div>
	<hr>

	<?php foreach ($pegawai as $pegawai){?>
	<form action="<?= base_url(); ?>pegawai/prosesUbahData" method="POST" autocomplete="off" >
		<div class="ml-10">

		<input type="hidden" class="form-control" id="id_pegawai" name="id_pegawai" required value="<?= $pegawai->id_pegawai ?>">

        <div class="form-group row">
            <label for="nama_pegawai" class="col-sm-2 col-form-table my-2">Nama Pegawai</label>
            <div class="my-2">:</div>	
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required value="<?= $pegawai->nama_pegawai ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nip" class="col-sm-2 col-form-table my-2">NIP</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
	            <input type="text" class="form-control" id="nip" name="nip" required value="<?= $pegawai->nip ?>">
	        </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-table my-2">Jabatan</label>
            <div class="my-2">:</div>
            <div class="col-sm-5">
                <select class="form-control col-sm-4" id="jabatan" name="jabatan" required value="<?= $pegawai->jabatan ?>">
                <option value="Manager">Manager</option>
                <option value="Terapis">Terapis</option>
                <option value="Costumer Service">Costumer Service</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-table my-2"></label>
            <div class="col-sm-5">
	            <button type="submit" class="btn btn-primary">Ubah</button>
	            <button type="reset" class="btn btn-danger">Batal</button>
	        </div>
        </div>
        </div>
	</form>
<?php } ?>
</div>