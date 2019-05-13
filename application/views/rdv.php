

	<main role="main" id="MainContent">
		<div class="section container">
			<div class="row">
				<div class="col s12 m6 offset-m3">
					<div class="card login-wrapper">
						<div class="card-content">
						<form method="post" action="https://materialize-shopify-themes.myshopify.com/account" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
									<h4 class="center">Prendre Rendez-vous</h4>
									<div class="input-field">
										<label for="NomComplet">Nom Complet</label>
										<input type="text" name="customer[nom_complet]" id="FirstName" autofocus>
									</div>
								
									<div class="input-field">
										<label for="Telephone">Telephone</label>
										<input type="text" name="customer[telephone]" id="Telephone">
									</div>
									<div class="input-field">
										<label for="Email">Email</label>
										<input type="text" name="customer[email]" id="Email">
									</div>
									<div class="input-field ">
										<label for="Motif">Motif</label>
										<textarea id="motif" class="materialize-textarea"></textarea>
									</div>
									<div class="input-field">
										<input type="hidden" name="customer[date]" id="Date" class="" value="" spellcheck="false" autocomplete="off" autocapitalize="off">
									</div>
									<div class="input-field">
										<input type="hidden" name="customer[heure]" id="Heure" class="" value="" spellcheck="false" autocomplete="off" autocapitalize="off">
									</div>
									<div class="input-field">
										<input type="hidden" name="customer[identreprise]" id="IdEntreprise" class="" value="" spellcheck="false" autocomplete="off" autocapitalize="off">
									</div>
									<div class="input-field">
										<input type="hidden" name="customer[etat]" id="Etat" class="" value="0" spellcheck="false" autocomplete="off" autocapitalize="off">
									</div>
									<p>
										<input type="submit" value="Enregistrer" class="btn-large z-depth-0">
									</p>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<div id="shopify-section-footer" class="shopify-section">
		<footer class="page-footer" style="background-color: #04c39f">
			<div class="footer-copyright">
				<div class="container center">
					<small class="white-text">Copyright © 2019, <a href="index.html" class="white-text" title="">Meet
							All</a>. <a class="white-text" target="_blank" rel="nofollow"
							href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">
							Powered
							by ITOT-Afica</a></small>
				</div>
			</div>
		</footer>
	</div>


	<!-- Javascript -->

	<script src="<?php echo base_url('')?>assets/js/jquery.min.js"></script>

	<script
		src="<?php echo base_url('')?>assets/js/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
		type="text/javascript"></script>

	<script
		src="<?php echo base_url('')?>assets/js/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"
		type="text/javascript"></script>

	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="<?php echo base_url('')?>assets/js/vendorcfcd.js" defer="defer"></script>
	<!--<![endif]-->
	<!--[if lt IE 9]><script src="//cdn.shopify.com/s/files/1/2030/2737/t/6/assets/vendor.js?0"></script><![endif]-->

	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="<?php echo base_url('')?>assets/js/themecfcd.js?" defer="defer"></script>
	<!--<![endif]-->
	<!--[if lt IE 9]><script src="//cdn.shopify.com/s/files/1/2030/2737/t/6/assets/theme.js?0"></script><![endif]-->



	<script>
		$(document).ready(function () {
			var categories = $('nav .categories-container');
			if (categories.length) {
				categories.pushpin({ top: categories.offset().top });
			}
		});
	</script>

</body>

<!-- Mirrored from materialize-shopify-themes.myshopify.com/account/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 07:19:46 GMT -->

</html>