<?php
	include("configs/config_db.php");
	include("classes/Data.php");
	include("classes/Database.php");
	
	if(isset($_POST["username"]) OR isset($_POST["password"])){
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		
		$user = new Pengguna($username,$password);
		
		if($user->login() === FALSE){
			$pesan_error = "Username dan password tidak cocok";
		}
		else{
			// simpan cookie username & password
			
			setcookie("username",$username,time()+(5*60));
			setcookie("password",$password,time()+(5*60));
			
			switch(strtolower($user->login())){
				case "admin"  :	    header("Location: frontend/admin/home.php"); break;
				case "siswa"  :		header("Location: frontend/beranda.php");    break;
			}
		}
	}
?>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="css/Login.css">
    </head>
    <body>
        <div class="">
            <div class="kanan"></div>
            <form method="POST">
                <br>
                <br>
                <br>
                <h1>SISTEM INFORMASI SISWA (SIS)</h1>
                <input type="text" name="username" id="username" placeholder="Username"/>
                <input type="password" name="password" id="password" placeholder="Password"/>
                <input class="btn" type="submit" name="submit" value="LOG IN"/>
                <a href=""><h7>Lupa Password ?</h7></a>
                <?php
		          if(isset($pesan_error)) echo $pesan_error;
		        ?>
            </form>
        </div>
    </body>
</html>