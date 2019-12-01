<?php
	try {
		// Kapcsolódás
		$pdo = new PDO('mysql:host=localhost;dbname=web2', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$utasitas = "SELECT * FROM felhasznalok";
		$eredm = $pdo->query($utasitas);
		
		/*$sqlInsert = "insert into emberek(id, vezeteknev, keresztnev, foglalkozas)
			values(0, :vezeteknev, :keresztnev, :foglalkozas)";
		$stmt = $pdo->prepare($sqlInsert);
		$stmt->execute(array(':vezeteknev' => $_POST['vezeteknev'], ':keresztnev' => $_POST['keresztnev'],
			':foglalkozas' => $_POST['foglalkozas']));
		*/
	}
	catch (PDOException $e) {
		echo "Hiba: ".$e->getMessage();
	}      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kiíratás</title>
        <meta charset="utf-8">
		<style>
			table, td, tr {
				border: 1px  solid black;
			}
		</style>
    </head>
    <body>
	<h1>Az oldalra regisztrált emberek</h1>
	<table>
	<?php foreach ($eredm as $sor)
		print "<tr><td>".$sor['id']."</td>"."<td>".$sor['csaladi_nev']."</td>"."<td>".$sor['utonev']."</td>"."<td>".$sor['bejelentkezes']."</td></tr>";
	?>
	</table>
    </body>  
</html>
