
<?php get_header(); ?>

<section class="dg-page">
	<div class="container container_style2">
	<div class="container dg-width">
		<div class="row">
			<h1>Статьи</h1>

			<div class="col-md-12">
				<div class="df-tab dg-tab">				
					<div class="df-tab-first">
						
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Статьи', 
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

			<div class="dg-articles">

				<?php $i=1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-6 nopadding nopadding2">
						<div class="imgbox">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
								<div class="gradient"></div>
								<p><?php the_title(); ?> </p>
							</a>
						</div>
						<a class="dg-art-a" href="<?php the_permalink(); ?>">
							<?php echo get_the_excerpt(); ?>
						</a>
					</div>
					<?php if (($i % 2) == 0) { ?>
					<div class="clearfix"></div>
					<?php } ?>
					<?php $i++; ?>
				<?php endwhile; // end of the loop. ?>

			</div>
			<div class="clearfix"></div>
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
	</div>
</section>

<?php get_footer(); ?>

				

