<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer contact-wrapper" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2 class="titleSub"><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Omen Uitvaartzorg</p>
								<p>Oostdorperweg 151</p>
								<p>2242NJ Wassenaar</p>
								<p>Email: info@omen-uitvaartzorg.nl</p>
								<p>Tel: 070-5146100</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow contact-form">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

