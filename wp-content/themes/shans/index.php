<?php get_header(); ?>


	<section class="dd-slider-face dd-slider-face2">
		<div class="dd-slider">
		  	<?php $query = new WP_Query( array( 'post_type' => 'slider' ) ); ?>
            <?php while ( $query->have_posts() ) { ?>
            <?php $query->the_post(); ?>
          	<div class="item">
				<a href="<?php echo  get_field('ссылка_на_страницу'); ?>">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				<img src="<?php echo $url ?>">
				
				</a>
			</div>
			
            <?php } ?>
            <?php wp_reset_query(); ?>
		</div>
	</section>

	<section>
		<div class="container container_style2">
			<div class="row">
				<div class="col-md-12 db-lvbox">
					<div class="dfblock">
						<a href="/?thecat=лицо" class="db-lv-title">Лицо</a>	
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Меню Лицо на Главной', 
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
						    'items_wrap'      => '<ul class="db-lv-list">%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="dfblock">
						<a href="/?thecat=волосы" class="db-lv-title">Волосы</a>
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Меню Волосы на Главной', 
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
						    'items_wrap'      => '<ul class="db-lv-list">%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="dfblock">
						<a href="/?thecat=фигура" class="db-lv-title">Фигура</a>
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Меню Фигура на Главной', 
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
						    'items_wrap'      => '<ul class="db-lv-list">%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="dfblock">
						<a href="/?mycat=все" class="db-lv-title">Косметика</a>
						<?php
						  $args = array(
						    'theme_location'  => '',
						    'menu'            => 'Меню Косметика на Главной', 
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
						    'items_wrap'      => '<ul class="db-lv-list">%3$s</ul>',
						    'depth'           => 0
						);
						wp_nav_menu($args ); 
						?>
					</div>
					<div class="clearfix"></div>

					<a href="/?thecat=волосы" class="db-lv-link">Перейти ко всем услугам</a>

				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container container_style1">
			<div class="row">
				<div class="col-md-12 db-margbott">
					<?php $i=1; ?>
					<?php $query = new WP_Query( array( 'post_type' => 'baner' ) ); ?>
		            <?php while ( $query->have_posts() ) { ?>

		            <?php $query->the_post(); ?>
		            <div class="db-rl-lift<?php echo $i; ?>">
		            	<a href="<?php echo  get_field('ссылка_на_страницу'); ?>">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							<img src="<?php echo $url ?>">
						</a>
					</div>
					<?php $i++; ?>
		            <?php } ?>
		            <?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container container_style3">
			<div class="row">
				<div class="col-md-12">
					<div class="db-wrapp">
						<span class="db-stat-title">Статьи</span>

						<div class="clearfix"></div>
        
			            <?php $query = new WP_Query( array( 'cat' => '2' ) ); ?>
			            <?php $i=1; ?>
			            <?php while ( $query->have_posts() ) { ?>
			            <?php $query->the_post(); ?>
			          
			            <div class="db-div<?php echo $i;  ?>">
							<p class="db-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>
						<?php if ($i>=4) {break;} ?>
			            <?php $i++; ?>
			            <?php } ?>
			            <?php wp_reset_query(); ?>
						<div class="clearfix"></div>

						<a href="/?cat=2" class="db-stat-link">Перейти в раздел статьи →</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container container_style4">
			<div class="row">
				<div class="col-md-12">
					<h3 class="df-cap-center">О центре</h3>
					<div class="df-center-text">
						<?php wp_reset_query(); ?>
						<?php $query = new WP_Query( array( 'page_id' => '57' ) ); ?>
			            <?php while ( $query->have_posts() ) { ?>
			            <?php $query->the_post(); ?>
			            <?php the_content(); ?>
			            <?php } ?>
			            <?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>