<?php
Class Visa {

	private $em_id;
	private $source;
	private $destination;
	private $start_date;
	private $end_date;
	private $comment;

	function __construct($em_id,$source,$destination,$start_date,$end_date,$comment)
	{
		$this->em_id = $em_id;
		$this->source = $source;
		$this->destination = $destination;
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->comment = $comment;
	}

	public function setEID($em_id){
		$this->em_id = $em_id;
	}

	public function getEID(){
		return $em_id;
	}


	public function setSource($source){
		$this->source = $source;
	}

	public function getSource(){
		return $source;
	}


	public function setDestination($destination){
		$this->destination = $destination;
	}

	public function getDestination(){
		return $destination;
	}

	public function setStartdate($start_date){
		$this->start_date = $start_date;
	}

	public function getStartdate(){
		return $start_date;
	}

	public function setEnddate($end_date){
		$this->end_date = $end_date;
	}

	public function getEnddate(){
		return $end_date;
	}

	public function setComment($comment){
		$this->comment = $comment;
	}

	public function getComment(){
		return $comment;
	}

}


?>