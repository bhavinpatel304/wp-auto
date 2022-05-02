<?php
/**
 * The template for displaying all single posts and attachments
 */
  
get_header(); ?>
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            
            get_template_part( 'content', get_post_format() );
  
 
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            
        
            
            // check author plugin is activated or not
            if(in_array('Authors/author.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
                echo do_shortcode("[authors]"); 
            }
     
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'autotreader' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'autotreader' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'autotreader' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'autotreader' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        
        ?>
  
        </main>
    </div>
  
<?php get_footer(); ?>