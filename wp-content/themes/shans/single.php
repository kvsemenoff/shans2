<?php get_header(); ?>
<section class="dg-page">
	<div class="container dg-width">
		<div class="row">
			<div class="dd-content">
				<h1><?php the_title(); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php echo get_the_content(); ?>
				<br>
				<br>
				<?php $txt = get_field('текст_ссылки_на_прайс-лист'); ?>
				<?php if (trim($txt) != '') { ?>
				<a href="<?php echo get_field('ссылка_на_прайс-лист'); ?>" class="oznak">
					<?php echo  get_field('текст_ссылки_на_прайс-лист'); ?>
				</a>
				<?php } ?>
				<?php endwhile; ?>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>