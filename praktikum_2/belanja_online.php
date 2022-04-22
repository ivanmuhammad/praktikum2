<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<title>Belanja Online</title>
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h1 class="display-5">Belanja Online</h1>
            </div>
        </div>
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-3 order-lg-1 order-2">
                <form method="POST" class="border-4 border-dark" action="Belanja-online.php">
                    
                    <div class="mb-3 d-lg-flex">
                        <label for="exampleFormControlInput1" class="form-label me-4 align-self-center">Customer</label>
                        <input type="text" class="form-control" id="nama" name="customer" placeholder="Nama" value="" onkeyup="myFunction()" />
                    </div>
                    
                    <div class="mb-3 d-flex gap-2">
                        <label class="form-label me-2">Pilih Produk</label>
                        <input class="form-check-input" name="produk" type="radio" value="TV" />
                        <label class="form-check-label">TV</label>
                        <input class="form-check-input" name="produk" type="radio" value="Kulkas" />
                        <label class="form-check-label">Kulkas</label>
                        <input class="form-check-input" name="produk" type="radio" value="Mesin Cuci" />
                        <label class="form-check-label">Mesin Cuci</label>
                    </div>
                    
                    <div class="mb-3 d-lg-flex">
                        <label class="form-label align-self-center me-5">Jumlah</label>
                        <input type="number" class="form-control w-50" placeholder="Jumlah" name="jumlah" value="" />
                    </div>
                   
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                    </div>

                    <?php
                    $proses = $_POST["proses"];
                    $customer = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jumlah = $_POST["jumlah"];

                    $total;
                    if ($produk == "TV") {
                        $total = $jumlah * 4200000;
                    } elseif ($produk == "Kulkas") {
                        $total = $jumlah * 3100000;
                    } elseif ($produk == "Mesin Cuci") {
                        $total = $jumlah * 3800000;
                    } else {
                        $total;
                    }

                    $totalBelanja = number_format($total);

                    echo "
                        <div class='p-2 mt-4 mb-3 shadow-md'>
                            Nama Customer : {$customer}<br/>
                            Produk Pilihan : {$produk}<br/>
                            Jumlah Beli : {$jumlah}<br/>
                            Total Belanja : Rp.{$totalBelanja}<br/>
                        </div>
                        ";
                    ?>
                </form>

            </div>

            <div class="col-lg-4 mb-3 order-lg-2 order-1 shadow-md">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        Daftar Harga
                    </li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">
                        Sewaktu-waktu Harga Dapat Berubah
                    </li>
                </ul>
            </div>

        </div>
    </div>
<script>
function myFunction() {
    var x = document.getElementById("nama");
    x.value = x.value.toUpperCase();
}
</script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>