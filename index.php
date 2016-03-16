<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page-produit">
<div class="row">
	<p id="ariane">Accueil / Produits / Raineuse-plieuse-perforation</p>
	<form method=GET id="form1">
		<input type="search" value="Votre recherche" id="search1" /><button id="btn-search1"><i class="fa fa-search"></i></button>
	</form>
	<article id="post-<?php the_ID(); ?>">

		<div id="titres">
			<h1><?php the_field('titre'); ?></h1>
			<h2><?php the_field('sous_titres'); ?>Raineuse-Plieuse Eurofold</h2>
		</div>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>

			<div id="img" class="small-12 medium-6 large-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/raineuse.png" />
				<p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>

				<div id="min" class="row">
					<div class="small-2 large-2 columns"><a href="#"><i class="fa fa-angle-left"></a></i></div>
					<div class="small-8 large-8 columns">
						<img class="thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/miniatures/1.png" >
						<img class="thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/miniatures/2.png" >
						<img class="thumbnail" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/miniatures/3.png" >
					</div>
					<div class="small-2 large-2 columns"><a href="#"><i class="fa fa-angle-right"></a></i></div>
				</div>


			</div>

			<div id="description" class="small-12 medium-6 large-6 columns" >
				<p><?php the_content(); ?></p>
				<a class="buttongrey" href="<?php the_field('telecharger_le_pdf'); ?>"> Télécharger le .pdf <i class="fa fa-download"></i></a><br/>
				<a class="button" href="<?php the_field('contacter_nous'); ?>">Contacter-nous <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>

	<?php	} // end while
	} // end if
	?>
</article>

<div id="plus-infos">
	<div class="row">
			<a href="#" id="caract-lien" >Caractéristique</a>
			<div id="liste-caract" class="row">
				<p class="large-12 columns"><?php the_field('caracteristique'); ?></p>
			</div>

			<a href="#" id='video-lien'>Vidéos (1)</a>
			<div id="video" class="">
				<div class="large-3 columns point">,</div>
				<div class="large-6 columns">
				  <iframe width="420" height="315" src="https://www.youtube.com/embed/pPLc8RMYmRg" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="large-3 columns point">,</div>
			</div>
	</div>
</div>

</div> <!--FIN div #PAGE -->


<?php get_footer();
