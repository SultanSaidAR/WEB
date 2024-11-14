<?php
	include "include/config.php";
	if(isset($_GET['hapus']))
	{
		$kodekategori = $_GET["hapus"];
		mysqli_query($connection, "delete from destinasi
		where destinasiKODE = '$kodekategori'");
		echo "<script>alert('DATA BERHASIL DIHAPUS');
			document.location='dashborddestinasi.php'</script>";
	}
?>