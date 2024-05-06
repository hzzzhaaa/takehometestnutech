<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/header')
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class = "row">
                                    <div class="col-lg-3">
                                        <select id="categoryFilter" class="form-control">
                                        <option value="">Show All</option>
                                        <option value="Alat Music">Alat Music</option>
                                        <option value="Alat Olahraga">Alat Olahraga</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href = "/tambahproduk"><button type="button" class="btn btn-primary">
                                            Tambah Produk
                                        </button></a>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                        <tr>
                                            <td><img src="{{$data->image}}"
                                                class="img-fluid" alt="" style="width: 200px;" ></td>
                                            <td scope="col">{{$data->name}}</td>
                                            <td scope="col">{{$data->categories}}</td>
                                            <td scope="col">{{$data->buyprice}}</td>
                                            <td scope="col">{{$data->sellprice}}</td>
                                            <td scope="col">{{$data->stock}}</td>
                                            <td scope="col">
                                                <form action="{{route("deleteProduk",['id'=>$data->id])}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah benar ingin menghapus produk?')">Hapus Produk</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

        <div class="modal fade" id="modal-hapus{{$data->id}}" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Produk</h4>
                </div>
                <div class="modal-body">
                    <label>Apakah Benar Ingin Menghapus Produk</label>

            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

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
    @include('layout/script')
</body>

</html>
