<!doctype html>
<?php 
include "include/config.php";
    if(isset($_POST['simpan']))
{
    $kategoriKODE=$_POST['inputkategoriKode'];
    $kategoriNAMA=$_POST['inputkategoriNama'];
    $kategoriKET=$_POST['inputkategoriKet'];
    $kategoriREFFERENCE=$_POST['inputkategoriRefference'];

    mysqli_query($connection, "INSERT INTO kategoriwisata values ('$kategoriKODE','$kategoriNAMA','$kategoriKET','$kategoriREFFERENCE')");

}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>WEB DEVELOPMENT KELAS C</title>
    <style>
       .form-group {
        color:white;

       }
       .table {
        color:white;

       }
    </style>
  </head>
  <body>
    <div class="row">
  <div class="col-sm-1"></div>

  <div class="col-sm-10"> 
  <form method="POST">
  
<div class="form-group row mb-2">

        <label for="search" class="col-sm-3">Nama Kategori</label>
            <div class="col-sm-7">
        <input type="text" name="search" class="form-control" id="search" 
				value="<?php if(isset($POST['search'])) {echo $_POST['search'];} ?>"
				placeholder="Cari nama kategori">
           
     </div>
        <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
    </div>

</form>
</div>


<div class="jumbotron mt-5">
        <h1 class="display-5">Hasil Entri Data Kategori Wisata</h1>
    </div>
    <div class="col-sm-1"></div>
    <table class="table col-sm-10" >
  <thead>
    <tr>
      <th >No</th>
      <th >Kode Kategori Wisata</th>
      <th >Nama Kategori Wisata</th>
      <th >Keterangan Kategori Wisata</th>
      <th >Kategori Refference</th>
      <th >Edit</th>
      <th >Hapus</th>

    </tr>
  </thead>
  <tbody>

<?php
			if(isset($_POST["kirim"])){
    $search=$_POST['search'];
    $query= mysqli_query($connection,"select kategoriwisata.* from kategoriwisata where kategoriNAMA like '%".$search."%'");
	
			}else $query = mysqli_query($connection, "select * from kategoriwisata");
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{ ?>
    <tr>
      <td><?php echo $nomor;?></td>
      <td><?php echo $row ['kategoriKODE'];?></td>
      <td><?php echo $row ['kategoriNAMA'];?></td>
      <td><?php echo $row ['kategoriKET'];?></td>
      <td><?php echo $row ['kategoriREFFERENCE'];?></td>
      <td width="5px">
<a href="dbkategoriwisataedit.php?ubah=<?php echo $row["kategoriKODE"]?>"
		 class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</td>
<td width="5px">
<a href="kategoriwisatahapus.php?hapus=<?php echo $row["kategoriKODE"]?>"
		 class="btn btn-danger btn-sm" title="hapus">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
</td>

    </tr>
    <?php $nomor = $nomor +1;?>
<?php } ?>

  </tbody>

</table>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>