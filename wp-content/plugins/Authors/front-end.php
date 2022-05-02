<?php

// display only authors  into meta box
function display_authors() {
	$listDevelopers = get_post_meta( get_the_ID(), 'is_developer', true );

    echo '<div class="row">';
    echo '<h3>Developers</h3>';
    if($listDevelopers == ""){
        echo '<p>No authors selected</p>';
    }
    else{
        $args = array(
            'role__in' => array('author'),
            'role__not_in' => 'Administrator', // ignore administrator
            'include' => array_keys($listDevelopers),
            'order' => 'ASC',
            'orderby' => 'display_name',        
        );
        $authors = get_users( $args );
        
        foreach ( $authors as $author ) {  
                $author_id = $author->id;           
        ?> 
            <div class="col-md-2">
                <div class="bd-example bd-example-images">
                    <img class="" src="<?php echo get_avatar_url($author_id); ?>" alt="User Avatar"/>
                </div>

                <figure class="highlight">
                    <h6 class="widget-user-username">
                        <a href='<?php echo get_author_posts_url( $author_id ); ?>' width="128" target='_blank'>
                                <?php echo get_the_author_meta( 'display_name', $author_id ) ?>
                        </a>
                    </h6>
                </figure>
            </div>            
            <?php
        } 
    }  
    echo "<div>";
}
add_shortcode('authors', 'display_authors');
?>