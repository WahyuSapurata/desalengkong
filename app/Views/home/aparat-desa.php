<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url() ?>/img/logo1.png">

    <!-- Bootstr<ap CSS File -->
    <link href="<?= base_url() ?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome/css/all.min.css">
    <link href="<?= base_url() ?>/depan/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Main Stylesheet File -->
    <link href="<?= base_url() ?>/depan/css/style.css" rel="stylesheet">

    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">


</head>

<body>

    <!-- <audio hidden autoplay loop>
    <source src="<?= base_url() ?>/audio.mp3" type="audio/mp3">
  </audio> -->

    <!-- <audio src="<?= base_url() ?>/audio.mp3" autoplay="autoplay" hidden="hidden"></audio> -->

    <section class=" container-section bg-success shadow">
        <div class="content-0">
            <span class="ml-2 mr-0 text-white coba">WAKTU :</span>
            <span class="mr-2 ml-0 text-white coba" id="jam"></span>
        </div>

        <div class="content-1 d-inline-flex">
            <marquee class="marque text-dark">
                <img class="img-marque" src="<?= base_url() ?>/img/logo1.png">
                DESA LENGKONG KECAMATAN BUA KABUPATEN LUWU
                <img class="img-marque" src="<?= base_url() ?>/img/logo1.png">
            </marquee>
        </div>

        <div class="content-2 position-relative float-right">
            <span class="m-2 text-white" id="tanggalwaktu"></span>
        </div>
    </section>
    <section class="s-jumbotron2">
        <!--==========================
    Header
    ============================-->
        <header id="header" class="fixed-top">
            <div class="container-fluid">
                <div id="logo" class="pull-left clock">
                    <a class="h5co"><img src="<?= base_url() ?>/img/logo1.png" width="100px" height="100px"> </a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="<?= base_url() ?>">BERANDA</a></li>
                        <li><a href="<?= base_url('home/aparat_desa') ?>">Lokasi Lengkong</a></li>
                        <li><a href="<?= base_url('home/data_penduduk') ?>">DATA PENDUDUK</a></li>
                        <li><a href="<?= base_url('login/index') ?>" class="text-danger">LOGIN</a></li>
                    </ul>
                    <hr class="garis">
                </nav><!-- #nav-menu-container -->
            </div>

        </header><!-- #header -->
        <section id="intro" style="height: auto;">
            <div class="slider">
                <div class="background-video">
                    <img src="<?= base_url() ?>/img/gambarku1.jpg" class="video-fluid1 d-inline-block" alt="">
                </div>
                <div class="background-video">
                    <img src="<?= base_url() ?>/img/gambarku2.jpg" class="video-fluid1 d-inline-block" alt="">
                </div>
            </div>
        </section><!-- #intro -->
    </section>

    <main id="main">


        <!--==========================
      Clients Section
      ============================-->
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 wow fadeInDown">
                        <header class="section-header">
                            <h6>Aparat Desa</h6>
                        </header>
                        <?php foreach ($aparat as $apr) { ?>
                            <div class="card d-inline-block m-2" style="background-color: rgba(0, 168, 89, 0.3);">
                                <div class="p-3">
                                    <h6 class="text-nama">Nama</h6>
                                    <h6 class="text-nama nama2">: <?= $apr['nama_panggilan'] ?></h6>
                                    <h6>Jabatan : <?= $apr['jabatan'] ?></h6>
                                    <a href="<?= base_url('home/detail_lokasi/' . $apr['id_aparat']) ?>" class="btn btn-bg btn-dark mt-2 pb-0 pt-0 btn-detail">Detail</a>
                                </div>
                            </div>
                        <?php } ?>
                        <hr class="bg-dark">
                        <header class="section-header">
                            <h6>Lokasi Lengkong</h6>
                        </header>
                        <?php foreach ($lokasi as $lks) { ?>
                            <div class="card d-inline-block m-2" style="background-color: rgba(0, 168, 89, 0.3);">
                                <div class="p-3">
                                    <h6>Nama Tempat : <?= $lks['nama_lokasi'] ?></h6>
                                    <a href="<?= base_url('home/detail_tempat/' . $lks['id_lokasi']) ?>" class="btn btn-bg btn-dark mt-2 pb-0 pt-0 btn-detail">Detail</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-5" style="border-left: 2px solid; width:auto;">
                        <div class="about-col bg-success" style="height: auto;">
                            <div class="about-cels pt-0">
                                <header class="section-header">
                                    <h6 class="mb-0">Pengumuman</h6>
                                </header>
                                <div class="p-3">
                                    <?php foreach ($pengumuman as $pgm) { ?>
                                        <h6 class="text-dark m-0"><strong>&spades; <?= $pgm['isi'] ?></strong></h6>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-dark">
                        <h4 class="mb-2">Contact Me</h4>
                        <div class="row row-form justify-content-center">
                            <div class="col" style="padding: 5px 15px 15px 15px;">
                                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                                    <strong>Terimah kasih!</strong> Pesan anda sudah kami terima.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <form method="POST" action="<?= base_url('home/sendEmail') ?>">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-kirim">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #testimonials -->

    </main>

    <!--==========================
    Footer
    ============================-->
    <footer id="footer">


        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-3 pl-5">
                    <div class="img-footer">
                        <img src="<?= base_url() ?>/img/logo1.png" width="80" class="img-fluid" alt="">
                        <h3 class="nama">DESA LENGKONG</h3>
                    </div>
                </div>
                <div class="col-md-5 pl-2 pr-2">
                    <h3>Tentang Desa Lengkong</h3>
                    <p>Desa lengkong adalah desa yang berada di kabupaten luwu yang memiliki, diharapkan website ini dapat membantu aparat desa.</p>
                    <div id="p" class="d-inline-block">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p class="lokasi mt-0" style="position: absolute; display: inline-block;">
                        <small>Desa Lengkong, Kec. Bua, Kabupaten Luwu, Sulawesi Selatan 91991</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <h3>Hubungi Kami</h3>
                    <i class="far fa-envelope"></i>
                    <h5>
                        <a href=""><small>pmdslengkong@gmail.com</small></a>
                    </h5>
                    <h3>Sosial Media</h3>
                    <a href=""><i class="fab fa-instagram mr-3"></i></a>
                    <a href=""><i class="fab fa-facebook "></i></a>
                </div>
            </div>
            <hr class="bg-dark">
            <div class="copyright">
                &copy; Copyright <strong>DESA LENGKONG</strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url() ?>/depan/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/superfish/hoverIntent.js"></script>
    <script src="<?= base_url() ?>/depan/lib/superfish/superfish.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url() ?>/depan/contactform/contactform.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url() ?>/depan/js/main.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                arrows: false,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.your-class').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                pauseOnHover: true,
                prevArrow: "<i class='fas fa-chevron-left left_arrow'>",
                nextArrow: "<i class='fas fa-chevron-right right_arrow'>"
            });
        });
    </script>

    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;

        const marque = document.querySelector('.marque');
        marque.addEventListener('mouseenter', (event) => {
            event.target.stop();
        });
        marque.addEventListener('mouseleave', (event) => {
            event.target.start();
        })
    </script>

    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ' : ' + m + ' : ' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {
            duration: 3,
            delay: 1,
            text: 'DI WEBSITE DESA LENGKONG'
        });
        gsap.from('.jumbotron img', {
            duration: 1,
            rotateY: 360,
            opacity: 0
        });
        gsap.from('.table', {
            duration: 1.5,
            y: '-100%',
            opacity: 0,
            ease: 'bounce'
        });
        gsap.from('.clock', {
            duration: 2,
            y: '-100%',
            opacity: 0,
            ease: 'bounce'
        });
        gsap.from('.display-4', {
            duration: 1,
            x: -50,
            opacity: 0,
            ease: 'back'
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const galeryImage = document.querySelectorAll('.galery-img');

        galeryImage.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100;
            img.dataset.aosDuration = 1000;
        });

        AOS.init({
            once: true,
        });
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

</body>

</html>