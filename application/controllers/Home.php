<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->template->title('Vader Travel &amp; Tours')
				 ->set_partial('styles', 'partials/styles')
				 ->set_partial('navigation', 'partials/navigation')
				 ->set_partial('footer', 'partials/footer')
				 ->set_partial('scripts', 'partials/scripts');
	}

	public function index()
	{
		$contents = [
			'intro'    => $this->load->view('partials/home/intro', '', TRUE),
			'about'    => $this->load->view('partials/home/about', '', TRUE),
			'mission'  => $this->load->view('partials/home/mission', '', TRUE),
			'register' => $this->load->view('partials/home/register', '', TRUE)
		];

		$this->template->build('home', ['content' => $contents]);
	}

	public function enlist()
	{
		$config = [
			'upload_path'   => './uploads/',
		  'allowed_types' => 'gif|jpg|png',
		  'max_size'      => 1024,
		  'max_width'     => 500,
			'max_height'    => 500
		];

		if (isset($_FILES['file']['name'])) {
			if (0 < $_FILES['file']['error']) echo 'Error during file upload' . $_FILES['file']['error'];
			else {
				if (file_exists('uploads/' . $_FILES['file']['name'])) echo 'File already exists : uploads/' . $_FILES['file']['name'];
				else {
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('file')) echo $this->upload->display_errors();
					else echo $this->validate_form($_FILES['file']['name']);
				}
			}
		}
		else
			echo $this->validate_form();
	}

	private function validate_form($hasPhoto = FALSE)
	{
		$keys = ['name', 'email', 'age', 'gender', 'description'];
		parse_str($this->input->post('profile'), $profile);
		$profile = array_combine($keys, $profile);

		if($hasPhoto) $profile['photo'] = $hasPhoto;
	
	  $database = 'spaceship';
		$this->load->database($database);
		$this->db->query('use ' . $database);
		return ($this->db->insert('abductees', $profile)) ? 'OK' : 'An error occured.';
	}
}
