<div class="container">
  <?= form_open_multipart('siswa/tambah');?>
  <legend>Tambah Data Siswa</legend>
  <div class="mb-3">
    <label for="nis" class="form-label">Nis</label>
    <input type="text" class="form-control" id="nis" name="nis" style="width: 500px;">
    <div class="form-text text-danger"><?= form_error('Nis'); ?></div>
  </div>
  <div class="mb-3">
    <label for="formfile" class="form-label">Foto</label>
    <input class="form-control" type="file" id="formfile" name="image" style="width: 500px;" require>
    <div class="form-text text-danger"><?= form_error('image'); ?></div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" style="width: 500px;">
    <div class="form-text text-danger"><?= form_error('Nama'); ?></div>
  </div>
  <div class="mb-3">
    <label for="angkatan" class="form-label">Angkatan</label>
    <input type="text" class="form-control" id="angkatan" name="angkatan" style="width: 500px;">
    <div class="form-text text-danger"><?= form_error('Angkatan'); ?></div>
  </div>
  <div class="mb-3">
  <label for="jurusan" class="form-label">Jurusan</label>
  <select class="form-select" id="jurusan" name="jurusan" style="width: 500px;">
      <option selected">Pilih Jurusan</option>
  <?php foreach( $jurusan as $jur ) : ?>
    <option value="<?= $jur['Id']; ?>"><?= $jur['Jurusan']; ?></option>
  <?php endforeach; ?>
  </select>
  <div class="form-text text-danger"><?= form_error('Jurusan'); ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" style="width: 500px;">
    <div class="form-text text-danger"><?= form_error('Email'); ?></div>
  </div>
  <div class="mb-3">
    <label for="no_hp" class="form-label">No_hp</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" style="width: 500px;">
    <div class="form-text text-danger"><?= form_error('No_hp'); ?></div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" style="width: 500px;"></textarea>
    <div class="form-text text-danger"><?= form_error('Alamat'); ?></div>
  </div>
  <input type="submit" value="submit" class="btn btn-primary"></input>
  </form>
</div>