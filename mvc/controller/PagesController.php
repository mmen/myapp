<?php

class PagesController extends Controller{

	function index(){
		$this->render('index');
	}
	
	function view($name){
		$this->set(array(
			'phrase' => 'Salut',
			'nom' 	 => 'Marchin'
		));
		
		$this->render('index');
	}
}