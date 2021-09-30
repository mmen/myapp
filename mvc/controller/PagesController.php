<?php

class PagesController extends Controller{

	function view($id){
		$this->loadModel('Post');
		$d['page'] = $this->Post->findFirst(array(
			'conditions' => array('id'=>$id, 'type'=>'page')
		));
		if(empty($d['page'])){
			$this->e404('Page introuvable');
		}
		//print_r($post);
		//$this->set('post',$page);

		$d['pages'] = $this->Post->find(array(
			'conditions' => array('type'=>'page')
		));

		if(empty($d['pages'])){
			$this->e404('Page introuvable');
		}

		$this->set($d);
	}

	function index(){
		$this->render('index');
	}
	/*
	function view($name){
		$this->set(array(
			'phrase' => 'Salut',
			'nom' 	 => 'Marchin'
		));
		
		$this->render('index');
	}*/

}