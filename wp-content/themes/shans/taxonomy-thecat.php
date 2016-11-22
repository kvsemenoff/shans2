<?php get_header(); ?>

<div class="container dd-sub-menu-wrapper">
	<div class="dd-sub-menu">
		<?php
						  $args = array(
						    'theme_location'  => '', 
						    'menu'            => 'Услуги', 
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
		<!-- <ul>
			<li><a class="active" href="#">Лицо</a></li>
			<li><a href="#">Фигура</a></li>
			<li><a href="#">Волосы</a></li>
		</ul> -->

	</div>
</div>

<script>
	$(document).ready(function(){
		$(".face-menu li a").click(function(){
			var mythis = $(this);
			var box = mythis.attr('data-box');
			$('.submenu-box-menu ul').css('display','none');
			$('.submenu-box').css('display','block');
			$(".face-menu li a").removeClass('active');
			$('.'+box).css('display','block');
			mythis.toggleClass('active');
			mythis.parents('.dd-first-ul').find('.dd-sub-title').find('span').html(mythis.html());
			return false;	
			
		});		
	});
</script>

<?php 

?>

<section class="dd-slider-face">
<div class="dd-slider">
<?php 

// заполним дерово каталогов с дочерними элементами... 
$mtree = array(); 

// получили значение параметра ?thecat=лицо : [term_id] => 26 ; [name] => Лицо 
$queried_object = get_queried_object(); 
$term_id = $queried_object->term_id; 
$taxonomy = $queried_object->taxonomy; 
$name = $queried_object->name; // имя категории родителя - Волосы 
// d($queried_object,'get_queried_object'); 
//d($term_id,'term_id'); 
//d($name,'term_name'); 

// slider_lico 
// slider_volocy 
// slider_telo 

$nms = array('Лицо','Волосы','Фигура');
switch ($name) {
    case $nms[0]:
        //echo "lico";
    		$query = new WP_Query( array( 'post_type' => 'slider_lico' ) ); 
				//echo "end of lico"; 
        break;
    case $nms[1]:
        //echo "volosy"; 
        $query = new WP_Query( array( 'post_type' => 'slider_volocy' ) ); 
        break;
    case $nms[2]:
        //echo "figura"; 
    $query = new WP_Query( array( 'post_type' => 'slider_telo' ) ); 
        break;
    default: echo "";
}

while ( $query->have_posts() ) {
	$query->the_post(); 
	?>							
		<a href="<?php echo get_field('ссылка_на_страницу'); ?>">
		<?php
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
			// echo $url . "<hr style='border: 3px solid #000; '>"; 
		?>
			<div class="item">
				<img src="<?php echo $url; ?>">
			</div>
		</a>	
	<?php
} 
wp_reset_query(); 

?>
</div>

	<div class="dd-face-content-wrap">
		<div class="dd-first-ul">			
			<ul class="face-menu">
				<?php

					//$lvl2_items = array();
					// получаем имена дочерних категорий для 	[term_id] => 28 ; [name] => Волосы 
					$terms = get_terms( array('taxonomy' => 'thecat', 'hide_empty' => false, ) ); 
					//d($terms,"terms by taxonomy".$name,1); 
					$i = 0; 
					foreach ($terms as $k => $v)
						if ($v->parent == $term_id)
						{
							$i++; 
							//$lvl2_items[] = [$v->name, $v->term_id]; 
							//echo $v->name; 
							//echo "<hr style='border: 3px solid #000000;'>"; 
							echo "<li><a href='#' data-box=". 'm'.$i .">{$v->name}</a></li>"; 
							//d($v,"2 level child"); 
						}

				?>

<!-- 		<li><a href="#" data-box="m1">Инъекционная косметология</a></li>
				<li><a href="#" data-box="m2">Аппаратная косметология</a></li>
				<li><a href="#" data-box="m3">Лазерная косметология</a></li>
				<li><a href="#" data-box="m4">Нитевой лифтинг</a></li>
				<li><a href="#" data-box="m5">Фототерапия</a></li>
				<li><a href="#" data-box="m6">Пилинги</a></li>
				<li><a href="#" data-box="m7">Уход за лицом и телом</a></li>
				<li><a href="#" data-box="m8">Трихология</a></li>
				<li><a href="#" data-box="m9">Профессиональная косметика</a></li> -->
			</ul>
			
			<?php 
				//d($lvl2_items, 'lvl2_items', 1); 				
				// parent 
				$terms2 = get_terms( 
															array('taxonomy' => 'thecat', 'hide_empty' => false, 
																	 'parent' => $lvl2_items[0][1]
																) 
													 ); 
				//d($terms2,"terms child by parent: ".$lvl2_items[0][1],1); 				

				

			?>

			<div class="dd-linee"></div>			

			<div class="submenu-box">
				<div class="dd-sub-title">
					<span>Пилинги</span>					
				</div>
				<div class="submenu-box-menu">
			<?php 

			// code etalon 
      $children = get_terms( $queried_object->taxonomy, 
      												array(
												        'parent'    => $queried_object->term_id,
												        'hide_empty' => false
      														) 
      											);
      //d($children,"childrens"); 
      $nm = 0;
      foreach ($children as $k => $v)
      {
      	?>
      	<?php
        $query = new WP_Query( array(
										        	'tax_query' => array(
										        		array(
										        			'taxonomy' => 'thecat',
										        			'terms'    => $v->term_id
										        			)
										        			)
									        		) );
        //d($query,"q1"); 
        $nm++; 
        echo "<ul class='m".$nm."'>"; 
        foreach($query->posts as $k2 => $v2)
        {
        	//echo $v2->post_title; 
        	//echo "<br>"; 
        	//echo $v2->guid; 
        	//echo "<br>"; 
        	?>
        	<li><a href="<?php echo $v2->guid; ?>"><?php echo $v2->post_title ?></a></li>
					<!-- 					
						<li><a href="#">11Пилинг “Anna Lotan” 16%</a></li>						
						<li><a href="#">Пилинг Биодрога</a></li>
						<li><a href="#">Мезотерапия Сакура</a></li>	-->			

        	<?php
        }
        echo "</ul>"; 
      } wp_reset_postdata(); 

			?>
				</div>					

			</div>
		</div>
		
		<?php
			// this does not exists
			// load 'ts_desc' for this taxonomy term (term object) 
			//$ts_desc = get_field('ts_desc', $queried_object); 
			//d($ts_desc); 
		?>
		<div class="dd-title"><span class=""><?php //echo $name; ?></span></div>
		<?php
			//echo $ts_desc; 

			// this does not exists
			// load 'ts_tmp' for this taxonomy term (term string) 
			//$ts_tmp = get_field('ts_tmp', $taxonomy . '_' . $term_id); 
			//d($ts_tmp); 

		?>

	</div>

	<div class="dd-face-content-wrap">
		<div class="dd-dowload">
			<?php 
				//$ts_price_link = get_field('ts_price_link', $queried_object); 
				//d($ts_price_link,'$ts_price_link'); 
			?>
			<!-- <a href="<?php //echo $ts_price_link['url']; ?>">Скачайте полный прайс-лист на все процедуры центра “Шанс”</a> -->
		</div>
	</div>
</section>

<?php get_footer(); ?>