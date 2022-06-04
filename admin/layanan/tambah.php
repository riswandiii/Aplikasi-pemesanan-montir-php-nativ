<?php
					if(isset($_POST['submit'])){
                        include '../../db.php';

						$nama_layanan 		= $_POST['nama_layanan'];
						$harga 		= $_POST['harga'];
						$keterangan 		= $_POST['keterangan'];

                        $insert = mysqli_query($conn, "INSERT INTO tb_layanan VALUES (
                            '',
                            '".$nama_layanan."',
                            '".$harga."',
                            '".$keterangan."'
                            )");


							if($insert){
								echo '<script>alert("Tambah Data Layanan Berhasil!")</script>';
								echo '<script>window.location="layanan.php"</script>';
							}else{
								echo 'Gagal'.mysqli_error($conn);
							}
					}
	?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA LAYANAN</title>

    <style>
        #card {
            border-radius: 20px;
            box-shadow: 0px 3px 33px rgba(0, 0, 0, 0.8);
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container-fluid">
      <div class="container">

      <div class="row mt-5 text-center">
            <div class="col-lg-12">
            <h3>TAMBAH DATA LAYANAN</h3>
            </div>
      </div>

      <div class="row mt-4">
          <div class="col-lg-8 offset-lg-2">
            <div class="card p-5" id="card">
                <!-- Form Login Admin -->
                <form action="" method="post">
                <div class="mb-1">
                   <input type="text" id="nama_layanan" name="nama_layanan" placeholder="Nama Layanan" required class="form-control">
                </div>
                <div class="mb-1">
                   <input type="number" id="harga" name="harga" placeholder="Harga" required class="form-control">
                </div>
                <div class="mb-3">
                   <input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" required class="form-control">
                </div>
                <div>
                    <button class="btn btn-primary w-50" type="submit" name="submit">SUBMIT</button>
                </div>
                </form>
                <!-- End Form -->
            </div>
          </div>
      </div>

      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>