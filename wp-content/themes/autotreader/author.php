<?php get_header(); ?>

<div id="content" class="narrowcolumn">



    <h2>About: <?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?></h2>
    <dl>
        <dt>Profile</dt>
        <dd><?php echo get_the_author_meta('description');?></dd>
    </dl>

    <h2>Posts ::</h2>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</div>

<?php get_footer(); ?>