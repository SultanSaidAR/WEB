<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>destinasi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        .jumbotron {
            background-color : #2596be;
            color : aqua;
            font-family :'arial';
        }
        .card-body {
            background-color : #C69774;
            border-radius : 10px;
            color :white;
        }
        .card {
            border-radius : 10px;
        }
        .cek{
            length:100px;
        }
    </style>
</head>

<?php 
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
        $sultansaidID = $_POST['idsultansaid'];
        $sultansaidKOTA = $_POST['kotasultansaid'];
        $destinasiKODE = $_POST['kodedestinasi'];

			mysqli_query($connection, "insert into sultansaid value ('$sultansaidID', '$sultansaidKOTA','$destinasiKODE')");

		
	}
    $datadestinasi = mysqli_query($connection," select * from destinasi");
?>


<body>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <h1>Input Kota</h1>

        <form method="POST" enctype="multipart/form-data" class="row g-3">

        <div class="col-md-6">
            <label for="kodeDestinasi" class="form-label">ID</label>
            <input type="text" class="form-control" id="kodeDestinasi" name="idsultansaid" placeholder="ID" maxlength="4">
        </div>

        <div class="col-md-6">
            <label for="namaDestinasi" class="form-label">kota</label>
            <input type="text" class="form-control" id="namaDestinasi" name="kotasultansaid" placeholder="Nama Kota">
        </div>

        <div class="col-md-4">
 

			<label for="kodekategori" class="form-label">Destinasi wisata</label>

			<select class="form-control" id="kodekategori" name="kodedestinasi">
				<option>Destinasi Wisata</option>
				<?php while($row = mysqli_fetch_array($datadestinasi))
				{ ?>
					<option value="<?php echo $row["destinasiKODE"]?>">
					<?php echo $row["destinasiKODE"]?>
					<?php echo $row["destinasiNAMA"]?>
					</option>
				<?php } ?>
			</select>
			</div>
        
                <div class="col-md-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
                        <input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
                    </div>
                </div>

            <div class="col-md-6">
                <input type="text"  name="search" class="form-control" id="search" value="<?php if(isset($POST['search'])) {echo $_POST['search'];} ?>"
                    placeholder="Cari nama Kota">
            </div>
            <div class="col-md-6">
                <input type="submit" name="kirim" class="btn btn-primary" value="Search">
            </div>

            </form>

    <div class="col-sm-1"></div>
    </div>

    

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <br><br>
            <h1>Daftar</h1>

		<br>
		<div class="row">
    <?php
    if (isset($_POST["kirim"])) {
        $search = $_POST['search'];
        $query = mysqli_query($connection, "SELECT sultansaid.*, destinasi.destinasiNAMA FROM sultansaid
        INNER JOIN destinasi ON sultansaid.destinasiKODE = destinasi.destinasiKODE
        WHERE sultansaid.sultansaidKOTA LIKE '%$search%'");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">

                    <div class="card-body">
                        <p class="card-title">Nama destinasi: <?php echo $row['sultansaidID']; ?></p>
                        <p class="card-text">Kode destinasi: <?php echo $row['sultansaidKOTA']; ?></p>
                        <p class="card-text">destinasi Wisata: <?php echo $row['destinasiNAMA']; ?></p>
                       
						
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Tampilkan semua restoran jika tidak ada hasil pencarian
        $query = mysqli_query($connection,"select * from sultansaid,destinasi
        WHERE sultansaid.destinasiKODE = destinasi.destinasiKODE order by rand()LIMIT 4");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
					<p class="card-title">ID: <?php echo $row['sultansaidID']; ?></p>
                        <p class="card-text">kota: <?php echo $row['sultansaidKOTA']; ?></p>
                        <p class="card-text">destinasi Wisata: <?php echo $row['destinasiNAMA']; ?></p>
                       
						
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>


    </div> 
	<br><br><br>
	</div>

	<div class="col-sm-1"></div>
</body>
<script>
$(document).ready(function() {
    $('.form-control').select2();
});
    </script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>