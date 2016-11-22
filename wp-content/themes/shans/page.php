<?php get_header(); ?>
<section class="dg-page">
	<div class="container dg-width">
		<div class="row">
			<div class="dd-content">
				<h1><?php the_title(); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>