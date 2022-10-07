<?php

    add_theme_support('post-thumbnails');  

    add_image_size( 'post-image', 437, 290, true );

    add_filter( 'image_size_names_choose', 'my_custom_image_sizes' );
    function my_custom_image_sizes( $sizes ) {
        return array_merge( $sizes, array(
        'post-image' => __( 'Post Images' ),
    ) );
    }

