<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESTAURANT</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

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
		$desrestaurant = $_POST['inputdes'];
        $reviewrestaurant = $_POST['inputreview'];


		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "png") or ($ekstensifile == "PNG")or ($ekstensifile == "jpg"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into restaurant value ('$koderestaurant', '$namarestaurant','$alamatrestaurant','$desrestaurant', '$namafile', '$reviewrestaurant')");
			header("location:dbrestaurant.php");
		}

	}

	$datakategori = mysqli_query($connection," select * from kategoriwisata");
?>


<body>
<div class="row1">
<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Restoran</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="koderestaurant" class="col-sm-2 col-form-label">Kode Restoran</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="koderestaurant" name="inputrestaurant" placeholder="Kode Restoran" maxlength="4" >
			</div>
		</div>

		<div class="form-group row">
			<label for="namarestaurant" class="col-sm-2 col-form-label">Nama Restoran</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namarestaurant" name="inputnama" placeholder="Nama Restoran">
			</div>
		</div>

        <div class="form-group row">
			<label for="alamatrestaurant" class="col-sm-2 col-form-label">Daerah Restoran</label>
			<div class="col-sm-10">
			<select id="alamatrestaurant" class="cek" name="inputalamat" >
            <option >Daerah ... </option>
			<option >ASAL ...</option>
            <option>Jakarta</option>
            <option>Bandung</option>
            <option>Surabaya</option>
            <option>Semarang</option>
            <option>Bekasi</option>
            <option>Tangerang</option>
            <option>Depok</option>
            <option>Bogor</option>
            <option>Cirebon</option>
            <option>Sukabumi</option>
            </select>
			</div>
		</div>
		<div class="form-group row">
			<label for="desretaurant" class="col-sm-2 col-form-label">Deskripsi Restoran</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="desretaurant" name="inputdes" placeholder="Deskripsi Restoran">
			</div>
		</div>

       

        <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Review Restoran</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputreview" id="gridRadios1" value="&#11088;" checked>
        <label class="form-check-label" for="gridRadios1">
        &#11088;
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputreview" id="gridRadios2" value="&#11088;&#11088;">
        <label class="form-check-label" for="gridRadios2">
        &#11088;&#11088;
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputreview" id="gridRadios3" value="&#11088;&#11088;&#11088;" >
        <label class="form-check-label" for="gridRadios3">
        &#11088;&#11088;&#11088;
        </label>
      </div>
    </div>
  </fieldset>

		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Foto Restoran</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

			</div>
			
		</div>
        <br>
<div class="form-group row mb-2">
<label for="search" class="col-sm-2">Cari Nama Restoran</label>
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
				<h1 class="display-4">Hasil Entri Data Restoran</h1>
			</div>
		</div>

		
	
		<div class="row">
    <?php
    if (isset($_POST["kirim"])) {
        $search = $_POST['search'];
        $query = mysqli_query($connection, "select restaurant.* from restaurant where restaurantNAMA like '%" . $search . "%'");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/<?php echo $row['restaurantFOTO'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Nama Restoran: <?php echo $row['restaurantNAMA']; ?></p>
                        <p class="card-text">Kode Restoran: <?php echo $row['restaurantKODE']; ?></p>
                        <p class="card-text">Daerah Restoran: <?php echo $row['restaurantALAMAT']; ?></p>
						<p class="card-text">Deskripsi Restoran: <?php echo $row['restaurantDES']; ?></p>
                        <p class="card-text">Review Restoran: <?php echo $row['restaurantREVIEW']; ?></p>
					
						<a href="dbrestaurantedit.php?ubah=<?php echo $row["restaurantKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>

<a href="hapusrestaurant.php?hapus=<?php echo $row["restaurantKODE"]?>"
		 class="btn btn-danger btn-sm" title="hapus">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Tampilkan semua restoran jika tidak ada hasil pencarian
        $query = mysqli_query($connection, "select * from restaurant");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/<?php echo $row['restaurantFOTO'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
					<p class="card-title">Nama Restoran: <?php echo $row['restaurantNAMA']; ?></p>
                        <p class="card-text">Kode Restoran: <?php echo $row['restaurantKODE']; ?></p>
                        <p class="card-text">Daerah Restoran: <?php echo $row['restaurantALAMAT']; ?></p>
						<p class="card-text">Deskripsi Restoran: <?php echo $row['restaurantDES']; ?></p>
                        <p class="card-text">Review Restoran: <?php echo $row['restaurantREVIEW']; ?></p>
						<a href="dbrestaurantedit.php?ubah=<?php echo $row["restaurantKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>

<a href="hapusrestaurant.php?hapus=<?php echo $row["restaurantKODE"]?>"
		 class="btn btn-danger btn-sm" title="hapus">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a>
						
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>




		
		

	<table class="table table-dark table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode restaurant </th>
				<th>Nama restaurant</th>
                <th>alamat restaurant</th>
				<th>deskripsi restaurant</th>
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
					<td><?php echo $row['restaurantDES'];?></td>
					
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
<script>
$(document).ready(function() {
    $('.cek').select2();
});
    </script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>