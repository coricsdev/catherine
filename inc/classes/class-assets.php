<?php
/**
 * Enqueue theme assets
 *
 * @package CATHERINE
 */

namespace CATHERINE_THEME\Inc;

use CATHERINE_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_styles() {
		// Register styles.
		wp_register_style( 'bootstrap-css', CATHERINE_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all' );
		wp_register_style( 'slick-css', CATHERINE_BUILD_LIB_URI . '/css/slick.css', [], false, 'all' );
		wp_register_style( 'slick-theme-css', CATHERINE_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all' );
		wp_register_style( 'main-css', CATHERINE_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime( CATHERINE_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'slick-css' );
		wp_enqueue_style( 'slick-theme-css' );
		wp_enqueue_style( 'main-css' );
	}

	public function register_scripts() {
		// Register scripts.
		wp_register_script( 'slick-js', CATHERINE_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, true );
		wp_register_script( 'main-js', CATHERINE_BUILD_JS_URI . '/main.js', ['jquery', 'slick-js'], filemtime( CATHERINE_BUILD_JS_DIR_PATH . '/main.js' ), true );
		wp_register_script( 'bootstrap-js', CATHERINE_BUILD_LIB_URI . '/js/bootstrap.min.js', ['jquery'], false, true );

		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'slick-js' );
	}

	/**
	 * Enqueue editor scripts and styles.
	 */
	public function enqueue_editor_assets() {

		$asset_config_file = sprintf( '%s/assets.php', CATHERINE_BUILD_PATH );

		if ( ! file_exists( $asset_config_file ) ) {
			return;
		}

		$asset_config = require_once $asset_config_file;

		if ( empty( $asset_config['js/editor.js'] ) ) {
			return;
		}

		$editor_asset    = $asset_config['js/editor.js'];
		$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
		$version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

		// Theme Gutenberg blocks JS.
		if ( is_admin() ) {
			wp_enqueue_script(
				'CATHERINE-blocks-js',
				CATHERINE_BUILD_JS_URI . '/blocks.js',
				$js_dependencies,
				$version,
				true
			);
		}

		// Theme Gutenberg blocks CSS.
		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library',
		];

		wp_enqueue_style(
			'CATHERINE-blocks-css',
			CATHERINE_BUILD_CSS_URI . '/blocks.css',
			$css_dependencies,
			filemtime( CATHERINE_BUILD_CSS_DIR_PATH . '/blocks.css' ),
			'all'
		);

	}

}
