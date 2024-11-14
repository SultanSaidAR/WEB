<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESTAURANT</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <style>

        .col-sm-19
        {
            background-color : blue;
        }
        .jumbotron {
            background-color :#E06666;
            color : aqua;
            font-family :'arial';
        }
    </style>
</head>

<?php 
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$koderestaurant = $_POST['inputrestaurant'];
		$namarestaurant = $_POST['inputnama'];
        $alamatrestaurant = $_POST['inputalamat'];
        $reviewrestaurant = $_POST['inputreview'];


		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into restaurant value ('$koderestaurant', '$namarestaurant','$alamatrestaurant', '$namafile', '$reviewrestaurant')");
			header("location:dbrestaurant.php");
		}

	}


?>


<body>
<div class="row1">
<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	
	<form method="POST" enctype="multipart/form-data">
		
        <br>
<div class="form-group row mb-2">
<br><br>
<div class="col-sm-8">
<input type="text" name="search" class="form-control" id="search" 
				value="<?php if(isset($POST['search'])) {echo $_POST['search'];} ?>"
				placeholder="Cari nama restaurant">
</div>
<input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
</div>
	</form>

</div>


<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Restaurant</h1>
			</div>
		</div>

		
	
	

	<table class="table table-dark table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode restaurant </th>
				<th>Nama restaurant</th>
                <th>alamat restaurant</th>
				<th>review restaurant</th>
                <th>foto restaurant</th>
				<th>edit</th>
				<th>hapus</th>
			</tr>			
		</thead>

		<tbody>
			<?php
			if(isset($_POST["kirim"])){
    $search=$_POST['search'];
    $query= mysqli_query($connection,"select restaurant.* from restaurant where restaurantNAMA like '%".$search."%'");
	
			}else $query = mysqli_query($connection, "select * from restaurant");
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{ ?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $row['restaurantKODE'];?></td>
					<td><?php echo $row['restaurantNAMA'];?></td>
                    <td><?php echo $row['restaurantALAMAT'];?></td>
                    <td><?php echo $row['restaurantREVIEW'];?></td>

					<td>
						<?php if(is_file("images/".$row['restaurantFOTO']))
						{ ?>
							<img src="images/<?php echo $row['restaurantFOTO']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td>
					<td>
						
					<a href="dbrestaurantedit.php?ubah=<?php echo $row["restaurantKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</td>
<td width="5px">
<a href="hapusrestaurant.php?hapus=<?php echo $row["restaurantKODE"]?>"
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
    </div> 
	<br><br><br>
	</div>

	<div class="col-sm-1"></div>

	
</div>


</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>