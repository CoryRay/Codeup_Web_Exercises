<?php

require_once 'Ad.class.php';

class AdManager {

	public $dataFile;

	public function __construct($dataFile = 'data/ads.csv') {
		$this->dataFile = $dataFile;
	}

	public function loadAds() {
		//open data file as $handle
		$handle = fopen($this->dataFile, 'r');

		//create an empty array of ads
		$ads =[];

		//while loop
		//while it is NOT the end of the file $handle
		while (!feof($handle)) {

			//fgetcsv gets line from a csv file
			$csvRow = fgetcsv($handle);

			//if the line is not empty at zeroeth index
			if (!empty($csvRow[0])) {

				//create a new instance of Ad
				$ad = new Ad($csvRow[0], $csvRow[1], $csvRow[2], $csvRow[3], $csvRow[4]);
				
				//push the object to $ads array
				$ads[] = $ad;
			}
		}

		fclose($handle);
		return $ads;
	}

	public function saveAds($ads) {
		//opens data file as $handle
		$handle = fopen($this->dataFile, 'w');

		foreach ($ads as $ad) {

			//foreach ad, write it to file as an array
			fputcsv($handle, $ad->toArray());
		}

		fclose($handle);
	}
}