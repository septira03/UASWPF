<html>
    <head>
        <title> Data Siswa </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
            <div class="header">
                <h2><a class="judul" href="index.php">SMA NEGERI 1 BANYUWANGI</a></h2>
            </div>
            <div class="menu">
                <nav class="navigation">
                    <ul class="mainmenu">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a class="dipilih" href="DataSiswa.php">Data Siswa</a></li>
                        <li><a href="DataGuru.php">Data Guru</a></li>
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
                <table border="1" class="table2" align="center">
                    <h2><a class="judul2">Tambah Daftar Siswa</a></h2>
                    <form action="process.php?aksi=tambahDataSiswa" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>NIS</td>
                            <td><input type="text" Name="NIS" size="20" placeholder="Isi Nomor Induk Siswa"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" Name="Nama" size="20" placeholder="Isi Nama"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input type="text" Name="Jenis_Kelamin" size="20" placeholder="Isi Jenis Kelamin"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="Alamat" id="Alamat" cols="22"></textarea></td>
                        </tr>
                            <td>Tempat Lahir</td>
                            <td><input type="text" Name="Tempat Lahir" size="20" placeholder="Isi Tempat Lahir"></td>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" Name="Tanggal Lahir" size="20" placeholder="Tanggal Lahir"></td>
                        </tr>
                            <td>No.HP</td>
                            <td><input type="text" Name="No.HP" size="20" placeholder="Isi Nomer Telepon"></td>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" Name="Email" size="20" placeholder="Isi Email"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" Name="pass" size="20" placeholder="Isi Password"></td>
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
