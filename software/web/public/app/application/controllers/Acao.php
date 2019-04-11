<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acao extends CI_Controller {

	public function acao()
	{
		$this->load->business("Acao");
	}
}
