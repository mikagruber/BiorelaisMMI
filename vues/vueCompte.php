<div id="conteneur">

	<div id="header">
		<?php include 'haut.php' ;?>
	</div>

	<div id="content">
		<div class="contentCompte">
			<div class ='titre'>Vos informations</div>
				<?php
						$formulaireCompte->afficherFormulaire();
				?>
		</div>

	</div>

	<div id="bas">
		<?php  include 'bas.php' ;?>
	</div>

</div>
