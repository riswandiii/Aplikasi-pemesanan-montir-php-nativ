<?php

	include '../../db.php ';

	if(isset($_GET['id_montir'])){

		$delete_montir = mysqli_query($conn, "DELETE FROM tb_montir WHERE id_montir = '".$_GET['id_montir']."' ");
		echo '<script>window.location="montir.php"</script>';

	}

?>