 <!-- DataTables Example -->
  <div class="card shadow mb-4" style="max-height: 700; z-index: 1;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pegawai
        <a href="<?= base_url('Pegawai/tambahData');?>" class="btn btn-primary btn-sm float-right">
            + Tambah Data
        </a>
    </div>
        <?= $this->session->flashdata('tambah') ?>
        <?= $this->session->flashdata('hapus') ?>
        <?= $this->session->flashdata('ubah') ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-border shadow" id="dataTable" width="100%" cellspacing="0">
          <thead>
    <!-- <thead class="thead-light"> -->
        <tr style="text-align: center">
            <th scope="col">No</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">NIP</th>
            <th scope="col">Jabatan</th>
            <th scope="col" colspan="">Aksi</th>
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
                    <span title="Hapus" onclick="return confirm('Yakin akan dihapus?');"><?php echo anchor('pegawai/hapus/'. $pegawai['id_pegawai'], ' <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ');?>  
                    </span>
                    <span title="Edit"><?php echo anchor('pegawai/ubahData/'. $pegawai['id_pegawai'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>');?>
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
</div>
</div>
</div>
</div>
