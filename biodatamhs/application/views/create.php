<div class="container">
  <h1 class="text-center">Form Biodata Mahasiswa</h1>
  <br>
<form method="post" action="<?= base_url('home/create') ?>">
  <div class="form-group">
    <label for="nrp_mhs">NRP</label>
    <input type="text" class="form-control" id="nrp_mhs" aria-describedby="emailHelp" placeholder="NRP">   
  </div>

  <div class="form-group">
    <label for="nama_mhs">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama_mhs" aria-describedby="emailHelp" placeholder="Nama Mahasiswa">   
  </div>

  <div class="form-group">
    <label for="alamat_mhs">Alamat</label>
    <input type="text" class="form-control" id="alamat_mhs" aria-describedby="emailHelp" placeholder="Alamat">
  </div>

  <div class="form-group">
    <label for="nohp_mhs">No HP</label>
    <input type="text" class="form-control" id="nohp_mhs" aria-describedby="emailHelp" placeholder="No HP">
  </div>

  <div class="form-group">
    <label for="jurusan_mhs">Jurusan</label>
    <input type="text" class="form-control" id="jurusan_mhs" aria-describedby="emailHelp" placeholder="Jurusan">
  </div>
  
  <button type="submit" class="btn btn-primary btn-block">Simpan</button>
</form>
</div>