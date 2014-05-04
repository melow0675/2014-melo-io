<?php
/*
Template Name: Works template
*/
	get_header();
	 
?>	

<div class="current-page" id="works">
	
	<!-- LES PROJETS -->
	<?php 
		// Aller chercher les post pour une page statique
		query_posts(
			array(
      			'orderby' => 'rand'
       		)
       	);
       	
       	if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();				
				
				$link = get_permalink();
				$home_main_img = get_field('home_main_img');
	?>
				
					<section class="full-height project">
						<a href="<?= $link; ?>">
							<h2>Work</h2>
							<p class="catch"><?php the_field('catch_phrase'); ?></p>
							<p class="project-hashtag"><?php the_field('project_hashtag'); ?></p>
							
							<?php
								if( !empty($home_main_img) ) :
									$home_main_img_url = $home_main_img['url'];
									$home_main_img_title = $home_main_img['title'];
							?>
									<div class="img-wrapper">
										<img src="<?= $home_main_img_url; ?>" title="<?= $home_main_img_title; ?>" />
									</div>
							<?php
								endif;
							?>
						</a>
					</section>
				
	<?php
			endwhile; // end while loop
		endif;
		wp_reset_query();
	?>
	
	<div class="radial-gradient" id="last-section">full</div>
	
	<div class="scroll-btn">
		<p data-icon="&#xe000;"></p>
	</div>
	
</div>

<?php
	get_footer();
?>	