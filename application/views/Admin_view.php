<a href="<?php echo base_url('admin/tambah_admin');?>">Tambah</a><br>
<table border=1 width=700px>
  <tr><td colspan=5 align=center>Data Administrator</td></tr>
  <tr><td>No</td>
    <td>Username</td>
    <td>Nama</td>
    <td>Level</td>
    <td>Aksi</td></tr>
  <?php
  if ($row){
  $no=1;
     foreach($row as $r){
  ?>
  <tr><td><?php echo $no++;?></td>
    <td><?php echo $r->id_admin;?></td>
    <td><?php echo $r->nama_admin;?></td>
    <td><?php echo $r->username;?></td>
    <td><a href="#"><a href="<?php echo base_url('admin/ubah_admin/').$r->id_admin;?>">Ubah</a>
       <a href="<?php echo base_url('admin/hapus_admin/').$r->id_admin;?>">Hapus</a></td></tr>
  <?php } }?>
</table>
