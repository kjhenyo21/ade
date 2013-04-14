<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_DB extends CI_Model {
	private $conn;
	
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function tableExists($table) {
		if ($this->db->table_exists($table)) {
			return true;
		} else return false;
	}
	
	function createTransactionsTable($columns) {
		$query = "DROP TABLE IF EXISTS `transactions`";
		$query_string = "CREATE TABLE `transactions` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}

	function createTransactionsSampleTable($columns) {
		$query = "DROP TABLE IF EXISTS `transactions_sample`";
		$query_string = "CREATE TABLE `transactions_sample` (";
		foreach($columns as $c) {
			//if (trim($c) == 'Amount Due')
			//	$query_string .= "`".trim($c)."` int(11),";
			//else $query_string .= "`".trim($c)."` varchar(255),";
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}
	
	function createTransactionDetailsTable($columns) {
		$query = "DROP TABLE IF EXISTS `transaction_details`";
		$query_string = "CREATE TABLE `transaction_details` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}
	
	function addTransactions($head, $info) {
		$this->db->truncate('transactions');
		$query_string = "INSERT INTO `transactions` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}

	function addTransactionDetails($head, $info) {
		$this->db->truncate('transaction_details');
		$query_string = "INSERT INTO `transaction_details` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}
	
	function addISEntry($i) {
		$data = array(
		   'month' => $i['month'],
		   'year' => $i['year'],
		   'category' => $i['category'],
		   'account' => $i['account'],
		   'amount' => $i['amount']
		);
		
		$this->db->where('month', $i['month']);
		$this->db->where('year', $i['year']);
		$this->db->where('category', $i['category']);
		$this->db->where('account', $i['account']);
		$this->db->from('income_statement');
		if ($this->db->count_all_results() == 0) {		
			$this->db->insert('income_statement', $data); 
		} else {
			$this->db->where('month', $i['month']);
			$this->db->where('year', $i['year']);
			$this->db->where('category', $i['category']);
			$this->db->where('account', $i['account']);
			$this->db->update('income_statement', $data);
		}		
	}

	function getMonthlyIS($month, $year) {
		$query = $this->db->query("SELECT *
									FROM income_statement
									WHERE month = '$month'
										AND year = $year");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'category' => $row->category,
					'account' => $row->account,
					'amount' => $row->amount
				);
			}
			return $entries;
		} else return false;
	}

	function getYearlyIS($year) {
		$query = $this->db->query("SELECT *
									FROM income_statement
									WHERE year = $year");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'category' => $row->category,
					'account' => $row->account,
					'amount' => $row->amount
				);
			}
			return $entries;
		} else return false;
	}

	function addLedger($i) {
		$data = array(
		   'date' => $i['date'],
		   'type' => $i['type'],
		   'account_name' => $i['account_name'],
		   'account_number' => $i['account_number'],
		   'source_doc_ref' => $i['source_doc_ref'],
		   'ref_file' => $i['ref_file'],
		   'debit' => $i['debit'],
		   'credit' => $i['credit']
		);
		$this->db->where('source_doc_ref', $i['source_doc_ref']);
		$this->db->where('account_name', $i['account_name']);
		$this->db->from('ledger');
		if ($this->db->count_all_results() == 0) {	
			$this->db->insert('ledger', $data);
		} else {
			$this->db->where('source_doc_ref', $i['source_doc_ref']);
			$this->db->where('account_name', $i['account_name']);
			$this->db->update('ledger', $data);
		}
	}
	
	function getLedger($type, $month, $year) {
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		$query = $this->db->query("SELECT *
									FROM ledger
									WHERE type = '$type'
										AND date LIKE '".$year."-%".$num_month."-%'
										ORDER BY account_number, date ASC");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'date' => $row->date,
					'type' => $row->type,
					'acct_name' => $row->account_name,
					'acct_no' => $row->account_number,
					'sdRef' => $row->source_doc_ref,
					'ref' => $row->ref_file,
					'debit' => $row->debit,
					'credit' => $row->credit
				);
			}
			return $entries;
		} else return false;
	}
	
	function addJournal($i) {
		$data = array(
		   'date' => $i['date'],
		   'type' => $i['type'],
		   'account_name' => $i['account_name'],
		   'source_doc_ref' => $i['source_doc_ref'],
		   'reference_file' => $i['reference_file'],
		   'main_debit' => $i['main_debit'],
		   'other_debit_or_credit' => $i['other_debit_or_credit'],
		   'main_credit' => $i['main_credit']
		);
		$this->db->where('type', $i['type']);
		$this->db->where('source_doc_ref', $i['source_doc_ref']);
		$this->db->where('account_name', $i['account_name']);
		$this->db->where('reference_file', $i['reference_file']);
		$this->db->from('journal');
		if ($this->db->count_all_results() == 0) {	
			$this->db->insert('journal', $data);
		} else {
			$this->db->where('type', $i['type']);
			$this->db->where('source_doc_ref', $i['source_doc_ref']);
			$this->db->where('account_name', $i['account_name']);
			$this->db->where('reference_file', $i['reference_file']);
			$this->db->update('journal', $data);
		}
	}

	function getJournal($type, $month, $year) {
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		$query = $this->db->query("SELECT *
									FROM journal
									WHERE type = '$type'
										AND date LIKE '".$year."-%".$num_month."-%'
										ORDER BY date ASC");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'date' => $row->date,
					'account' => $row->account_name,
					'sdRef' => $row->source_doc_ref,
					'ref' => $row->reference_file,
					'main_debit' => $row->main_debit,
					'other' => $row->other_debit_or_credit,
					'main_credit' => $row->main_credit,
				);
			}
			return $entries;
		} else return false;
	}

	function addTrans($i) {
		$data = array(
		   'date' => $i['date'],
		   'type' => $i['type'],
		   'or_no' => $i['or_no'],
		   'amt_due' => $i['amt_due'],
		   'name' => $i['name'],
		   'address' => $i['address'],
		   'contact' => $i['contact']
		);

		$this->db->insert('transactions', $data); 
	}

	function getTrans($type, $month, $year) {
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		$query = $this->db->query("SELECT *
									FROM transactions
									WHERE type = '$type'
										AND date LIKE '".$year."-%".$num_month."-%'
										ORDER BY date ASC");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'date' => $row->date,
					'type' => $row->type,
					'or_no' => $row->or_no,
					'amt_due' => $row->amt_due,
					'name' => $row->name,
					'address' => $row->address,
					'contact' => $row->contact,
				);
			}
			return $entries;
		} else return false;
	}

	function addTransDet($i) {
		$data = array(
		   'date' => $i['date'],
		   'type' => $i['type'],
		   'or_no' => $i['or_no'],
		   'item' => $i['item'],
		   'quantity' => $i['qty'],
		   'unit_price' => $i['uprice'],
		   'amount' => $i['amt']
		);

		$this->db->insert('trans_details', $data); 
	}
	
	function getTransDetails($type, $month, $year) {
		$monthnames = array('none','January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$num_month = array_search($month,$monthnames);
		
		$query = $this->db->query("SELECT *
									FROM trans_details
									WHERE type = '$type'
										AND date LIKE '".$year."-%".$num_month."-%'
										ORDER BY date, or_no ASC");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$entries[] = array(
					'id' => $row->id,
					'date' => $row->date,
					'type' => $row->type,
					'or_no' => $row->or_no,
					'item' => $row->item,
					'qty' => $row->quantity,
					'uprice' => $row->unit_price,
					'amt' => $row->amount,
				);
			}
			return $entries;
		} else return false;
	}
	
	function deleteISEntry($month, $year, $acct, $amt) {
		$this->db->where('month', $month);
		$this->db->where('year', $year);
		$this->db->where('account', $acct);
		$this->db->where('amount', $amt);
		$this->db->delete('income_statement'); 
	}
	
	function deleteLedgerEntry ($sdRef) {
		$this->db->where('source_doc_ref', $sdRef);
		$this->db->delete('ledger'); 
	}

	function deleteJournalEntry ($sdRef) {
		$this->db->where('source_doc_ref', $sdRef);
		$this->db->delete('journal'); 
	}
	
	function deleteTransDetEntry($or_no, $item) {
		$this->db->where('or_no', $or_no);
		$this->db->where('item', $item);
		$this->db->delete('trans_details'); 
	}
	
	function deleteAllEntries($table) {
		$this->db->truncate($table);
	}
}