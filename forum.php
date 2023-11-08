<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style-admin.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

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
<li class="nav-item ">
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
<li class="nav-item ">
    <a class="nav-link" href="blog.php">
        <i class="fa-solid fa-blog"></i>
        <span>Blog</span>
    </a>
</li>
<li class="nav-item active">
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
            <button id="sidebarToggleTop" class="btn btn-link purple d-md-none rounded-circle mr-3">
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
                        <h1 class="h3 mb-0 font-primary">Forum</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                    <div class="container-fluid">
                <div class="col-12 col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-upload">
                                <div class="form-komen">
                                    <img src="assets/image/Avatars2.png" alt="">
                                    <form action="">
                                        <input type="text" class="input-post col-12" placeholder="Tulis sesuatu">
                                    </form>
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="assets/image/upload.svg" type="button" data-toggle="collapse" data-target="#collapsePost" aria-expanded="false" aria-controls="collapseExample"/>
                                        </label>
                                        <input id="file-input" type="file" accept="image/*" onchange="loadFile(event)" onclick="hide()"/>
                                    </div>
                                    <button class="btn btn-purple">Buat Postingan</button>
                                </div>
                                <div class="collapse" id="collapsePost">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8" id="show">
                                            <img id="output" class="img-thumbnail img-fluid" width="300">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-forum">
                                <div class="display-name">
                                    <img src="assets/image/Avatars.png" alt="">
                                    <div class="text-name">
                                        <span class="name">Fuad <span class="upload-time">• Baru saja</span></span>
                                    </div>
                                </div>
                                <span class="title-forum">Minta bantuan, daun talas saya rusak seperti ini, apa penyebabnya?</span>
                                <div class="tags">
                                    <div class="tag">
                                        talas
                                    </div>
                                    <div class="tag">
                                        sakit
                                    </div>
                                    <div class="tag">
                                        hama
                                    </div>
                                </div>
                                <div class="foto-forum">
                                    <img class="img-fluid" src="assets/image/talas1.png" alt="">
                                </div>
                                <div class="action">
                                    <button class="btn btn-action"><img src="assets/image/Like.svg" alt=""> 127</button>
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img src="assets/image/komen.svg" alt=""> 7</button>
                                    <button class="btn btn-action"><img src="assets/image/share.svg" alt=""> Bagikan</button>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="card-komen">
                                        <div class="form-komen">
                                            <img src="assets/image/Avatars2.png" alt="">
                                            <form action="">
                                                <input type="text" class="input-komen col-12" placeholder="Tulis balasan">
                                            </form>
                                            <button class="btn btn-purple">Posting Balasan</button>
                                        </div>
                                        <div class="lin"></div>
                                        <div class="komentar">
                                            <img src="assets/image/Avatars3.png" alt="">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name">Irna <span class="upload-time">• Baru saja</span></span>
                                                </div>
                                                <span class="komen-text">Daun talas Anda terkena penyakit hawar daun. Buang daun yang sakit, semprot fungisida, dan gunakan bibit sehat.</span>
                                                <button class="btn btn-action"><img src="assets/image/komen.svg" alt=""> 1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-forum">
                                <div class="display-name">
                                    <img src="assets/image/Avatars.png" alt="">
                                    <div class="text-name">
                                        <span class="name">Fuad <span class="upload-time">• Baru saja</span></span>
                                    </div>
                                </div>
                                <span class="title-forum">Hama Talas dan Solusinya</span>
                                <div class="action">
                                    <button class="btn btn-action"><img src="assets/image/Like.svg" alt=""> 127</button>
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img src="assets/image/komen.svg" alt=""> 7</button>
                                    <button class="btn btn-action"><img src="assets/image/share.svg" alt=""> Bagikan</button>
                                </div>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card-komen">
                                        <div class="form-komen">
                                            <img src="assets/image/Avatars2.png" alt="">
                                            <form action="">
                                                <input type="text" class="input-komen col-12" placeholder="Tulis balasan">
                                            </form>
                                            <button class="btn btn-purple">Posting Balasan</button>
                                        </div>
                                        <div class="lin"></div>
                                        <div class="komentar">
                                            <img src="assets/image/Avatars3.png" alt="">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name">Irna <span class="upload-time">• Baru saja</span></span>
                                                </div>
                                                <span class="komen-text">Daun talas Anda terkena penyakit hawar daun. Buang daun yang sakit, semprot fungisida, dan gunakan bibit sehat.</span>
                                                <button class="btn btn-action"><img src="assets/image/komen.svg" alt=""> 1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card-forum">
                                <div class="display-name">
                                    <img src="assets/image/Avatars.png" alt="">
                                    <div class="text-name">
                                        <span class="name">Fuad <span class="upload-time">• Baru saja</span></span>
                                    </div>
                                </div>
                                <span class="title-forum">Minta saran, tanaman talas saya terserang penyakit hawar daun, obat apa yang cocok?</span>
                                <div class="action">
                                    <button class="btn btn-action"><img src="assets/image/Like.svg" alt=""> 127</button>
                                    <button class="btn btn-action" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"><img src="assets/image/komen.svg" alt=""> 7</button>
                                    <button class="btn btn-action"><img src="assets/image/share.svg" alt=""> Bagikan</button>
                                </div>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card-komen">
                                        <div class="form-komen">
                                            <img src="assets/image/Avatars2.png" alt="">
                                            <form action="">
                                                <input type="text" class="input-komen col-12" placeholder="Tulis balasan">
                                            </form>
                                            <button class="btn btn-purple">Posting Balasan</button>
                                        </div>
                                        <div class="lin"></div>
                                        <div class="komentar">
                                            <img src="assets/image/Avatars3.png" alt="">
                                            <div class="isi-komen">
                                                <div class="text-name">
                                                    <span class="name">Irna <span class="upload-time">• Baru saja</span></span>
                                                </div>
                                                <span class="komen-text">Daun talas Anda terkena penyakit hawar daun. Buang daun yang sakit, semprot fungisida, dan gunakan bibit sehat.</span>
                                                <button class="btn btn-action"><img src="assets/image/komen.svg" alt=""> 1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>

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
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Sign Out" di bawah ini jika Anda yakin ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Sign Out</a>
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
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>