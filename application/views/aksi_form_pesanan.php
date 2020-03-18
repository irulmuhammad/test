<h1>Halaman aksi Form Pesanan</h1>

<?php foreach($data as $data_terusan) : ?>

<form action="<?php echo base_url('page/aksi_form_pesanan'); ?>">
  
  <label>Nama</label>
  <input type="text" name="nama" value="<?php echo $data_terusan -> nama; ?>"> <br>
  <label>email</label>
  <input type="email" name="email" value="<?php echo $data_terusan -> email; ?>"> <br>
  <label>No telepon</label>
  <input type="text" name="no_telepon" value="<?php echo $data_terusan -> no_telepon; ?>"> <br>
  <label>paket wisata</label>
  <input type="text" name="paket_wisata" value="<?php echo $data_terusan -> paket_wisata; ?>"> <br>
  <label>jumlah orag</label>
  <input type="text" name="jumlah_org" value="<?php echo $data_terusan -> jumlah_org; ?>"> <br>
  <label>tanggal trip</label>
  <input type="text" name="tanggal_trip" value="<?php echo $data_terusan -> tanggal_trip; ?>"> <br>
  <label>Lama trip</label>
  <input type="text" name="lama_trip" value="<?php echo $data_terusan -> lama_trip; ?>"> <br>
  <label>catatan</label>
  <input type="text" name="catatan" value="<?php echo $data_terusan -> catatan; ?>"> <br>
  <label>alamat</label>
  <input type="text" name="alamat" value="<?php echo $data_terusan -> alamat; ?>"> <br>
  <label>atas nama</label>
  <input type="text" name="atasnama" value="<?php echo $data_terusan -> atasnama; ?>"> <br>
  <input type="submit" value="Pesan">

<?php endforeach; ?>

</form>