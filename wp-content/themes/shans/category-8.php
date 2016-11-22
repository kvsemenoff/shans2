
<?php get_header(); ?>
<section class="dg-page">
	<div class="container container_style4">
	<!-- <div class="container dg-width"> -->
		<div class="row">
			<h1>Акции</h1>
			<div class="col-md-12">
				<div class="df-tab dg-tab">				
					<div class="df-tab-first">
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Акции', 
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
			</div>
			<div class="dg-actions">
				<?php $i=1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12 mh">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="calendar"><span class="left"><?php the_field('дата_акции'); ?></span><span class="right"><?php the_field('скидка_в_акции_'); ?></span></div>
					<p><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
				</div>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<p class="dg-center">*- подробности акции уточняйте у администраторов центра</p>
		<div class="pagin">			
			<?php 
				$pagin = get_the_posts_pagination(); 
				$patt = "#<h2([\w\W]+?)</h2>#u"; 				
				//preg_match($patt, $pagin, $rs); 
				//var_dump($rs); 
				$rs = preg_replace($patt, '', $pagin); 
				//var_dump($rs); 
				echo $rs; 
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

				

