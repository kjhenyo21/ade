<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

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
		$database = new database_db();
		$month = $_GET['month'];
		$year = $_GET['year'];
		if ($month != '')
			$entries = $database->getMonthlyIS($month, $year);
		else $entries = $database->getYearlyIS($year);
		//echo $month;
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('entries', $entries);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('edit/enter_is.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function saveIncomeStatement() {
		$database = new database_db();
		$database->deleteAllEntries('income_statement');
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

	public function deleteISEntry () {
		$month = $_GET['month'];
		$year = $_GET['year'];
		$acct = $_GET['acct'];
		$amt = $_GET['amt'];
		$database = new database_db();
		$database->deleteISEntry($month, $year, $acct, $amt);
	}
	
	public function enter_ledger() {
		$database = new database_db();
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$entries = $database->getLedger($type, $month, $year);
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('entries', $entries);
		$this->mysmarty->assign('type', $type);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('edit/enter_ledger.tpl');
		$this->mysmarty->display('footer.tpl');
	}

	public function saveLedger() {
		$database = new database_db();
		$database->deleteAllEntries('ledger');
		$type = $this->input->post('type');
		$month = $this->input->post('month');		
		$year = $this->input->post('year');
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);	
		$account_name = $this->input->post('acct_name');
		$account = $this->input->post('perEntryAcct');
		$head_account = $this->input->post('headEntryAcct');
		$account_no = $this->input->post('perEntryAcctNo');
		$head_account_no = $this->input->post('headEntryAcctNo');
		$date = $this->input->post('date');
		$sdRef = $this->input->post('sdRef');
		$ref = $this->input->post('ref');
		$debit = $this->input->post('debit');
		$credit = $this->input->post('credit');
		$sizeOfAccts = sizeOf($account);
		$size = sizeOf($ref);
		
		$total = $this->input->post('total_label');
		$total_credit = $this->input->post('total_credit');
		$total_debit = $this->input->post('total_debit');
		$curr_acct = "";
		$curr_acct_no = "";
		for ($i = 0; $i < $size; $i++) {
			$info = array(
				'date' => $date[$i],
				'type' => $type,
				'account_name' => $account[$i],
				'account_number' => $account_no[$i],
				'source_doc_ref' => $sdRef[$i],
				'ref_file' => $ref[$i],
				'debit' => $debit[$i],
				'credit' => $credit[$i]
			);
			$database->addLedger($info);
			if ($curr_acct != $account[$i]) {
				$last_date[] = $date[$i];
				$super_curr_acct[] = $account[$i];
				$super_curr_acct_no[] = $account_no[$i];
			} else {
				$curr_acct = $account[$i];
				$curr_acct_no = $account_no[$i];
			}			
		}
		
		$sizeTotal = sizeOf($total);
		for ($i = 0; $i < $sizeTotal; $i++) {
			if ($total[$i] != '') {
				//to determine if odd or even, i borrowed a code from here: http://bavotasan.com/2009/check-if-a-number-is-even-or-odd-with-php/
				if ($num_month > 2) {
					$end_date = $year."-".$num_month."-28";
					$info = array(
						'date' => $end_date,
						'type' => $type,
						'account_name' => $head_account[$i],
						'account_number' => $head_account_no[$i],
						'source_doc_ref' => '',
						'ref_file' => $total[$i],
						'debit' => $total_debit[$i],
						'credit' => $total_credit[$i]
					);
					$database->addLedger($info);
				} else if (($num_month > 0) && ($num_month <=7)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-31";
						$info = array(
							'date' => $end_date,
							'type' => $type,
							'account_name' => $head_account[$i],
							'account_number' => $head_account_no[$i],
							'source_doc_ref' => '',
							'ref_file' => $total[$i],
							'debit' => $total_debit[$i],
							'credit' => $total_credit[$i]
						);
						$database->addLedger($info);
					} else {
						$end_date = $year."-".$num_month."-30";
						$info = array(
							'date' => $end_date,
							'type' => $type,
							'account_name' => $head_account[$i],
							'account_number' => $head_account_no[$i],
							'source_doc_ref' => '',
							'ref_file' => $total[$i],
							'debit' => $total_debit[$i],
							'credit' => $total_credit[$i]
						);
						$database->addLedger($info);
					}
				} else if (($num_month > 8) && ($num_month <=12)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-30";
						$info = array(
							'date' => $end_date,
							'type' => $type,
							'account_name' => $head_account[$i],
							'account_number' => $head_account_no[$i],
							'source_doc_ref' => '',
							'ref_file' => $total[$i],
							'debit' => $total_debit[$i],
							'credit' => $total_credit[$i]
						);
						$database->addLedger($info);
					} else {
						$end_date = $year."-".$num_month."-31";
						$info = array(
							'date' => $end_date,
							'type' => $type,
							'account_name' => $head_account[$i],
							'account_number' => $head_account_no[$i],
							'source_doc_ref' => '',
							'ref_file' => $total[$i],
							'debit' => $total_debit[$i],
							'credit' => $total_credit[$i]
						);
						$database->addLedger($info);
					}
				}
			}
		}
	}
	
	public function deleteLedgerEntry () {
		$sdRef = $_GET['sdRef'];
		$database = new database_db();
		$database->deleteLedgerEntry($sdRef);
	}
	
	public function enter_journal() {
		$database = new database_db();
		$type = $_GET['type'];
		if ($type == 'cashReceipts') {
			$month = $_GET['month'];
			$year = $_GET['year'];
			$entries = $database->getJournal($type, $month, $year);
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('entries', $entries);
			$this->mysmarty->assign('type', $type);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('edit/enter_crj.tpl');
			$this->mysmarty->display('footer.tpl');
		} else if ($type == 'cashDisbursements') {
			$month = $_GET['month'];
			$year = $_GET['year'];
			$entries = $database->getJournal($type, $month, $year);
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('entries', $entries);
			$this->mysmarty->assign('type', $type);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('edit/enter_cdj.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function saveJournal() {
		$database = new database_db();
		$type = $this->input->post('jtype');
		$date = $this->input->post('date');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month, $monthnames);	
		$account_name = $this->input->post('acct');
		$sdRef = $this->input->post('sdRef');
		$ref = $this->input->post('ref');
		$database->deleteAllEntries('journal');
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
				} else if (($num_month > 0) && ($num_month <=7)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-31";
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
					} else {
						$end_date = $year."-".$num_month."-30";
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
				} else if (($num_month > 8) && ($num_month <=12)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-30";
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
					} else {
						$end_date = $year."-".$num_month."-31";
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
				}
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
				} else if (($num_month > 0) && ($num_month <=7)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-31";
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
					} else {
						$end_date = $year."-".$num_month."-30";
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
				} else if (($num_month > 8) && ($num_month <=12)) {
					if($num_month&1) {
						$end_date = $year."-".$num_month."-30";
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
					} else {
						$end_date = $year."-".$num_month."-31";
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
		}
	}

	public function deleteJournalEntry () {
		$sdRef = $_GET['sdRef'];
		$database = new database_db();
		$database->deleteJournalEntry($sdRef);
	}
	
	public function enter_trans() {
		$database = new database_db();
		$type = $_GET['type'];
		$month = $_GET['month'];
		$year = $_GET['year'];
		$entries = $database->getTrans($type, $month, $year);
		$entries_det = $database->getTransDetails($type, $month, $year);
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('entries', $entries);
		$this->mysmarty->assign('entries_det', $entries_det);
		$this->mysmarty->assign('type', $type);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('edit/enter_trans.tpl');
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
		$date_det = $this->input->post('date_det');
		$or_no_det = $this->input->post('or_no_det');
		$item = $this->input->post('item');
		$qty = $this->input->post('qty');
		$uprice = $this->input->post('uprice');
		$amt = $this->input->post('amt');
		$database->deleteAllEntries('transactions');
		$database->deleteAllEntries('trans_details');
		//trans
		$size = sizeOf($or_no);
		for ($i = 0; $i < $size; $i++) {
			$info = array(
				'date' => $date[$i],
				'type' => $type,
				'or_no' => $or_no[$i],
				'amt_due' => $amt_due[$i],
				'name' => $name[$i],
				'address' => $address[$i],
				'contact' => $contact[$i]
			);
			$database->addTrans($info);
		}
		
		//trans details
		$sizeDet = sizeOf($item);
		for ($i = 0; $i < $sizeDet; $i++) {
			$info = array(
				'date' => $date_det[$i],
				'type' => $type,
				'or_no' => $or_no_det[$i],
				'item' => $item[$i],
				'qty' => $qty[$i],
				'uprice' => $uprice[$i],
				'amt' => $amt[$i]
			);
			$database->addTransDet($info);
		}
	}

	public function deleteTransDetEntry () {
		$or_no = $_GET['or_no'];
		$item = $_GET['item'];
		$database = new database_db();
		$database->deleteTransDetEntry($or_no, $item);
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>