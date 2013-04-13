<?php /*%%SmartyHeaderCode:2390451679fb0a5e971-15450790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0754afe6a9bd74539c3b43a7271a768f13ee2eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_ledger.tpl',
      1 => 1365839234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2390451679fb0a5e971-15450790',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51690de1ac2e1',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51690de1ac2e1')) {function content_51690de1ac2e1($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>General Ledger</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<form id="add-ledger" class="form-horizontal">
					<center>
						<h4>General Ledger</h4>
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
																																																											<tr id="row4"><td><div class="table-column" id="group-date4"><div id="control-date4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date4" name="date[]" value="2010-01-07" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef4"><div id="control-sdRef4" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef4" name="sdRef[]" value="6270-6279" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref4"><div id="control-ref4" class="control" style="text-align: center"><input type="text" class="span2" id="ref4" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit4"><div id="control-debit4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit4" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit4"><div id="control-credit4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit4" name="credit[]" value="4819" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove4" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct4" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo4" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row5"><td><div class="table-column" id="group-date5"><div id="control-date5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date5" name="date[]" value="2010-01-08" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef5"><div id="control-sdRef5" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef5" name="sdRef[]" value="6280-6289" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref5"><div id="control-ref5" class="control" style="text-align: center"><input type="text" class="span2" id="ref5" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit5"><div id="control-debit5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit5" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit5"><div id="control-credit5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit5" name="credit[]" value="8440" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct5" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo5" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row6"><td><div class="table-column" id="group-date6"><div id="control-date6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date6" name="date[]" value="2010-01-09" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef6"><div id="control-sdRef6" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef6" name="sdRef[]" value="6290-6360" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref6"><div id="control-ref6" class="control" style="text-align: center"><input type="text" class="span2" id="ref6" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit6"><div id="control-debit6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit6" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit6"><div id="control-credit6" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit6" name="credit[]" value="2591" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove6" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct6" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo6" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row7"><td><div class="table-column" id="group-date7"><div id="control-date7" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date7" name="date[]" value="2010-01-12" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef7"><div id="control-sdRef7" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef7" name="sdRef[]" value="6301-6302" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref7"><div id="control-ref7" class="control" style="text-align: center"><input type="text" class="span2" id="ref7" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit7"><div id="control-debit7" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit7" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit7"><div id="control-credit7" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit7" name="credit[]" value="146" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove7" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct7" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo7" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row8"><td><div class="table-column" id="group-date8"><div id="control-date8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date8" name="date[]" value="2010-01-13" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef8"><div id="control-sdRef8" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef8" name="sdRef[]" value="6303" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref8"><div id="control-ref8" class="control" style="text-align: center"><input type="text" class="span2" id="ref8" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit8"><div id="control-debit8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit8" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit8"><div id="control-credit8" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit8" name="credit[]" value="45" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove8" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct8" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo8" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row9"><td><div class="table-column" id="group-date9"><div id="control-date9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date9" name="date[]" value="2010-01-14" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef9"><div id="control-sdRef9" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef9" name="sdRef[]" value="6304-6311" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref9"><div id="control-ref9" class="control" style="text-align: center"><input type="text" class="span2" id="ref9" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit9"><div id="control-debit9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit9" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit9"><div id="control-credit9" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit9" name="credit[]" value="2463" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove9" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct9" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo9" name="perEntryAcctNo[]" value="401"/></tr>
																																																											<tr id="row10"><td><div class="table-column" id="group-date10"><div id="control-date10" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date10" name="date[]" value="2010-01-15" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef10"><div id="control-sdRef10" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef10" name="sdRef[]" value="6312-6317" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref10"><div id="control-ref10" class="control" style="text-align: center"><input type="text" class="span2" id="ref10" name="ref[]" value="CRJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit10"><div id="control-debit10" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit10" name="debit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit10"><div id="control-credit10" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit10" name="credit[]" value="428" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove10" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct10" name="perEntryAcct[]" value="Sales"/><input type="hidden" id="perEntryAcctNo10" name="perEntryAcctNo[]" value="401"/></tr>
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
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="50000" placeholder="Php 0.00"/>
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
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											<tr id="row12"><td><div class="table-column" id="group-date12"><div id="control-date12" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date12" name="date[]" value="2010-01-11" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef12"><div id="control-sdRef12" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef12" name="sdRef[]" value="18373" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref12"><div id="control-ref12" class="control" style="text-align: center"><input type="text" class="span2" id="ref12" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit12"><div id="control-debit12" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit12" name="debit[]" value="12717" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit12"><div id="control-credit12" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit12" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove12" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct12" name="perEntryAcct[]" value="Purchases"/><input type="hidden" id="perEntryAcctNo12" name="perEntryAcctNo[]" value="501"/></tr>
																																																											<tr id="row13"><td><div class="table-column" id="group-date13"><div id="control-date13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date13" name="date[]" value="2010-01-12" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef13"><div id="control-sdRef13" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef13" name="sdRef[]" value="25626" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref13"><div id="control-ref13" class="control" style="text-align: center"><input type="text" class="span2" id="ref13" name="ref[]" value="CDJ-1-2010" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit13"><div id="control-debit13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit13" name="debit[]" value="2152.18" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit13"><div id="control-credit13" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit13" name="credit[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove13" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct13" name="perEntryAcct[]" value="Purchases"/><input type="hidden" id="perEntryAcctNo13" name="perEntryAcctNo[]" value="501"/></tr>
																																																																																										</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
																																																																																																																																																																																																																																																																																																																																																																																<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="35000" placeholder="Php 0.00"/>
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
							<a id="submit" class="btn" onClick="submitIt(); return false">Save</a>
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