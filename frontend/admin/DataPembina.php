<?php
    include ("configs/config_db.php");
    include ("classes/Database.php");
    include ("classes/Data.php");
	
    $pembina			= new  Pembina;
    $daftarDatapembina	= $pembina->daftarDatapembina();
?>

    <html>

    <head>
        <title> Data Pembina </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>
        <div class="header">
            <h2><a class="judul" href="home.php">SMA NEGERI 1 BANYUWANGI</a></h2>
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
                    <li><a href="Logout.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
        <div class="isi">
            <h2><a class="tambah" href="TambahDataPembina.php">&nbsp;&nbsp;[+] Tambah Data</a></h2>
            <table class="table1">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No.Telpn</th>
                    <th>Pembina Ekskul</th>
                    <th>Opsi</th>
                </tr>

                <?php
				$No =1;
					foreach ($daftarDatapembina as $pembina){
				?>
                    <tr>
                        <td>
                            <?php echo $No++; ?>
                        </td>
                        <td><img src="images/<?php echo $pembina["Foto"]?>"width='90' height='90'></td>
                        <td>
                            <?php echo $pembina["NIP"]?>
                        </td>
                        <td>
                            <?php echo $pembina["Nama"]?>
                        </td>
                        <td>
                            <?php echo $pembina["Alamat"]?>
                        </td>
                        <td>
                            <?php echo $pembina["Tempat_lahir"]?>
                        </td>
                        <td>
                            <?php echo $pembina["Tanggal_lahir"]?>
                        </td>
                        <td>
                            <?php echo $pembina["Jabatan"]?>
                        </td>
                         <td>
                            <?php echo $pembina["No_Telpn"]?>
                        </td>

                        <td>
                            <a href="EditDataPembina.php?NIP=<?php echo $pembina['NIP'];?>">Edit</a>
                            <a href="process.php?NIP=<?php echo $pembina['NIP'];?>&FileFoto=<?php echo $pembina['Foto'];?>&aksi=hapusDataPembina">Hapus</a>
                        </td>
                    </tr>
                    <?php
				}
			?>
            </table>
        </div>
    </body>

    </html>
