<?php get_header(); ?>
<section class="dg-page">
	<div class="container dg-width">
		<div class="row">
			<div class="dd-content">
				<h1><?php the_title(); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php echo get_the_content(); ?>
				<br>
				<?php //print_r(get_field('ts_price_link')); ?>
				<br>			
				<?php endwhile; ?>
			</div>	
			<section class="dd-slider-face">
				<div class="dd-face-content-wrap">
					<div class="dd-dowload">					
						<?php $txt = get_field('ts_price_link')['url']; ?>
						<a href="<?php echo $txt; ?>"><?php echo get_field('ts_price_link_caption'); ?></a>	
					</div>
				</div>
			</section>
		</div>
	</div>

</section>
<?php get_footer(); ?>