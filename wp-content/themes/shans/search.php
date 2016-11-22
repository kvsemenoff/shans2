<?php get_header(); ?>
<section class="dg-page">
    <!-- <div class="container dg-width"> -->
    <div class="container container_style4">
        <div class="row">
            <div class="col-md-12">
                <h1>Результаты поиска</h1>
                <div class="search-form">
                    <div class="col-md-3">
                        <h2 class="dg-sf">Вы искали: </h2>
                    </div>
                    <div class="col-md-9 nopadding">
                        <div class="dd-search-box">
                            <form class="dd-form" action="#">
                                <input class="dd-form-input" type="text" name="s" placeholder="Введите слово для поиска">
                                <input type="submit" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <hr>
                <div class="result">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo get_the_excerpt(); ?></p>    
                        
                
                        <?php endwhile; ?>

                  
                    <?php else : ?>
                            <div class="search_field search_field_inner">Вы искали: <a href="#"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></a></div>
                            <div class="calc_results">Ничего не найдено. Попробуйте уточнить свой запрос.</div> 


                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
 