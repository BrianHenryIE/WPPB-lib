<?php

namespace WPPB;

interface WPPB_Loader_Interface {

	public function add_action( $hook, $component, $callback, $priority = 10, $accepted_args = 1 );

	public function add_filter( $hook, $component, $callback, $priority = 10, $accepted_args = 1 );

	/**
	 * @see register_widget()
	 *
	 * @param string|\WP_Widget $widget Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass.
	 */
	public function add_widget( $widget );

	public function run();

}

