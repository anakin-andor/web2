<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BeNature</title>
		<link rel="icon" type="image/png" href="css/images/logo.jpg">
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/nyitolap.css">
		<script type="text/javascript" src = "js/jquery.min.js"></script>
		<script type="text/javascript" src = "js/felsofoku.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="js/objsub.js"></script>
		<script type="text/javascript" src="js/nyitolap.js"></script>
		<script type="text/javascript" src="js/kattintas.js"></script>
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
		
    </head>
    <body>
        <header>
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">BeNature Zrt.</h1>
			<h3><i>Műbútorasztalos termékeket formalmazó társaság</i></h3>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside>
				<p>Cégünk erényei:</p>
				<p class="erzekeny"><i>megbízhatóság</i></p>
				<p class="erzekeny"><i>precizitás</i></p>
				<p class="erzekeny"><i>ügyfélközpontúság</i></p>
				<p class="erzekeny"><i>szakértelem</i></p>
				<p class="erzekeny"><i>stílusérzék</i></p>
				<p class="erzekeny"><i>sokoldalúság</i></p>
				<p class="erzekeny"><i>sokéves tapasztalat</i></p>
				<p class="erzekeny"><i>rugalmasság</i></p>
				<p class="erzekeny"><i>türelem</i></p>
        </aside>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
			
        </section>
        <footer>
			&copy; NJE - GAMF - Informatika Tanszék <?= date("Y") ?> <br/> 
			<i>Az oldal egyetemi beadandó feladatként jött létre, tartalma nem valóságos.</i>
		</footer>
    </body>
</html>
