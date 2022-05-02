<?php

// add metabox in to all post 
function my_metabox() {
    add_meta_box( 'is_developer', 'Developers', 'display_developers', 'post', 'side' );
}
add_action( 'admin_init', 'my_metabox' );


// display all authors into metabox
function display_developers( $developer ) {
	$listDevelopers = get_post_meta( $developer->ID, 'is_developer', true );	
    $args = array(
        'role__in' => array( 'author' ),
        'role__not_in' => 'Administrator',
        'order' => 'ASC',
        'orderby' => 'display_name',
    );
    $authors = get_users( $args );    
    foreach ( $authors as $author ) {  
        $id = esc_html( $author->ID );
        ?>          
        <span class="content">
            <label for="<?php echo $id ?>_developer">
                <input type="checkbox" name="developers[<?php echo $id ?>]" id="<?php echo $id ?>_developer" value="1" <?php echo isset($listDevelopers[$id]) ? 'checked' : ''; ?> />
            </label>
        </span> 
        <span class="title"><?php echo esc_html( $author->display_name ); ?></span>
        <?php
    }

}

// update check box selection
function update_developer( $post_id ) {
    if( !current_user_can( 'edit_post' ) ) return;   
    if ( isset( $_POST['developers'] ) && $_POST['developers'] != '' ) {
        update_post_meta( $post_id, 'is_developer', $_POST['developers'] );
    }else {
        update_post_meta( $post_id, 'is_developer', "" );
    }    
}
add_action( 'save_post', 'update_developer' );

?>