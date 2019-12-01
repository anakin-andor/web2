<?php

$eredmeny = "";
try {
	$dbh = new PDO('mysql:host=localhost;dbname=web2', 'root', '',
				  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
	switch($_SERVER['REQUEST_METHOD']) {
		case "GET":
			$sql = "SELECT nev, cim FROM intezmeny";
			$sth = $dbh->query($sql);
			$eredmeny .= "<table style=\"border-collapse: collapse;\">";
			while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$eredmeny .= "<tr>";
			foreach($row as $column)
			$eredmeny .= "<td style=\"border: 1px solid black; padding: 3px;\">".$column."</td>";
			$eredmeny .= "</tr>";
			}
			$eredmeny .= "</table>";
			break;
		
	}
}
catch (PDOException $e) {
	$eredmeny = $e->getMessage();
}
echo $eredmeny;

?>