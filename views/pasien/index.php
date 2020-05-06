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
        <!--pesan kilat-->
        <?= $this->session->flashdata('tambah') ?>
        <?= $this->session->flashdata('hapus') ?>
        <?= $this->session->flashdata('ubah') ?>
       
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
            <th scope="col" colspan="">Aksi</th>
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
                <td onclick="return confirm('Yakin akan dihapus?');"><?php echo anchor('pasien/hapus/'. $pasien['id_pasien'], ' <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div> ');?>  
                </td>
                <td><?php echo anchor('pasien/ubahData/'. $pasien['id_pasien'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>');?>
                </td>
            </tr>
        <?php $i++;
        endforeach ?>
    </tbody>
</table>
</div>
</div>
</div>
