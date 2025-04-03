<?php get_header(); ?>

<main>
    <article>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('large'); ?>
            <div class="product-info">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </article>
</main>

<?php get_footer(); ?>
