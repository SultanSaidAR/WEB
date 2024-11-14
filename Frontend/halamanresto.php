<!DOCTYPE html>
<html>
  <?php include "admin/include/config.php";
  $kategori = mysqli_query($connection,"select * from kategoriwisata");
  

$resto = mysqli_query($connection, "select * from restaurant ");
     
$koderesto = $_GET["restokode"];
	$pkresto = mysqli_query ($connection, "select * from restaurant
		where restaurantKODE = '$koderesto'");
        $rowedit = mysqli_fetch_array($pkresto);

        $olehsearch = mysqli_query($connection, "select * from oleh ");

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
                <a class="nav-link" aria-current="page" href="indexx.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="Read More" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori Wisata
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
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
                <a class="nav-link active" href="#" id="navbarDropdown" role="Read More" data-bs-toggle="dropdown" aria-expanded="false">
                  Restaurant
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $restaurantmenu = mysqli_query($connection, "select * from restaurant");
                  if(mysqli_num_rows($restaurantmenu) > 0)
                    {
                      while($row=mysqli_fetch_array($restaurantmenu))
                      {?><a class="dropdown-item" href="halamanresto.php?restokode=<?php echo $row["restaurantKODE"]?>">
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
    
<br>


<div class="wrap"style="background-color:#F3EEEA">
<br><br>
<div class="container"><!--membuat kolom berita-->

 <!-- About Start -->
 <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Restaurant Pilihan Anda</h6>
                            <h2 class="mt-2"><?php echo $rowedit["restaurantNAMA"];?></h2>
                        </div>
                        <p class="mb-4"><?php echo $rowedit["restaurantDES"];?></p>
                        <p class="mb-4"><?php echo $rowedit["restaurantREVIEW"];?></p>
                        <div class="row g-3">
  
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="ADMIN/images/<?php echo $rowedit["restaurantFOTO"];?>">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- About End -->  
        <div class="judul" style="text-align:center;"><h2>DAFTAR RESTAURANT</h2></div>
        <br>
        <div class="row g-4 portfolio-container" >
        
        <?php
       
       if (mysqli_num_rows($resto)>0)
       {
         while($rowresto=mysqli_fetch_array($resto))
       {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s" >
            
                        <div class="position-relative rounded overflow-hidden"style="height:300px;">
                            <img class="img-fluid w-100" src="ADMIN/images/<?php echo $rowresto["restaurantFOTO"];?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="ADMIN/images/<?php echo $rowresto["restaurantFOTO"];?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white">Rating :<?php echo $rowresto["restaurantREVIEW"];?></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href=""><?php echo $rowresto["restaurantNAMA"];?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>


      </div>  
<br><br>

      <br><br>
</div>


<br><br>
</div><!--container-->
<div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Mari Berjelajah Bersama Kami</h3>
                        <small class="text-white">Daftar sekarang Untuk Berpetualang.</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>

        
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