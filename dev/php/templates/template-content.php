<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer contact-wrapper" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2 class="titleSub"><?php the_title(); ?></h2>
				<div class="Content-text">
						<?php the_content(); ?>
				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>