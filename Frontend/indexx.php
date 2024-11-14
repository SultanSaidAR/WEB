<!DOCTYPE html>
<html>
  <?php include "admin/include/config.php";
  $kategori = mysqli_query($connection,"select * from kategoriwisata");
  $destinasi = mysqli_query($connection,"select * from kategoriwisata,destinasi
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE order by rand()LIMIT 4");

  $uas = mysqli_query($connection,"select * from sultansaid,destinasi
  WHERE sultansaid.destinasiKODE = destinasi.destinasiKODE order by rand()LIMIT 4");
  $travel = mysqli_query($connection, "select * from travel order by rand()LIMIT 4");
  $berita = mysqli_query($connection, "select * from kategoriberita");
  $oleh = mysqli_query($connection, "select * from oleh order by rand()LIMIT 3");
  $oleh3 = mysqli_query($connection, "select * from oleh  order by rand()");
$rowoleh3=mysqli_fetch_array($oleh3);
$oleh1 = mysqli_query($connection, "select * from oleh  order by rand()");
$rowoleh1=mysqli_fetch_array($oleh1);
$oleh2 = mysqli_query($connection, "select * from oleh  order by rand()");
$rowoleh2=mysqli_fetch_array($oleh2);


     

 
  ?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>


<body>
    <div class ="container-fluid"><!--container-->
    <!-- membuat menu-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sultan S.</a>
          <Read More class="navbar-toggler" type="Read More" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </Read More>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="indexx.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="Read More" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori Wisata
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-value="<?php echo $value; ?>">
                <?php
                $kategori = mysqli_query($connection, "select * from kategoriwisata");
                  if(mysqli_num_rows($kategori) > 0)
                    {
                      while($row=mysqli_fetch_array($kategori))
                      {?><a class="dropdown-item" href="halamandestinasi.php">
                        <?php echo $row["kategoriNAMA"];?></a>
                  <?php  }
                    }
                  ?>
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="Read More" data-bs-toggle="dropdown" aria-expanded="false">
                  Restaurant
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $restaurantmenu = mysqli_query($connection, "select * from restaurant");
                  if(mysqli_num_rows($restaurantmenu) > 0)
                    {
                      while($row=mysqli_fetch_array($restaurantmenu))
                      {?>
                      <a class="dropdown-item" href="halamanresto.php?restokode=<?php echo $row["restaurantKODE"]?>">
                        <?php echo $row["restaurantNAMA"];?></a>
                  <?php  }
                    }
                  ?>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="Read More" data-bs-toggle="dropdown" aria-expanded="false">
                  Pusat Oleh-Oleh
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                  $olehmenu = mysqli_query($connection, "select * from oleh");
                  if(mysqli_num_rows($olehmenu) > 0)
                    {
                      while($row=mysqli_fetch_array($olehmenu))
                      {?><a class="dropdown-item" href="halamanoleh.php?olehkode=<?php echo $row["olehKODE"]?>">
                        <?php echo $row["olehNAMA"];?></a>
                  <?php  }
                    }
                  ?>

                </ul>
              </li>
            </ul>

            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <Read More class="btn btn-outline-success" type="submit">Search</Read More>
            </form>
          </div>
        </div>
      </nav>
    <!--menu-->

    <!--slide-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <Read More type="Read More" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></Read More>
    <Read More type="Read More" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></Read More>
    <Read More type="Read More" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></Read More>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="ADMIN/images/resto2.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>RESTAURANT</h5>
        <p>Berbagai Macam Restaurant Di Seluruh Pulau Jawa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/olehx.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>PUSAT OLEH-OLEH</h5>
        <p>Berbagai Jenis Pusat Oleh-Oleh Di Seluruh Pulau Jawa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/bus1.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>TRAVEL</h5>
        <p>Berbagai Macam Travel Dengan Harga Terjangkau Di Seluruh Pulau Jawa</p>
      </div>
    </div>
  </div>
  <Read More class="carousel-control-prev" type="Read More" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </Read More>
  <Read More class="carousel-control-next" type="Read More" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </Read More>
</div>
<!--slide-->
<br>


<div class="wrap"style="background-color:#F3EEEA">
<br><br>
<div class="container"><!--membuat kolom berita-->
<div class="row">
 
 
<div class="col-sm-9"><!--kolom kiri-->
<?php

      if (mysqli_num_rows($destinasi)>0)
    {
        while($row=mysqli_fetch_array($destinasi))
      {
     
?>
    <div class="d-flex">
        <div class="flex-shrink-0">
            <img style="width:400px; height:100%" src="ADMIN/images/<?php echo $row["destinasiFOTO"];?>">
        </div>
        <div class="flex-grow-1 ms-3">
            <h5><?php echo $row["destinasiNAMA"];?> <small class="text-muted"><i><?php echo $row["kategoriNAMA"];?></i></small></h5>
            <p><?php echo substr($row["destinasiKET"],0,250);?>...</p>
            <a href="#"class="btn btn-primary">Read More</a>
          </div>
    </div>
    <br>
    <?php }}?>

    <!-- penutup yg pertama untuk tutup while yang kedua untuk if-->
</div><!--kolom kiri penutup di col-sm-9-->
<div class="col-sm-3"><!--kolom kanan-->
<?php

      if (mysqli_num_rows($berita)>0)
      {
        while($row1=mysqli_fetch_array($berita))
      {
     
?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row1["kategoriberitaNAMA"];?></h5>
    <p class="card-text"><?php echo $row1["kategoriberitaKET"];?></p>
    <a href="#" class="btn btn-primary">Go Somewhere</a>
  </div>
</div>

<?php }}?>
</div><!--kolom kanan-->



<div class="row" style="background-color:#EBE3D5">

<!-- Carousel wrapper galeri foto -->
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-bs-ride="carousel"
>


  <!-- Inner -->
  <div class="carousel-inner py-4">
    <div class="judul">
      <h3>Pilihan Restaurant dengan hidangan yang memukau</h3>

    </div>
<br>
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
        <?php
        $restaurant = mysqli_query($connection, "select * from restaurant order by rand() LIMIT 3");
      if (mysqli_num_rows($restaurant)>0)
      {
        while($rowrestaurant=mysqli_fetch_array($restaurant))
      {
     
?>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
            <div class="wrap" style="height:250px;">
              <img src="ADMIN/images/<?php echo $rowrestaurant["restaurantFOTO"];?>"  
               class="card-img-top"
                alt="Sunset Over the Sea"
              />
      </div>
              <div class="card-body"style="background-color:#F3EEEA">
                <h5 class="card-title"><?php echo $rowrestaurant["restaurantNAMA"];?></h5>
                <p class="card-text">
                <?php echo $rowrestaurant["restaurantALAMAT"];?>
                </p>
                <p><?php echo $rowrestaurant["restaurantREVIEW"];?></p>
                
              </div>
            </div>
          </div>
    <?php }}?>

        </div>
      </div>
      </div>
       <!-- Single item -->
       <div class="carousel-item">
      <div class="container">
        <div class="row">
        <?php
        $restaurant = mysqli_query($connection, "select * from restaurant order by rand() LIMIT 3");
      if (mysqli_num_rows($restaurant)>0)
      {
        while($rowrestaurant=mysqli_fetch_array($restaurant))
      {
     
?>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
            <div class="wrap" style="height:250px;">
              <img src="ADMIN/images/<?php echo $rowrestaurant["restaurantFOTO"];?>"  
               class="card-img-top"
                alt="Sunset Over the Sea"
              />
      </div>
              <div class="card-body"style="background-color:#F3EEEA">
                <h5 class="card-title"><?php echo $rowrestaurant["restaurantNAMA"];?></h5>
                <p class="card-text">
                <?php echo $rowrestaurant["restaurantALAMAT"];?>
                </p>
                <p><?php echo $rowrestaurant["restaurantREVIEW"];?></p>
                
              </div>
            </div>
          </div>
    <?php }}?>

        </div>
      </div>
      </div>
    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
        <?php
        $restaurant = mysqli_query($connection, "select * from restaurant order by rand() LIMIT 3");
      if (mysqli_num_rows($restaurant)>0)
      {
        while($rowrestaurant=mysqli_fetch_array($restaurant))
      {
     
?>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
            <div class="wrap" style="height:250px;">
              <img src="ADMIN/images/<?php echo $rowrestaurant["restaurantFOTO"];?>"  
               class="card-img-top"
                alt="Sunset Over the Sea"
              />
      </div>
              <div class="card-body"style="background-color:#F3EEEA">
                <h5 class="card-title"><?php echo $rowrestaurant["restaurantNAMA"];?></h5>
                <p class="card-text">
                <?php echo $rowrestaurant["restaurantALAMAT"];?>
                </p>
                <p><?php echo $rowrestaurant["restaurantREVIEW"];?></p>
                
              </div>
            </div>
          </div>
    <?php }}?>

        </div>
      </div>
      </div>
  </div>
  <!-- Inner -->
</div><!-- Carousel wrapper galeri foto -->
<div class="d-flex justify-content-center mb-4">
    <Read More
      class="carousel-control-prev position-relative"
      type="Read More"
      data-bs-target="#carouselMultiItemExample"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </Read More>
    <Read More
      class="carousel-control-next position-relative"
      type="Read More"
      data-bs-target="#carouselMultiItemExample"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </Read More>
  </div>

<!--penutup row-->
<!--oleh-oleh-->
<!-- kolom berita-->
      </div>
      </div>  
<br><br>

      <div class="row"style="background-color:#F3EEEA">
      
      <div class="col-sm-6">
        <div class="text-center" style="margin-top:100px;">
          <h2>Pusat Oleh-Oleh Terbaik Di Pulau Jawa</h2>
          <p>Selamat datang di Pusat Oleh-oleh Pulau Jawa, destinasi belanja terbaik untuk memanjakan lidah dan membawa pulang kenangan istimewa dari perjalanan Anda! Pulau Jawa, sebagai pusat kekayaan budaya dan kuliner Indonesia, menawarkan berbagai oleh-oleh yang khas dan menggoda.
</p>
        </div>
      </div>
      <div class="col-sm-6">

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <Read More type="Read More" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></Read More>
    <Read More type="Read More" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></Read More>
    <Read More type="Read More" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></Read More>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="10000" >
    <div class="wrap" style="height:350px;">
      <img src="ADMIN/images/<?php echo $rowoleh1["olehFOTO"];?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white"><?php echo $rowoleh1["olehNAMA"];?></h5>
        <p style="color:white"><?php echo $rowoleh1["olehASAL"];?></p>
      </div>

    </div>
    <div class="carousel-item" data-bs-interval="10000">
    <div class="wrap" style="height:350px;">
 <img src="ADMIN/images/<?php echo $rowoleh2["olehFOTO"];?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white"><?php echo $rowoleh2["olehNAMA"];?></h5>
        <p style="color:white"><?php echo $rowoleh2["olehASAL"];?></p>
      </div>

    </div>
    
    <div class="carousel-item" data-bs-interval="10000">
    <div class="wrap" style="height:350px;">
      <img src="ADMIN/images/<?php echo $rowoleh3["olehFOTO"];?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white"><?php echo $rowoleh3["olehNAMA"];?></h5>
        <p style="color:white"><?php echo $rowoleh3["olehASAL"];?></p>
      </div>
 
    </div>
    
  </div>
  <Read More class="carousel-control-prev" type="Read More" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </Read More>
  <Read More class="carousel-control-next" type="Read More" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </Read More>
</div>
      </div>

      </div>
      </div>
      <br><br>
</div>

<div class="bungkus" style="background-color:#EBE3D5; padding-top:50px;">
<div class="JUDUL" style="text-align:center"><h3>Kumpulan Travel Yang Siap Mengantar Anda</h3></div>
<div class="container">
      <div class="card-group"style="background-color:#EBE3D5">
        
<?php
       
      if (mysqli_num_rows($travel)>0)
      {
        while($rowtravel=mysqli_fetch_array($travel))
      {
     
?>
  <div class="card">
    <img style="height:200px" src="ADMIN/images/<?php echo $rowtravel["travelFOTO"];?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $rowtravel["travelNAMA"];?></h5>
      <p class="card-text"><?php echo $rowtravel["travelLOKASI"];?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Latest Update</small>
    </div>
  </div>

  <?php }}?>
</div>
</div>
<br>
</div>

<br><br>
<div class="container">
<div class="judul"style="text-align:center;">
      <h3>Tampilan Table Baru "kota"</h3>

    </div>
    <br>
<div class="col-sm-9"><!--kolom kiri-->
<?php

      if (mysqli_num_rows($uas)>0)
    {
        while($row=mysqli_fetch_array($uas))
      {
     
?>
    <div class="d-flex">
        <div class="flex-shrink-0">
            <img style="width:400px; height:100%" src="ADMIN/images/<?php echo $row["destinasiFOTO"];?>">
        </div>
        <div class="flex-grow-1 ms-3">
            <h5><?php echo $row["destinasiNAMA"];?> <small class="text-muted"></small></small></h5>
            <p><?php echo $row["sultansaidKOTA"];?></p>
            <p><?php echo substr($row["destinasiKET"],0,250);?>...</p>
            <a href="#"class="btn btn-primary">Read More</a>
          </div>
    </div>
    <br>
    <?php }}?>

    <!-- penutup yg pertama untuk tutup while yang kedua untuk if-->
</div><!--kolom kiri penutup di col-sm-9-->
</div>
</div><!--container-->
<!-- Testimonial Start -->
<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
              <div class="juds" style="text-align:center;"><h3>REVIEW</h3></div>
              <br>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Situs web ini benar-benar memukau dengan cara yang menghidupkan pesona Jawa dalam setiap halaman. Mulai dari desain yang kaya warna hingga konten yang dipilih dengan cermat</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Agus Baharuddin</h6>
                                <small>Pegawai</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Menjelajahi web ini seperti melakukan perjalanan virtual ke Jawa. Gambar-gambar yang dipilih dengan indah dan tulisan-tulisan yang informatif benar-benar menghidupkan keindahan alam dan warisan budaya Jawa. </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Josel Lucas</h6>
                                <small>Cat Lover</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Desain situs ini sungguh mempesona! Kombinasi warna yang hangat dan elemen-elemen tradisional menciptakan atmosfer yang autentik. Selain itu, kontennya sangat mendalam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Aceline Sudirman</h6>
                                <small>Mahasiswa</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Saya menemukan situs ini menjadi kombinasi yang luar biasa antara inspirasi dan edukasi. Informasi tentang tempat-tempat indah di Jawa, tradisi lokal, dan seni tradisional memberikan wawasan yang mendalam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Patrick Erwin G.</h6>
                                <small>Professor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Team Project</h6>
                    <h2 class="mt-2">Meet Your Programmer</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="admin/images/pro.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Sultan Said</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="admin/images/pro.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Sultan Said</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="admin/images/pro.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Sultan Said</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Website Sultan Said
          </h6>
          <p>
            Website ini dibuat untuk penilaian mata kuliah WEB DEVELOMENT , dengan dibuatnya website ini saya berharap bisa mengajak orang agar bisa terus berkarya.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">HTML</a>
          </p>
          <p>
            <a href="#!" class="text-reset">CSS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">JS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">JAVA</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Kebon Jeruk, 11540, INDONESIA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            sultansaidabdulrahim@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="pesonajawa.com">SULTAN SAID ABDUL RAHIM.COM</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>