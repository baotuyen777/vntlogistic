<?php
/**
 * Template Name: Tin Tức
 */
get_header();
?>
    <main id="main" class="container" role="main">
        <h1>Tin tức</h1>
        <div class="row">
            <?php
            $query_param = array(
                'post_type' => 'post',
                'orderby' => 'id',
                'order' => 'ASC',
            );
            $i = 0;
            $my_query = new WP_Query($query_param);
            if ($my_query->have_posts()):while ($my_query->have_posts()): $my_query->the_post();
                $i++;
                ?>
                <div class="col-3">
                    <div class="post clearfix">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('size-woocommerce_thumbnail') ?>
                        </a>
                        <div class="des">
                            <h4> <a href="<?php the_permalink() ?>" ><?php the_title() ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            endif;
            ?>
        </div>
        <?php
        //            while (have_posts()) :
        //                the_post();
        //            endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
<?php get_footer(); ?>