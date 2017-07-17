<?php
/**
 * Define function about sanitation for customizer option
 * 
 * @package Theme Egg
 * @subpackage Eggnews
 * @since 1.0.0
 */

//Text
function eggnews_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Check box
function eggnews_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return 0;
    }
}

// Number
function eggnews_sanitize_number( $input ) {
    $output = intval($input);
     return $output;
}

// site layout
function eggnews_sanitize_site_layout($input) {
    $valid_keys = array(
        'fullwidth_layout' => __( 'Fullwidth Layout', 'eggnews' ),
        'boxed_layout' => __( 'Boxed Layout', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

// Switch option (enable/disable)
function eggnews_enable_switch_sanitize($input) {
    $valid_keys = array(
        'enable' => __( 'Enable', 'eggnews' ),
        'disable' => __( 'Disable', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

//switch option (show/hide)
function eggnews_show_switch_sanitize( $input ) {
    $valid_keys = array(
            'show'  => __( 'Show', 'eggnews' ),
            'hide'  => __( 'Hide', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

//Archive page layout
function eggnews_sanitize_archive_layout($input) {
    $valid_keys = array(
        'classic'   => __( 'Classic Layout', 'eggnews' ),
        'columns'   => __( 'Columns Layout', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

//Post/Page sidebar layout
function eggnews_page_layout_sanitize( $input ) {
    $valid_keys = array(
            'right_sidebar' => get_template_directory_uri() . '/inc/admin/assets/images/right-sidebar.png',
            'left_sidebar' => get_template_directory_uri() . '/inc/admin/assets/images/left-sidebar.png',
            'no_sidebar' => get_template_directory_uri() . '/inc/admin/assets/images/no-sidebar.png',
            'no_sidebar_center' => get_template_directory_uri() . '/inc/admin/assets/images/no-sidebar-center.png'
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

//Footer widget columns
function eggnews_footer_widget_sanitize( $input ) {
    $valid_keys = array(
            'column1'   => __( 'One Column', 'eggnews' ),
            'column2'   => __( 'Two Columns', 'eggnews' ),
            'column3'   => __( 'Three Columns', 'eggnews' ),
            'column4'   => __( 'Four Columns', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}

//Related posts type
function eggnews_sanitize_related_type( $input ) {
    $valid_keys = array(
            'category'   => __( 'by Category', 'eggnews' ),
            'tag'   => __( 'by Tags', 'eggnews' )
        );
    if ( array_key_exists( $input, $valid_keys ) ) {
        return $input;
    } else {
        return '';
    }
}