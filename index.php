<?php

session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: welcome.php");
    exit;
}

if (isset($_POST["daftar"])) {

    if (tambah($_POST) > 0) {
        echo "
				<script>
					alert('Berhasil mendaftar !');
					document.location.href = 'index.php';
				</script>
			";
    } else {
        echo "
				<script>
					alert('Gagal mendafatar.');
					document.location.href = 'index.php';
				</script>";
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

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" width="50" class="d-inline-block align-top mt-0" alt="">
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
                            <a class="nav-link" href="#registration">Pendaftaran Anggota</a>
                        </li>
                        <li class="nav-item bg-danger ml-2">
                            <a class="nav-link text-white" href="logout.php">Logout</a>
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
                <hr class="my-4">
                <p class="teks-shadow">Daftar menjadi anggota Himatika periodesasi 2019-2020</p>
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
                    <div class="header-text text-center">
                        <h2 class="text-white font-weight-bold">Artikel Terbaru</h2>
                        <p class="text-white">Berita teknologi terbaru, tutorial pemrograman dan desain.</p>
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
                    <h5 class="mt-2">Kegiatan MAKRAB (Malam Akrab) di Papandayan.</h5>
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
        <div class="container mt-4">
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
                        <h5 class="card-title font-weight-bold">Ketua</h5>
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
                        <h5 class="card-title font-weight-bold">Wakil Ketua</h5>
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
                            <h5 class="card-title font-weight-bold">Sekretaris</h5>
                            <p class="card-text">Mia Midawati</p>
                            <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rata-tengah">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/profile/asri.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Bendahara</h5>
                            <p class="card-text">Asri Alawiyah</p>
                            <a href="organ.php" class="btn btn-primary">Lihat biodata</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rata-tengah">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/profile/triadi.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Humas</h5>
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

    <section class="sec4 contact" id="registration">
        <h2 class="text-center zindex text-white">Form pendaftaran anggota baru</h2>
        <br>
        <div class="container form-pendaftaran">
            <form action="" method="post">
                <div class="form-group">
                    <label for="namaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap Anda." id="namaLengkap"
                        name="nama" required>
                </div>
                <div class="form-group">
                    <label for="namaLengkap">Jurusan</label>
                    <input type="text" class="form-control" id="namaLengkap" name="jurusan" required>
                </div>
                <div class="form-group">
                    <label for="tglLahir">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tglLahir" name="tanggallahir" required>
                </div>
                <div class="form-group">
                    <label for="telpon">No. Telpon / Whatsapp</label>
                    <input type="text" class="form-control" id="telpon" placeholder="082100000000" name="telpon"
                        required>
                </div>
                <div class="form-group">
                    <label for="bersedia">Besedia mengikuti LDKM (Latihan dasar kepemimpinan mahasiswa)?</label>
                    <input type="text" class="form-control" id="bersedia" name="bersedia" placeholder="Bersedia / tidak"
                        required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="daftar">DAFTAR</button>
                    <button type="submit" class="btn btn-danger">RESET</button>
                </div>
            </form>
        </div>
        <div class="zindex text-center">
            <h2 class="text-white mt-5">Logout?</h2><br>
            <form action="logout.php">
                <button type="submit" class="btn btn-danger" name="logout">Logout</button>
            </form>
        </div>
    </section>

    <section class="sec5">
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
            </div>
            <div class="text-center alamat">
                <h5 class="font-weight-bold">Alamat</h5>
                <p class="ukuran-alamat">Jl. Pahlawan No.32, Sukagalih, Kec. Garut Kota, Kabupaten Garut, Jawa Barat
                    44151</p>
            </div>
        </footer>
        <div class="copyright text-center text-white font-weight-bold p-1">
            <p>Design by <a href="https://instagram.com/muhammadihsanansory_" class="text-light">@Muhamad Ihsan
                    Ansory</a> Copyright <i class="far fa-copyright"> 2019</i></p>
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