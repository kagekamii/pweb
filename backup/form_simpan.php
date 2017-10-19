<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="image/kardi logo.jpg" type="favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>KARDI ONLINE SHOP</title>
</head>


<body leftmargin="10" topmargin="10" bottommargin="10" rightmargin="10">

<table class="menubar" align="center">
<tr><td>
<p><h5><center>Tambah Data Barang</center></h5></p>	
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Id Barang</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td><input type="text" name="harga"></td>
  </tr>
  <tr>
    <td>Foto Barang</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <br>
  <hr>
  <center><input type="submit" value="Simpan">
  <a href="daftarbarang.php"><input type="button" value="Kembali"></a></center>
  </form>
</td><tr></table>
</body>
</html>