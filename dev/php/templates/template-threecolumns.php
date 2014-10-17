<?php
/*
Template Name: threecolumns
*/
?>

<?php get_header(); ?>

	<div class="threecolumns-wrapper u-gridContainer">
		<article class="welkomstekst">
			<h1>Welkom bij Omen uitvaartzorg</h4>
			<p>lorem ipsim dolor sit amet, conserrtec adislmoi idfew. Ut sit amet egestats mi, sit dsfin i liacia.</p>
		</article>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
			</article>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
					<article class="column u-gridCol4">
						<a class="button" href="#">link knop</a>
					</article>
			</article>
			<article class="u-gridRow bottom-text" id="post-<?php the_ID(); ?>">
				<article class="u-gridCol3">
					voeg image toe
				</article>
				<article class="u-gridCol9">
					<h5 class="titleSub">Mijn uitvaartwens</h5>
						<?php the_content(); ?>
				</article>
			</article>
		<?php endwhile; endif; ?> 
	</div>
<?php get_footer(); ?>  
