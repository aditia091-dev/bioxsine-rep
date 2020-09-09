<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioxsine extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Bioxsine Indonesia - PT Mazta Farma');
		$this->load->view('welcome_message',$data);
	}
}
