<?php
/**
 * The Main Route Class for Gravity Form.
 *
 * @package  WP_All_Forms_API
 * @since 1.0.0
 */

namespace Includes\Routes\GF;

use Includes\Routes\GF\Form;
use Includes\Routes\GF\Entry;
use Includes\Routes\GF\EntryMeta;
use Includes\Plugins\Constant;
use Includes\Plugins\Config;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Class Route
 *
 * Init all routes
 *
 * @since 1.0.0
 */
class Route {

	/**
	 * The route name space
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Route constructor.
	 *
	 * @param string $name The route name space.
	 */
	public function __construct( $name ) {
		$this->name = $name;
	}

	/**
	 * Init all routes.
	 */
	public function init_routes() {
		$result = ( new Config() )->chek_plugin_form_is_installed_by_slug( Constant::FORM_SLUG_GF );
		if ( $result ) {
			( new Form( $this->name ) )->init_routes();
			( new Entry( $this->name ) )->init_routes();
			( new EntryMeta( $this->name ) )->init_routes();
		}
	}

}
