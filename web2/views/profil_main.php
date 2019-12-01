<script type="text/javascript">
        var myimage = new SubtitledImage("css/images/diving.jpg", 800, 200, 250, 200, "Konyha");
    </script>
    <br/>
    <h3>Az alábbi képen egy, a cégünk által berendezett konyhát lát. </h3>
    <p><i>Ha kicsinek találja a képet, méretezze át a kezelőfelület segítségével!</i></p>
    <table>
        <tr>
        <td align="right">szélesség:</td><td><input type="text" id="width" name="width"></td>
        <td align="right">magasság:</td><td><input type="text" id="height" name="height"></td>
        </tr>
	
		<tr>
		<td><button onclick="myimage.resize(width.value,height.value)">Átméretezés</button></td>
		</tr>
		<tr>
		<td><button onclick="myimage.show()">Mutasd</button></td>
		</tr>
		<tr>
		<td><button onclick="myimage.hide()">Elrejtés</button></td>
		</tr>
    </table>
	<br/><br/><br/><br/><br/><br/>
	<h3>Az alábbi bútortípusok közül válogathat:</h3>
	<table>
		<tr>
			<td><img src="css/images/butor1.jpg" style="height: 10%; width: 25%;"></td>
			<td><img src="css/images/butor2.jpg" style="height: 10%; width: 35%;"></td>
			<td><img src="css/images/butor3.jpg" style="height: 30%; width: 30%;"></td>
			<td><img src="css/images/butor4.jpg" style="height: 30%; width: 50%;"></td>
			<td><img src="css/images/butor5.jpg" style="height: 30%; width: 50%;"></td>
		</tr>
		<tr>
			<td><p class="erzekeny" class="erzekeny">székek</p></td>
			<td><p class="erzekeny" class="erzekeny">szekrények</p></td>
			<td><p class="erzekeny" class="erzekeny">ágyak</p></td>
			<td><p class="erzekeny" class="erzekeny">szobaszekrények</p></td>
			<td><p class="erzekeny" class="erzekeny">konyhai garnitúra</p></td>
		</tr>
	</table>