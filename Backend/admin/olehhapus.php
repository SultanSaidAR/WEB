<?php
	include "include/config.php";
	if(isset($_GET['hapus']))
	{
		$kodeoleh = $_GET["hapus"];
		mysqli_query($connection, "delete from oleh
		where olehKODE = '$kodeoleh'");
		echo "<script>alert('DATA BERHASIL DIHAPUS');
			document.location='dboleh.php'</script>";
	}
?>