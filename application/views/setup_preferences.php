<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup_Preferences extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('preferences_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('setup_preferences.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function savePreferences() {
		//$path = $this->input->post('theFile');
		//echo $path;
		//return $path;
		$pref = new preferences_db();
		$docs = $this->input->post('doc');
		$types = $this->input->post('type');
		$paths = $this->input->post('path');
		$exts = $this->input->post('ext');
		$size = sizeOf($docs);
		for ($i = 0; $i < $size; $i++) {
			$info = array(
				'doc' => $docs[$i],
				'type' => $types[$i],
				'path' => $paths[$i],
				'ext' => $exts[$i]
			);
			$pref->addPath($info);
		}
		unlink('./application/controllers/setup_preferences.php');
		//header("location: ".$this->config->item('base_url')."audit_trail");
	}
	
	public function doesPathExist() {
		if (isset($_GET['path']))
			$path = $_GET['path'];
		//echo $path;
		if (is_dir($path)) {
			//echo "EXIST!";
			echo "true";
		} else {
			//echo "nope";
			echo "false";
		}
	}
}