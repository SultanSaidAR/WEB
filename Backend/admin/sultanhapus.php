<?php
	include "include/config.php";
	if(isset($_GET['hapus']))
	{
		$kodehotel = $_GET["hapus"];
		mysqli_query($connection, "delete from sultan
		where hotel0151 = '$kodehotel'");
		echo "<script>alert('DATA BERHASIL DIHAPUS');
			document.location='dbhotel.php'</script>";
	}
?>
