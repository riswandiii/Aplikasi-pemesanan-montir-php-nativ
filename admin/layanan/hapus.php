<?php

	include '../../db.php ';

	if(isset($_GET['id_layanan'])){

		$delete_layanan = mysqli_query($conn, "DELETE FROM tb_layanan WHERE id_layanan = '".$_GET['id_layanan']."' ");
		echo '<script>window.location="layanan.php"</script>';

	}

?>