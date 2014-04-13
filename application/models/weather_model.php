<?php

class Weather_model extends CI_Model {

	private function getLocation() {

		// $ip = $_SERVER['REMOTE_ADDR'];
		$ip = '207.219.69.239';
		$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
		
		return $details;

	}

	public function getWeather() {

		$location = $this->getLocation();
		$coordinates = explode(',', $location->loc);

		$lat = $coordinates[0];
		$long = $coordinates[1];

		$weather_url = 'http://api.openweathermap.org/data/2.5/forecast?lat=' . $lat . '&lon=' . $long . '';
		$response = file_get_contents($weather_url);

		$forecast = json_decode($response);
		$current = $forecast->list[0];

		$data = array(
			'temp' => $current->main->temp - 273.15,
			'desc' => $current->weather[0]->description,
			'visibility' => 100 - $current->clouds->all,
		);

		return $data;

	}

}