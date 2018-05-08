<?php  
    include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Data.php");
    
    $guru = new Guru;
    $pembina = new Pembina;
    $siswa = new Siswa;
    
    
    $aksi = $_GET['aksi'];
    $Foto = $_GET['FileFoto'];

    if($aksi == "tambahDataGuru"){
            
        $FileFoto = $_FILES["Foto"]["name"];
            
        $guru->TambahDataguru($_POST["NIG"],
                              $_POST["Nama"],
                              $_POST["Jabatan"],
                              $_POST["Sebagai"],
                              $_POST["Alamat"],
                              $_POST["Tempat_Lahir"],
                              $_POST["Tanggal_Lahir"],
                              $_POST["No_HP"],
                              $_POST["Email"],
                              $_POST["pass"], 
                              $FileFoto);
        
        move_uploaded_file($_FILES['Foto']['tmp_name'], "images/".$_FILES['Foto']['name']);
        
 	    header("location:DataGuru.php");
 }  
    elseif($aksi == "tambahDataPembina"){
        
        $FileFoto = $_FILES["Foto"]["name"];
        
        $pembina->tambahDataPembina($_POST["NIP"],
                                $_POST["Nama"],
                                $_POST["Alamat"],
                                $_POST["Tempat_lahir"],
                                $_POST["Tanggal_lahir"],
                                $_POST["No_Telpn"],
                                $_POST["Jabatan"],
                                $_POST["Pass"],
                                $FileFoto);
        
        move_uploaded_file($_FILES['Foto']['tmp_name'], "gambar/".$_FILES['Foto']['name']);
        
 	    header("location:DataPembina.php");
 }  
    elseif($aksi == "tambahDataSiswa"){
        
        $FileFoto = $_FILES["Foto"]["name"];
        
        $siswa->TambahDatasiswa($_POST["NIS"],
                                $_POST["Nama"],
                                $_POST["Jenis_Kelamin"],
                                $_POST["Alamat"],
                                $_POST["Tempat_Lahir"],
                                $_POST["Tanggal_Lahir"],
                                $_POST["No_HP"],
                                $_POST["Email"],
                                $_POST["pass"],
                                $FileFoto);
        
        move_uploaded_file($_FILES['Foto']['tmp_name'], "images/".$_FILES['Foto']['name']);
        
 	    header("location:DataSiswa.php");
 }  
    elseif($aksi == "hapusDataGuru"){ 	
        
        if(is_file("images/".$Foto))
           unlink("images/".$Foto);
        
        $guru->HapusDataguru($_GET["NIG"]);
	    header("location:DataGuru.php");
 }
    elseif($aksi == "hapusDataPembina"){ 
        
        if(is_file("images/".$Foto))
            unlink("images/".$Foto);
        
        $pembina->HapusDataPembina($_GET["NIP"]);
	    header("location:DataPembina.php");
 }    
    elseif($aksi == "hapusDataSiswa"){ 	
        
        if(is_file("images/".$Foto))
           unlink("images/".$Foto);
        
        $siswa->HapusDatasiswa($_GET['NIS']);
	    header("location:DataSiswa.php");
 }
    elseif($aksi == "updateDataGuru"){
        
        $FileFoto = $_FILES["Foto"]["name"];
        
 	    $guru->UpdateDataguru($_POST["NIG"],
                              $_POST["Nama"],
                              $_POST["Jabatan"],
                              $_POST["Sebagai"],
                              $_POST["Alamat"],
                              $_POST["Tempat_Lahir"],
                              $_POST["Tanggal_Lahir"],
                              $_POST["No_HP"],
                              $_POST["Email"],
                              $_POST["pass"], 
                              $FileFoto);
        
        move_uploaded_file($_FILES['Foto']['tmp_name'], "images/".$_FILES['Foto']['name']);
 	    header("location:DataGuru.php");
 }
    elseif($aksi == "updateDataPembina"){
        
        $FileFoto = $_FILES["Foto"]["name"];
        
 	    $pembina->UpdateDataPembina($_POST["NIP"],
                                    $_POST["Nama"],
                                    $_POST["Alamat"],
                                    $_POST["Tempat_lahir"],
                                    $_POST["Tanggal_lahir"],
                                    $_POST["No_Telpn"],
		                            $_POST["Jabatan"],
                                    $_POST["Pass"],
                                    $FileFoto);
        
        move_uploaded_file($_FILES['Foto']['tmp_name'], "images/".$_FILES['Foto']['name']);
 	    header("location:DataPembina.php");
 }
    elseif($aksi == "updateDataSiswa"){
        $FileFoto = $_FILES["Foto"]["name"];
        
 	    $siswa->UpdateDatasiswa($_POST["NIS"],
                              $_POST["Nama"],
                              $_POST["Jenis_Kelamin"],
                              $_POST["Alamat"],
                              $_POST["Tempat_Lahir"],
                              $_POST["Tanggal_Lahir"],
                              $_POST["No_HP"],
                              $_POST["Email"],
                              $_POST["pass"],
                              $FileFoto);
        
         move_uploaded_file($_FILES['Foto']['tmp_name'], "images/".$_FILES['Foto']['name']);
        
 	    header("location:DataSiswa.php");
 }
?>
