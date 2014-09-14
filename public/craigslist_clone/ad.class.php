<?php

class Ad {
	public $title;
	public $body;
	public $sellerName;
	public $sellerEmail;
	public $creationTime;

	public function __construct($title, $body, $sellerName, $sellerEmail, $creationTime) {
		$this->title = $title;
		$this->body = $body;
		$this->sellerName = $sellerName;
		$this->sellerEmail = $sellerEmail;
		$this->creationTime = $creationTime;
	}

	public function toArray() {
		return [$this->title, $this->body, $this->sellerName, $this->sellerEmail, $this->creationTime];
	}
}