<?php
	include "include/config.php";
	if(isset($_GET['hapus']))
	{
		$kodefoto = $_GET["hapus"];
		mysqli_query($connection, "delete from fotodestinasi
		where fotodestinasiKODE = '$kodefoto'");
		echo "<script>alert('DATA BERHASIL DIHAPUS');
			document.location='dbfoto.php'</script>";
	}
?>
