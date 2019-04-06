<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->template
				 ->title('Squad')
				 ->set_partial('styles', 'partials/styles')
				 ->set_partial('navigation', 'partials/navigation')
				 ->set_partial('footer', 'partials/footer')
				 ->set_partial('scripts', 'partials/scripts')
				 ->build('home');
	}
}
