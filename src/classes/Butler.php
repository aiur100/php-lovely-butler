<?php

class Butler {

	protected $name = "You need to access this applications config file and add your name";

	/**
	 * Butler constructor.
	 */
	public function __construct(){
	    $this->loadConfig();
		$hello  = "Hello ".$this->name;
		$myName = "My name is ".BUTLER_NAME.", and I am here to serve you.";
		//$this->say($hello);
		//$this->say($myName);
	}

	/**
	 * says the given message
	 *
	 * @param $message
	 */
	public function say($message){
		exec('say "'.$message.'"');
	}

	/**
	 * loads the config file.
	 */
	private function loadConfig(){
		$this->name = json_decode(file_get_contents(dirname(__DIR__).'/configs/butler.json'),true)['name'];
	}
}