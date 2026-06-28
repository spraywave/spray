<?php get_header(); ?>

<main>
    <?php 
    while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>

        <div class="post-meta" style="color: #666; font-size: 0.9rem; margin-bottom: 20px;">
            Postado em: <?php echo get_the_date(); ?>
        </div>

        <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail-cheia" style="margin-bottom: 20px;">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>

        <div class="entry-content-completo">
            <?php the_content(); ?> </div>

        <div class="post-comments" style="margin-top: 50px;">
            <?php 
            // Se os comentários estiverem abertos, carrega o template de comentários padrão
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif;
            ?>
        </div>
    </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>