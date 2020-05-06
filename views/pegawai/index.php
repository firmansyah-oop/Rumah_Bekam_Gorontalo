 <!-- DataTables Example -->
  <div class="card shadow mb-4" style="max-height: 700; z-index: 1;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pegawai
        <a href="<?= base_url('Pegawai/tambahData');?>" class="btn btn-primary btn-sm float-right">
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
            <th scope="col">Nama Pegawai</th>
            <th scope="col">NIP</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($pegawai as $pegawai) : ?>
            <tr style="text-align: center">
                <th scope="row"><?= $i; ?></th>
                <td><?= $pegawai['nama_pegawai']; ?></td>
                <td><?= $pegawai['nip']; ?></td>
                <td><?= $pegawai['jabatan']; ?></td>
                <td>

                    <!-- data-(nama bebas) -->
                    <span>
                        <a href=" <?= base_url(); ?>pegawai/ubah/<?= $pegawai['id_pegawai']; ?>" class="btn-sm btn-warning btn-sm ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id_pegawai="<?= $pegawai['id_pegawai']; ?>">Ubah</a>
                    </span>
                    <span>
                        <a href=" <?= base_url(); ?>pegawai/hapus/<?= $pegawai['id_pegawai']; ?>" class="btn-sm btn-danger btn-sm ml-2" onclick="return confirm('Apakah Anda Akan Menghapus Data?');">Hapus</a>
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
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 999999999999999">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url(); ?>pegawai/tambah" method="POST" autocomplete="off">
                    <input type="hidden" name="id_pegawai" id="id_pegawai">
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                    </div>

                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan" required>
                            <option value="Owner">Owner</option>
                            <option value="Manager">Manager</option>
                            <option value="Terapis">Terapis</option>
                            <option value="Customer Service">Customer Service</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>