<?php namespace App\Controllers;

/**
 * 
 */
class Helloworld extends BaseController{
	
	public function index($nama,$npm){

		echo $this->name ;
		echo $nama ."<br>";
		echo $npm ."<br>";
	}
	public function show(){
		echo "Abie Perdana";
		echo "1817051054";
	}
}