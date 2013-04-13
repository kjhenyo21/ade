<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

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
			$this->mysmarty->display('home.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function determineType() {
		$type = $this->input->post('add-file-type');
		$month = $this->input->post('add_month');
		$year = $this->input->post('add_year');
		if ($type == 'Income Statement')
			header("location: ".$this->config->item('base_url')."add/enter_is?month=".$month."&year=".$year);
		else if ($type == 'General Ledger')
			header("location: ".$this->config->item('base_url')."add/enter_ledger?type=general&month=".$month."&year=".$year);
		else if ($type == 'Cash Receipts Journal')
			header("location: ".$this->config->item('base_url')."add/enter_journal?type=cashReceipts&month=".$month."&year=".$year);
		else if ($type == 'Cash Disbursements Journal')
			header("location: ".$this->config->item('base_url')."add/enter_journal?type=cashDisbursements&month=".$month."&year=".$year);
		else if ($type == 'Sales Transaction File')
			header("location: ".$this->config->item('base_url')."add/enter_trans?type=sales&month=".$month."&year=".$year);
		else if ($type == 'Purchases Transaction File')
			header("location: ".$this->config->item('base_url')."add/enter_trans?type=purchases&month=".$month."&year=".$year);
		else if ($type == 'Expenses Transaction File')
			header("location: ".$this->config->item('base_url')."add/enter_trans?type=expenses&month=".$month."&year=".$year);
	}

	public function determineEditType() {
		$type = $this->input->post('edit-file-type');
		$month = $this->input->post('edit_month');
		$year = $this->input->post('edit_year');
		if ($type == 'Income Statement')
			header("location: ".$this->config->item('base_url')."edit/enter_is?month=".$month."&year=".$year);
		else if ($type == 'General Ledger')
			header("location: ".$this->config->item('base_url')."edit/enter_ledger?type=general&month=".$month."&year=".$year);
		else if ($type == 'Cash Receipts Journal')
			header("location: ".$this->config->item('base_url')."edit/enter_journal?type=cashReceipts&month=".$month."&year=".$year);
		else if ($type == 'Cash Disbursements Journal')
			header("location: ".$this->config->item('base_url')."edit/enter_journal?type=cashDisbursements&month=".$month."&year=".$year);
		else if ($type == 'Sales Transaction File')
			header("location: ".$this->config->item('base_url')."edit/enter_trans?type=sales&month=".$month."&year=".$year);
		else if ($type == 'Purchases Transaction File')
			header("location: ".$this->config->item('base_url')."edit/enter_trans?type=purchases&month=".$month."&year=".$year);
		else if ($type == 'Expenses Transaction File')
			header("location: ".$this->config->item('base_url')."edit/enter_trans?type=expenses&month=".$month."&year=".$year);
	}

	public function export() {
		$type = $this->input->post('export-file-type');
		$month = $this->input->post('ex_month');
		$year = $this->input->post('ex_year');
		$filename = $this->input->post('filename');
		if ($type == 'Income Statement')
			header("location: ".$this->config->item('base_url')."export/export_is?month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'General Ledger')
			header("location: ".$this->config->item('base_url')."export/export_ledger?type=general&month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'Cash Receipts Journal')
			header("location: ".$this->config->item('base_url')."export/export_journal?type=cashReceipts&month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'Cash Disbursments Journal')
			header("location: ".$this->config->item('base_url')."export/export_journal?type=cashDisbursements&month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'Sales Transaction File')
			header("location: ".$this->config->item('base_url')."export/export_trans?type=sales&month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'Purchases Transaction File')
			header("location: ".$this->config->item('base_url')."export/export_trans?type=purchases&month=".$month."&year=".$year."&filename=".$filename);
		else if ($type == 'Expenses Transaction File')
			header("location: ".$this->config->item('base_url')."export/export_trans?type=expenses&month=".$month."&year=".$year."&filename=".$filename);
	}
	
	public function clearArchive() {
		$database = new database_db();
		$database->deleteAllEntries('income_statement');
		$database->deleteAllEntries('ledger');
		$database->deleteAllEntries('journal');
		$database->deleteAllEntries('transactions');
		$database->deleteAllEntries('trans_details');
		
		//delete temp directory and its contents
		//http://www.paulund.co.uk/php-delete-directory-and-files-in-directory
		$dirname = 'temp';
		if (is_dir($dirname)) {
           $dir_handle = opendir($dirname);
		   	while($file = readdir($dir_handle)) {
				if ($file != "." && $file != "..") {
					if (!is_dir($dirname."/".$file))
						unlink($dirname."/".$file);
					else delete_directory($dirname.'/'.$file);
				}
			}
			closedir($dir_handle);
			rmdir($dirname);
		}
		header("location: ".$this->config->item('base_url'));
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>