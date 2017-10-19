
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="image/kardi logo.jpg" type="favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>KARDI ONLINE SHOP</title>
</head>


<body leftmargin="10" topmargin="10" bottommargin="10" rightmargin="10">
<?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data id yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data barang berdasarkan id yang dikirim
  $query = "SELECT * FROM barang WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

<table class="menubar" align="center">
<tr><td>
<p><h5><center>Edit Data Barang</center></h5></p>  
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br><br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  
  <br><hr>
  <center><input type="submit" value="Ubah">
  <a href="daftarbarang.php"><input type="button" value="Batal"></a></center>
  </form>
</tr></td></center>
</body>
</html>