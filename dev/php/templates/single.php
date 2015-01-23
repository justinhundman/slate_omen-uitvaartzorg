<?php get_header(); ?>
  

	<div>
		<div class="Content Content--fullwidth u-gridContainer page-wrapper u-gridRow " id="post-<?php the_ID(); ?>">
			<div class="Content-entry content-page">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="titleSub"><?php the_title(); ?></h2>
					<article class="page-sidebar-left u-gridCol8 sigel-wrapper">	
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div >
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
								<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
							</div>
						</article>
						<nav>
							<div><?php previous_post_link('&laquo; %link') ?></div>
							<div><?php next_post_link('%link &raquo;') ?></div>
						</nav>
						<?php comments_template(); ?>
				</article>
				<?php endwhile; else: ?>
					<p><?php _('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<article class="page-sidebar-right u-gridCol4">
					<a class="page-sidebar-right-button2"href="/actueel/">Terug naar actueel</a>
					<div class="page-sidebar-right-image">
						
					</div>
					<div class="page-sidebar-right-image">
						
					</div>
					<div class="page-sidebar-right-image">
						
					</div>	
					<div class="page-sidebar-right-image">
						
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
	</div>

<?php get_footer(); ?>
