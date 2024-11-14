<?php 
include "config.php";
$sql = mysqli_query($connection, "select * from destinasi");
$jumlah = mysqli_num_rows($sql);

$kategoriwisata = mysqli_query($connection, "select * from kategoriwisata");
$jumlahkategoriwisata = mysqli_num_rows($kategoriwisata);

$hotel = mysqli_query($connection, "select * from sultan");
$jumlahhotel = mysqli_num_rows($hotel);

$fotodestinasi = mysqli_query($connection, "select * from fotodestinasi");
$jumlahfotodestinasi = mysqli_num_rows($fotodestinasi);

$penerbangan = mysqli_query($connection, "select * from penerbangan");
$jumlahpenerbangan = mysqli_num_rows($penerbangan);

$restaurant = mysqli_query($connection, "select * from restaurant");
$jumlahrestaurant = mysqli_num_rows($restaurant);

$oleh = mysqli_query($connection, "select * from oleh");
$jumlaholeh = mysqli_num_rows($oleh);

$travel = mysqli_query($connection, "select * from travel");
$jumlahtravel = mysqli_num_rows($travel);

$berita = mysqli_query($connection, "select * from kategoriberita");
$jumlahberita = mysqli_num_rows($berita);

?>



<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#fde5ad">
                                    <div class="card-body">Jumlah Destinasi Wisata : <?php echo $jumlah?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <a class="small text-white stretched-link" href="dbdestinasitabel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4 " style="background-color:#063970">
                                    <div class="card-body">Jumlah Kategori Wisata : 
                                    <?php echo $jumlahkategoriwisata?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabelkategori.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: #12551c">
                                    <div class="card-body">Jumlah hotel : <?php echo $jumlahhotel?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabelhotel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: #30c765">
                                    <div class="card-body">Jumlah Foto Destinasi : <?php echo $jumlahfotodestinasi?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabelfoto.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               
                            </div>
                            </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"style="background-color:#7A7974">
                                    <div class="card-body">Jumlah Penerbangan : 
                                    <?php echo $jumlahpenerbangan?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <a class="small text-white stretched-link" href="dbtabelpenerbangan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#E06666">
                                    <div class="card-body">Jumlah Restaurant : 
                                    <?php echo $jumlahrestaurant?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabelrestaurant.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"style="background-color:#3c6382">
                                    <div class="card-body">Jumlah Berita : <?php echo $jumlahberita?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabeloleh.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"style="background-color:#741B47">
                                    <div class="card-body">Jumlah Pusat Oleh Oleh : <?php echo $jumlaholeh?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabeloleh.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color : #2596be;">
                                    <div class="card-body">Jumlah Travel : <?php echo $jumlahtravel?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dbtabeltravel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               
                            </div>
                            </div>
                            </div>
</div>
                        