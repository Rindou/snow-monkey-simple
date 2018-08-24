<?php
add_filter( 'theme_mod_archive-page-layout', function( $option ) {
	return 'right-sidebar';
} );

add_filter( 'theme_mod_header-layout', function( $option ) {
	return '1row';
} );

add_filter( 'theme_mod_breadcrumbs-position', function( $option ) {
	return 'content-width';
} );

add_filter( 'theme_mod_header-position', function( $option ) {
	return 'sticky';
} );

add_filter( 'theme_mod_header-position-only-mobile', function( $option ) {
	return true;
} );

add_filter( 'theme_mod_post-eyecatch', function( $image ) {
	return 'content-top';
} );

add_filter( 'theme_mod_page-eyecatch', function( $image ) {
	return 'title-on-page-header';
} );

add_filter( 'snow_monkey_page_header_thumbnail_size', function( $size ) {
	return 'large';
} );