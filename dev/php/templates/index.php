

	<?php get_header(); ?>
  

	<div>
		<div class="Content Content--fullwidth u-gridContainer page-wrapper u-gridRow " id="post-<?php the_ID(); ?>">
			<div class="Content-entry content-page">
				<h2 class="titleSub">Actueel</h2>
				<article class="page-sidebar-left u-gridCol8">	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="post-wrapper"<?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h4><?php the_title(); ?></h4>
							<span><?php the_time( get_option( 'date_format' ) ); ?></span>
							<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
							<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Lees meer</a>
						</article>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php endwhile; endif; ?>
				<nav>
					<div><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</nav>
				</article>
				<article class="page-sidebar-right u-gridCol4">
					<div class="">
						<?php if( !empty($button1) ): ?>
							<div class=""><?php echo $button1; ?></div>
						<?php endif; ?>
					</div>
					<div class="page-sidebar-right-image">
						<?php if( !empty($image1) ): ?>
							<?php if( !empty($link1) ): ?>
								<a href="<?php the_field("link-image1")?>" ><p class="page-sidebar-right-image-title"><?php echo $image1['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
							<?php else: ?>
								<img  class="page-sidebar-right-img" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
							<?php endif; ?>	
						<?php endif; ?>
					</div>
					<div class="page-sidebar-right-image">
						<?php if( !empty($image2) ): ?>
							<?php if( !empty($link2) ): ?>
								<a href="<?php the_field("link-image2")?>" ><p class="page-sidebar-right-image-title"><?php echo $image2['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
							<?php else: ?>
								<img  class="page-sidebar-right-img" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/>
							<?php endif; ?>	
						<?php endif; ?>
					</div>
					<div class="page-sidebar-right-image">
						<?php if( !empty($image3) ): ?>
							<?php if( !empty($link3) ): ?>
								<a href="<?php the_field("link-image3")?>" ><p class="page-sidebar-right-image-title"><?php echo $image3['alt']; ?></p><img  class="page-sidebar-right-img" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
							<?php else: ?>
								<img  class="page-sidebar-right-img" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/>
							<?php endif; ?>	
						<?php endif; ?>
					</div>	
					<div class="page-sidebar-right-image">
						<?php if( !empty($video) ): ?>
							<div class="page-sidebar-right-img"><?php echo $video; ?></div>
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
	</div>

<?php get_footer(); ?>
