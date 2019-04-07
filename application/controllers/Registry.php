<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->template->title('Vader Travel &amp; Tours')
				 ->set_partial('styles', 'partials/styles')
				 ->set_partial('navigation', 'partials/blank')
				 ->set_partial('footer', 'partials/blank')
				 ->set_partial('scripts', 'partials/scripts');

		//TODO: Secure this page with a proper authentication module
	}

	public function index()
	{
		$database = 'spaceship';
		$this->load->database($database);
		$this->db->query('use ' . $database);
		$abductees = $this->db->get('abductees');
		$contents = $this->load->view('partials/backend/list', ['abductees' => $abductees], TRUE);
		$this->template->build('registry', ['content' => $contents]);
  }
}
