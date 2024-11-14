<!DOCTYPE html>
<html>

<?php
include "include/config.php";
if(isset($_POST['Edit']))
{
    $hotel0151 = $_POST['kodehotel'];
    $hotelNAMA = $_POST['namahotel'];
    $hotelALAMAT = $_POST['alamathotel'];
    $kategori0151 = $_POST['kodekategori'];    

    mysqli_query($connection, "update sultan set hotelNAMA='$hotelNAMA', hotelALAMAT='$hotelALAMAT', kategori0151='$kategori0151'
		where hotel0151='$hotel0151'");
        header("location:dbhotel.php");
}
$datakategori = mysqli_query($connection," select * from kategoriwisata");

$kodehotel = $_GET["ubah"];
	$edithotel = mysqli_query ($connection, "select * from sultan
		where hotel0151 = '$kodehotel'");
	$rowedit = mysqli_fetch_array($edithotel);
?>

    <head>
        <title></title>
        <link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <style>
       .form-group {
        color:white;

       }
       .table {
        color:white;

       }
       .row{
        color:white;
       }
    </style>
<body>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
    <form method="POST">
    <div class="mb-3 row">
        <label for="kodehotel" class=" col-sm-2 col-form-label">Kode hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kodehotel" placehold="" name="kodehotel" maxlength="4" value="<?php echo $rowedit ["hotel0151"]?>"readonly></div>
    </div>
    <div class="mb-3 row">
        <label for="namahotel" class="col-form-label col-sm-2">Nama hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="namahotel" placehold="" name="namahotel"></div>
    </div>
    <div class="mb-3 row">
        <label for="alamathotel" class="col-form-label col-sm-2">Alamat Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="alamathotel" placehold="" name="alamathotel"></div>
    </div>

		<div class="mb-3 row">
			<label for="kodkategori" class="col-sm-2 col-form-label">Kode Kategori</label>
			<div class="col-sm-10">
			<select class="form-control" id="kodkategori" name="kodekategori">
				<option>Kategori Wisata</option>
				<?php while($row = mysqli_fetch_array($datakategori))
				{ ?>
					<option value="<?php echo $row["kategoriKODE"]?>">
					<?php echo $row["kategoriKODE"]?>
					<?php echo $row["kategoriNAMA"]?>
					</option>
				<?php } ?>
			</select>
			</div>
		</div>

        <div class="form-group row">
<div class="col-sm-2"></div>
<div class="col-sm-10">
<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
 
			</div>

    </form>

<!--form pencarian-->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-2">Nama Hotel</label>
            <div class="col-sm-7">
                <input type="text" name="search" class="form-control" id="search" value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
                placeholder="Cari Nama Hotel">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn-primary" value="search">
        </div>
    </form>
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-2">Alamat Hotel</label>
            <div class="col-sm-7">
                <input type="text" name="search2" class="form-control" id="search" value="<?php if(isset($_POST['search2'])) {echo $_POST['search2'];}?>"
                placeholder="Cari Alamat Hotel">
            </div>
            <input type="submit" name="kirim1" class="col-sm-1 btn-primary" value="search">
        </div>
    </form>
<!--form pencarian-->
    <div class="jumbotron mt-5">
        <h1 class="display-5">Hasil Entri Data Hotel</h1>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th >No</th>
      <th >Kode Hotel</th>
      <th >Nama Hotel</th>
      <th> Alamat Hotel</th>
      <th >Kode Kategori</th>
      <th >Edit</th>
      <th >Hapus</th>
      
    </tr>
  </thead>
  <tbody>

  <!-- menerima kirima dari form untuk mencari pada tabel-->
  <?php
  if(isset($_POST["kirim"])){
    $search=$_POST['search'];
    $query= mysqli_query($connection,"select sultan.* from sultan where hotelNAMA like '%".$search."%'");
  }else if (isset($_POST["kirim1"]))
   {
    $search2=$_POST['search2'];
    $query= mysqli_query($connection,"select sultan.* from sultan where hotelALAMAT like '%".$search2."%'");
  }
  else{
    $query = mysqli_query($connection,"select sultan.* from sultan");
  }

    
        $nomor = 1;
        while ($row = mysqli_fetch_array($query)){
    ?>


    <tr>
      <td><?php echo $nomor;?></td>
      <td><?php echo $row ['hotel0151'];?></td>
      <td><?php echo $row ['hotelNAMA'];?></td>
      <td><?php echo $row ['hotelALAMAT'];?></td>
      <td><?php echo $row ['kategori0151'];?></td>
      
      
      <td width="5px"><a href="dbhoteledit.php?ubah=<?php echo $row["hotel0151"]?>" class ="btn btn-success btn-sm" title=" edit"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></td>
<td width="5px"><a href="dbhotelhapus.php?hapus=<?php echo $row["hotel0151"]?>" class ="btn btn-danger btn-sm" title="hapus"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></td>
    </tr>
    <?php $nomor = $nomor +1;?>
<?php } ?>


  </tbody>
</table>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
    $(document).ready(function()
        {
            $('#kodekategori').select2(
                {closeOnSelect: true,
                    allowClear: true,
                    placeholder: 'pilih kategori wisata'
                });
        });
    </script>
</body>
</html>