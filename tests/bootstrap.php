<?php
require_once dirname( dirname( __FILE__ ) ) . '/lib/autoloader.php';
require_once dirname( dirname( __FILE__ ) ) . '/lib/cleantalk-php-patch.php';

if( ! function_exists( 'add_action' ) ) {
	function add_action( $arg1, $arg2, $arg3=0, $arg4=0 ) {
		return null;
	}
}

if( ! function_exists( 'add_filter' ) ) {
	function add_filter( $arg1, $arg2, $arg3=0, $arg4=0 ) {
		return null;
	}
}

if( ! function_exists( 'strip_shortcodes' ) ) {
	function strip_shortcodes( $arg1 ) {
		return $arg1;
	}
}
