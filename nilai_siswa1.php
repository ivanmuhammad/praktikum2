<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   body {
     padding: 100px
   }
 </style>
</head>
 
<body>
 


  <h1>Form Nilai siswa</h1>
  <hr>
  <form class="form-horizontal" methode="post" action="nilai_siswa1.php">

  <div class="form-group row">

    <label class="col-4 col-form-label">Nama</label>

    <div class="col-8">
      <input type="text" name="nama" value="" size="30" class="form-control">
    </div>
  </div>
  <div class="form-group row">

    <label class="col-4 col-form-label">Mata Kuliah</label>

    <div class="col-8">

    <select name="matkul" class="custom-select">
      <option value="DDP">Dasar-Dasar Pemrograman</option>
      <option value="BDI">Basis Data I</option>
      <option value="WEBI">Pemrograman Web</option>
    </select>

    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Nilai UTS</label>
    <div class="col-8">
      <input name="nilai_uts" type="text" value="" size="6" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Nilai UAS</label>
    <div class="col-8">
      <input name="nilai_uas" type="text" value="" size="6" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
    <div class="col-8">
    <input name="nilai_tugas" type="text" value="" size="6" class="form-control">
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  </form>

  <?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nlai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    
        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nlai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
      
      
  ?>


</body>
</html>