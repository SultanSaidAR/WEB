<!DOCTYPE html>
<html lang="en">
<?php 
	ob_start();
	session_start();
	if(!isset($_SESSION['useremail']))
		header("location:login.php");
?>
   <?php include "include/head.php"; ?>
    <body class="sb-nav-fixed"style="background-color: #12551c">
        <?php include "include/navbar.php"; ?>
        <div id="layoutSidenav">
        <?php include "include/menu.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color:white">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <?php include "sultansearch.php"; ?>
                    
                    </div>
                </main>
               <?php include "include/footer.php"; ?>
            </div>
        </div>
        <?php include "include/scriptjs.php"; ?>
    </body>
</html>
