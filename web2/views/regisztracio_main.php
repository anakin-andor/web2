<h2>Regisztráció</h2>
<form action="<?= SITE_ROOT ?>regisztraltat" method="post">
	<label for="vezeteknev">Vezetéknév:</label><input type="text" name="vezeteknev" id="vezeteknev"><br>
	<label for="utonev">Keresztnév:</label><input type="text" name="utonev" id="utonev"><br>
    <label for="login">Felhasználó:</label><input type="text" name="login" id="felhasznalo" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label for="password">Jelszó:</label><input type="password" name="password" id="jelszo" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input type="submit" value="Küldés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uz'] : "") ?><br></h2>