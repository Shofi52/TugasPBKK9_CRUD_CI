<div class="container">
    <h1>Biodata Mahasiswa</h1>

    <a href="<?= base_url('home/create') ?>" class="btn btn-primary">Tambah</a>
    <br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>  
   <?php 
   foreach ($biodata_mhs as $item){ ?>
    <tr>
      <th scope="row"><?= $item->nrp ?></th>
      <td><?= $item->nama ?></td>
      <td><?= $item->alamat ?></td>
      <td><?= $item->no_hp ?></td>
      <td><?= $item->jurusan ?></td>
      <td>
          <a href="<?= base_url('home/update/' $item->id) ?>" class="btn btn-primary">Edit</a>
          <a href="<?= base_url('home/delete/' $item->id) ?>" class="btn btn-danger">Delete</a>  
        </td>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>