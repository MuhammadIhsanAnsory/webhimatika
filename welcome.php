<?php
session_start();
require 'functions.php';

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['register']) > 0) {
    if (registrasi($_POST)) {
        echo "<script>
					alert('Registrasi berhasil ! Silahkan lanjutkan Login.');
				</script>
            ";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang Di Himatika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img class="logo-himatika" src="img/logo.png" width="50" class="d-inline-block align-top"
                            alt="">
                    </a>
                </nav>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="#home">Home<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#article">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#organization">Organization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#registration">Registration</a>
                        </li>
                        <li class="nav-item bg-success ml-2">
                            <a class="nav-link text-white" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="jumbotron text-center banner" id="home">
        <div class="container">
            <div class="text-in-jumbotron">
                <h1 class="display-4 teks-shadow">Selamat Datang</h1>
                <p class="lead teks-shadow">di Official Website HIMATIKA AMIK GARUT</p>
                <hr class="my-4 teks-shadow">
                <p class="teks-shadow"> Bersama membangun karakter mahasiswa dan ikut andil dalam kemajuan teknologi.
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#registration" role="button">Daftar</a>
                </p>
            </div>
        </div>
    </div>

    <section class="blog" id="article">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="header-text text-center text-light">
                        <h2 class="font-weight-bold">Artikel Terbaru</h2>
                        <p>Berita teknologi terbaru, tutorial pemrograman dan desain.</p>
                    </div>
                </div>
            </div>
            <div class="media">
                <img class="mr-3" src="img/workshop.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-2">Workshop Internet Security Amik 2019</h5>
                    <p>
                        Kegiatan workshop "Internet Security" yang diadakan 4 Mei 2019 yang bertempat di gedung aula
                        AMIK GARUT.
                        <br>
                        <a href="#">Read more...</a>
                    </p>
                </div>
            </div>
            <div class="media">
                <img class="mr-3" src="img/mendali.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-2">Medali Olimpiade Tokyo 2020 yang Terbuat Dari Limbah Elektronik</h5>
                    <p>Logam merupakan bahan yang sering kita gunakan dalam banyak hal, dan tak terkecuali sebagai
                        medali yang diberikan kepada atlet di acara olahraga. Namun, untuk menyelenggarakan acara besar
                        seperti Olimpiade, tentunya dibutuhkan logam yang banyak untuk membuat medali yang diberikan
                        kepada para pemenang di setiap pertandingan.
                        <br>
                        <a href="#">Read more...</a>
                    </p>
                </div>
            </div>
            <div class="media">
                <img class="mr-3" src="img/makrab.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0">Kegiatan MAKRAB (Malam Akrab) di Papandayan.</h5>
                    <p>Dalam rangka mempererat silaturahmi antar anggota, HIMATIKA mengadakan kegiatan outbond yang
                        bertemakan Makrab atau malam akrab. Kegiatan ini dilaksanakan dalam rangka meningkatkan
                        kekompakan dan persaudaraan antar anggota.
                        <br>
                        <a href="#">Read more...</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2" id="aboutus">
        <div class="container h100">
            <div class="contentBox h100">
                <div class="kebawah">
                    <h2>Tentang Kami</h2>
                    <p>HIMATIKA AMIK GARUT merupakan sebuah organisasi kemahasiswaan yang menaungi mahasiswa jurusan
                        Teknik Informatika di Amik Garut.</p>
                    <a href="#" class="btn btnD1">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3 text-center" id="organization">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText text-center">
                        <h2>Susunan Organisasi</h2>
                        <p>Periodisasi 2019-2020</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 rata-tengah">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/profile/taufik.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ketua</h5>
                        <p class="card-text">Taufik Kurnia</p>
                        <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12 rata-tengah">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/profile/ihsan.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wakil Ketua</h5>
                        <p class="card-text">Muhamad Ihsan Ansory</p>
                        <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row rata-tengah">
                <div class="col-md-4 rata-tengah">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/profile/mia.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris</h5>
                            <p class="card-text">Mia Midawati</p>
                            <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rata-tengah">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/profile/asri.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bendahara</h5>
                            <p class="card-text">Asri Alawiyah</p>
                            <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rata-tengah">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/profile/triadi.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Humas</h5>
                            <p class="card-text">Triadi Sulaiman</p>
                            <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <a href="organ.php" class="btn btn-light">Lihat selengkapnya</a>
        </div>
    </section>

    <section class="contact" id="registration">
        <div class="container text-light">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-text text-center">
                        <h2>Pendaftaran</h2>
                        <p>Kami membuka pendaftaran anggota HIMATIKA baru untuk periodisasi 2019-2020. <br> Silahkan
                            buat akun terlebih dahulu untuk melakukan pendaftaran anggota :</p>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <div class="container container-login">
                    <h4 class="text-center">Daftar</h4>
                    <div class="form-group">
                        <label for="">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan username Anda" name="username"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-unlock-alt"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Masukkan password Anda"
                                name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-unlock-alt"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Masukkan password Anda"
                                name="password2" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-regis" name="register">Daftar</button>
                    <button type="reset" class="btn btn-danger btn-regis">Reset</button>
                </div>
                <br>
                <div class="text-center top">
            </form>
            <p>Sudah punya akun?</p>
            <form action="login.php">
                <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
            </form>
        </div>
        </div>
    </section>

    <section>
        <footer class="text-white pt-4 pb-4 pl-5">
            <div>
                <h3 class="text-center">Follow us</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <i class="fab fa-facebook-square mr-3"></i>
                    <i class="fab fa-instagram mr-3"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
                <!-- <div class="col-md-4">
                    <form action="" href="">
                    </form>
                </div>
                <div class="col-md-4">
                </div> -->
            </div>
            <div class="text-center alamat">
                <h5 class="font-weight-bold">Hubungi Kami</h5>
                <p class="ukuran-alamat">Jl. Pahlawan No.32, Sukagalih, Kec. Garut Kota, Kabupaten Garut, Jawa Barat
                    44151</p>
            </div>
        </footer>
        <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
            <p>Design by <a href="https://instagram.com/muhammadihsanansory_">@Muhamad Ihsan Ansory</a> Copyright <i
                    class="far fa-copyright"> 2019</i></p>
        </div>
    </section>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/4f80c9f314.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>