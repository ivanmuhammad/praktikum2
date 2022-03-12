
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <h1>Belanja Online</h1>

<form method="post" action="form_belanja.php">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text1">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="nama" name="nama" value="" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Product</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="tv" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kulkas" id="produk_1" type="radio" class="custom-control-input" value="KULAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="msn_cuci" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="int" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary" value="proses">Submit</button>
    </div>
  </div>
</form>
<?php

  $proses = $_POST['proses'];
  $nama = $_POST['nama'];
  $tv = 4200000 ;
  $kulkas = 3100000 ; 
  $msn_cuci = 3800000 ;
  $pilih_produk =  $_POST["tv"] ["kulkas"] ["msn_cuci"] ;
  $jumlah = 
      echo '<br/>Proses : '.$proses;
      echo '<br/>Nama Customer : '.$nama;
      echo '<br/>Produk Pilihan : '.$pilih_produk;
      echo '<br/>Jumlah Beli : '.$jumlah;
      echo '<br/>Total Belanja : '.$jumlah;
  ?>
</div>
