<?php
/*
Plugin Name: Aggeloo Condolence
Plugin URI: http://aggeloo.com
Description: Easy to use plugin for implemenation of the Aggeloo Condolence register on a WordPress site. Shortcode: [aggeloocondolence provider="aggeloo"]
Version: 0.5.1
Author: Jan-Peter Wiersma
Author URI: http://janpeter.wiersma.me
License: GPLv3
*/

require_once('wp-updates-plugin.php');
new WPUpdatesPluginUpdater_705( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));

if ( ! function_exists( 'iframe_unqprfx_embed_shortcode' ) ) :

	function iframe_unqprfx_enqueue_script() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'aggeloo-responsive', plugins_url() . '/aggeloo/js/jquery.responsiveiframe.js', array('jquery'), false, true );
	}
	add_action( 'wp_enqueue_scripts', 'iframe_unqprfx_enqueue_script' );
	
	
	function iframe_unqprfx_embed_shortcode( $parameters, $content = null ) {
		// Get URL Parameters
		$encode_string = '';
		if ( $_GET != NULL ) {
			if ( strpos( $atts["src"], '?' ) ) { // if we already have '?' and GET params
				$encode_string = '&';
			} else {
				$encode_string = '?';
			}
			foreach( $_GET as $key => $value ) {
				$encode_string .= $key.'='.$value.'&';
			}
		}
		$encode_string = rtrim($encode_string, '&'); // remove last '&'

		$html = '';

        $html .= "\n".'<!-- Aggeloo Condolence plugin v0.5.1 -->'."\n";
        $html .= '<div id="aggelooCondolenceEmbed">';

		$html .= '<iframe id="'.uniqid('aggelooframe-').'"';
		$html .= ' src="http://'.$parameters['provider'].'.provider.aggeloo.com/'.$encode_string.'"';
		$html .= ' style="width: 100%; padding: 0px;margin: 0; border: none; display: block;height:0px; overflow: hidden;" ></iframe>';
		$html .= '</div>'."\n";

		$html .= "\n";
		$html .= '<script type="text/javascript">'."\n";
		$html .= 'jQuery(function() {'."\n";
		$html .= '  jQuery("iframe").responsiveIframe({ xdomain: "*" });'."\n";
		$html .= '});'."\n";
		$html .= '</script>'."\n";

		$html .= "\n".'<!-- Copyright 2015 by Aggeloo.com -->'."\n";
		return $html;
	}
	add_shortcode( 'aggeloocondolence', 'iframe_unqprfx_embed_shortcode' );
	
endif;