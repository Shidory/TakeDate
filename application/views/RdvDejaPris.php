<?=
	require_once (anchor('RdvModel'));
?>
<h1>
	Rdv accépté:
</h1>

<ul>
	<?php
		$rdvModele=new RdvModel();
		$rdvPris=$rdvModele->afficherRDV()
	?>
	<?php foreach ($rdvPris as $rdv): ?>
		<li>

			<h2>
				<?= html_escape($rdv->NomClient . ' ') ?>
			</h2>
			<span><?php html_escape($rdv->date) ?></span>
			<span><?= html_escape($rdv->heure) ?></span><i><?= html_escape($rdv->dure)?></i>
			<span><a href="<?= anchor('RdvModel/annulerRDV/') ?>" </span>
		</li>
	<?php endforeach; ?>
</ul>
