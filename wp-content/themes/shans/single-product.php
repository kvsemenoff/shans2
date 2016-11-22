<?php get_header(); ?>
<section>
	<div class="container container_style4 ">
		<div class="row">
			<div class="dd-content">
				<div class="col-md-12">
					<h3 class="df-caption">Body Restorative Milk - Успокаивающее молочко для тела после загара
					</h3>
				</div>
				<div class="clearfix"></div>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-6">
					<div class="df-left-blok">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img class="img-responsive" id="df-script-zoom" src="<?php echo $url ?>" alt=""  data-zoom="<?php echo $url ?>?w=1200&amp; ch=DPR&amp;dpr=2">
					</div>
				</div>
				<div class="col-md-6">
					<div class="df-right-blok">
						<ul class="df-first-box">
							<li class="df-first-cap">Назначение</li>
							<?php echo get_field('назначение'); ?>	
						</ul>
						<ul class="df-second-box">
							<li class="df-first-cap">Информация</li>
							<?php echo get_field('информация'); ?>	
						</ul>
						<ul class="df-third-box">
							<li class="df-first-cap">Состав</li>
							<?php echo get_field('состав'); ?>	
						</ul>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
	

</section>
<!-- <script>
  new Drift(document.querySelector('.df-script-zoom'), {
    paneContainer: document.querySelector('.df-right-blok'),
    inlinePane: 900,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true
  });
</script>	 -->	

<?php get_footer(); ?>