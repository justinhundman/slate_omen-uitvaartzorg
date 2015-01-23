<?php
/*
Template Name: page-form
*/
?>

<?php get_header(); ?>

	<div>
		<div class="Content Content--fullwidth u-gridContainer page-wrapper u-gridRow " id="post-<?php the_ID(); ?>">
			<div class="Content-entry content-page form-wrapper">
				<h2 class="titleSub">Uitvaartwens formulier</h2>
				<article class="page-sidebar-left u-gridCol8">	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php echo do_shortcode('[gravityform id=5 name=ContactUs title=false description=false]'); ?>

					<?php the_content(); 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
					$image_url = $image[0];
					$image2 = get_field('image2');
					?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php endwhile; endif; ?>
					
				</article>
				<article class="page-sidebar-right u-gridCol4">
					<?php if( !empty($image2) ): ?>
						<div><img class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" /></div>
					<?php endif; ?>

					<img class="page-sidebar-right-img"src="<?php echo $image_url; ?>"  />
					<a class="page-sidebar-right-button"href="tel:0705146100">Bel binnen Nederland:<br /> 070-5146100</a>
					<a class="page-sidebar-right-button"href="tel:0031705146100">Bel buiten Nederland:<br />  0031 70 514 61 00</a>
					<a class="page-sidebar-right-button"href="tel:0623269618">Sms:<br />  06-23269618</a>
					<a class="page-sidebar-right-button2"href="/contact">Contact</a>
					
				</article>	
			</div>
			<div class=" Content-entry content-page u-gridCol12">
					<article class="page-sidebar-right-extender-in u-gridCol4">		
					</article>	
			</div>	
		</div>
	</div>

<?php get_footer(); ?>

<?php 
	// door een bug die we niet kunnen vinden moeten we hieronder nogmaals de shortcode doen, en dan werkt het wel 
echo do_shortcode('[gravityform id=5 name=ContactUs title=false description=false]'); ?>
