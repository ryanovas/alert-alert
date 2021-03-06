<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	/*

	 NOTES FOR GENERAL USE
	 	- When loading a view create an array called $data and use it to pass information onto the template.php file
	 	- Array keys can be accessed as regular variables when passed onto the view, e.g. $data['eg'] = 'data'; can be called in the view with $eg
	 	- If an extra js or css file is needed on a page, create an array with the filename of the wanted file in the respective spot in $data, e.g. 'css' => array('design.css')
	 	- The global variable $this->result can be used to pass information between functions
	 	- When using AJAX you must grab the csrf token value and name that can be grabbed with the hidden input '#csrf'
	 	- UserID can be grabbed with '#UserID'

	 	- Codeigniter can't locate files named like this: exampleFile. You must name files like this: example_file. You can however use functions named exampleFunction
	 	- Load models and views with $this->load->model('your_model'); and vice versa
	 	- All Codeigniter functions can be found here: http:ellislab.com/codeigniter/user-guide/index.html

	 	- Almost all styles and structures are preset:
	 		- All basic structures are styled (h1, p, input, button, etc)
	 		- Colour scheme located here: http://www.colourlovers.com/palette/2284978/Space_Cadet

	*/

	public function index() {
		
		$this->home();

	}

	public function home() {

		$data = array(
			'main_content' => 'home',
			'current' => 'Home',
			'css' => array('home.css')
		);

		$this->load->view('inc/template', $data);

	}

	public function pitch() {

		$data = array(
			'main_content' => 'pitch',
			'current' => 'Pitch',
			'css' => array('pitch.css'),
			'js' => array('pitch.js')
		);

		$this->load->view('inc/template', $data);

	}

	public function emailList() {

		$email = $this->input->post('email');
		$q = $this->db->get_where('emails', array('Email' => $email));

		if ($q->num_rows > 0) die('false');

		$data = array(
			'Email' => $email,
			'Date' => date('Y-m-d H:i:s', now())
		);

		if ($this->db->insert('emails', $data)) die('true');

	}

	public function feed() {

		$this->load->model('xmlmodel');
		$voevents = $this->xmlmodel->voevents();

		$this->load->model('weather_model');
		$weather = $this->weather_model->getWeather();

		$data = array(
			'weather' => $weather,
			'voevents' => $voevents,
			'main_content' => 'feed',
			'current' => 'Feed',
			'css' => array('feed.css'),
			'js' => array('viewController.js', 'share.min.js', 'jquery.urlshortener.min.js')
		);

		$this->load->view('inc/template', $data);

	}

	public function about() {
		$data = array(
			'main_content' => 'about',
			'current' => 'About'
		);

		$this->load->view('inc/template', $data);
	}

	public function contact() {
		$data = array(
			'main_content' => 'contact',
			'current' => 'Contact'
		);

		$this->load->view('inc/template', $data);
	}

	public function getSchema() {

		$url = $this->input->post('xml');

		$this->load->model('xmlmodel');
		$array = $this->xmlmodel->xmltoarray($url);

		echo '<pre>';
		var_dump($array);
		echo '</pre>';

	}

	public function updateDB($pass) {

		if ($pass === 'SpaceAppsTO2014') {
			$this->load->model("xmlmodel");
			$this->xmlmodel->updateDB();
		}

	}

}










