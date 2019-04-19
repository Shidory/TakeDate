<?php
	require_once (anchor('RdvModel'));
?>
<div>
	<h1>RDV accépté:</h1>
	<div>
		<span>Client: x</span>
		<div>
			<?php
				$rdvModel=new RdvModel();
				$id=$rdvModel->afficherRDV();
				anchor('annulerRDV/annulerRdv/$id')
			?>
		</div>
	</div>
</div>
