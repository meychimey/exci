<div class="container">
  <div class="card" style="width: 18rem;">
  <img src="<?= base_url('assets/foto/') . $siswa['Foto']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $siswa['Nis']; ?></h5>
    <p class="card-text"><?= $siswa['Nama']; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $siswa['Angkatan']; ?></li>
    <li class="list-group-item"><?= $siswa['Jurusan']; ?></li>
    <li class="list-group-item"><?= $siswa['Email']; ?></li>
    <li class="list-group-item"><?= $siswa['No_hp']; ?></li>
    <li class="list-group-item"><?= $siswa['Alamat']; ?></li>
  </ul>
  <div class="card-body">
    <a href="<?= base_url('siswa'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>