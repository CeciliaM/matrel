<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<footer>
			<div id="bandeau">
				<div class="row">
				<div class="small-12 meduim-4 large-4 columns contenu-bandeau">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/qualite.png" />
					<p>Qualité Garantie</p>
				</div>
				<div class="small-12 meduim-4 large-4 columns contenu-bandeau">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pro.png" />
					<p>professionnels<br/> Certifiés</p>
				</div>
				<div class="small-12 meduim-4 large-4 columns contenu-bandeau">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/num1.png" />
					<p>1er fabricant <br/>équipements de façonnage</p>
				</div>
			</div>
		</div>

			<div class="row">
				<div id="adress" class="small-12 meduim-3 large-3 columns">
					<ul class="menu vertical">
						<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo1.png" width="65" height="20"/></li>
						<li>129, rue des marronniers</li>
						<li>BP 50464 - 38304</li>
						<li>Bourgoin-Jallieu Cedex</li>
						<li>Tél : 04 74 93 42 42</li>
						<li>Fax : 04 74 93 44 88</li>
					</ul>
				</div>

				<div id="menu" class="small-12 meduim-3 large-3 columns">
					<ul class="menu vertical">
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Qui sommes-nous</a></li>
						<li><a href="#">Produits</a></li>
						<li><a href="#">Contactez-nous</a></li>
					</ul>
				</div>

				<div id="contact" class="small-12 meduim-3 large-3 columns">
					<a href="#" class="button">Nous contacter</a><br/>
					<a href="#" class="button"><span>Télécharger le</span><br/>catalogue matrel</a>
				</div>

				<div id="social" class="small-12 meduim-3 large-3 columns">
					<ul class="menu">
						<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
					</ul>
				</div>
				<p id="ml">Mention Légales</p>

			</div> <!-- END ROW-->
		</footer>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
