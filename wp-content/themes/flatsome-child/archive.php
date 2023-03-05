<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    ?>
                </header><!-- .page-header -->
                <ul class="posts">
                    <?php while (have_posts()): the_post(); ?>
                        <li class="post_horizontal">
                            <div class="">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title() ?>
                                    </a>
                                </h3>
                                <?php the_excerpt(); ?>
                            </div>

                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php
//			get_template_part( 'loop' );
            else :
                get_template_part('content', 'none');
            endif;
            ?>
            <?php wp_pagenavi() ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//do_action('storefront_sidebar');
get_footer();
