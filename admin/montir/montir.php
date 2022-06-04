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
    <title>DATA MONTIR</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container-fluid ">
      <div class="container">

      <div class="row mt-5 text-center">
          <div class="col-lg-12">
                <h3>DATA TABEL MONTIR</h3>
          </div>
      </div>

      <div class="row mt-3 mb-4">
        <div class="col-lg-12">
            <a href="tambah.php" class="btn btn-primary btn-sm">Tambah Data Montir</a>
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
                            <th>Nama Montir</th>
                            <th>Alamat</th>
                            <th>No. Handphone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
							$no = 1;
							$montir = mysqli_query($conn, "SELECT * FROM tb_montir");
							if(mysqli_num_rows($montir) > 0){
							while($row = mysqli_fetch_array($montir)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php $row['alamat'] ?></td>
							<td><?php echo $row['no_handphone'] ?></td>
							<td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="ubah.php?id_montir=<?php echo $row['id_montir']?>" class="btn btn-primary btn-sm">Edit</a> ||
                                <a href="hapus.php?id_montir=<?php echo $row['id_montir'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data montir?')">Delete</a>
                            </td>
                            
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="8" class="text-danger">Belom Ada Data Montir</td>
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