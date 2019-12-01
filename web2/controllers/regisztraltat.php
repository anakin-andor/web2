<?php

class Regisztraltat_Controller
{
	public $baseName = 'regisztraltat';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$regisztraltatModel = new Regisztraltat_Model;  //az oszt�lyhoz tartoz� modell
		//a modellben bel�pteti a felhaszn�l�t
		$retData = $regisztraltatModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "regisztracio";
		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName.'_main');
		//�tadjuk a lek�rdezett adatokat a n�zetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>