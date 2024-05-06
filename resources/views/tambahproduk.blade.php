<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/header')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>
<body id="page-top">

    <div id="wrapper">


        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">SIMS Web APP</div>
            </a>


            <hr class="sidebar-divider my-0">


            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="/produk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Profil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{route("_tambahproduk")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class = "row">
                                <div class ="col-lg-5">
                                    <div class="form-group">
                                        <label for="disabledTextInput">Kategori Produk</label>
                                        <select class="form-control" id="1" name="kategori" required>
                                            <option selected disabled>Pilih Kategori Produk
                                            </option>
                                            <option value="Alat Music">Alat Music
                                            </option>
                                            <option value="Alat Olahraga">Alat Olahraga
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class ="col-lg-5">
                                    <div class="form-group">
                                        <label> Nama Barang</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="nama" name="nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class ="col-lg-4">
                                    <div class="form-group">
                                        <label> Harga Beli</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="hargabeli" name="hargabeli" required>
                                    </div>
                                </div>
                                <div class ="col-lg-4">
                                    <div class="form-group">
                                        <label> Harga Jual</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="hargajual" name="hargajual" required>
                                    </div>
                                </div>
                                <div class ="col-lg-4">
                                    <div class="form-group">
                                        <label> Stok</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="stok" name="stok" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label> Upload Gambar</label>
                                    <input type="file" class="form-control-file" id="image"
                                                    name="image" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>

    </div>

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
    @include('layout/script')
</body>

</html>
