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
		<div id="adress">
			<ul>
				<li><img src="" /></li>
				<li>129, rue des marronniers</li>
				<li>BP 50464 - 38304</li>
				<li>Bourgoin-Jallieu Cedex</li>
				<li>Tél : 04 74 93 42 42</li>
				<li>Fax : 04 74 93 44 88</li>
			</ul>
		</div>

		<div id="menu">
			<ul>
				<li><a href="#">Accueil</a></li>
				<li><a href="#">Qui sommes-nous</a></li>
				<li><a href="#">Produits</a></li>
				<li><a href="#">Contactez-nous</a></li>
			</ul>
		</div>

		<div id="contact">
			<a href="#" class="button">Nous contacter</a>
			<a href="#" class="button"><span>Télécharger le</span><br/>catalogue matrel</a>
		</div>

		<div id="social">
			<ul id="social">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>
		</footer>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
