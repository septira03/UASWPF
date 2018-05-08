<?php
	class Session
    {
		public function cekHakAkses($peran)
        {
			session_start();
			
			if(isset($_SESSION["username"]) AND isset($_SESSION["password"]))
            {
				$user = new Data($_SESSION["username"],$_SESSION["password"]);
				
				if($user->login() !== $peran)
                {
					header("Location: Login.php");
				}
			}
			else
            {
				header("Location: Login.php");
			}
		}
	}
?>