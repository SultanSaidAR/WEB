<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FOTO DESTINASI WISATA</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
</head>
 
<?php 
	include "include/config.php";
	if(isset($_POST['Edit']))
	{
		$kodefoto = $_POST['inputkode'];
		$namafoto = $_POST['inputnama'];
 
		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
 
		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
 
		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "png") or ($ekstensifile == "PNG")or ($ekstensifile == "jpg"))
		{
			move_uploaded_file($file_tmp , 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "update fotodestinasi set fotodestinasiNAMA='$namafoto', fotodestinasiFILE='$namafile'
				where fotodestinasiKODE='$kodefoto'");
			header("location:dbfoto.php");
		}
 
	}
 
	$datadestinasi = mysqli_query($connection, "select * from destinasi");
	//untuk menerima kiriman data dari data yang akan diubah
	$kodedestinasi = $_GET["ubah"];
	$editdestinasi = mysqli_query ($connection, "select * from fotodestinasi
		where fotodestinasiKODE = '$kodedestinasi'");
	$rowedit = mysqli_fetch_array($editdestinasi);
	$editkategori = mysqli_query($connection, "select * from fotodestinasi, destinasi
		where fotodestinasiKODE = '$kodedestinasi' 
		and fotodestinasi.fotodestinasiKODE = destinasi.destinasiKODE");
	$rowedit2 = mysqli_fetch_array($editkategori);
?>
 
 
<body>
 
<div class="row">
<div class="col-sm-1"></div>
 
<div class="col-sm-10">
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">EDIT Photo Destinasi Wisata</h1>
</div>
</div>
 
	<form method="POST" enctype="multipart/form-data">
<div class="form-group row">
<label for="kodefoto" class="col-sm-2 col-form-label">Kode Photo</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="kodefoto" name="inputkode" placeholder="Kode Photo" maxlength="4"
					value="<?php echo $rowedit ["fotodestinasiKODE"]?>"readonly>
</div>
</div>
<br>
<div class="form-group row">
<label for="namafoto" class="col-sm-2 col-form-label">Nama Photo</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="namafoto" name="inputnama" placeholder="Nama Photo"
					value="<?php echo $rowedit ["fotodestinasiNAMA"]?>">
</div>
</div>
<br>

 
		<div class="form-group row">
<label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
<div class="col-sm-10">
<input type="file" id="file" name="file">
<p class="help-block">Field ini digunakan untuk unggah file</p>
</div>
</div>
 
<div class="form-group row">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
		<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
 
		</div>
</div>







<br><br>
<!-- membuat form pencarian -->

<div class="form-group row mb-2">
<label for="search" class="col-sm-2">Nama Foto</label>
<div class="col-sm-8">
<input type="text" name="search1" class="form-control" id="search" 
				value="<?php if(isset($POST['search1'])) {echo $_POST['search1'];} ?>"
				placeholder="Cari nama foto">
</div>
<input type="submit" name="kirim1" class="col-sm-1 btn btn-primary" value="Search">
</div>
</form>
<!-- end form pencarian -->	
<br>
 
</div>
 
<div class="col-sm-1"></div>
</div>
 
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">Daftar Photo Destinasi Wisata</h1>
</div>
</div>
 
 
	<table class="table table-dark table-striped">
<thead class="thead-dark">
<tr>
<th>No</th>
<th>Kode Photo</th>
<th>Nama Photo Wisata</th>
<!--				<th>Kode Destinasi</th>  -->
<th>Photo Destinasi</th>
<!--				<th colspan="2" style="text-align: center">Action</th> -->
<th>Edit</th>
<th>Hapus</th>
</tr>			
</thead>
 
		<tbody>
<!-- menerima inputan dari form pencarian -->
<?php 
		if(isset($_POST['kirim1']))
		{
			$search1 = $_POST['search1'];
			$query = mysqli_query($connection,"select fotodestinasi.* from fotodestinasi
			where fotodestinasiNAMA like '%".$search1."%'");
		}
		else
		{
			$query = mysqli_query($connection, "select fotodestinasi.* from fotodestinasi");
		}
		//$query = mysqli_query($connection, "select * from fotodestinasi");
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{
				?>
<tr>
<td><?php echo $nomor;?></td>
<td><?php echo $row['fotodestinasiKODE'];?></td>
<td><?php echo $row['fotodestinasiNAMA'];?></td>
<!--					<td><?php// echo $row['destinasiKODE'];?></td>  -->
<td>
<?php if(is_file("images/".$row['fotodestinasiFILE']))
						{ ?>
<img src="images/<?php echo $row['fotodestinasiFILE']?>" width="80">
<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
</td>
 
	<td width="5px">
<a href="dbfotoedit.php?ubah=<?php echo $row["fotodestinasiKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</td>
<td width="5px">
<a href="fotodestinasihapus.php?hapus=<?php echo $row["fotodestinasiKODE"]?>"
		 class="btn btn-danger btn-sm" title="hapus">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
</td>
</tr>
<?php $nomor = $nomor + 1;?>
<?php }	?>
</tbody>
</table>
<br><br><br>
</div>
 
	<div class="col-sm-1"></div>
 
	
</div>

</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>