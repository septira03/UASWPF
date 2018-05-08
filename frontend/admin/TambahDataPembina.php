<html>
    <head>
        <title> Data Pembina </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
            <div class="header">
                <h2><a class="judul" href="index.html">SMA NEGERI 1 BANYUWANGI</a></h2>
            </div>
            <div class="menu">
                <nav class="navigation">
                    <ul class="mainmenu">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="DataSiswa.php">Data Siswa</a></li>
                        <li><a href="DataGuru.php">Data Guru</a></li>
                        <li><a class="dipilih" href="DataPembina.php">Data Pembina</a></li>
                        <li><a href="">Akademik</a>
                            <ul class="submenu">
                                <li><a href="">Isi Soal & Jawaban</a></li>
                                <li><a href="">Lihat Soal & Jawaban</a></li>
                                <li><a href="">Hasil</a></li>
                            </ul>
                        </li>
                        <li><a href="">Ekstra Kulikuler</a>
                            <ul class="submenu">
                                <li><a href="">Pilihan Ekstra Kulikuler</a></li>
                                <li><a href="">Peserta Ekstra Kulikuler</a></li>
                                <li><a href="">Ujian Ekstra Kulikuler</a></li>
                            </ul>
                        </li>
                        <li><a href="">Data Base</a></li>
                    </ul>
                </nav>
            </div>
			
	  <div class="isi">
			<table class = "tabel5">
			<tr>
			<th><b>TAMBAH DATA PEMBINA</b></th>
			</tr>
            <table border="3" class="tabel6">
            <form action="process.php?aksi=tambahDataPembina" method="post" enctype="multipart/form-data">
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<tr for = "NIP">
				<td>NIP </td>
				<td>: &nbsp;&nbsp;<input type="text" name="NIP" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Nama">
				<td>Nama </td>
				<td>: &nbsp;&nbsp;<input type="text" name="Nama" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Alamat">
				<td>Alamat</td>
				<td>: &nbsp;&nbsp;<input type="text" name="Alamat" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Tempat_lahir ">
				<td>Tempat Lahir</td>
				<td>: &nbsp;&nbsp;<input type="text" name="Tempat_lahir" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Tanggal_lahir">
				<td>Tanggal Lahir</td>
				<td>: &nbsp;&nbsp;<input type="date" name="Tanggal_lahir" maxlength="30" size="40"></td>				
			</tr>
			
			<tr for = "Jabatan">
				<td>Jabatan </td>
				<td>: &nbsp;&nbsp;<input type="text" name="Jabatan" maxlength="30" size="40"></td>
			</tr>
                
            <tr for = "No_Telpn">
				<td>No.Hp </td>
				<td>: &nbsp;&nbsp;<input type="text" name="No_Telpn" maxlength="30" size="40"></td>
			</tr>
			
			<tr for = "Pass">
				<td>Password</td>
				<td>: &nbsp;&nbsp;<input type="text" name="Pass" maxlength="30" size="40"></td>
			</tr>
			
            <tr>
                <td>Upload Foto</td>
                <td><input type="file" name="Foto" accept="image/*"/></td>
            </tr>
                
			<td>
				<input type="submit" class="Input-btn1" name="tambah" value="Simpan"/>
			</td>
		   </form>
			
			<td>
				<a href="DataPembina.php"><input type="submit" class="Input-btn" name="back" value="Back"/></a>
			</td>
                </table>
          </table>
            </div>
        </div>
</body>          
</html>