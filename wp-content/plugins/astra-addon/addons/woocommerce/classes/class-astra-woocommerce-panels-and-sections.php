<?php
/**
 * Register customizer panels & sections.
 *
 * @package     Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.4.3
 */

// Block direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Bail if Customizer config base class does not exist.
if ( ! class_exists( 'Astra_Customizer_Config_Base' ) ) {
	return;
}

if ( ! class_exists( 'Astra_Woocommerce_Panels_And_Sections' ) ) {

	/**
	 * Register Woocommerce Panels and sections Layout Configurations.
	 */
	// @codingStandardsIgnoreStart
	class Astra_Woocommerce_Panels_And_Sections extends Astra_Customizer_Config_Base {
 // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedClassFound
		// @codingStandardsIgnoreEnd

		/**
		 * Register Woocommerce Panels and sections Layout Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.4.3
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_configs = array(

				/**
				 * Section Checkout Page
				 */
				array(
					'name'     => 'section-checkout-page',
					'priority' => 25,
					'title'    => __( 'Checkout Page', 'astra-addon' ),
					'type'     => 'section',
					'panel'    => 'woocommerce',
				),

			);

			return array_merge( $configurations, $_configs );
		}
	}
}

new Astra_Woocommerce_Panels_And_Sections();
