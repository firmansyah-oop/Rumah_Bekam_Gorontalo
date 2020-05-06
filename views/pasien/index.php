 <!-- DataTables Example -->
  <div class="card shadow mb-4" style="max-height: 700; z-index: 1;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien
        <a href="<?= base_url('Pasien/tambahData');?>" class="btn btn-primary btn-sm float-right">
            + Tambah Data
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?= $this->session->flashdata('success') ?>

        <table class="table table-border shadow" id="dataTable" width="100%" cellspacing="0">
          <thead>
    <!-- <thead class="thead-light"> -->
        <tr style="text-align: center">
            <th scope="col">No</th>
            <th scope="col">Tanggal Registrasi</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Umur</th>
            <th scope="col">No Telepon/Hp</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($pasien as $pasien) : ?>
            <tr style="text-align: center">
                <th scope="row"><?= $i; ?></th>
                <td><?= $pasien['tgl_regis_pasien']; ?></td>
                <td><?= $pasien['nama_pasien']; ?></td>
                <td><?= $pasien['nik']; ?></td>
                <td><?= $pasien['jk']; ?></td>
                <td><?= $pasien['umur']; ?></td>
                <td><?= $pasien['no_hp']; ?></td>
                <td><?= $pasien['pekerjaan']; ?></td>
                <td><?= $pasien['alamat']; ?></td>
                <td>

                    <!-- data-(nama bebas) -->
                    <span>
                        <a href=" <?= base_url(); ?>pasien/ubahData/<?= $pasien['id_pasien']; ?>" class="btn-sm btn-warning btn-sm ml-2">Ubah</a>
                    </span>
                    <span>
                        <a href=" <?= base_url(); ?>pasien/hapus/<?= $pasien['id_pasien']; ?>" class="btn-sm btn-danger btn-sm ml-2" onclick="return confirm('Apakah Anda Akan Menghapus Data?');">Hapus</a>
                    </span>
                </td>
            </tr>
        <?php $i++;
        endforeach ?>
    </tbody>
</table>
</div>
</div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 9999999999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> -->

                <!-- <form action="<?= base_url(); ?>pasien/tambah" method="POST" autocomplete="off" -->
                   <!--  <input type="hidden" name="id_pasien" id="id_pasien">
                    <div class="form-group">
                        <label for="tgl_regis_pasien">Tanggal Regis</label>
                        <input type="date" class="form-control" id="tgl_regis_pasien" name="tgl_regis_pasien" required>
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk" required>
                    </div>

                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur" required>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Telepon/Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div> -->