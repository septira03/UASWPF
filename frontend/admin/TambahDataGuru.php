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
                <table border="1" class="table2">
                    <h2><a class="judul2">Tambah Daftar Guru</a></h2>
                    <form action="process.php?aksi=tambahDataGuru" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>NIG</td>
                            <td><input type="text" Name="NIG" size="20" placeholder="Nomor Induk Guru"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" Name="Nama" size="20" placeholder="Nama ..."></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input type="text" Name="Jabatan" size="20" placeholder="Jabatan ..."></td>
                        </tr>
                        <td>Sebagai</td>
                            <td><input type="text" Name="Sebagai" size="20" placeholder="Sebagai ..."></td>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="Alamat" id="Alamat" cols="22"></textarea></td>
                        </tr>
                            <td>Tempat Lahir</td>
                            <td><input type="text" Name="Tempat Lahir" size="20" placeholder="Tempat Lahir ..."></td>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="text" Name="Tanggal Lahir" size="20" placeholder="Tanggal Lahir ..."></td>
                        </tr>
                            <td>No.HP</td>
                            <td><input type="text" Name="No.HP" size="20" placeholder="No.HP ..."></td>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" Name="Email" size="20" placeholder="Email ..."></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" Name="pass" size="20" placeholder="Password ..."></td>
                        </tr>
                        <tr>
                            <td>Upload Foto</td>
                            <td><input type="file" name="Foto" accept="image/*"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Simpan"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>
