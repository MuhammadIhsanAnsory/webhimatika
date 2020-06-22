<?php

require 'functions.php';

$anggota = query("SELECT * FROM anggota");

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Susunan Organisasi</title>
</head>

<body class="organ-bg">

    <div class="container mt-5 mb-5">

        <table border="1" cellpadding="10" cellspacing="0">


            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NIM</th>
                <th>Jabatan</th>
                <th>Foto Profil</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($anggota as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["jabatan"]; ?></td>
                <td><img src="img/profile/<?= $row["gambar"]; ?>" alt="" style="width: 80px"></td>
            </tr>

            <?php $i++; ?>

            <?php endforeach; ?>

        </table>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>