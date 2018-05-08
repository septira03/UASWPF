<?php
	class Guru
    {
		private $id;
		private $db;
		
        public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
		public function daftarDataguru(){
			$daftar = $this->db->query("SELECT * FROM dataguru");
            return $daftar;
		}
        public function TambahDataguru($NIG,$Nama,$Jabatan,$Sebagai,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_HP,$Email,$pass,$Foto)
        {
            $tambah = $this->db->query("INSERT INTO `dataguru` (`NIG`, `Nama`, `Jabatan`, `Sebagai`, `Alamat`, `Tempat_Lahir`, `Tanggal_Lahir`, `No_HP`, `Email`, `pass`, `Foto`) VALUES ('${NIG}','${Nama}','${Jabatan}','${Sebagai}','${Alamat}','${Tempat_Lahir}','${Tanggal_Lahir}','${No_HP}','${Email}','${pass}','${Foto}')");
        }
        public function TampilFotoDataguru($NIG){
			$foto = $this->db->query("SELECT `Foto` FROM `dataguru` WHERE NIG='$NIG'");
            return $foto;
		}
        public function HapusDataguru($NIG)
        {
            $hapus = $this->db->query("DELETE FROM `dataguru` WHERE NIG='$NIG'");
        }
        
        public function EditDataguru($NIG)
        {
            $edit = $this->db->query("SELECT * FROM `dataguru` WHERE NIG='$NIG'");
            return $edit;
        }
        public function UpdateDataguru($NIG,$Nama,$Jabatan,$Sebagai,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_HP,$Email,$pass, $Foto){
            $update = $this->db->query("UPDATE `dataguru` SET `NIG`='${NIG}',`Nama`='${Nama}',`Jabatan`='${Jabatan}',`Sebagai`='${Sebagai}',`Alamat`='${Alamat}',`Tempat_Lahir`='${Tempat_Lahir}',`Tanggal_Lahir`='${Tanggal_Lahir}',`No_HP`='${No_HP}',`Email`='${Email}',`pass`='${pass}', `Foto`='${Foto}' WHERE NIG='$NIG'");
        }
	}

    class Siswa
    {
		private $id;
		private $db;
		
        public function __construct($id = null)
        {
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
		public function daftarDatasiswa()
        {
			$daftar = $this->db->query("SELECT * FROM datasiswa");
            return $daftar;
		}
        
        public function TambahDatasiswa($NIS,$Nama,$Jenis_Kelamin,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_HP,$Email,$pass,$Foto)
        {
            $tambah = $this->db->query("INSERT INTO `datasiswa` (`NIS`, `Nama`, `Jenis_Kelamin`, `Alamat`, `Tempat_Lahir`, `Tanggal_Lahir`, `No_HP`, `Email`, `pass`,`Foto`) VALUES ('${NIS}','${Nama}','${Jenis_Kelamin}','${Alamat}','${Tempat_Lahir}','${Tanggal_Lahir}','${No_HP}','${Email}','${pass}','${Foto}')");
        }
        
        public function TampilFotoDatasiswa($NIS)
        {
			$foto = $this->db->query("SELECT `Foto` FROM `datasiswa` WHERE NIS='$NIS'");
            return $foto;
		}
        
        public function HapusDatasiswa($NIS)
        {
            $hapus = $this->db->query("DELETE FROM `datasiswa` WHERE NIS='$NIS'");
        }
        
        public function EditDatasiswa($NIS)
        {
            $edit = $this->db->query("SELECT * FROM `datasiswa` WHERE NIS='$NIS'");
            return $edit;
        }
        
        public function UpdateDatasiswa($NIS,$Nama,$Jenis_Kelamin,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_HP,$Email,$pass,$Foto)
        {
            $update = $this->db->query("UPDATE `datasiswa` SET `NIS`='${NIS}',`Nama`='${Nama}',`Jenis_Kelamin`='${Jenis_Kelamin}',`Alamat`='${Alamat}',`Tempat_Lahir`='${Tempat_Lahir}',`Tanggal_Lahir`='${Tanggal_Lahir}',`No_HP`='${No_HP}',`Email`='${Email}',`pass`='${pass}',`Foto`='${Foto}' WHERE NIS='$NIS'");
        }
	}

    class Pembina
    {
		private $id;
		private $db;
		
        public function __construct($id = null)
        {
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
		public function daftarDatapembina()
        {
			$daftar = $this->db->query("SELECT * FROM datapembina");
            return $daftar;
		}
        
        public function TambahDatapembina($NIP,$Nama,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_Telp,$Jabatan,$Pass,$Foto)
        {
            $tambah = $this->db->query("INSERT INTO `datapembina`(`NIP`, `Nama`, `Alamat`, `Tempat_lahir`, `Tanggal_lahir`, `No_Telpn`, `Jabatan`, `Pass`, `Foto`) VALUES ('${NIP}','${Nama}','${Alamat}','${Tempat_Lahir}','${Tanggal_Lahir}','${Jabatan}','${No_Telp}','${Pass}','${Foto}')");
        }
        
        public function HapusDatapembina($NIP)
        {
            $hapus = $this->db->query("DELETE FROM `datapembina` WHERE NIP='$NIP'");
        }
        
        public function EditDatapembina($NIP)
        {
            $edit = $this->db->query("SELECT * FROM `datapembina` WHERE NIP='$NIP'");
            return $edit;
        }
        
        public function UpdateDatapembina($NIP,$Nama,$Alamat,$Tempat_Lahir,$Tanggal_Lahir,$No_Telpn,$Jabatan,$Pass,$Foto)
        {
            $update = $this->db->query("UPDATE `datapembina` SET `NIP`='${NIP}',`Nama`=${Nama},`Alamat`='${Alamat}',`Tempat_lahir`='${Tempat_lahir}',`Tanggal_lahir`='${Tanggal_lahir}',`Jabatan`='${Jabatan}',`No_Telpn`='${No_Telpn}',`Pass`='${Pass}',`Foto`='${Foto}' WHERE NIP='$NIP'");
        }
	}

    class Pengguna
    {
		private $username;
		private $password;
		protected $db;
		
		public function __construct($user,$pass){
			$this->username = $user;
			$this->password = $pass;
			
			$database = new Database;
			$this->db = $database->db;
		}
		
		public function login()
        {
			$get = $this->db->query("SELECT *
									 FROM user
									 JOIN peran_user ON user.kode_peran = peran_user.kode_peran
									 WHERE username = '".$this->username."'
									 AND password = '".$this->password."'");
									 
			if($this->db->affected_rows == 0)
            {
				return FALSE;
			}
			else
            {
				$hasil = $get->fetch_assoc();
				return $hasil["nama_peran"];
			}
		}
	}
?>