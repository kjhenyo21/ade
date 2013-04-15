<?php /*%%SmartyHeaderCode:2390451679fb0a5e971-15450790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0754afe6a9bd74539c3b43a7271a768f13ee2eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_ledger.tpl',
      1 => 1366036866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2390451679fb0a5e971-15450790',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c11b735f2c',
  'variables' => 
  array (
    'month' => 0,
    'year' => 0,
    'entries' => 0,
    'curr_acct' => 0,
    'e' => 0,
    'rowNo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c11b735f2c')) {function content_516c11b735f2c($_smarty_tpl) {?><!--
 * Accounting Data Encoder (ADE) for Trailblazer Digital Transaction Audit Trail System
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created April 11, 2013
-->
	<head>
		<title>General Ledger</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<div id="response" class="alert alert-success" style="margin: 0 auto; margin-bottom: 50px; text-align:center; width: 280px; display: none">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<i class="icon-thumbs-up"></i> Successfully saved the changes! Refresh the page to load the changes.
				</div>
				<form id="add-ledger" class="form-horizontal">
					<center>
						<h4>General Ledger</h4>
						<em>January 2010</em>
					</center>
																																							<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Sales"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="401"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																							<tr id="row0"><td><div class="table-column" id="group-date0"><div id="control-date0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date0" name="date[]" value="2010-01-02" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef0"><div id="control-sdRef0" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef0" name="sdRef[]" value="6253-6255" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref0"><div id="control-ref0" class="control" style="text-align: center"><input type="text" class="span2" id="ref0" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit0"><div id="control-debit0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit0" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit0"><div id="control-credit0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit0" name="credit[]" value="1338" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct0" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo0" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row1"><td><div class="table-column" id="group-date1"><div id="control-date1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date1" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef1"><div id="control-sdRef1" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef1" name="sdRef[]" value="6256-6260" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref1"><div id="control-ref1" class="control" style="text-align: center"><input type="text" class="span2" id="ref1" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit1"><div id="control-debit1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit1" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit1"><div id="control-credit1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit1" name="credit[]" value="587" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove1" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct1" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo1" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row2"><td><div class="table-column" id="group-date2"><div id="control-date2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date2" name="date[]" value="2010-01-05" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef2"><div id="control-sdRef2" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef2" name="sdRef[]" value="6261-6264" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref2"><div id="control-ref2" class="control" style="text-align: center"><input type="text" class="span2" id="ref2" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit2"><div id="control-debit2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit2" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit2"><div id="control-credit2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit2" name="credit[]" value="731" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct2" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo2" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row3"><td><div class="table-column" id="group-date3"><div id="control-date3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date3" name="date[]" value="2010-01-06" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef3"><div id="control-sdRef3" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef3" name="sdRef[]" value="6265-6269" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref3"><div id="control-ref3" class="control" style="text-align: center"><input type="text" class="span2" id="ref3" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit3"><div id="control-debit3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit3" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit3"><div id="control-credit3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit3" name="credit[]" value="284" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct3" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo3" name="perEntryAcctNo[]" value="401"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																										<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="48659.27" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Sales"/>
														<input type="hidden" name="headEntryAcctNo[]" value="401"/>
													</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																																																								<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Purchases"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="501"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																						<tr id="row5"><td><div class="table-column" id="group-date5"><div id="control-date5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date5" name="date[]" value="2010-01-11" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef5"><div id="control-sdRef5" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef5" name="sdRef[]" value="18373" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref5"><div id="control-ref5" class="control" style="text-align: center"><input type="text" class="span2" id="ref5" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit5"><div id="control-debit5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit5" name="debit[]" value="12717" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit5"><div id="control-credit5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit5" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct5" name="perEntryAcct[]" value="Purchases"/><input type="hidden" id="perEntryAcctNo5" name="perEntryAcctNo[]" value="501"/></tr>
																																																											<tr id="row6"><td><div class="table-column" id="group-date6"><div id="control-date6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date6" name="date[]" value="2010-01-12" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef6"><div id="control-sdRef6" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef6" name="sdRef[]" value="25626" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref6"><div id="control-ref6" class="control" style="text-align: center"><input type="text" class="span2" id="ref6" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit6"><div id="control-debit6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit6" name="debit[]" value="2152.18" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit6"><div id="control-credit6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit6" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove6" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct6" name="perEntryAcct[]" value="Purchases"/><input type="hidden" id="perEntryAcctNo6" name="perEntryAcctNo[]" value="501"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																															<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="14869.18" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Purchases"/>
														<input type="hidden" name="headEntryAcctNo[]" value="501"/>
													</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																		</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																														<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Salaries"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="601"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																															<tr id="row8"><td><div class="table-column" id="group-date8"><div id="control-date8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date8" name="date[]" value="2010-01-15" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef8"><div id="control-sdRef8" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef8" name="sdRef[]" value="first half" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref8"><div id="control-ref8" class="control" style="text-align: center"><input type="text" class="span2" id="ref8" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit8"><div id="control-debit8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit8" name="debit[]" value="5400" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit8"><div id="control-credit8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit8" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove8" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct8" name="perEntryAcct[]" value="Salaries"/><input type="hidden" id="perEntryAcctNo8" name="perEntryAcctNo[]" value="601"/></tr>
																																																											<tr id="row9"><td><div class="table-column" id="group-date9"><div id="control-date9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date9" name="date[]" value="2010-01-29" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef9"><div id="control-sdRef9" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef9" name="sdRef[]" value="second half" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref9"><div id="control-ref9" class="control" style="text-align: center"><input type="text" class="span2" id="ref9" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit9"><div id="control-debit9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit9" name="debit[]" value="5400" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit9"><div id="control-credit9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit9" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove9" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct9" name="perEntryAcct[]" value="Salaries"/><input type="hidden" id="perEntryAcctNo9" name="perEntryAcctNo[]" value="601"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																				<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Salaries"/>
														<input type="hidden" name="headEntryAcctNo[]" value="601"/>
													</tr>
																																																																																																																																																																																																																																																																																																																																																																													</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																														<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Honorarium"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="602"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																								<tr id="row11"><td><div class="table-column" id="group-date11"><div id="control-date11" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date11" name="date[]" value="2010-01-29" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef11"><div id="control-sdRef11" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef11" name="sdRef[]" value="hired person" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref11"><div id="control-ref11" class="control" style="text-align: center"><input type="text" class="span2" id="ref11" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit11"><div id="control-debit11" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit11" name="debit[]" value="1600" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit11"><div id="control-credit11" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit11" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove11" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct11" name="perEntryAcct[]" value="Honorarium"/><input type="hidden" id="perEntryAcctNo11" name="perEntryAcctNo[]" value="602"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																		<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="1600" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Honorarium"/>
														<input type="hidden" name="headEntryAcctNo[]" value="602"/>
													</tr>
																																																																																																																																																																																																																																																																																																																															</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Freight-In"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="604"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														<tr id="row13"><td><div class="table-column" id="group-date13"><div id="control-date13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date13" name="date[]" value="2010-01-08" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef13"><div id="control-sdRef13" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef13" name="sdRef[]" value="4364332" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref13"><div id="control-ref13" class="control" style="text-align: center"><input type="text" class="span2" id="ref13" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit13"><div id="control-debit13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit13" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit13"><div id="control-credit13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit13" name="credit[]" value="1380" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove13" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct13" name="perEntryAcct[]" value="Freight-In"/><input type="hidden" id="perEntryAcctNo13" name="perEntryAcctNo[]" value="604"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																								</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="1380" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Freight-In"/>
														<input type="hidden" name="headEntryAcctNo[]" value="604"/>
													</tr>
																																																																																																																																																																																																																																																																																	</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Stall Rent"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="605"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				<tr id="row15"><td><div class="table-column" id="group-date15"><div id="control-date15" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date15" name="date[]" value="2010-01-06" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef15"><div id="control-sdRef15" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef15" name="sdRef[]" value="86" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref15"><div id="control-ref15" class="control" style="text-align: center"><input type="text" class="span2" id="ref15" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit15"><div id="control-debit15" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit15" name="debit[]" value="11460" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit15"><div id="control-credit15" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit15" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove15" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct15" name="perEntryAcct[]" value="Stall Rent"/><input type="hidden" id="perEntryAcctNo15" name="perEntryAcctNo[]" value="605"/></tr>
																																																																																																																																																																																																																																																																																																																																																																																		</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																														<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="11460" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Stall Rent"/>
														<input type="hidden" name="headEntryAcctNo[]" value="605"/>
													</tr>
																																																																																																																																																																																																																																			</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Electricity"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="606"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										<tr id="row17"><td><div class="table-column" id="group-date17"><div id="control-date17" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date17" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef17"><div id="control-sdRef17" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef17" name="sdRef[]" value="26743" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref17"><div id="control-ref17" class="control" style="text-align: center"><input type="text" class="span2" id="ref17" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit17"><div id="control-debit17" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit17" name="debit[]" value="417.80" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit17"><div id="control-credit17" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit17" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove17" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct17" name="perEntryAcct[]" value="Electricity"/><input type="hidden" id="perEntryAcctNo17" name="perEntryAcctNo[]" value="606"/></tr>
																																																																																																																																																																																																																																																																																																												</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																												<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="417.80" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Electricity"/>
														<input type="hidden" name="headEntryAcctNo[]" value="606"/>
													</tr>
																																																																																																																																																																																					</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Communications"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="607"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																<tr id="row19"><td><div class="table-column" id="group-date19"><div id="control-date19" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date19" name="date[]" value="2010-01-05" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef19"><div id="control-sdRef19" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef19" name="sdRef[]" value="prepaid card" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref19"><div id="control-ref19" class="control" style="text-align: center"><input type="text" class="span2" id="ref19" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit19"><div id="control-debit19" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit19" name="debit[]" value="300" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit19"><div id="control-credit19" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit19" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove19" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct19" name="perEntryAcct[]" value="Communications"/><input type="hidden" id="perEntryAcctNo19" name="perEntryAcctNo[]" value="607"/></tr>
																																																																																																																																																																																																																																						</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="300" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Communications"/>
														<input type="hidden" name="headEntryAcctNo[]" value="607"/>
													</tr>
																																																																																																																																							</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Registration"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="608"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						<tr id="row21"><td><div class="table-column" id="group-date21"><div id="control-date21" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date21" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef21"><div id="control-sdRef21" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef21" name="sdRef[]" value="54773" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref21"><div id="control-ref21" class="control" style="text-align: center"><input type="text" class="span2" id="ref21" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit21"><div id="control-debit21" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit21" name="debit[]" value="1000" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit21"><div id="control-credit21" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit21" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove21" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct21" name="perEntryAcct[]" value="Registration"/><input type="hidden" id="perEntryAcctNo21" name="perEntryAcctNo[]" value="608"/></tr>
																																																																																																																																																																</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="1000" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Registration"/>
														<input type="hidden" name="headEntryAcctNo[]" value="608"/>
													</tr>
																																																																																									</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																																	<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="Other Taxes/Licenses"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="612"/></span>
									</div>
								</div>		
					
								<div id="tables" style="margin: 0 auto; width: 100%">
									<table id="heading" class="table table-hover">
										<thead>
											<th style="text-align: center; width: 140">Date<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 200px">Source Document Reference #<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 220px">Reference File<span class="asterisk">*</span></th>
											<th style="text-align: center; width: 90px">Debit<span class="asterisk">*</span></th>
											<th style="text-align: center">Credit<span class="asterisk">*</span></th>
											<th></th>
										</thead>
									</table>
									<table id="ledger-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												<tr id="row23"><td><div class="table-column" id="group-date23"><div id="control-date23" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date23" name="date[]" value="2010-01-18" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef23"><div id="control-sdRef23" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef23" name="sdRef[]" value="24962" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref23"><div id="control-ref23" class="control" style="text-align: center"><input type="text" class="span2" id="ref23" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit23"><div id="control-debit23" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit23" name="debit[]" value="3650.31" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit23"><div id="control-credit23" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit23" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove23" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct23" name="perEntryAcct[]" value="Other Taxes/Licenses"/><input type="hidden" id="perEntryAcctNo23" name="perEntryAcctNo[]" value="612"/></tr>
																																																																																										</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="3650.31" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="Other Taxes/Licenses"/>
														<input type="hidden" name="headEntryAcctNo[]" value="612"/>
													</tr>
																																											</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
																																
					
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">
						* - required fields
						<br>*Source Document Reference # refers to any identification number on the source document of the transaction (e.g. OR No. [can be a single one or a range of OR Nos], voucher no, etc). If no identification number is available, say for example, in giving salary to employees, description can be a substitute (e.g. "first half payment, second half payment, etc.)
						<br>*Reference File, in the case of Trailblazer Digital Transaction Audit Trail System, refers to the filename of the document where a ledger entry can be referenced to. For example, a ledger entry can be referenced to a journal file with filename crj-1-2010.jl. The Reference File input, therefore, is CRJ-1-2010.
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="type" name="type" value="general" />
							<input type="hidden" id="month" name="month" value="January" />
							<input type="hidden" id="year" name="year" value="2010" />
							<a id="submit" class="btn btn-primary" onClick="submitIt(); return false">Save</a>
							<button type="reset" id="reset" class="btn" onClick="resetIt();">Reset</button>
							<a href="http://localhost/ade/" id="reset" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="http://localhost/ade/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="http://localhost/ade/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/ade/assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="http://localhost/ade/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="http://localhost/ade/assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
		<script src="http://localhost/ade/assets/scripts/jquery.validate.min.js" type="text/javascript"></script>
		<script>
			var id = $('#id').val();
			var lname = $('#lname').val();
			var fname = $('#fname').val();
			var license_no = $('#license_no').val();
			var cname = $('#cname').val();
			var uname = $('#uname').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
			var form = $('#setup');
			var rowNo = 0;
			var rows = 0;
			var errors = 0;
			
			/**function monitor() {
				is_month = $('#is_month').val();
				if (is_month != '') {
					$('#submit').removeAttr('disabled');
					$('#submit').addClass('btn-primary');
				} else {
					$('#submit').attr('disabled', 'disabled');
					$('#submit').removeClass('btn-primary');
				}
			}*/

			function addEntry() {
				rowNo += 1;
				rows += 1;
				$('#ledger-entries').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-date' + rowNo + '"><div id="control-date' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date' + rowNo + '" name="date[]" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef' + rowNo + '"><div id="control-sdRef' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef' + rowNo + '" name="sdRef[]" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref' + rowNo + '"><div id="control-ref' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="ref' + rowNo + '" name="ref[]" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit' + rowNo + '"><div id="control-debit' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit' + rowNo + '" name="debit[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit' + rowNo + '"><div id="control-credit' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit' + rowNo + '" name="credit[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" name="perEntryAcct[]" /><input type="hidden" name="perEntryAcctNo[]"/></tr>');
			}
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				sdRef = $('#sdRef' + no).val();
				$('#row' + no).remove();
				rows--;
				$.ajax({
					type: "GET",
					url: 'deleteLedgerEntry?sdRef=' + sdRef,
				});				
			}
			
			function submitIt() {
				error = 0;
				/**$('input[name="path[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).hasClass('error'))
						error++;
					else {
						if ($(this).val() == '') {
							$('#notify-' + id).remove();
							$(this).parent().parent().addClass("error");
							$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
							error++;
						} else {
							$(this).parent().parent().removeClass("error");
							$('#notify-' + id).remove();
						}
					}
					
				});
				$('input[name="ext[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						$('#notify-' + id).remove();
						$(this).parent().parent().addClass("error");
						$(this).parent().parent().append('<div id="notify-' + id + '" style="color: red; font-size: 9pt; font-style: italic; text-align: left; margin-left:15px">Must not be empty!</div>');
						error++;
					} else {
						$(this).parent().parent().removeClass("error");
						$('#notify-' + id).remove();
					}
				});*/
				console.log("ERRORS: " + error);
				if (error == 0) {
					$.ajax({
						type: "POST",
						url: 'saveLedger',
						data: $("#add-ledger").serialize(),				
						success: function(data){
							//alert('Setup successful! You will now be directed to the Login Page.');
							//location.replace("http://localhost/ade/");
							$('#response').show();
							$("html, body").animate({ scrollTop: 0 }, "slow");
						}
					});
				} else {
					$('#response').remove();
					$('#setup-pref').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Cannot process while there are errors.</div>');
					$("html, body").animate({ scrollTop: 0 }, "slow");
				}
			}
			
			function resetIt() {
				$('#submit').attr("disabled", "disabled");
				$('#submit').removeClass("btn-primary");
				$("#submit").get(0).onclick = null;
			}
		</script><?php }} ?>