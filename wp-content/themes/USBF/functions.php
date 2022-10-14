<?php
    // Suporte para imagens
    add_theme_support('post-thumbnails');  

    

    // Determinando tamanho dos corte da imagem do post
    add_image_size( 'post-image', 437, 290, true );

    add_filter( 'image_size_names_choose', 'my_custom_image_sizes' );
    function my_custom_image_sizes( $sizes ) {
        return array_merge( $sizes, array(
        'post-image' => __( 'Post Images' ),
    ) );
    }

    

    // Limitar tamanho do resumo do post
    function tn_custom_excerpt_length( $length ) 
    {
        return 35;
    }
    add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );



    // Limitar tamanho do título do post
    function max_title_length( $title ) 
    { 

    $max = 65;

    if( strlen( $title ) > $max ) 
    {
        return substr( $title, 0, $max ). " &hellip;";
    } 
    else 
    {
        return $title;
    }
    }
    add_filter ('the_title', 'max_title_length');



    // Exibindo Categorias
    function render_my_post_categories(){
        $categories = get_categories(array(
            'taxonomy' => 'category',
            'orderby' => 'name',
            'parent' => 0,
            'hide_empty' => 0,
        ));
         get_template_part('template-part/list', "categories", ['categories' => $categories]);
    }


    function custom_pagination( \WP_Query $wp_query = null, $echo = true ){

        if ( null === $wp_query ) {
            global $wp_query;
        }

        $next = "<span class='d-none d-lg-block'>Próximo</span>
                 <span class='d-block d-lg-none'> <i class='fas fa-arrow-right'></i> </span>";

        $prev = "<span class='d-none d-lg-block'>Anterior</span>
                 <span class='d-block d-lg-none'> <i class='fas fa-arrow-left'></i> </span>";

        $pages = paginate_links([
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => $prev,
            'next_text'    => $next,
            'add_args'     => false,
            'add_fragment' => ''
        ]);

        if ( is_array( $pages ) ) {
            $paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
            $pagination = '<nav class="pagination"><ul class="pagination pagination-metro mx-auto mt-4 mt-lg-5">';
            foreach ( $pages as $page ) {
                $pagination .= '<li class="page-item"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
            }
            $pagination .= '</ul></nav>';
            if ( $echo ) {
                echo $pagination;
            } else {
                return $pagination;
            }
        }

        return null;
    }


?>