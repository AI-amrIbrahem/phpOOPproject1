<?php
Class Feedback {

	private $type;
	private $topic;
	private $userId;


	function __construct($type,$topic,$userId)
	{
		$this->type = $type;
		$this->topic = $topic;
		$this->userId = $userId;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getType(){
		return $this->type;
	}


	public function setTopic($topic){
		$this->topic = $topic;
	}

	public function getTopic(){
		return $this->topic;
	}


	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getUserId(){
		return $this->userId;
	}


	
}


?>