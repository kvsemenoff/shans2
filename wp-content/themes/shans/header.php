<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head();?>
</head>

<?php 
//Для категрии статей используется другая шапка, поэтому выясняем id категории и проверяем 
$categories = get_the_category();
$cat = $categories[0]->term_id;
$parent = $cat->parent;
$child = get_category($cat);
$parent = $child->parent;
$parent_name = get_category($parent);
$parent_id = $parent_name->term_id;
?>
<?php if (is_home()) { ?>
	<body>
<?php } else { ?>
	<?php if (($cat =='2') || ($parent_id=='2' )) { ?>
		<?php if (!is_single()){?>
			<body class="da-head2">
		<?php } else{ ?>
		<body>
		<?php } ?>
	<?php } elseif (($cat =='8') || ($parent_id=='8' )) { ?>
		<?php if (!is_single()){?>
			<body class="da-head1">
		<?php } else{ ?>
		<body>
		<?php } ?>
	<?php } ?>
<?php } ?>

	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/dr/drift.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jscrollpane.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	

	<script>
    	new WOW().init();
    </script>
	

<?php if (is_home()){ ?>
	<section class="da-menu da-menu_style">
	    <div class="da-fixed-menu">
	    	<div class="container container_style2">
	            <div class="row">
	                <div class="col-md-12 col-xs-12">
	                    <div class="anz-menu">
	                        <input type="checkbox" id="check_1" class=""/>
	                        <label class="anz-menu-ch" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i></label>
	                        <div class="anz-perspective">
	                            <div class="menu-list-pressed">
	                                <ul class="main-menu main-menu_style2">
	                                    <li><label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i></label></li>
	                                    <!-- <li><a href="/"><img src="" alt=""></a></li> -->
	                                   	<li class="da-margin-right23"><a href="/?p=30">О центре</a></li>
	                                    <li class="da-margin-right23"><a href="/?cat=8">Акции</a></li>
	                                    <li class="da-margin-right23"><a href="/?cat=2">Статьи</a></li>
	                                    <li class="da-margin-right23"><a href="/?thecat=волосы">Услуги и цены</a></li>
	                                    <li class="da-margin-right23"><a href="/?mycat=все">Косметика</a></li>
	                                    <li class="da-margin-right16"><a href="/?p=55">Контакты</a></li>
	                                    <li class="da-margin-right40"><a href="#zvonok" name="modal" class="da-zvonok">Online запись</a></li>
	                                    <li><a href="tel:88482660655">8 (8482) 66-06-55</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>
	</section>
	<script>
	    $(document).ready(function(){
	        // alert(1);
	        $(document).scroll(function(){
	            // alert(1);
	            if($('body').scrollTop()>2 || $('html').scrollTop()>2){
	                $('.da-fixed-menu').addClass('da-fixed-menu_style');
	            } else {
	                $('.da-fixed-menu').removeClass('da-fixed-menu_style');
	            }
	        });
	    });
	</script>
<?php } else {?>

	<section class="da-logo">
	    <div class="da-logobox"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/da-logo.png" alt=""></a></div>
	</section>
	<section class="da-menu da-menu_style2">
	    <div class="da-point">
	    	<div class="container container_style2">
	            <div class="row">
	                <div class="col-md-12 col-xs-12">
	                    <div class="anz-menu">
	                        <input type="checkbox" id="check_1" class=""/>
	                        <label class="anz-menu-ch" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i></label>
	                        <div class="anz-perspective">
	                            <div class="menu-list-pressed">
	                                <ul class="main-menu main-menu_style">
	                                    <li><label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i></label></li>
	                                    <li class="da-margin-right7 da-style1"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/da-little-logo.png" alt=""></a></li>
	                                    <li class="da-margin-right23"><a href="/?p=30">О центре</a></li>
	                                    <li class="da-margin-right23"><a href="/?cat=8">Акции</a></li>
	                                    <li class="da-margin-right23"><a href="/?cat=2">Статьи</a></li>
	                                    <li class="da-margin-right23"><a href="/?thecat=волосы">Услуги и цены</a></li>
	                                    <li class="da-margin-right23"><a href="/?mycat=все">Косметика</a></li>
	                                    <li class="da-margin-right16"><a href="/?p=55">Контакты</a></li>
	                                    <li class="da-margin-right21"><a href="#zvonok" name="modal" class="da-zvonok">Online запись</a></li>
	                                    <li><a href="tel:88482660655">8 (8482) 66-06-55</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	    	</div>
	        <div class="da-green-outer">
	            <div class="da-green"></div>
	        </div>
	    </div>
	</section>
	<script>
	    $(document).ready(function(){
	        // alert(1);
	        $(document).scroll(function(){
	             //alert(1);
	            if($('body').scrollTop()>140 || $('html').scrollTop()>140){
	                $('.da-point').addClass('da-fixed-menu2');
	            } else {
	                $('.da-point').removeClass('da-fixed-menu2');
	            }
	        });
	    });
	</script>
<?php } ?>