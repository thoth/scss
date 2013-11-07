<?php
/** 
 * Scss Component
  */
 
App::import('Vendor', 'Scssphp.scssc');
class ScssComponent extends Component {

	
	public function initialize(Controller $controller, $settings = NULL) {
		if ($controller->request->is('ajax')) {
			Configure::write('debug', 0);

			// Must disable security component for AJAX
			if (isset($controller->Security)) {
				$controller->Security->validatePost = false;
			}

			// If not from this domain, destroy
			if (($this->allowRemote === false) && (strpos(env('HTTP_REFERER'), trim(env('HTTP_HOST'), '/')) === false)) {
				if (isset($controller->Security)) {
					$controller->Security->blackHole($controller, 'Invalid referrer detected for this request.');
				} else {
					$controller->redirect(null, 403, true);
				}
			}
		}

		$this->controller = $controller;
		
	}

	public function startup(Controller$controller) {
		$this->controller = $controller;
	}


	}



}
