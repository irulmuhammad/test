
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</head>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>



  <?php if(isset($_POST['pesan']))
  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $paketwisata = $_POST['paketwisata'];
    $tgltrip = $_POST['tgltrip'];
    $jumlahorang = $_POST['jumlahorang'];
    $lamatrip = $_POST['lamatrip'];
    $catatan = $_POST['catatan'];
    $notelp = $_POST['nama'];

     $hargakeseluruhan = ($lamatrip*$paketwisata)*$jumlahorang;
  $namapaket ="";

  if ($paketwisata == 350000) {
    $namapaket ="Pulau Tidung";
  }elseif($paketwisata == 250000){
    $namapaket = "Pulau Pari";
  }elseif($paketwisata == 400000){
    $namapaket = "Pulau Semut";
  }elseif($paketwisata == 350000){
    $namapaket ="pulaupramuka";
  }
    } ?>
    

<div class="container margin bg-grey">
<div class="row">
  <div class="col-md-6">
    
  <h2>Pembayaran Yang Harus Dilakukan</h2>
  </div>
  <div class="col-md-12">
    
       <form class="form-horizontal" action="<?= base_url('page/ordertiket'); ?>" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2">Nama</label>
          <div class="col-sm-12">          
            <input type="text" class="form-control" name="nama" value="<?=$nama;?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="<?=$email?>" readonly>
          </div>
        </div>
       <div class="form-group">
          <label class="control-label col-sm-2">Jumlah Orang</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="jumlahorang" value="<?=$jumlahorang?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Paket Wisata</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="namapaket" value="<?=$namapaket?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Harga Keseluruhan</label>
          <div class="col-sm-10">          
        <input type="text" class="form-control" name="hargakeseluruhan" value="<?=$hargakeseluruhan?>" readonly>
          </div> 
         </div>
        <div class="form-group">
          <input type="hidden" name="lamatrip" value="<?=$lamatrip?>">
          <input type="hidden" name="notelp" value="<?=$notelp?>">
          <input type="hidden" name="catatan" value="<?=$catatan?>">
          <input type="hidden" name="tgltrip" value="<?=$tgltrip?>">
          <input type="hidden" name="alamat" value="<?=$alamat?>">
          <input type="hidden" name="paketwisata" value="<?=$paketwisata?>">
        </div> 
       <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="setuju">Setuju Dan Bayar</button>
          </div>
        </div>
</form>

  </div>
</div>
   
</div>


</body>
</html>
