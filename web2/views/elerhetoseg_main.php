<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  
 
  <style>
    #informaciosdiv {
      width: 500px;
    }
    #intezmenyinfo {
      float: right;
      border: 1px solid black;
      width: 250px;
      height: 120px;
	  font-size: large;
    }
    .cimke{
      display: inline-block;
      width: 60px;
      text-align: right;
    }
    span {
      margin: 3px 5px;
    }
    label {
      display: inline-block;
      width: 70px;
      text-align: right;
    }
    select {
      width: 115px;
    }
  </style>
  </head>
  <body>
	<br/><br/>
	<p>Cégünk telephelyeit számos helyen megtalálhatja. Munkatársaink két ország több városában is mindenkor szívesen az Ön rendelkezésére állnak.<p>
	<p>Keresse meg a számára legközelebb eső üzletünket!</p>
	<br/>
    <h1>Üzleteink elérhetőségei:</h1>
	<br/><br/>
    <div id = 'informaciosdiv'>
      <div id = 'intezmenyinfo'>
        <span class="cimke">Név:</span><span id="nev" class="adat"></span><br>
        <span class="cimke">Cím:</span><span id="cim" class="adat"></span><br>
        <span class="cimke">Telefon:</span><span id="tel" class="adat"></span><br>
        <span class="cimke">E-mail:</span><span id="mail" class="adat"></span><br>
      </div>
      <label for='orszagcimke'>Ország:</label>
      <select id = 'orszagselect'></select>
      <br><br>
      <label for = 'varoscimke'>Város:</label>
      <select id = 'varosselect'></select>
      <br><br>
      <label for = 'varoscimke'>Üzlet:</label>
      <select id = 'intezmenyselect'></select>
    </div>
  </body>
</html>