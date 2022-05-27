<?php ob_start() ?>
liste de livres
<?php 
$content = ob_get_clean();
$title = "Vos livres";

require('template.php');
?>