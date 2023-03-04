<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <title>Dashboard - Pengaduan masyarakat</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- Side Menu -->
                <ul class="nav flex-column mt-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=datapengaduan">Tulis Pengaduan</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9">
                <!-- content -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Profile
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../logout.php">Logout</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                    </nav>



                    <!-- content dinamis -->
                    <?php 
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                
                        switch ($page) {
                            case 'dashboard':
                                include "home.php";
                                break;
                            case 'datapengaduan':
                                include "datapengaduan.php";
                                break;		
                            case 'tambahaduan':
                                include "tambahaduan.php";
                                break;	
                            case 'editaduan':
                                include "editaduan.php";
                                break;
                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                break;
                        }
                    }else{
                        include "home.php";
                    }
                
                    ?>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../assets/js/jquery-3.6.3.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>