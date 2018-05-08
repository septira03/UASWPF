<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Data.php");

    $guru = new Guru;
    $EditDataguru = $guru->EditDataguru($_GET['NIG'])
    
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
                <h2><a class="judul2">Edit Daftar Guru</a></h2>
                <?php
                            foreach($EditDataguru as $edit){
                        ?>
                 <form action="process.php?aksi=updateDataGuru" method="post" enctype="multipart/form-data">                       
                        
                     <table border="1" class="table2">
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="hidden" name="NIG" value="<?php echo $edit['NIG']  ?>">
                                <input type="text" name="Nama" value="<?php echo $edit['Nama'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>
                                <input type="text" Name="Jabatan" value="<?php echo $edit['Jabatan'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Sebagai</td>
                            <td>
                                <input type="text" Name="Sebagai" value="<?php echo $edit['Sebagai'] ?>">
                            </td>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="Alamat" value="<?php echo $edit['Alamat'] ?>">
                            </td>
                        </tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" Name="Tempat_Lahir" value="<?php echo $edit['Tempat_Lahir'] ?>">
                        </td>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="text" Name="Tanggal_Lahir" value="<?php echo $edit['Tanggal_Lahir'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>No.HP</td>
                            <td><input type="text" Name="No_HP" value="<?php echo $edit['No_HP'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" Name="Email" value="<?php echo $edit['Email'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="text" Name="pass" value="<?php echo $edit['pass'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Upload Foto</td>
                            <td><input type="file" name="Foto" accept="image/*"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Simpan"></td>
                         </tr>
                    </table>
                    <?php } ?>
                 </form>
            </div>
        </div>
    </body>
</html>