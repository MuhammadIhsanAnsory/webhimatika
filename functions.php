<?php


$conn = mysqli_connect("localhost", "root", "", "db_himatika");

function query($query)
{
  global $conn;
  $result =     mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{

  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $tanggallahir = htmlspecialchars($data["tanggallahir"]);
  $telpon = htmlspecialchars($data["telpon"]);
  $bersedia = htmlspecialchars($data["bersedia"]);

  // // upload gambar
  // $gambar = upload();

  // if (!$gambar) {
  //     return false;
  // }


  // query insert data
  $query = "INSERT INTO daftar VALUES
			('', '$nama',  '$jurusan', '$tanggallahir', '$telpon', '$bersedia')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  if ($error === 4) {
    echo "<script>
					alert('Pilih gambar terlebih dahulu!');
					</script>
			";
    return false;
  }

  // cek apakah file yang diupload berupa gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
					alert('Yang Anda upload bukan gambar!');
					</script>
			";
    return false;
  }

  if ($ukuranFile > 1600000) {
    echo "<script>
					alert('Ukuran gambar terlalu besar!');
					</script>
			";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/profile/' . $namaFileBaru);

  return $namaFileBaru;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{

  global $conn;

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $email = htmlspecialchars($data["email"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }


  // query insert data
  $query = "UPDATE mahasiswa SET
					nama='$nama',
					nim='$nim',
					jurusan='$jurusan',
					email='$email',
					gambar='$gambar'
					WHERE id=$id
	
		";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa WHERE 
		nama LIKE '%$keyword%' OR
		nim LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%' OR
		email LIKE '%$keyword%'
		";
  return query($query);
}

function registrasi($data)
{
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // cek apakah username sudah dipakai
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
				alert('Username sudah dipakai!');
				</script>
			";
    return false;
  }

  if ($password !== $password2) {
    echo "<script>
				alert('Konfirmasi password tidak sesuai!');
				</script>
			";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password') ");

  return mysqli_affected_rows($conn);
}
