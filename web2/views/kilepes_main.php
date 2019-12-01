<!--<h2><br><?= $viewData['uzenet']?><br></h2>-->

<?php
session_start();
session_destroy();
header("Location: index.php");
?>
