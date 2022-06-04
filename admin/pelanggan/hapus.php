<?php

	include '../../db.php ';

	if(isset($_GET['id_pelanggan'])){

		$delete_pelanggan = mysqli_query($conn, "DELETE FROM tb_pelanggan WHERE id_pelanggan = '".$_GET['id_pelanggan']."' ");
		echo '<script>window.location="pelanggan.php"</script>';

	}

?>