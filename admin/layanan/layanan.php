<?php
	session_start();
    include '../../db.php';
	if($_SESSION['status_admin'] != true){
		echo '<script>window.location="../../login_admin.php"</script>';
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA LAYANAN</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container-fluid ">
      <div class="container">

      <div class="row mt-5 text-center">
          <div class="col-lg-12">
                <h3>DATA TABEL LAYANAN</h3>
          </div>
      </div>

      <div class="row mt-3 mb-4">
        <div class="col-lg-12">
            <a href="tambah.php" class="btn btn-primary btn-sm">Tambah Data Layanan</a>
            <a href="../dashboard.php" class="btn btn-danger btn-sm">Back</a>
        </div>
    </div>

      <div class="row mt-3">
          <div class="col-lg-12">
          <div class="table-responisve">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
							$no = 1;
							$layanan = mysqli_query($conn, "SELECT * FROM tb_layanan");
							if(mysqli_num_rows($layanan) > 0){
							while($row = mysqli_fetch_array($layanan)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['nama_layanan'] ?></td>
							<td>Rp. <?php echo number_format($row['harga']) ?></td>
							<td><?php echo $row['keterangan'] ?></td>
                            <td>
                                <a href="ubah.php?id_layanan=<?php echo $row['id_layanan']?>" class="btn btn-primary btn-sm">Edit</a> ||
                                <a href="hapus.php?id_layanan=<?php echo $row['id_layanan'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data layanan?')">Delete</a>
                            </td>
                            
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="8" class="text-danger">Belom Ada Data Mobil</td>
							</tr>

						<?php } ?>
					</tbody>
                </table>
            </div>
          </div>
      </div>

      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>