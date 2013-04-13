<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

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
		$month = $_GET['month'];
		$year = $_GET['year'];
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('add/enter_is.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function saveIncomeStatement() {
		$database = new database_db();
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$total_rev = $this->input->post('total_rev');
		$total_exp = $this->input->post('total_exp');
		$net_income = $this->input->post('net_income');
		
		$revAcct = $this->input->post('revAcct');
		$revAmt = $this->input->post('revAmt');
		$revSize = sizeOf($revAcct);
		if ($revAcct) {
			for ($i = 0; $i < $revSize; $i++) {
				$info = array(
					'month' => $month,
					'year' => $year,
					'category' => 'revenue',
					'account' => $revAcct[$i],
					'amount' => $revAmt[$i]
				);
				$database->addISEntry($info);
			}
		}
		
		if ($total_rev != '') {
			$info = array(
				'month' => $month,
				'year' => $year,
				'category' => 'revenue',
				'account' => 'Total Revenue',
				'amount' => $total_rev
			);
			$database->addISEntry($info);
		}
			
		$expAcct = $this->input->post('expAcct');
		$expAmt = $this->input->post('expAmt');
		$expSize = sizeOf($expAcct);
		
		if ($expAcct) {
			for ($i = 0; $i < $expSize; $i++) {
				$info = array(
					'month' => $month,
					'year' => $year,
					'category' => 'expense',
					'account' => $expAcct[$i],
					'amount' => $expAmt[$i]
				);
				$database->addISEntry($info);
			}
		}

		if ($total_exp != '') {
			$info = array(
				'month' => $month,
				'year' => $year,
				'category' => 'expense',
				'account' => 'Total Expenses',
				'amount' => $total_exp
			);
			$database->addISEntry($info);
		}
		
		if ($net_income != '') {
			$info = array(
				'month' => $month,
				'year' => $year,
				'category' => 'total',
				'account' => 'Net Income',
				'amount' => $net_income
			);
			$database->addISEntry($info);
		}
	}
	
	public function enter_ledger() {
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$this->mysmarty->assign('type', $type);
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('add/enter_ledger.tpl');
		$this->mysmarty->display('footer.tpl');
	}

	public function saveLedger() {
		$database = new database_db();
		$type = $this->input->post('type');		
		$month = $this->input->post('month');		
		$year = $this->input->post('year');
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);		
		$account_name = $this->input->post('acct_name');
		$account_no = $this->input->post('acct_no');
		$date = $this->input->post('date');
		$sdRef = $this->input->post('sdRef');
		$ref = $this->input->post('ref');
		$debit = $this->input->post('debit');
		$credit = $this->input->post('credit');
		$total = $this->input->post('total_label');
		$total_credit = $this->input->post('total_credit');
		$total_debit = $this->input->post('total_debit');
		$size = sizeOf($ref);
		
		if ($ref) {
			for ($i = 0; $i < $size; $i++) {
				$info = array(
					'date' => $date[$i],
					'type' => $type,
					'account_name' => $account_name,
					'account_number' => $account_no,
					'source_doc_ref' => $sdRef[$i],
					'ref_file' => $ref[$i],
					'debit' => $debit[$i],
					'credit' => $credit[$i]
				);
				$database->addLedger($info);
			}
		}
		
		if ($total != '') {
			//to determine if odd or even, i borrowed a code from here: http://bavotasan.com/2009/check-if-a-number-is-even-or-odd-with-php/
			if ($num_month > 2) {
				$end_date = $year."-".$num_month."-28";
			} else if (($num_month > 0) && ($num_month <=7)) {
				if($num_month&1) {
					$end_date = $year."-".$num_month."-31";
				} else {
					$end_date = $year."-".$num_month."-30";
				}
			} else if (($num_month > 8) && ($num_month <=12)) {
				if($num_month&1) {
					$end_date = $year."-".$num_month."-30";
				} else {
					$end_date = $year."-".$num_month."-31";
				}
			}
			$info = array(
				'date' => $end_date,
				'type' => $type,
				'account_name' => $account_name,
				'account_number' => $account_no,
				'source_doc_ref' => '',
				'ref_file' => $total,
				'debit' => $total_debit,
				'credit' => $total_credit
			);
			$database->addLedger($info);
		}
	}
	
	public function enter_journal() {
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		if ($type == 'cashReceipts') {
			$this->mysmarty->assign('type', $type);
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('add/enter_crj.tpl');
			$this->mysmarty->display('footer.tpl');
		} else if ($type == 'cashDisbursements') {
			$this->mysmarty->assign('type', $type);
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('add/enter_cdj.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function saveJournal() {
		$database = new database_db();
		$type = $this->input->post('jtype');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month, $monthnames);	
		$date = $this->input->post('date');
		$account_name = $this->input->post('acct');
		$sdRef = $this->input->post('sdRef');
		$ref = $this->input->post('ref');
		if ($type == 'cashReceipts') {
			$cash = $this->input->post('cash');
			$other = $this->input->post('other');
			$sales = $this->input->post('sales');
			$total = $this->input->post('total_label');
			$total_cash = $this->input->post('total_cash');
			$total_other = $this->input->post('total_other');
			$total_sales = $this->input->post('total_sales');
			$size = sizeOf($account_name);
			if ($date) {
				for ($i = 0; $i < $size; $i++) {
					$info = array(
						'date' => $date[$i],
						'type' => $type,
						'account_name' => $account_name[$i],
						'source_doc_ref' => $sdRef[$i],
						'reference_file' => $ref[$i],
						'main_debit' => $cash[$i],
						'other_debit_or_credit' => $other[$i],
						'main_credit' => $sales[$i]
					);
					$database->addJournal($info);
				}
			}
			if ($total != '') {
				//to determine if odd or even, i borrowed a code from here: http://bavotasan.com/2009/check-if-a-number-is-even-or-odd-with-php/
				if ($num_month > 2) {
					$end_date = $year."-".$num_month."-28";
				} else if (($num_month > 0) && ($num_month <=7)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-31";
					} else {
						$end_date = $year."-".$num_month."-30";
					}
				} else if (($num_month > 8) && ($num_month <=12)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-30";
					} else {
						$end_date = $year."-".$num_month."-31";
					}
				}
				
				$info = array(
					'date' => $end_date,
					'type' => $type,
					'account_name' => '',
					'source_doc_ref' => '',
					'reference_file' => $total,
					'main_debit' => $total_cash,
					'other_debit_or_credit' => $total_other,
					'main_credit' => $total_sales
				);
				$database->addJournal($info);
			}
		} else if ($type == 'cashDisbursements') {
			$purchases = $this->input->post('purchases');
			$other = $this->input->post('other');
			$cash = $this->input->post('cash');
			$total = $this->input->post('total_label');
			$total_purchases = $this->input->post('total_purchases');
			$total_other = $this->input->post('total_other');
			$total_cash = $this->input->post('total_cash');
			$size = sizeOf($account_name);
			if ($date) {
				for ($i = 0; $i < $size; $i++) {
					$info = array(
						'date' => $date[$i],
						'type' => $type,
						'account_name' => $account_name[$i],
						'source_doc_ref' => $sdRef[$i],
						'reference_file' => $ref[$i],
						'main_debit' => $purchases[$i],
						'other_debit_or_credit' => $other[$i],
						'main_credit' => $cash[$i]
					);
					$database->addJournal($info);
				}
			}
			if ($total != '') {
				//to determine if odd or even, i borrowed a code from here: http://bavotasan.com/2009/check-if-a-number-is-even-or-odd-with-php/
				if ($num_month > 2) {
					$end_date = $year."-".$num_month."-28";
				} else if (($num_month > 0) && ($num_month <=7)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-31";
					} else {
						$end_date = $year."-".$num_month."-30";
					}
				} else if (($num_month > 8) && ($num_month <=12)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-30";
					} else {
						$end_date = $year."-".$num_month."-31";
					}
				}
				
				$info = array(
					'date' => $end_date,
					'type' => $type,
					'account_name' => '',
					'source_doc_ref' => '',
					'reference_file' => $total,
					'main_debit' => $total_purchases,
					'other_debit_or_credit' => $total_other,
					'main_credit' => $total_cash
				);
				$database->addJournal($info);
			}
		}
	}
	
	public function enter_trans() {
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$this->mysmarty->assign('type', $type);
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('add/enter_trans.tpl');
		$this->mysmarty->display('footer.tpl');
	}

	public function saveTrans() {
		$database = new database_db();
		$type = $this->input->post('type');
		$date = $this->input->post('date');
		$or_no = $this->input->post('or_no');
		$amt_due = $this->input->post('amt_due');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$contact = $this->input->post('contact');
		$item = $this->input->post('item');
		$qty = $this->input->post('qty');
		$uprice = $this->input->post('uprice');
		$amt = $this->input->post('amt');
		
		//trans
		$info = array(
				'date' => $date,
				'type' => $type,
				'or_no' => $or_no,
				'amt_due' => $amt_due,
				'name' => $name,
				'address' => $address,
				'contact' => $contact
			);
			$database->addTrans($info);
		
		//trans details
		$size = sizeOf($item);
		for ($i = 0; $i < $size; $i++) {
			$info = array(
				'date' => $date,
				'type' => $type,
				'or_no' => $or_no,
				'item' => $item[$i],
				'qty' => $qty[$i],
				'uprice' => $uprice[$i],
				'amt' => $amt[$i]
			);
			$database->addTransDet($info);
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>