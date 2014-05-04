<?php
	get_header();
?>	

<div class="current-page project-page">
	
	<!-- LES PROJETS -->
	<?php 
		if ( have_posts() ) : 
			while ( have_posts() ) : 
				the_post();
				$home_main_img = get_field('home_main_img');
	?>			
					<section class="full-height project-header">
						<h1><?php the_title(); ?></h1>
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
					</section>
					
					<section class="project-content">
						<p><?php the_content(); ?></p>
					</section>
				
	<?php
			endwhile; // end while loop
		endif; // end if loop
	?>
	
	<!-- NAVIGATION DANS LES PROJETS -->
	<?php
		$next_post = get_next_post();
		$prev_post = get_previous_post();
	?>
		<div class="projects-nav">
			<a data-icon="&#xe000;">CLOSE</a>
			<?php if( !empty( $next_post) ) : ?>
				<a data-icon="&#xe000;" href="<?= get_permalink( $next_post->ID ); ?>">PREV</a>
			<?php endif; ?>
			<?php if( !empty( $prev_post) ) : ?>
				<a data-icon="&#xe000;" href="<?= get_permalink( $prev_post->ID ); ?>">NEXT</a>
			<?php endif; ?>
		</div>
	
	<div class="scroll-btn">
		<p data-icon="&#xe000;"></p>
	</div>
	
</div>

<?php
	get_footer();
?>	