<?php get_header(); ?>
<link rel="stylesheet" href="http://localhost:8888/wpclassof26/wp-content/themes/classof26/style.css">
<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Ingen indlæg at vise.</p>
    <?php endif; ?>

    <!-- Indsæt billede her -->
    <div class="image-container">
        <img src="http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/background-scaled.jpg" alt="Mit Baggrundsbillede">
    </div>
    
</main>

<?php get_footer(); ?>
