<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>travel</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <style>
        .jumbotron {
            background-color : #2596be;
            color : aqua;
            font-family :'arial';
        }
        .card-body {
            background-color :  #1178b2;
            border-radius : 10px;
            color :white;
        }
        .card {
            border-radius : 10px;
        }
    </style>
</head>

<?php 
	include "include/config.php";
	
?>


<body>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
 

        <form method="POST" enctype="multipart/form-data" class="row g-3">

        
            <div class="col-md-6">
                <input type="text"  name="search" class="form-control" id="search" value="<?php if(isset($POST['search'])) {echo $_POST['search'];} ?>"
                    placeholder="Cari nama travel">
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
            <h1>Daftar Travel</h1>

		<br>
		<div class="row">
    <?php
    if (isset($_POST["kirim"])) {
        $search = $_POST['search'];
        $query = mysqli_query($connection, "select travel.* from travel where travelNAMA like '%" . $search . "%'");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/<?php echo $row['travelFOTO'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Nama Travel: <?php echo $row['travelNAMA']; ?></p>
                        <p class="card-text">Kode Travel: <?php echo $row['travelKODE']; ?></p>
                        <p class="card-text">Lokasi Travel: <?php echo $row['travelLOKASI']; ?></p>
                        <p class="card-text">Telephone Travel: <?php echo $row['travelTEL']; ?></p>

						<a href="dbtraveledit.php?ubah=<?php echo $row["travelKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>

<a href="travelhapus.php?hapus=<?php echo $row["travelKODE"]?>"
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
        $query = mysqli_query($connection, "select * from travel");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/<?php echo $row['travelFOTO'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
					<p class="card-title">Nama Travel: <?php echo $row['travelNAMA']; ?></p>
                        <p class="card-text">Kode Travel: <?php echo $row['travelKODE']; ?></p>
                        <p class="card-text">Lokasi Travel: <?php echo $row['travelLOKASI']; ?></p>
                        <p class="card-text">Telephone Travel: <?php echo $row['travelTEL']; ?></p>
						<a href="dbtraveledit.php?ubah=<?php echo $row["travelKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>

<a href="travelhapus.php?hapus=<?php echo $row["travelKODE"]?>"
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


    </div> 
	<br><br><br>
	</div>

	<div class="col-sm-1"></div>
</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>