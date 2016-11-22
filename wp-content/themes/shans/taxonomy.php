
<?php get_header(); ?>

<section>	
	<div class="container container_style4">
		<div class="row">
			<div class="col-md-12">
				<h3 class="df-cosm-caption">Косметика</h3>
				<div class="df-tab">				
					<div class="df-tab-first">
						<h4 class="df-tab-cap">Выберите применение косметики:</h4>
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Косметика', 
						    'container'       => false, 
						    'container_class' => '', 
						    'container_id'    => '',
						    'menu_class'      => '', 
						    'menu_id'         => '',
						    'echo'            => true,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',
						    'items_wrap'      => '<ul>%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="df-tab-second">
						<h4 class="df-tab-cap2">Выберите бренд: </h4>
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Бренд', 
						    'container'       => false, 
						    'container_class' => '', 
						    'container_id'    => '',
						    'menu_class'      => '', 
						    'menu_id'         => '',
						    'echo'            => true,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',
						    'items_wrap'      => '<ul>%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>							
				</div>
				<?php $i=1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php if (($i % 3)== 0) { ?>
				<div class="df-cosmetics dflast">	
				<?php } else{ ?>
				
				<div class="df-cosmetics">
				<?php }  ?>
				
					<div class="df-img-cosm">
						<a href="<?php the_permalink(); ?>">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
						<img src="<?php echo $url ?>" class="img-responsive">
						</a>
					</div>
					<div class="df-text-box">
						<h4 class="df-text-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4>
						<p><?php echo get_field('краткое_описание'); ?></p>					
					</div>				
				</div>
				<?php $i++; ?>
				<?php endwhile;  ?>
			</div>
		</div>
	
</section>


<?php get_footer(); ?>

				

