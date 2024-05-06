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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <section style="background-color: #eee;">
                        <div class="card shadow mb-4">
                          <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body text-center">
                                    <img src="{{asset('img/Frame 98700.png')}}" alt="avatar"
                                      class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">Muhammad Hafidh Oktanevaldi</h5>
                                    <p class="text-muted mb-1">Web Programmer</p>
                                    <p class="text-muted mb-4">Jakarta, Indonesia</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </section>
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
