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
                                    <li class="da-margin-right23"><a href="#">О центре</a></li>
                                    <li class="da-margin-right23"><a href="#">Акции</a></li>
                                    <li class="da-margin-right23"><a href="#">Статьи</a></li>
                                    <li class="da-margin-right23"><a href="#">Услуги и цены</a></li>
                                    <li class="da-margin-right23"><a href="#">Косметика</a></li>
                                    <li class="da-margin-right44"><a href="#">Контакты</a></li>
                                    <li class="da-margin-right40"><a href="#" class="da-zvonok">Online запись</a></li>
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