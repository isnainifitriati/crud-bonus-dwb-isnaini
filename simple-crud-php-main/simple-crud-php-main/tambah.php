<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TAMBAH DATA</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">TAMBAH DATA</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputNis" class="form-label">Nim</label>
          <input type="number" class="form-control" id="inputNis" name="nim" placeholder="Masukan Nim Mahasiswa">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukan Nama mahasiswa">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="inputKelas" name="Jurusan" placeholder="Masukan Jurusan mahasiswa">
        </div>
        <input name="daftar" type="submit" class="btn btn-warning text-white" value="Tambah">
        <a href="index.php" type="button" class="btn btn-danger text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nis = $_POST['nim'];
      $nama = $_POST['nama'];
      $kelas = $_POST['Jurusan'];

      // Membuat Query
      $query = "INSERT INTO tb_siswa (nis, nama, kelas) VALUES('".$nis."', '".$nama."', '".$kelas."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>