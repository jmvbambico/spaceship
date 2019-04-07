<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$contents = [
			'intro'    => $this->load->view('partials/home/intro', '', TRUE),
			'about'    => $this->load->view('partials/home/about', '', TRUE),
			'mission'  => $this->load->view('partials/home/mission', '', TRUE),
			'register' => $this->load->view('partials/home/register', '', TRUE)
		];

		$this->template
				 ->title('Vader Travel &amp; Tours')
				 ->set_partial('styles', 'partials/styles')
				 ->set_partial('navigation', 'partials/navigation')
				 ->set_partial('footer', 'partials/footer')
				 ->set_partial('scripts', 'partials/scripts')
				 ->build('home', ['content' => $contents]);
	}
}
