<?php

namespace BrianHenryIE\WPPB;

abstract class WPPB_Plugin_Abstract extends WPPB_Object {

	/**
	 * @var WPPB_Loader_Interface
	 */
	protected $loader;

	public function run() {
		$this->loader->run();
	}

	public function get_loader() {
		return $this->loader();
	}
}

