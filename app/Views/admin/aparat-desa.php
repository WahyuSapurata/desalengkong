<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= base_url() ?>/img/logo1.png">
    <title><?php echo $title;  ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>/font.css">
    <!-- data table -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/admin.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img src="<?= base_url() ?>/depan/img/preloader.gif" alt="Logo" height="100" width="100">
            <span>Loading...</span>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light fixed-top" style="background-color: #95CD41;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>/img/logo1.png" alt="Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/index') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/aparat_desa') ?>" class="nav-link active">
                                <i class="nav-icon fa-solid fa-id-card-clip"></i>
                                <p>
                                    Aparat Desa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/penduduk') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-id-card"></i>
                                <p>Data Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kelahiran') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-person"></i>
                                <p>Data Kelahiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kematian') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-book-skull"></i>
                                <p>Data Kematian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/pindah') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-person-booth"></i>
                                <p>Data Pindah Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/keluar') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-person-hiking"></i>
                                <p>Data Pindah Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/artikel') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-newspaper"></i>
                                <p>Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/pengumuman') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-bullhorn"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/lokasi') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-location-dot"></i>
                                <p>Lokasi Lengkong</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kegiatan') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-hot-tub-person"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/aparat') ?>" class="nav-link">
                                <i class="fas fa-images nav-icon"></i>
                                <p>Dokumentasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/ubah_password') ?>" class="nav-link">
                                <i class="fas fa-unlock-alt nav-icon"></i>
                                <p>Ubah Password</p>
                            </a>
                        </li>
                        <div>
                            <hr style="background-color: rgba(169, 169, 169, 0.4);">
                        </div>
                        <li class="nav-item">
                            <a href="<?= base_url('login/logout') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="display: flow-root;">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="alert" style="margin-top: 70px;" role="alert">
                        <h3 class="m-0"><i class="fa-solid fa-id-card-clip"></i> Aparat Desa</h3>
                    </div>

                    <div class="card" style="margin-bottom: 70px;">
                        <div class="card-header">
                            <h5 class="card-title m-0">Tabel Data Aparat Desa</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>No. Handphone</th>
                                        <th>Lokasi</th>
                                        <th>Foto</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($aparat as $apr) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $apr['nama_lengkap'] ?></td>
                                            <td><?= $apr['nama_panggilan'] ?></td>
                                            <td><?= $apr['jabatan'] ?></td>
                                            <td><?= $apr['alamat'] ?></td>
                                            <td><?= $apr['handphone'] ?></td>
                                            <td><a target="_blank" href="https://www.google.com/maps/place/<?= $apr['lokasi'] ?>"><i class="fa-solid fa-map-location text-danger"></i></i></a></td>
                                            <td><img src="<?= base_url('uploads/' . $apr['foto']) ?>" width="100" alt=""></td>
                                            <td>
                                                <form action="<?= base_url() ?>/admin/hapus_aparat/<?= $apr['id_aparat'] ?>" method="post">
                                                    <button type="button" class="badge badge-warning" style="border: none; margin-right: 10px;" data-toggle="modal" data-target="#edit_modal<?= $apr['id_aparat'] ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" onclick="return confirm('Apakah Yankin Ingin Hapus??')" class="badge badge-danger" style="border: none;"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="edit_modal<?= $apr['id_aparat'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Aparat Desa</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/edit_aparat/' . $apr['id_aparat']) ?>">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="lama" value="<?= $apr['foto'] ?>">
                                                            <div class="form-group">
                                                                <label>Nama Lengkap</label>
                                                                <input type="text" name="nama_lengkap" class="form-control" value="<?= $apr['nama_lengkap'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Panggilan</label>
                                                                <input type="text" name="nama_panggilan" class="form-control" value="<?= $apr['nama_panggilan'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jabatan</label>
                                                                <input type="text" name="jabatan" class="form-control" value="<?= $apr['jabatan'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input type="text" name="alamat" class="form-control" value="<?= $apr['alamat'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>No. Handphone</label>
                                                                <input type="text" name="handphone" class="form-control" value="<?= $apr['handphone'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lokasi</label>
                                                                <input type="text" name="lokasi" class="form-control" value="<?= $apr['lokasi'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Gambar</label>
                                                                <input type="file" id="file_upload" class="custom" name="file_upload" onchange="previewimg()">
                                                            </div>
                                                            <img src="<?= base_url('uploads/' . $apr['foto']) ?>" width="100" alt="" class="mb-3 img-preview">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

            <footer class="main-footer text-center fixed-bottom text-dark">
                <strong>&copy; Copyright <strong>DESA LENGKONG</strong> | All Rights Reserved</a></strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>/template/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="<?= base_url('/template/dist') ?>/js/demo.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url() ?>/template/dist/js/pages/dashboard.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>/rupiah.js"></script>


        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <!-- dark mode -->
        <script>
            var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
            var currentTheme = localStorage.getItem('theme');
            var mainHeader = document.querySelector('.main-header');

            if (currentTheme) {
                if (currentTheme === 'dark') {
                    if (!document.body.classList.contains('dark-mode')) {
                        document.body.classList.add("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-light')) {
                        mainHeader.classList.add('navbar-dark');
                        mainHeader.classList.remove('navbar-light');
                    }
                    toggleSwitch.checked = true;
                }
            }

            function switchTheme(e) {
                if (e.target.checked) {
                    if (!document.body.classList.contains('dark-mode')) {
                        document.body.classList.add("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-light')) {
                        mainHeader.classList.add('navbar-dark');
                        mainHeader.classList.remove('navbar-light');
                    }
                    localStorage.setItem('theme', 'dark');
                } else {
                    if (document.body.classList.contains('dark-mode')) {
                        document.body.classList.remove("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-dark')) {
                        mainHeader.classList.add('navbar-light');
                        mainHeader.classList.remove('navbar-dark');
                    }
                    localStorage.setItem('theme', 'light');
                }
            }

            toggleSwitch.addEventListener('change', switchTheme, false);
        </script>

        <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>/plugins/toastr/toastr.min.js"></script>
        <script>
            $(function() {

                <?php if (session()->has("success")) { ?>
                    Swal.fire({
                        icon: 'success',
                        title: 'Mantap',
                        text: '<?= session("success") ?>'
                    })
                <?php } ?>
            });
        </script>
        <script>
            $(function() {

                <?php if (session()->has("error")) { ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...!',
                        text: '<?= session("error") ?>'
                    })
                <?php } ?>
            });
        </script>
        <script>
            function previewimg() {
                const file_upload = document.querySelector('#file_upload');
                const custom = document.querySelector('.custom');
                const imgpreview = document.querySelector('.img-preview');

                custom.textContent = file_upload.files[0].name;

                const fileupload = new FileReader();
                fileupload.readAsDataURL(file_upload.files[0]);

                fileupload.onload = function(e) {
                    imgpreview.src = e.target.result;
                }
            }
        </script>
</body>

</html>