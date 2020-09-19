<?php

namespace BrianHenryIE\WPPB;

abstract class WPPB_Plugin_Abstract extends WPPB_Object {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the frontend-facing side of the site.
	 *
	 * @since    1.0.0
	 *
	 * @param WPPB_Loader_Interface $loader The WPPB class which adds the hooks and filters to WordPress.
	 */
	public function __construct( $loader, $plugin_name, $version ) {

		parent::__construct( $plugin_name, $version );

		$this->loader = $loader;
	}

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      WPPB_Loader_Interface $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @return    WPPB_Loader_Interface    Orchestrates the hooks of the plugin.
	 * @since     1.0.0
	 */
	public function get_loader() {
		return $this->loader;
	}
}

