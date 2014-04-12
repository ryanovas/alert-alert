<?php
	
class Xmlmodel extends CI_Model {
		
	public function voevents() {
		
		$url = 'http://skyalert.org/feeds/290/';

		$fileContents = file_get_contents($url);
		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
		$fileContents = trim(str_replace('"', "'", $fileContents));

		$streamXML = simplexml_load_string($fileContents);	
		$stream = json_encode($streamXML);	

		print_r($stream);

		// foreach ($stream->entry as $row) {
		// 	echo '<pre>';
		// 	var_dump($row);
		// }

	}
}