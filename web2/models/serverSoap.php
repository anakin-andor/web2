<?php
class Felhasznalok {
	
	public function felhasznaloNevek(){
		
		$eredmeny = array("bejelentkezes" => "");
		
	try {
	$dbh = new PDO('mysql:host=localhost;dbname=web2','root', '',
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
	  $sql = "select * from felhasznalok";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array());
	  $eredmeny['hallgatok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	 
	
	 
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
	}	
}

$options = array(
"uri" => "http://localhost/web2/models/serverSoap.php");
$server = new SoapServer(null, $options);
$server->setClass('Felhasznalok');
$server->handle();


?>