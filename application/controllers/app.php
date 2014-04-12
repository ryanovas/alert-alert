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

		echo 'hello world eh';

	}

	public function parse_xml() {

		$url = 'http://skyalert.org/event/xml/1357860/';

		$this->load->model("xmlmodel");

		//$this->xmlmodel->voevents($url);

		$json = $this->xmlmodel->voevents($url);
		print_r($json);

		$voarray = json_decode($json, true);
		/*echo $voarray['@attributes']['role'];
		echo $voarray['Who']['AuthorIVORN'];
		echo $voarray['Description'];
		echo $voarray['How']['Description'];*/

	}

	public function weather() {

		$weather_url = 'api.openweathermap.org/data/2.5/forecast?lat=35&lon=139';
		$json2 = json_decode($weather_url)
		print_r($json2);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */