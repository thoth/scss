<?php
/**
 * ScssActivation
 *
 * Activation class for Scss plugin.
  *
 * @package  Croogo
 * @author   Tom Rader <tom.rader@claritymediasolutions.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.claritymediasolutions.com
 */		
class ScssActivation {
	public function beforeActivation(&$controller) {
		return true;
	}

	public function onActivation(&$controller) {
        // ACL: set ACOs with permissions
		$controller->Setting->write('Scss.primary_list','0',array('editable' => 1));


	}

	public function beforeDeactivation(&$controller) {
		return true;
	}

	public function onDeactivation(&$controller) {
        $controller->Croogo->removeAco('Scss'); // ExampleController ACO and it's actions will be removed
	}

}