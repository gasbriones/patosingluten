<?php

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'category-menu' => __('Category Menu'),
            'sticky-menu' => __('Sticky Menu')
        )
    );
}

add_action('init', 'register_my_menus');


function spanish_months($arg) {

    $months = array(
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre'
    );

    return $months[$arg];
}


function months (){
    return array('Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
}


add_filter( 'nav_menu_link_attributes', 'filter_function_name', 10, 3 );

function filter_function_name( $atts, $item, $args ) {
    // Manipulate attributes
    return $atts;
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


function custom_excerpt($id){
    $text =  wp_strip_all_tags(get_post_field('post_content', $id));
    $text = wp_trim_words( $text, $num_words = 55, $more = null);
    return   esc_attr($text);
}