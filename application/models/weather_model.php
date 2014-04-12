<?php

class Weather_model extends CI_Model {

	private function getLocation() {

		// $ip = $_SERVER['REMOTE_ADDR'];
		$ip = '207.219.69.239';
		$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
		
		return $details

	}

	public function getWeather() {

		$location = $this->getLocation();

		// $weather_url = 'api.openweathermap.org/data/2.5/forecast?lat=35&lon=139';
		// $json2 = json_decode($weather_url)
		// print_r($json2);

	}

}