<?php
/*
Template Name: page link
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--fullwidth u-gridContainer page-wrapper u-gridRow " id="post-<?php the_ID(); ?>">
			<div class="Content-entry content-page">
				<h2 class="titleSub"><?php the_title(); ?></h2>
				<article class="page-sidebar-left u-gridCol8">			
					<?php the_content(); 
						$image1 = get_field('image1');
						$image2 = get_field('image2');
						$image3 = get_field('image3');
					?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
				<article class="page-sidebar-right u-gridCol4">
					<div class="page-sidebar-right-image">
						<?php if( !empty($image1) ): ?>
							<a href="<?php the_field("link-image1")?>" ><p class="page-sidebar-right-image-title">klik hier</p><img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
						<?php endif; ?>
					</div>
					<div class="page-sidebar-right-image">
						<?php if( !empty($image2) ): ?>
							<a href="<?php the_field("link-image2")?>" ><p class="page-sidebar-right-image-title">klik hier</p><img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
						<?php endif; ?>
					</div>
					<div class="page-sidebar-right-image">
						<?php if( !empty($image3) ): ?>
							<a href="<?php the_field("link-image")?>" ><p class="page-sidebar-right-image-title">klik hier</p><img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
						<?php endif; ?>
					</div>				
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
	<?php endwhile; endif; ?>
	</div>
