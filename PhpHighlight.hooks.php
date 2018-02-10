<?php

class PhpHighlightHooks {

	static function efSetPhp( &$parser ){
		$parser->setHook( 'php', 'PhpHighlightHooks::efRenderPhp' );
		return true;
	}

	/**
	 * Callback
	 */
	static function efRenderPhp( $text ){
		$html = highlight_string( $text, true );
		return str_replace( '<br>', "<br>\n", $html );
	}
}
