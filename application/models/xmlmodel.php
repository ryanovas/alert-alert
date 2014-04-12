<?php
	
class Xmlmodel extends CI_Model {
		
		public function voevents($url) {
			
			// XML URL
			//$url = 'http://skyalert.org/event/xml/1357860/';			
			
			// Get file contents from URL
			$fileContents = file_get_contents($url);

			// Remove newlines, returns and tabs from file contents
			$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

			// Replace double quotes with single quotes, and remove leading and trailing spaces
			$fileContents = trim(str_replace('"', "'", $fileContents));

			// Call simple_load_string() funciton
			$simpleXml = simplexml_load_string($fileContents);	

			// Convert XML to JSON
			$json = json_encode($simpleXml);

			//print_r($json);
			return $json;
		}
	}
