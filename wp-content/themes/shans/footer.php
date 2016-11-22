	<section class="dd-footer">
		<div class="container container_style4">
			<div class="row">
				<div class="col-md-12">
			    	<div class="dd-footer-box-wrap">
						<div class="dd-footer-left">
			    			&copy; Шанс – центр аппаратной косметологии
						</div>
						<div class="dd-search-box">
							<form class="dd-form" action="#">
								<input type="text" name="s" placeholder="Введите слово для поиска">
								<input type="submit" value="">
							</form>
						</div>
			    		<div class="dd-soc-wrap">
				    		<?php $i=1; ?>
							<?php $query = new WP_Query( array( 'post_type' => 'soc' ) ); ?>
			            	<?php while ( $query->have_posts() ) { ?>

			            	<?php $query->the_post(); ?>
			            	<div class="dd-soc">
			    				<a href="<?php echo get_field('ссылка_на_соцсеть'); ?>" target="_blank">
			    				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<img src="<?php echo $url ?>">
			    				</a>
			    			</div>


			           	 	
							<?php $i++; ?>
				            <?php } ?>
				            <?php wp_reset_query(); ?>
			    			
						</div>
						<div class="clearfix"></div>
					    <?php wp_reset_query(); ?>
					    <?php $wp_query = new WP_Query('post_type=setup'); ?>
					    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					    <?php 
					    $tels = get_field('телефоны_в_футере'); 
					    $email = get_field('email'); 
					    $address = get_field('адрес'); 
					    $regim = get_field('режим_работы'); 
					    
					    ?>
					    <?php endwhile;?>
					    <?php wp_reset_query(); ?>

						<div class="dd-box-txt-wrap">
							<div class="dd-box-txt">
								<span class="dd-firstspan">
								(8482)
								<span><?php echo $tels; ?></span>
								</span>
								<span><?php echo $email; ?></span>
								<span><a href="/?p=55">Контакты</a></span>
							</div>
							<div class="dd-box-txt">
								<span>
									<?php echo $address; ?>
								</span>
							</div>
							<div class="dd-box-txt">
								<span>
									<?php echo $regim; ?>
								</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(".dd-form input").focus(function(){
			$("input").css("outline", "none");
		});
	</script>
	
	<script>
		if($('body').scrollTop()>140 || $('html').scrollTop()>140){
	        $('.da-point').addClass('da-fixed-menu2');
	    } else {
	        $('.da-point').removeClass('da-fixed-menu2');
	    }
	</script>

		<div id="mask"></div>
	<div id="zvonok" class="window"> 
		<form action="" class="common-form form1">
			<div class="an-exit">
				<span class="close"></span>
			</div>
			<span class="form-title">Закажите обратный звонок</span>
			<span class="form-subtitle">Оставьте заявку и наш специалист перезвонит вам в течении 3 минут</span>
			<label>Введите Ваш телефон</label>
			<input type="text" name="tel" placeholder="+7 900 000 00 00" class="phone">
			<label>Введите Ваш e-mail (желательно)</label>
			<input type="text" name="email" placeholder="ivanov@mail.ru">
			
			<input type="submit" id="form1_submit" value="Заказать звонок">
		</form>
	</div>



	<div id="thanks" class="window"> 
		<form action="" class="common-form">
			<div class="an-exit">
				<span class="close"></span>
			</div>
			
			<span class="form-title ah-thanks1">Спасибо! Ваша заявка принята!</span>
			<span class="form-subtitle ah-thanks2">Наш специалист свяжется с вами в ближайшее время</span>
		</form>
	</div>

	<a href="#thanks" name="modal"></a>



<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<?php wp_footer(); ?>
</body>
</html>

