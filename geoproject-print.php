<?php

   /** Plugin Name: geoproject-book-print 
    * Description: print your geoproject using pagedjs
    * Author: julien taquet
    * Text Domain: geoproject-book-print *
    * Requires at least: 5.6
    * Require PHP: 7.2
    **/
 
    
    /** 1. create custom post type for css files */

    function pagedjs_css_custom_post_type() {
        register_post_type( 'pagedjs-template', 
        array(
            'labels' => array(
                'name' => __('Book Templates'),
                'singular_name' => __('Template'),
                'add_new' => __('Create new template'),
                'add_new_item' => __('Create new template'),
                'edit_item' => __('Edit template'),
            ),
            'exclude_from_search' => true,
             'has_archive' => false,
            'menu_position' => 50,
            'public' => true,
            'supports' => array('none'),
            'register_meta_box_cb' => 'css_metabox'
            )

        );
    }

    function css_metabox() {
        add_meta_box('css_metabox_custom_fields', __('Pagedjs template settings'),  'template_metabox_display', 'pagedjs-template');
    }

    add_action('add_meta_boxes', 'css_metabox');

    function template_metabox_display( ) {
        
        global $post;
        $templateName = get_post_meta( $post->ID,'templateName', true);
        $templateCSS = get_post_meta( $post->ID,'templateCSS', true);
        ?>
        <label for="templateName">name of your template</label>
        <input type="text" name="templateName" placeholder="my template name" class="widefat" value="<?php print $templateName ?>" required>
        <br/><br/>
        <label for="templateCSS">the code</label>
        <textarea placeholder="my template CSS" name="templateCSS" rows="30" class="widefat"><?php print $templateCSS ?></textarea>
        <?php
    }   


    add_action('init', 'pagedjs_css_custom_post_type');


    // save the data

    function template_save($post_id) 
    
    {

// //check if post is object otherwise you're not in singular post
// if( !is_object($post_id) ) 
// return;

        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id ) ;

        if ($is_autosave || $is_revision) {
            return;
        } 

        $post = get_post( $post_id );
        // make sure it’s only appearing on the book layout page

        if ($post->post_type == 'pagedjs-template') {
            // save custom fields data
            if(array_key_exists('templateName', $_POST)) { 
                update_post_meta($post_id, 'templateName', $_POST['templateName']);
             }
             if(array_key_exists('templateCSS', $_POST)) { 
                update_post_meta($post_id, 'templateCSS', $_POST['templateCSS']);
             }
        }
        
    }

    add_action('save_post', 'template_save')

?>
