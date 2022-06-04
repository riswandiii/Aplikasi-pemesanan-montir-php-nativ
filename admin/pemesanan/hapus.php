<?php

	include '../../db.php ';

	if(isset($_GET['id_pemesanan'])){

		$delete_pelanggan = mysqli_query($conn, "DELETE FROM tb_pemesanan WHERE id_pemesanan = '".$_GET['id_pemesanan']."' ");
		echo '<script>window.location="pemesanan.php"</script>';

	}

?>