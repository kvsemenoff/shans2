<?php 
/*
Template name: О центре
*/
?>
<?php get_header(); ?>
<?php 
 
$size = 'full'; 
$image1 = get_field('фото1');
$image2 = get_field('фото2');
$image3 = get_field('фото3');
$image4 = get_field('фото4');
$image5 = get_field('фото5');
$image6 = get_field('фото6');
				
?>
<section>
	<div class="container container_style2">
		<div class="row">
			<div class="col-md-8">
				<h3 class="df-about-caption"><?php the_title(); ?></h3>
				<div class="df-about-text">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php  the_content(); ?>
				<?php endwhile; ?>
				</div>					
			</div>						
			<div class="col-md-4">
				<h3 class="df-article-caption">Статьи</h3>
				<div class="df-art-box">
					<ul> 
						<?php $query = new WP_Query( array( 'cat' => '2' ) ); ?>
			            <?php $i=1; ?>
			            <?php while ( $query->have_posts() ) { ?>
			            <?php $query->the_post(); ?>
			          
			         	 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php if ($i>=12) {break;} ?>
			            <?php $i++; ?>
			            <?php } ?>
			            <?php wp_reset_query(); ?>
					</ul>
					<a href="/?cat=2" class="df-last">Перейти в раздел статьи →</a>				
				</div>				
			</div>	
		</div>
	</div>
</section>

<div class="df-img-about df-margintop">
	<div class="w20">
		<img src="<?php echo $image1['url'];  ?>" alt="" class="">			
	</div>
	<div class="w40">
		<img src="<?php echo $image2['url'];  ?>" alt="" class="">	
	</div>
	<div class="w40">
		<img src="<?php echo $image3['url'];  ?>" alt="" class="">	
	</div>

	<div class="clear"></div>
</div>
<div class="df-img-about df-mtop">
	<div class="w33">
		<img src="<?php echo $image4['url'];  ?>" alt="" class="">			
	</div>
	<div class="w33">
		<img src="<?php echo $image5['url'];  ?>" alt="" class="">	
	</div>
	<div class="w33">
		<img src="<?php echo $image6['url'];  ?>" alt="" class="">	
	</div>
	<div class="clear"></div>
</div>	

<?php get_footer(); ?>