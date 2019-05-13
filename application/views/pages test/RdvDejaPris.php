
<h1>
	Rdv accépté:
</h1>

<ul>
	<?php foreach ($rdvPris as $rdv): ?>
		<li>

			<h2>
				<?= html_escape($rdv['nomClient'] . ' ') ?>
			</h2>
			<span><?php html_escape($rdv['date']) ?></span>
			<span><?= html_escape($rdv['heure']) ?></span><i>  <?= html_escape($rdv['duree'])?></i>
			<span><a href="annuler_rdv_controller">annuler RDV</a> </span>
		</li>
	<?php endforeach; ?>
</ul>
