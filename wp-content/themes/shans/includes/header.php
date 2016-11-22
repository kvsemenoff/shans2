<section class="da-logo">
    <div class="da-logobox"><a href="/"><img src="img/da-logo.png" alt=""></a></div>
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
                                    <li class="da-margin-right7 da-style1"><a href="/"><img src="img/da-little-logo.png" alt=""></a></li>
                                    <li class="da-margin-right23"><a href="#">О центре</a></li>
                                    <li class="da-margin-right23"><a href="#">Акции</a></li>
                                    <li class="da-margin-right23"><a href="#">Статьи</a></li>
                                    <li class="da-margin-right23"><a href="#">Услуги и цены</a></li>
                                    <li class="da-margin-right23"><a href="#">Косметика</a></li>
                                    <li class="da-margin-right16"><a href="#">Контакты</a></li>
                                    <li class="da-margin-right21"><a href="#" class="da-zvonok">Online запись</a></li>
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
            // alert(1);
            if($('body').scrollTop()>140 || $('html').scrollTop()>140){
                $('.da-point').addClass('da-fixed-menu2');
            } else {
                $('.da-point').removeClass('da-fixed-menu2');
            }
        });
    });
</script>