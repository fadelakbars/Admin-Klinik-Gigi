<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> @yield('title') - Klinik Gigi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href=" {{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href=" https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href=" {{ asset('style/assets/css/ready.css') }}">
    <link rel="stylesheet" href=" {{ asset('style/assets/css/demo.css') }}">
    <link rel="stylesheet" href=" {{ asset('style/assets/css/demo.css') }}">

</head>

<body>
    <div class="wrapper">
        <div class="main-header bg-primary text-light">
            <div class="logo-header d-flex ml-2 ">
                <div class="logo d-flex align-items-center">
                    <img src="{{ asset('style/assets/img/klinik-fifin.jpg') }}" alt="" width="40px">
                    <h4 class="text-light" style="margin-top: 10px; margin-left: 10px">Dasboard</h4>

                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <div class="navbar-nav align-items-end mr-3  mt-2">
                            <div class="profile-pic align-items-center d-flex" href="#" aria-expanded="false">
                                <img src="{{ asset('style/assets/img/profile.jpg') }}" alt="user-img" width="36"
                                    class="img-circle">
                                <h6 style="margin-left: 15px; margin-right: 20px; margin-top: 10px;">FIFIN DENTAL KLINIK
                                </h6>
                            </div>
                            <div class="">
                                <a href="logout.php" class="btn " style="padding: 4px; background-color: #63B8E1;">
                                    <i class="la la-sign-out la-2x text-white"></i>
                                </a>
                            </div>
                        </div>
                </div>
            </nav>
        </div>

        <div class="sidebar ml-2">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{ $title === 'form' ? 'active' : '' }}">
                        <a href="/">
                            <i class="la la-th-list"></i>
                            <p>Form Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item {{ $title === 'daftar-pasien' ? 'active' : '' }}">
                        <a href="/daftar-pasien">
                            <i class="la la-users"></i>
                            <p>Daftar Pasien</p>
                        </a>
                    </li>
                    <li class="nav-item {{ $title === 'ekspor-data' ? 'active' : '' }}">
                        <a href="/ekspor-data">
                            <i class="la la-file-excel-o"></i>
                            <p>Ekapor Data </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item update-pro">
                        <button  data-toggle="modal" data-target="#modalUpdate">
                            <i class="la la-hand-pointer-o"></i>
                            <p>Update To Pro</p>
                        </button>
                    </li> --}}
                </ul>
            </div>
        </div>

        <div class="main-panel">

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://api.whatsapp.com/send?phone=6282172151933"
                                    target="blank">
                                    <i class="la la-whatsapp la-1X text-black mr-1 text-success"></i>Kontak Developer
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2024, made with <i class="la la-connectdevelop la-1X text-black"></i> by <a
                            href="https://www.instagram.com/fadelakbars_/" target="blank">fdelna</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- mengakses aset dari folder public --}}
<script src=" {{ asset('style/assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/core/popper.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/core/bootstrap.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
{{-- <script src=" {{ asset('style/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> --}}
<script src=" {{ asset('style/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/ready.min.js') }}"></script>
<script src=" {{ asset('style/assets/js/demo.js') }}"></script>
@yield('script')

</html>
