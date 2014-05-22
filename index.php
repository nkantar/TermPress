<?php get_header(); ?>

<section id="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php echo post_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta"><a href="<?php echo post_permalink(); ?>"><?php echo get_the_date(); ?></a></p>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else: ?>
    <!-- <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> -->
    <?php endif; ?>
</section>

<?php get_footer(); ?>
