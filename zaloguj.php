			<?php

			require_once "baza.php";

			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

		  if ($polaczenie->connect_errno!=0)
		  {	
			echo "Error: ".$polaczenie->connect_errno;
		  }
		else
		{
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			
			$sql= "SELECT * FROM `uzytkownicy` WHERE user='$login' AND pass='$haslo'";
		if ($rezultat = @$polaczenie->query($sql))
		{
			$ilu_userow=$rezultat->num_rows;
	 if ($ilu_userow>0)
	 {
      $wiersz=$rezultat->fetch_assoc();
     $user=$wiersz['user'];
    $rezultat->free_result();
  
  header('Location: strGlow.php');
	 }
	 else
	 {
header('Location: index.php');

	 }
		}

		$polaczenie->close();
		}
			


