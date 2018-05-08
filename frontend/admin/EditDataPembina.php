<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Data.php");

    $pembina = new Pembina;
    $EditDataPembina = $pembina->EditDataPembina($_GET['NIP']);    
?>

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
			<table class = "tabel7">
			<tr>
			<th><b>EDIT DATA PEMBINA</b></th>
			</tr>
                <?php
					while ($ubah = $EditDataPembina->fetch_array()){
				?>
                 <form action="process.php?aksi=updateDataPembina" method="post" enctype="multipart/form-data">                       
                        
                     <table border="3" class="tabel8">
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="hidden" name="NIP" value="<?php echo $ubah['NIP']  ?>">
                                <input type="text" name="Nama" value="<?php echo $ubah['Nama'] ?>">
                            </td>
                        </tr>
						
						<tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="Alamat" value="<?php echo $ubah['Alamat'] ?>">
                            </td>
                        </tr>
						
						<tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" name="Tempat_lahir" value="<?php echo $ubah['Tempat_lahir'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" Name="Tanggal_lahir" value="<?php echo $ubah['Tanggal_lahir'] ?>">
                            </td>
                        </tr>
                       
					    <tr>
                            <td>Jabatan</td>
                            <td>
                                <input type="text" Name="Jabatan" value="<?php echo $ubah['Jabatan'] ?>">
                            </td>
                        </tr>
                         
                        <tr>
                            <td>No.HP</td>
                            <td><input type="text" Name="No_Telpn" value="<?php echo $ubah['No_Telpn'] ?>">
                            </td>
                        </tr>
						
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="text" Name="Pass" value="<?php echo $ubah['Pass'] ?>">
                            </td>
                        </tr>
                         
                        <tr>
                            <td>Upload Foto</td>
                            <td><input type="file" name="Foto" accept="image/*"/></td>
                         </tr>
                
						<td>
							<a href="DataPembina.php"><input type="submit" class="Input-btn" name="back" value="Back"/></a>
						</td>
                            <td><input type="submit" value="Simpan"></td>
                       
                    </table>
                    <?php } ?>
                 </form>
                </table>
            </div>
        </div>
    </body>
</html>