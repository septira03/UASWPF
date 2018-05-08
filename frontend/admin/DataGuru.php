<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Data.php");

    $guru = new Guru;
    $daftarDataguru = $guru->daftarDataguru();

?>

<html>
    <head>
        <title> Data Guru </title>
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
                        <li><a class="dipilih" href="DataGuru.php">Data Guru</a></li>
                        <li><a href="DataPembina.php">Data Pembina</a></li>
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
                <h2><a class="tambah" href="TambahDataGuru.php">&nbsp;[+] Tambah Data</a></h2>
                <table class="table1">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>NIG</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Sebagai</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>No.HP</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                        <?php
                            $No = 1;
                            foreach($daftarDataguru as $guru){ ?>
                                    <tr>
                                        <td><?php echo $No++; ?></td>
                                        <td><img src="images/<?php echo $guru["Foto"]?>"width='90' height='90'></td>
                                        <td><?php echo $guru["NIG"]?></td>
                                        <td><?php echo $guru["Nama"]?></td>
                                        <td><?php echo $guru["Jabatan"]?></td>
                                        <td><?php echo $guru["Sebagai"]?></td>
                                        <td><?php echo $guru["Alamat"]?></td>
                                        <td><?php echo $guru["Tempat_Lahir"]?></td>
                                        <td><?php echo $guru["Tanggal_Lahir"]?></td>
                                        <td><?php echo $guru["No_HP"]?></td>
                                        <td><?php echo $guru["Email"]?></td>
                                        
                                        <td>
                                            <a href="EditDataGuru.php?NIG=<?php echo $guru['NIG'];?>">Edit</a>
                                            <a href="process.php?NIG=<?php echo $guru['NIG'];?>&FileFoto=<?php echo $guru['Foto'];?>&aksi=hapusDataGuru">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                </table>
            </div>
        </div>
    </body>
</html>
