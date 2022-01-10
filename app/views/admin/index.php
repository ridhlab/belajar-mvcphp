<div>
  <h1>Selamat datang di halaman Admin</h1>
  <h1> Halo <?= $data["nama"]; ?> umur kamu <?= $data["umur"]; ?> tahun</h1>
  
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
</div>
