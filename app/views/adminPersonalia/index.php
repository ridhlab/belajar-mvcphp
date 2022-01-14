<div class="container">
  <h1>Selamat datang di halaman Admin Personalia</h1>
  <h1> Halo <?= $data["nama"]; ?> umur kamu <?= $data["umur"]; ?> tahun</h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#formModal">
    Tambah data user
  </button>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Posisi</th>
        
      </tr>
    </thead>
    <tbody>
  <?php $no=1;?>
  <?php foreach ($data["dataUser"] as $element) :?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$element["nama"]?></td>
      <td><?=$element["level"]?></td>
    </tr>
  <?php endforeach?>
    
  </tbody>
</table>
<a href="<?=BASEURL?>/">kembali</a>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL?>/admin/tambah" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="masukkan nama">
          </div>
          <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <select class="form-select" aria-label="Default select example" name="position">
              <option value="admin barang">Admin barang</option>
              <option value="admin personalia">Admin personalia</option>
              <option value="kasir">Kasir</option>
            </select>
          </div>

          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
