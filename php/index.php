<?php
session_start();

if (isset($_SESSION["login"]) == true) {
    echo "<script>
                alert('Berhasil masuk sebagai admin');
            </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/solid.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/vendor/css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#hero">BRITA DESA</a>
        </div>
        <div class="navbarbot container justify-content-center">
            <ul class="nav">
                <li class="ms-3">
                    <a class="nav-link" href="#hero">
                        <span class="icons">
                            <i class="fa-solid fa-house fa-xl"></i>
                        </span>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="nav-link" href="wisata_page.html">Profil Desa</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link" href="data_desa.html">Data Desa</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link" href="bumdes.html">BUMDes</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link" href="wisata_page.html">Wisata</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link" href="layanan.html">Layanan Desa</a>
                </li>
                <li class="ms-3 login">
                    <a class="nav-link" href="login.php"><i class="fa-regular fa-user"></i>Login</a>
                </li>

                <?php if (isset($_SESSION["login"]) == true) : ?>
                    <li class="ms-3 logout">
                        <a class="nav-link" href="logout.php" name="logout" onclick="return confirm('Yakin ingin logout?');"><i class="fa-regular fa-user"></i>Logout</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-6">
                    <h2>WEBSITE SISTEM INFORMASI</h2>
                    <h1>DESA</h1>
                    <h1>KOTAJIN UTARA</h1>
                    <h3>Kec. Atinggola</h3>
                    <h3>Kab. Gorontalo Utara Prov. Gorontalo</h3>
                </div>
                <div class="col-3">
                    <div class="logo">
                        <img src="assets/vendor/img/logo prov gorontalo.png" alt="logo provinsi Gorontalo" title="Prov. Gorontalo">
                    </div>
                </div>
                <div class="col-3">
                    <div class="logo">
                        <img src="assets/vendor/img/logo gorontalo barat.png" alt="logo Kabupaten gorontalo utara" title="Kab. Gorontalo Utara">
                    </div>
                </div>
                <div class="garis">
                    <br>
                    <hr class="border border-light border-2 opacity-100 ms-5">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <section id="berita">
        <div class="header mt-3">
            <h1 class="ms-4">BERITA TERKINI</h1>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="row align-items-center">
                <div class="col">
                    <span class="icons">
                        <i class="fa-solid fa-caret-left fa-4x"></i>
                    </span>
                </div>
                <div class="col-md-10">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="profil col-md-2">
                                <img src="assets/vendor/img/Oreki.jpeg" alt="" width="100" class="rounded-circle img-thumbnail mt-2">
                            </div>
                            <?php if (isset($_SESSION["login"]) == true) : ?>
                                <div class=" col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p contenteditable="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                            laboriosam quisquam eaque optio, labore animi minus? Necessitatibus eius dolore
                                            aliquid libero incidunt excepturi quidem accusamus quo, earum commodi id omnis
                                            rem culpa repudiandae, consectetur provident beatae qui architecto cumque dicta
                                            itaque hic nobis? Expedita ratione soluta possimus, quidem ullam quas veritatis
                                            a corporis optio nisi dicta perferendis, repellat fuga labore nesciunt impedit
                                            voluptatem et autem assumenda atque consequuntur, neque incidunt alias ducimus?
                                            Laborum dolore id eveniet sequi distinctio aut magnam deleniti eligendi
                                            inventore soluta. Omnis maiores ullam, incidunt molestiae libero, ea iste vel
                                            impedit voluptas fugit vitae, sunt quos veritatis.</p>>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class=" col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                            laboriosam quisquam eaque optio, labore animi minus? Necessitatibus eius dolore
                                            aliquid libero incidunt excepturi quidem accusamus quo, earum commodi id omnis
                                            rem culpa repudiandae, consectetur provident beatae qui architecto cumque dicta
                                            itaque hic nobis? Expedita ratione soluta possimus, quidem ullam quas veritatis
                                            a corporis optio nisi dicta perferendis, repellat fuga labore nesciunt impedit
                                            voluptatem et autem assumenda atque consequuntur, neque incidunt alias ducimus?
                                            Laborum dolore id eveniet sequi distinctio aut magnam deleniti eligendi
                                            inventore soluta. Omnis maiores ullam, incidunt molestiae libero, ea iste vel
                                            impedit voluptas fugit vitae, sunt quos veritatis.</p>>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-md-4">
                                <img src="assets/vendor/img/Naruto.jpeg" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <span class="icons">
                        <i class="fa-solid fa-caret-right fa-4x"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri">
        <div class="header mt-3">
            <h1 class="ms-4">GALERI DESA</h1>
        </div>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <span class="icons">
                        <i class="fa-solid fa-caret-left fa-4x"></i>
                    </span>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col mt-3">
                            <img src="assets/vendor/img/batujin (galeridesa).jpeg" alt="">
                        </div>
                        <div class="col mt-3">
                            <img src="assets/vendor/img/kantor desa.jpeg" height="110px" alt="">
                        </div>
                        <div class="col mt-3">
                            <img src="assets/vendor/img/paud (galeri desa).jpeg" alt="">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col mt-3">
                            <img src="assets/vendor/img/lampu jalan (galeri desa).png" alt="">
                        </div>
                        <div class="col mt-3">
                            <img src="assets/vendor/img/pantai(galeridesa).jpeg" height="110px" alt="">
                        </div>
                        <div class="col mt-3">
                            <img src="assets/vendor/img/pantaiminanga(main).jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <span class="icons">
                        <i class="fa-solid fa-caret-right fa-4x"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <footer class="text-center pb-3 mt-5">
        <div class="container">
            <div class="row justify-content-start pt-4">
                <div class="col-md-3 text-start">
                    <h2>Desa KOTAJIN UTARA</h2>
                    <p class="lh-sm">W466+6C<span>4</span> , Jl. Trans Sulawesi, Kotajin Utara, <br>
                        kec. Atinggola, Kab. Gorontalo Utara, <br> Gorontalo, Indonesia</p>
                    <h5>KODE POST 96253</h5>
                </div>
                <div class="col-3">
                    <h3>Hubungi Kami</h3>
                    <ul>
                        <li><span><a href="#" class="text-decoration-none text-white"><i class="fa-solid fa-envelope"></i>
                                    britasdesa@gamil.com</a></span></li>
                        <li><span><a href="#" class="text-decoration-none text-white"><i class="fa-brands fa-whatsapp"></i>
                                    08xxxxxxxxxx</a></span></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h3>Jam Kerja :</h3>
                    <p>Senin s.d Jumat : 08.00 - 17.00</p>
                </div>
                <div class="col-3">
                    <img src="assets/vendor/img/barcode lokasi kotajin(ProfilDesaPage).png" width="150px" alt="">
                    <p>lokasi desa</p>
                </div>
            </div>
        </div>

        <!-- <span class="icons">
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-sort-up fa-5x"></i>
            </a>
        </span> -->
    </footer>





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>

    <!-- fontawesome -->
    <script src="assets/vendor/fontawesome/js/all.js"></script>
    <script src="assets/vendor/fontawesome/js/brands.js"></script>
    <script src="assets/vendor/fontawesome/js/solid.js"></script>
</body>

</html>