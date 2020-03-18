
<!DOCTYPE html>
<html lang="en">
<head>
  <title>upload bukti</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>


<div class="container margin bg-grey">
  <br>
  <?php if (isset($_GET['infosalah'])): ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i>Kesalahan</h4>
      Ada Kesalahan Upload Bukti
      </div>
  <?php elseif(isset($_GET['infobenar'])): ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i>Berhasil</h4>
       Berhasil Upload Bukti
    </div>
  <?php endif ?>
  <h2>Upload Bukti Pembayaran</h2>
    <form class="form-horizontal" action="<?= base_url('page/aksi_upload_bukti'); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label class="control-label col-sm-2">Upload Bukti</label>
          <div class="col-sm-10">      
          <label for="gambar">Gambar</label>    
            <input type="file" name="userfile" required>
          </div>
        </div>
       <div class="form-group">
          <label class="control-label col-sm-2">Keterangan</label>
          <div class="col-sm-10">          
            <textarea class="form-control" name="keterangan" placeholder="Harap isi atas keterangan tiket yang telah dipesan" required></textarea>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </div>
</form>
</div>

</body>
</html>
