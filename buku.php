<?php
    session_start();
    if (!isset($_SESSION['login']))
        header('location: login.php');
    include("config.php");
    $buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>My Books-MY PerpUXtakaan-Website Daily Read Activity</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme9">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
 <!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
   <a href="index.html">
    <img src="assets/images/icon.png" class="logo-icon" alt="logo icon">
    <h5 class="logo-text">My Perpuxtakaan</h5>
  </a>
</div>
    <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="todo.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>To Do List</span>
        </a>
      </li>
      
      <li>
        <a href="buku.php">
          <i class="zmdi zmdi-grid"></i> <span>Book List</span>
        </a>
      </li>

      <li>
        <a href="summary.html">
          <i class="zmdi zmdi-face"></i> <span>Mini Summary</span>
        </a>
      </li>
      </ul>

</div>
<!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top">
   <ul class="navbar-nav mr-auto align-items-center">
     <li class="nav-item">
       <a class="nav-link toggle-menu" href="javascript:void();">
        <i class="icon-menu menu-icon"></i>
      </a>
     </li>
     <li class="nav-item">
       <form class="search-bar">
         <input type="text" class="form-control" placeholder="Enter keywords">
          <a href="javascript:void();"><i class="icon-magnifier"></i></a>
       </form>
     </li>
   </ul>
      
   <ul class="navbar-nav align-items-center right-nav-link">
     <li class="nav-item">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
         <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
       </a>
       <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-item user-details">
         <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-2 user-title">Daffa Prikitiew</h6>
             <p class="user-subtitle">daffafkh@gmail.com</p>
             </div>
            </div>
           </a>
         </li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item">
           <a href="profile.html">
             <i class="icon-wallet mr-2"></i> Account
           </a>
         </li>
         
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
       </ul>
     </li>
   </ul>
 </nav>
 </header>
 <!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

  <!-- TABEL  -->
	
	  
  <!--End Row-->
	
	<div class="row">
	  <div class="col-12 col-lg-12">
	    <div class="card">
	      <div class="card-header">Book List
		          <div class="card-action">
                <div class="dropdown">
                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="icon-options"></i>
                </a>
                  <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void();">Action</a>
                  <a class="dropdown-item" href="javascript:void();">Another action</a>
                  <a class="dropdown-item" href="javascript:void();">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void();">Separated link</a>
                  </div>
                  </div>
             </div>
		    </div>
	       <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                      <th>ID Buku</th>
                      <th>Judul Buku</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Tahun Terbit</th>
                      <th>Link Ebook</th>
                      <th>Mini-Summary</th>
                      <th>Tindakan</th>
                   </tr>
                
                  </thead>

                  <!-- ISI TABEL (PHP) -->
                  <tbody>
                <?php foreach($buku as $record) :?>
                    <tr>
                      <td><?= $record["id_buku"];?></td>
                      <td><?= $record["judul"];?></td>
                      <td><?= $record["penulis"];?></td>
                      <td><?= $record["penerbit"];?></td>
                      <td><?= $record["tahun_terbit"];?></td>
                      <td><a href="<?= $record["ebook"]; ?>"><?= $record["ebook"];?></a></td>
                      <td><a href="<?= $record["summary"]; ?>"><?= $record["summary"];?></a></td>
                      <td>
                          <a href="form_edit_buku.php?id_buku=<?= $record["id_buku"]; ?>">Edit</a> ||
                          <a href="delete_buku.php?id_buku=<?= $record["id_buku"]; ?>">Hapus</a>
                      </td>
                    </tr>
                <?php endforeach; ?>
                  </tbody>
                </table>
                <?php
                    if (isset($_GET['condt']))
                        if ($_GET['condt'] == 'sukses')
                        {
                            $condt = $_GET['condt'];
                            echo 'Penambahan data '.$condt;
                        }

                    if (isset($_GET['cek']))
                        if ($_GET['cek'] == 'gagal')
                            echo 'Proses Query Edit Gagal';
                    
                    if (isset($_GET['aksi']))
                    {
                        $aksi = $_GET['aksi'];
                        if (isset($_GET['edit']))
                        {
                            $edit = $_GET['edit'];
                            echo $edit." data ".$aksi;
                        }
                        else
                        {
                            $hapus = $_GET['hapus'];
                            echo $hapus." data ".$aksi;
                        }
                    }
                ?>

                <div class="form-group">
                  <a class="nav-link" href="form_insert_buku.php">
                    <button type="submit" value="tambah" name="tambah" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>
                    Tambahkan Buku
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
                      <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
                    </svg></button>
                  </a>
                </div>
          </div>
      </div>
    </div>
  </div><!--End Row-->
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
    <!--Start footer-->
    <footer class="footer">
        <div class="container">
          <div class="text-center">
            My PerpUXtakaan 2022
          </div>
        </div>
      </footer>
    <!--End footer-->
    
    
    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->
    
    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  
    <!-- Index js -->
    <script src="assets/js/index.js"></script>

    
  </body>
</html>
