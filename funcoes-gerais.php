<!-- erro no login e funcionalidade não disponível-->
<?php 

function dangerAlert() {
	if (isset($_SESSION['danger'])){?> 

	<p class="alert-danger text-center"><?= $_SESSION['danger']?></p>

	<?php } 

	unset($_SESSION['danger']);?>
	
	<?php } ?>
	
<?php 	
function successAlert() {
	if (isset($_SESSION['success'])){?> 

	<p class="alert-success text-center"><?= $_SESSION['success']?></p>

	<?php }

	unset($_SESSION['success']);?>

	<?php } ?>