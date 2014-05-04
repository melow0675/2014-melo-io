<?php
/*
Template Name: Page d'accueil
*/


	get_header();
	 
?>	

<div class="current-page" id="home">

	<section class="full-height" id="welcome">
		<h1>This is Mélodie's portfolio</h1>
		<!-- <p class="catch">I'm just a human trying to make sensory interfaces.</p> -->
		<p class="catch">PAGE D'ACCUEIL</p>
	</section>

	<section class="full-height" id="my-job">
		<h2>My job</h2>
		<p class="catch">At <a href="www.user.io" target="_blank">User Studio</a>, I orchestrate and design stupendous projects</p>
		<p>I'm UX/UI Designer and Lead project<br/>
			<a href="http://www.linkedin.com/in/melodiemancipoz"
			target="_blank">Show my Linked In profile</a>
		</p>
	</section>
	
	<!-- LES PROJETS -->
	<?php 
		// Aller chercher les post pour un page statique
		$my_query = new WP_Query();
		
		if ($my_query->have_posts()) : 
			while ($my_query->have_posts()) : 
				$my_query->the_post();
	?>
	<?php
			endwhile;
		endif;
	?>
	
	<?php
				// CLASSICAL LOOP
				if ( have_posts() ) : 
					while ( have_posts() ) : 
						the_post();
						$link = get_permalink();
						if (get_field("project_appear_home") == "oui" ) :
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
						endif;
					endwhile; // end while loop
				endif; // end if loop	
	?>
	
	<!--
<section class="full-height">
		<h2>When i'm not designing or developping…</h2>
		<p class="catch">I hurtling down Paris with my longboard or mountains with my snowboard.</p>
	</section>
-->
	
	<div class="radial-gradient" id="last-section">full</div>
	
	<div class="scroll-btn">
		<p data-icon="&#xe000;"></p>
	</div>
	
</div>

<?php
	get_footer();
?>	