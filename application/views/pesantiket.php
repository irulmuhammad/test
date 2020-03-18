<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container ">
      <div class="col-md-12 col-xs-6">
  <h2>Pesan Tiket Liburan</h2>
    <form class="form-horizontal" action="<?= base_url('page/pembayaran'); ?>" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2">Nama</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Alamat</label>
          <div class="col-sm-10">          
            <textarea class="form-control" name="alamat" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">No Telepon</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="notelp" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Paket Wisata</label>
          <div class="col-sm-10">          
            <label class="radio-inline">
          <input type="radio" name="paketwisata" value="350000">  Pulau Tidung
          </label>
          <label class="radio-inline">
            <input type="radio" name="paketwisata" value="250000">  Pulau Pari
          </label>
          <label class="radio-inline">
            <input type="radio" name="paketwisata" value="400000">  Pulau Semut
          </label>
          <label class="radio-inline">
            <input type="radio" name="paketwisata" value="350000">  Pulau Pramuka
          </label>
        </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Tanggal Trip</label>
          <div class="col-sm-10">          
            <input type="date" class="form-control" name="tgltrip">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Jumlah Orang</label>
          <div class="col-sm-10">          
            <select name="jumlahorang" class="form-control" id="">
              <option value="" name="jumlahorang" selected="">Jumlah Orang</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Lama Trip</label>
          <div class="col-sm-10">          
            <label class="radio-inline">
          <input type="radio" name="lamatrip" value="1"> 2 Hari 1 Malam
          </label>
          <label class="radio-inline">
            <input type="radio" name="lamatrip" value="2"> 3 Hari 2 Malam
          </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Catatan</label>
          <div class="col-sm-10">          
            <textarea class="form-control" name="catatan"></textarea>
          </div>
        </div>
       <center>
       <button type="submit" name="pesan" class="btn btn-primary">Kirim</button>
    </div>
        </div>
</form>
</div>
</body>
</html>
        
      </div>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>