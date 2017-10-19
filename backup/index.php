<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="image/kardi logo.jpg" type="favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.bagian4 table tr td blockquote {
	color: #30F;
}
</style>
<title>KARDI ONLINE SHOP</title>
</head>

<body leftmargin="0" topmargin="0" bottommargin="0" rightmargin="0">


<img src="image/kardi.jpg" width="100%" height="270"/>



    <table width="100%" height="30" align="center" id="menubar" class="menubar">
      <tr>
        <td height="20"><ul id="menu" class="menu">
          <li><a href="login.php"><center>ADMIN</center></a></li>
          </ul>
        </td>
      </tr>
    </table>
    <br />



<center>
<form class="bagian4">
<br>
    <table width="1170" height="1138" border="0" align="center" cellpadding="0" cellspacing="7">
		<tr>
        <!--sidebar A-->
		  <td width="231" rowspan="4" valign="top">
          	<h5>About Kardi Shop</h5>
          	<p><img src="image/kardi logo.png" width="70" height="70" class="gambar"/></p>
            <p style="font-size:small"><font color="#00CCFF"><b>Kardi Online Shop</b></font>       
       	    <p style="font-size:small">Kardi shop merupakan sebuah e-commerce yang berfokus pada menjualan barang barang bekas yang masih layak         
			<br><br><br><br><br><br><br><br>
			<p style="font-size:small"><font color="#00CCFF"><b>HUBUNGI KAMI<br></b></font></p>		
			<p style="font-size:small" class="menubar">WA : 456789
			<p style="font-size:small" class="menubar">IG : 34567890
			<p style="font-size:small" class="menubar">FB : 456789
            
			</p>
			</td>
        <!--end of sidebar-->
        
        <!--post 1-->
		  <td width="749" rowspan="4" valign="top" class="bagian">
		  
		  <p style="font-size:small"><font color="#00CCFF"><b>DAFTAR BARANG<br></b></font></p>
  <table border="1" width="100%" align="center" valign="center" class="bagian3">
  <tr >
  
    <th align="center" valign="center" bgcolor="#FFFFFF" class="bagian2">Foto</th>
    <th align="center" valign="center" bgcolor="#FFFFFF" class="bagian2">Nama</th>
    <th align="center" valign="center" bgcolor="#FFFFFF" class="bagian2">Harga</th>
  </tr>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM barang"; // Query untuk menampilkan semua data barang1
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr align=center valign=center>";
    echo "<td><img src='image/".$data['foto']."' width='150' height='150'></td>";
	echo "<td>".$data['nama']."</td>";
	echo "<td>".$data['harga']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
		  
		  </td>
		  
		  
		  <th height="28" align="center" valign="center" bgcolor="#FFFFFF" class="bagian2">WHAT'S HOT</th>
	  </tr>
		<tr>
		  <td width="163" height="166" align="center" valign="top" bgcolor="#FFFFFF" class="bagian3">
            <p style="font-size:small;"> &nbsp; NAMAITEM1</p>
				<img src="image/kardi.jpg" width="90%" height="125"/>
			<p style="font-size:small;"> &nbsp; Rp.00000</p>	
				<hr>
            <p style="font-size:small;"> &nbsp; NAMAITEM2</p>
                <img src="image/kardi.jpg" width="90%" height="125"/>
			<p style="font-size:small;"> &nbsp; Rp.00000</p>	
				<hr>				
			<p style="font-size:small;"> &nbsp; NAMAITEM3</p>
                <img src="image/kardi.jpg" width="90%" height="125"/>
            <p style="font-size:small;"> &nbsp; Rp.00000</p>	
				<hr>
			<p style="font-size:small;"> &nbsp; NAMAITEM4</p>
                <img src="image/kardi.jpg" width="90%" height="125"/>
			<p style="font-size:small;"> &nbsp; Rp.00000</p>			
                <br>          </td>
	  </tr>
		<tr>
		  <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
	  </tr>
	</table>
<br>
</form>
</center>

<table width="100%%" height="36" border="0">
    	<tr>
        	<td class="menubar"><center>Copyright © <a herf="#">KARDI ONLINE SHOP</a></center></td>
      	</tr>
</table>

</body>
</html>
