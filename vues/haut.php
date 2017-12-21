<div class="logo">
		<a href="index.php?bioRelaisMP=accueil">
				<img src="images/Logo-Bio.png" />
		</a>
</div>
<div class="bienvenue">
		<?php
		if(isset($_SESSION['personne'])){
				//echo "<p>Connecté en tant que </p><p>" . $_SESSION['personne']->getNom() . "</p>";
		}
		?>
</div>
<nav class="menuPrincipal">
	<?php
	echo $biorelaisMP;
	?>
</nav>
