<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="col-md-12">
  <div class="row">
    <div class="col-md-6">
    </div>
  </div>
</div>
  
  <table class="table table-striped">
    <tr><td colspan=9 align=center><h3><b>Data Bukti Pembayaran</b></h3></td></tr>
    <tr>
      <td>No</td>
  <!--     <td>Atas Nama</td> -->
      <td>Bukti Pembayaran</td>
      <td>Keterangan</td>
      <td>Aksi</td>
    </tr>
   <?php 
   $no = 1;
   foreach($data_buktipembayaran as $list_data) : ?>
    <tr><td><?php echo $no++;?></td>
      <td><?php echo $list_data -> gambar;?></td>
      <td><?php echo $list_data -> keterangan;?></td>
     <!--  <td><?php echo $list_data -> atasnama;?></td> -->
      <td><a href="<?php echo base_url('laporanpdf'); ?>"><button class="btn btn-warning">Cetak Tiket</button></a>
         <a href="<?php echo base_url('page/delete_data/'.$list_data -> id); ?>"><button class="btn btn-danger">Hapus</button></a></td></tr>
    <?php endforeach; ?>
  </table>
  
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

