<?php
include 'models/Toko.php';
$toko = new Toko();

if (isset($_POST["submit"])) {
    $toko->nama_toko = $_POST['nama_toko'];
    $toko->deskripsi = $_POST['deskripsi'];
    $toko->jenis     = $_POST['jenis'];
    $toko->rating    = $_POST['rating'];
    $toko->alamat    = $_POST['alamat'];
    $toko->lattitude = $_POST['lattitude'];
    $toko->longitude = $_POST['longitude'];
    $toko->no_telp   = $_POST['no_telp'];
    $toko->website   = $_POST['website'];
    $toko->gambar    = $_FILES['gambar']['name'];
    $toko->jam_buka  = $_POST['jam_buka'];
    $toko->jam_tutup = $_POST['jam_tutup'];

    if($toko->insertData()){
        echo "Data toko berhasil ditambah.";
        header("Location: tokoobat.php"); 
        exit;
    } else {
        echo "Gagal menambah data toko.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style-admin.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        #show {
            display: none;
        }
    </style>

</head>

<body id="page-top">    
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar-white sidebar sidebar-purple accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <img src="assets/img/Logo.svg" class="img-fluid" alt="">
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-4 mb-3">

<!-- Nav Item -->
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fa-solid fa-house"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item">
                <a class="nav-link" href="pengguna.php">
                <i class="fa-solid fa-users"></i>
                    <span>Pengguna</span>
                </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="tokoobat.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Toko Obat</span>
    </a>
</li>
<li class="nav-item">
                <a class="nav-link" href="talasinfo.php">
                <i class="fa-solid fa-leaf"></i>
                    <span>Talas Info</span>
                </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="blog.php">
        <i class="fa-solid fa-blog"></i>
        <span>Blog</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="forum.php">
        <i class="fa-solid fa-message"></i>
        <span>Forum</span>
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="logout.php">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block my-0 mt-3 mb-4">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Talas Care</span>
                                <img class="img-profile rounded-circle"
                                    src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Form Update Data Blog</h1>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Blog</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="form_insert_data.php" method="POST" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="NamaToko">Judul Blog</label>
                                            <input type="text" class="form-control" id="NamaToko" aria-describedby="NamaToko" name="nama_toko" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Isi</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="15" required></textarea>
                                        </div>
                                        <a href="blog.php" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" name="submit" class="btn bg-purple-secondary">Simpan Draft</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Talas Care 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function hide() {
            $('#show ').css("display", "block");
        }
    </script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>

</body>

</html>