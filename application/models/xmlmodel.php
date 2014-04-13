<?php
	
class Xmlmodel extends CI_Model {
		
		public function voevents() {		
			
			$q = $this->db->get('voevents');
			$data = array();

			foreach ($q->result() as $row) {
				$data[$row->IVO]['title'] = $row->Title;
				$data[$row->IVO]['author'] = $row->Author;
				$data[$row->IVO]['xml'] = $row->XML;
				$data[$row->IVO]['date'] = date('F d Y, g:ia', strtotime($row->Published));
				$data[$row->IVO]['reference'] = $row->Reference;
				$data[$row->IVO]['institute'] = $row->Institute;
				$data[$row->IVO]['desc'] = $row->Description;
				$data[$row->IVO]['position'] = $row->Position;
				$data[$row->IVO]['picture'] = $row->Picture;
			}

			$dates = array();

			foreach ($data as $key => $row) {
			    
			    $dates[$key] = strtotime($row['date']);

			}

			array_multisort($dates, SORT_DESC, $data);

			return $data;

		}

		private function xmltoarray($url) {

			// Get file contents from URL
			$fileContents = file_get_contents($url);

			// Remove newlines, returns and tabs from file contents
			$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

			// Remove broken namespace
			$fileContents = str_replace('voevent:', '', $fileContents);

			// Replace double quotes with single quotes, and remove leading and trailing spaces
			$fileContents = trim(str_replace('"', "'", $fileContents));

			// Call simple_load_string() funciton
			$simpleXml = simplexml_load_string($fileContents);	

			// Convert XML to JSON then array
			$json = json_encode($simpleXml);
			$array = json_decode($json, true);

			return $array;

		}

		private function bigArray() {

			$urls = array('http://skyalert.org/feeds/151/');
			$bigArray = array();

			foreach ($urls as $url) {

				$voarray = $this->xmltoarray($url);

				foreach ($voarray['entry'] as $entry) {

					$date = str_replace('T', ' ', $entry['published']);
					$date = str_replace('Z', '', $date);
					
					$bigArray[$entry['id']]['title'] = $entry['title'];
					$bigArray[$entry['id']]['author'] = $entry['author']['name'];
					$bigArray[$entry['id']]['xml'] = $entry['link'][1]['@attributes']['href'];
					$bigArray[$entry['id']]['date'] = $date;
					$bigArray[$entry['id']]['reference'] = $entry['referenceURL'];

				}

			}

			$dates = array();

			foreach ($bigArray as $key => $row) {
			    
			    $dates[$key] = strtotime($row['date']);

			}

			array_multisort($dates, SORT_DESC, $bigArray);

			return $bigArray;

		}

		private function details() {

			$bigArray = $this->bigArray();
			$data = array();

			foreach ($bigArray as $key => $row) {

				$details = $this->xmltoarray($row['xml']);

				$data[$key]['institute'] = $details['Who']['Author']['shortName'];
				$data[$key]['desc'] = $details['How']['Description'];

				$RA = $details['WhereWhen']['ObsDataLocation']['ObservationLocation']['AstroCoords']['Position2D']['Value2']['C1'];
				$dec = $details['WhereWhen']['ObsDataLocation']['ObservationLocation']['AstroCoords']['Position2D']['Value2']['C2'];
				$errorRate = $details['WhereWhen']['ObsDataLocation']['ObservationLocation']['AstroCoords']['Position2D']['Error2Radius'];

				$data[$key]['position'] = $RA . ',' . $dec . ' ±' . $errorRate;
				$data[$key]['picture'] = $details['What']['Group'][0]['Param'][8]['@attributes']['value'];

			}

			foreach ($data as $key => $row) {
				$bigArray[$key]['details'] = $row;
			}

			return $bigArray;

		}

		public function updateDB() {
			
			$voevents = $this->details();

			foreach ($voevents as $key => $row) {
				$data = array(
					'IVO' => $key,
					'Title' => $row['title'],
					'Author' => $row['author'],
					'XML' => $row['xml'],
					'Published' => $row['date'],
					'Reference' => $row['reference'],
					'Institute' => $row['details']['institute'],
					'Description' => $row['details']['desc'],
					'Position' => $row['details']['position'],
					'Picture' => $row['details']['picture']
				);

				$this->db->insert('voevents', $data);

			}

		}

	}














