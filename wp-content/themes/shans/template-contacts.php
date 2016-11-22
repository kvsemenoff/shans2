<?php 
/*
Template name: Контакты
*/
?>
<?php get_header(); ?>
 <?php $wp_query = new WP_Query('post_type=setup'); ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php 
$tels = get_field('телефоны_в_футере'); 
$email = get_field('email'); 
$address = get_field('адрес'); 
$regim = get_field('режим_работы'); 
$map = get_field('скрипт_карты'); 
?>
<?php endwhile;?>
<?php wp_reset_query(); ?>
<section>
	<div class="container container_style1">
		<div class="row">
			<div class="col-md-12">
				<h3 class="df-contacts-caption">Контакты</h3>
				<div class="df-contacts">
					<div class="df-box1">
						<ul>
							<li>Тольятти Автозаводский район </li>
							<li>3Б квартал улица Маршала Жукова, 8</li>
						</ul>
					</div>
					<div class="df-box2">
						<ul>
							<li><?php echo $tels; ?></li>
							<li><?php echo $email; ?></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="df-map" id="YMapsID">
<?php echo $map; ?>
</div>
<?php get_footer(); ?>

