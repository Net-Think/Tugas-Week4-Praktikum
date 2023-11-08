<?php
include 'models/Toko.php';
$toko = new Toko();

$tokos = $toko->getData();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    if ($toko->hapusData($id)) {
        echo "Pengguna berhasil dihapus.";
        header("Location: tokoobat.php"); 
        exit;
    } else {
        echo "Gagal menghapus pengguna.";
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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/smoothness/jquery-ui.css" rel="stylesheet"/>

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
<li class="nav-item active">
                <a class="nav-link" href="talasinfo.php">
                <i class="fa-solid fa-leaf"></i>
                    <span>Talas Info</span>
                </a>
</li>
<li class="nav-item ">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-primary">Data Hama dan Penyakit</h1>
                        <a href="tambahdatahama.php" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fa-solid fa-plus"></i> Tambah Data</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold font-primary">Data Hama dan Penyakit</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Deskripsi</th>
                                            <th>Pencegahan</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Serangga Aphis Gossyipii</td>
                                            <td>Hama</td>
                                            <td><span class="d-inline-block text-truncate" style="max-width: 150px;">Serangga ini menyerang daun talas dengan cara menghisap cairan daun, yang menyebabkan daun menjadi keriting. Serangga ini juga dapat mengeluarkan madu yang menarik semut. Serangga ini tidak bisa hidup dalam kondisi lingkungan yang sangat dingin</span></td>
                                            <td>
                                                <ul>
                                                    <li>Pemantauan Rutin</li>
                                                    <li>Pemupukan Seimbang</li>
                                                    <li>Gunakan Pengendalian Alamiah</li>
                                                </ul>
                                            </td>
                                            <td><img src="data:image/jpeg;base64,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" alt="" class="img-fluid rounded"></td>
                                            <td>
                                                <a class="btn btn-purple-secondary" onclick="return confirm('Yakin ingin hapus?')"><i class="fas fa-trash fa-sm text-white"></i></a>
                                                <a class="btn btn-success-secondary" href="formupdatehama.php"><i class="fas fa-pen fa-sm text-white"></i></a>
                                                <a class="btn btn-primary" href="previewhama.php"><i class="fa-solid fa-eye text-white"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

</body>

</html>