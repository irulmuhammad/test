<h1>Halaman Form Pesanan</h1>

<form action="<?php echo base_url('page/aksi_form_pesanan'); ?>" method="post">
  
  <label>Nama</label>
  <input type="text" name="nama"> <br>
  <label>email</label>
  <input type="email" name="email"> <br>
  <label>No telepon</label>
  <input type="text" name="no_telepon"> <br>
  <label>paket wisata</label>
  <input type="text" name="paket_wisata"> <br>
  <label>jumlah orag</label>
  <input type="text" name="jumlah_org"> <br>
  <label>tanggal trip</label>
  <input type="text" name="tanggal_trip"> <br>
  <label>Lama trip</label>
  <input type="text" name="lama_trip"> <br>
  <label>catatan</label>
  <input type="text" name="catatan"> <br>
  <label>alamat</label>
  <input type="text" name="alamat"> <br>
  <label>atas nama</label>
  <input type="text" name="atasnama"> <br>
  <input type="submit" name="btnKirim" value="Pesan">


</form>