<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->dbutil(); 
		$this->load->dbforge();
		$this->load->helper('file');
		$this->load->model('database_db');
    }
	
	public function index() {
		if (!$this->dbutil->database_exists('ade')) {
			$this->dbforge->create_database('ade');
			$file = $this->load->file("files/ade.sql", true);
			//explode it in an array
			$file_array = explode(';', $file);
			//execute the exploded text content
			foreach($file_array as $line) {
				if ($line != '')
					$this->db->query($line);
			}
			header("location: ".$this->config->item('base_url'));
		} else {
			$this->load->library('session');
			//$this->load->model('account');
			//$this->load->model('database_db');
			$this->load->helper('url');
			//$database = new database_db();
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('help.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>