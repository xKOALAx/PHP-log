	<!DOCTYPE HTML>
	<html lang="pl">

	<head>
	<meta charset="utf-8"/>
	<title>Podsumowanie zamówienia</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	</head>

	<body>
   <?php
$paczkow=$_POST['paczki'];
$grzebieni=$_POST['grzebienie'];
$suma=$paczkow*0.99+$grzebieni*1.29;
echo<<<END

<h2>Podsumowanie zamówienia</h2>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<td>Pączek</td><td>$paczkow</td>
</tr>
<tr>
<td>Grzebień</td><td>$grzebieni</td>
</tr>
<tr>
<td>SUMA:</td><td>$suma PLN</td>
</tr>
</table>
<br><a href="strGlow.php"> Powrót do strony głównej [KLIK]</a>
<br><br><a href="index.php">Wyloguj! [KLIK]</a>
END;
   ?>

  
	</body>

	</html>
