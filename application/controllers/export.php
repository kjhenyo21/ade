<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->dbutil(); 
		$this->load->dbforge();
		$this->load->helper('file');
		$this->load->model('database_db');
    }
	
	public function index() {
		/**if (!$this->dbutil->database_exists('ade')) {
			//$this->dbforge->create_database('trailblazer');
			$file = $this->load->file("files/trailblazer-db-instal.sql", true);
			//explode it in an array
			$file_array = explode(';', $file);
			//execute the exploded text content
			foreach($file_array as $line) {
				if ($line != '')
					$this->db->query($line);
			}
			header("location: ".$this->config->item('base_url')."setup");
		} else {*/
			$this->load->library('session');
			//$this->load->model('account');
			$this->load->model('database_db');
			$this->load->helper('url');
			//$database = new database_db();
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('home.tpl');
			$this->mysmarty->display('footer.tpl');
	}
	
	public function enter_is() {
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('add/enter_is.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function export_is() {
		$database = new database_db();
		$month = $_GET['month'];
		$year = $_GET['year'];
		$filename = $_GET['filename'];
		$revenues = array();
		$expenses = array();
		$total = array();
		$data = "";
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		$revenues[] = "Revenue:,";
		$expenses[] = "Less: Expenses:,";
		if ($month != '') {
			$entries = $database->getMonthlyIS($month, $year);
			foreach($entries as $e) {
				if ($e['category'] == 'revenue')
					$revenues[] = $e['account'].",".$e['amount'];
				else if ($e['category'] == 'expense')
					$expenses[] = $e['account'].",".$e['amount'];
				else if ($e['category'] == 'total')
					$total[] = $e['account'].",".$e['amount'];
			}
			
			foreach ($revenues as $r) {
				$data .= $r.PHP_EOL;
			}
			foreach ($expenses as $e) {
				$data .= $e.PHP_EOL;
			}
			foreach ($total as $t) {
				$data .= $t.PHP_EOL;
			}
			if ($filename == '')
					$filename = "is-".$num_month."-".$year.".is";
		} else {
			$entries = $database->getYearlyIS($year);
			foreach($entries as $e) {
				if (strstr($e['account'], ','))
					$e['account'] = '"'.$e['account'].'"';
					
				if ($e['category'] == 'revenue')
					$revenues[] = $e['account'].",".$e['amount'];
				else if ($e['category'] == 'expense')
					$expenses[] = $e['account'].",".$e['amount'];
				else if ($e['category'] == 'total')
					$total[] = $e['account'].",".$e['amount'];
			}
			
			foreach ($revenues as $r) {
				$data .= $r.PHP_EOL;
			}
			foreach ($expenses as $e) {
				$data .= $e.PHP_EOL;
			}
			foreach ($total as $t) {
				$data .= $t.PHP_EOL;
			}
			if ($filename == '')
					$filename = "is-".$year.".is";
		}
		
		//echo $filename;
		//echo $data;
		$folder = 'temp';
		if (!is_dir($folder)) {
			mkdir($folder);
		}
		
		$new_file = $folder."/".$filename;
		$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$new_file);
		fwrite($handle, $data);

		$local_ade_path = "C:\\ADE";
		if (!is_dir($local_ade_path)) {
			mkdir($local_ade_path);
		}

		$downloadFile = 'C:/ADE/'.$filename;
		$handle = fopen($downloadFile, 'w') or die('Cannot open file:  '.$downloadFile);
		fwrite($handle, $data);
		echo $local_ade_path;
	}

	public function export_ledger() {
		$database = new database_db();
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$filename = $_GET['filename'];
		$curr_acct = "";
		$data = "";
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		if ($month != '') {
			$entries = $database->getLedger($type, $month, $year);

			foreach ($entries as $e) {
				//if not current account, it must be the heading
				if ($curr_acct != $e['acct_name']) {
					//if entries contain comma, enclose them in quotation marks
					if (strstr($e['acct_name'], ','))
						$e['acct_name'] = '"'.$e['acct_name'].'"';
					if (strstr($e['ref'], ','))
						$e['ref'] = '"'.$e['ref'].'"';
					$data .= "a,".$e['acct_name'].",".$e['acct_no'].",,".PHP_EOL;
					$data .= $e['date'].",".$e['sdRef'].",".$e['ref'].",".$e['debit'].",".$e['credit'].PHP_EOL;
					$curr_acct = $e['acct_name'];
				} else $data .= $e['date'].",".$e['sdRef'].",".$e['ref'].",".$e['debit'].",".$e['credit'].PHP_EOL;
			}
			if ($filename == '')
				$filename = "gl-".$num_month."-".$year.".lg";
		} 		
		//echo $filename;
		//echo $data;
		$folder = 'temp';
		if (!is_dir($folder)) {
			mkdir($folder);
		}
		
		$new_file = $folder."/".$filename;
		$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$new_file);
		fwrite($handle, $data);

		$local_ade_path = "C:\\ADE";
		if (!is_dir($local_ade_path)) {
			mkdir($local_ade_path);
		}

		$downloadFile = 'C:/ADE/'.$filename;
		$handle = fopen($downloadFile, 'w') or die('Cannot open file:  '.$downloadFile);
		fwrite($handle, $data);
		echo $local_ade_path;
	}
	
	public function export_journal() {
		$database = new database_db();
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$filename = $_GET['filename'];
		$data = "";
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		if ($month != '') {
			$entries = $database->getJournal($type, $month, $year);
			if ($entries) {
				foreach ($entries as $e) {
					if (strstr($e['account'], ','))
						$e['account'] = '"'.$e['account'].'"';
					if (strstr($e['ref'], ','))
						$e['ref'] = '"'.$e['ref'].'"';
					$data .= $e['date'].",".$e['account'].",".$e['sdRef'].",".$e['ref'].",".$e['main_debit'].",".$e['other'].",".$e['main_credit'].PHP_EOL;
				}
				
				if ($filename == '') {
					if ($type == 'cashReceipts')
						$filename = "crj-".$num_month."-".$year.".jl";
					else if ($type == 'cashDisbursements')
						$filename = "cdj-".$num_month."-".$year.".jl";
				}
				
				//echo $filename;
				//echo $data;
				$folder = 'temp';
				if (!is_dir($folder)) {
					mkdir($folder);
				}
				
				$new_file = $folder."/".$filename;
				$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$new_file);
				fwrite($handle, $data);

				$local_ade_path = "C:\\ADE";
				if (!is_dir($local_ade_path)) {
					mkdir($local_ade_path);
				}

				$downloadFile = 'C:/ADE/'.$filename;
				$handle = fopen($downloadFile, 'w') or die('Cannot open file:  '.$downloadFile);
				fwrite($handle, $data);
				echo $local_ade_path;
			}
		} 		
		
	}

	public function export_trans() {
		$database = new database_db();
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$filename = $_GET['filename'];
		$temp = explode("-", $filename);
		$det_filename = $temp[0]."d-".$temp[1]."-".$temp[2];
		$data_trans = "h,Date,OR No,Amount Due,Name,Address,Contact".PHP_EOL;
		$data_trans_det = "h,Date,OR No,Item,Quantity,Unit Price,Amount".PHP_EOL;
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		if ($month != '') {
			$entries = $database->getTrans($type, $month, $year);
			$det_entries = $database->getTransDetails($type, $month, $year);

			foreach ($entries as $e) {
				if (strstr($e['name'], ','))
					$e['name'] = '"'.$e['name'].'"';
				if (strstr($e['address'], ','))
					$e['address'] = '"'.$e['address'].'"';
				$data_trans .= ",".$e['date'].",".$e['or_no'].",".$e['amt_due'].",".$e['name'].",".$e['address'].",".$e['contact'].PHP_EOL;
			}
			
			foreach ($det_entries as $e) {
				if (strstr($e['item'], ','))
					$e['item'] = '"'.$e['item'].'"';
				$data_trans_det .= ",".$e['date'].",".$e['or_no'].",".$e['item'].",".$e['qty'].",".$e['uprice'].",".$e['amt'].PHP_EOL;
			}
			//$filename = "is-".$num_month."-".$year.".is";
		} 		
		//echo $filename;
		//echo $data;
		$folder = 'temp';
		if (!is_dir($folder)) {
			mkdir($folder);
		}
		
		$new_file = $folder."/".$filename;
		$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$new_file);
		fwrite($handle, $data_trans);

		$local_ade_path = "C:\\ADE";
		if (!is_dir($local_ade_path)) {
			mkdir($local_ade_path);
		}

		$downloadFile = 'C:/ADE/'.$filename;
		$handle = fopen($downloadFile, 'w') or die('Cannot open file:  '.$downloadFile);
		fwrite($handle, $data_trans);
		
		//trans det
		$new_file = $folder."/".$det_filename;
		$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$new_file);
		fwrite($handle, $data_trans_det);

		$local_ade_path = "C:\\ADE";
		if (!is_dir($local_ade_path)) {
			mkdir($local_ade_path);
		}

		$downloadFile = 'C:/ADE/'.$det_filename;
		$handle = fopen($downloadFile, 'w') or die('Cannot open file:  '.$downloadFile);
		fwrite($handle, $data_trans_det);
		
		echo $local_ade_path;
	}
	
	public function open() {
		$path = $_GET['path'];
		$newPath = str_replace("/", "\\", $path);
		exec('%SystemRoot%\explorer.exe  "'.$newPath.'"');
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>