<?php
	include "include/config.php";
	if(isset($_GET['hapus']))
	{
		$kodeberita = $_GET["hapus"];
		mysqli_query($connection, "delete from kategoriberita
		where kategoriberitaKODE = '$kodeberita'");
		echo "<script>alert('DATA BERHASIL DIHAPUS');
			document.location='dbberita.php'</script>";
	}
?>