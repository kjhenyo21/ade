<?php /*%%SmartyHeaderCode:193595167be09a2a572-13883810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f15033bdec5776a1582d0f9445ee977bb76641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_cdj.tpl',
      1 => 1365833046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193595167be09a2a572-13883810',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516904e38d976',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516904e38d976')) {function content_516904e38d976($_smarty_tpl) {?>  <!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Cash Disbursements Journal</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<form id="add-journal" class="form-horizontal">
					<center>
						<h4>Cash Disbursements Journal</h4>
					</center>
					
					<div id="tables" style="margin: 0 auto; width: 100%">
						<table id="heading" class="table table-hover">
							<thead>
								<th style="text-align: center; width: 80px">Date<span class="asterisk">*</span></th>
								<th style="text-align: center; width: 180px">Account<span class="asterisk">*</span></th>
								<th style="text-align: center; width: 140px">Source Document Reference #<span class="asterisk">*</span></th>
								<th style="text-align: center">Reference File<span class="asterisk">*</span></th>
								<th style="text-align: center">Purchases (Db)<span class="asterisk">*</span></th>
								<th style="text-align: center">Other (Db)<span class="asterisk">*</span></th>
								<th style="text-align: center">Cash (Cr)<span class="asterisk">*</span></th>
								<th></th>
							</thead>
						</table>
						<table id="journal-entries" class="table table-hover">
							<tbody>
																																									<tr id="row0"><td><div class="table-column" id="group-date0"><div id="control-date0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date0" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct0"><div id="control-acct0" class="control" style="text-align: center;"><input type="text"  id="acct0" name="acct[]" value="Electricity" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef0"><div id="control-sdRef0" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef0" name="sdRef[]" value="26743" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref0"><div id="control-ref0" class="control" style="text-align: center"><input type="text" class="span2" id="ref0" name="ref[]" value="ET-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases0"><div id="control-purchases0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases0" name="purchases[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other0"><div id="control-other0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other0" name="other[]" value="417.80" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash0" name="cash[]" value="417.80" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row1"><td><div class="table-column" id="group-date1"><div id="control-date1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date1" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct1"><div id="control-acct1" class="control" style="text-align: center;"><input type="text"  id="acct1" name="acct[]" value="Registration" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef1"><div id="control-sdRef1" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef1" name="sdRef[]" value="54773" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref1"><div id="control-ref1" class="control" style="text-align: center"><input type="text" class="span2" id="ref1" name="ref[]" value="ET-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases1"><div id="control-purchases1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases1" name="purchases[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other1"><div id="control-other1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other1" name="other[]" value="1000" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash1" name="cash[]" value="1000" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove1" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row2"><td><div class="table-column" id="group-date2"><div id="control-date2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date2" name="date[]" value="2010-01-05" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct2"><div id="control-acct2" class="control" style="text-align: center;"><input type="text"  id="acct2" name="acct[]" value="Communications" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef2"><div id="control-sdRef2" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef2" name="sdRef[]" value="prepaid card" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref2"><div id="control-ref2" class="control" style="text-align: center"><input type="text" class="span2" id="ref2" name="ref[]" value="ET-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases2"><div id="control-purchases2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases2" name="purchases[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other2"><div id="control-other2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other2" name="other[]" value="300" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash2" name="cash[]" value="300" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row3"><td><div class="table-column" id="group-date3"><div id="control-date3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date3" name="date[]" value="2010-01-06" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct3"><div id="control-acct3" class="control" style="text-align: center;"><input type="text"  id="acct3" name="acct[]" value="Stall Rent" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef3"><div id="control-sdRef3" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef3" name="sdRef[]" value="86" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref3"><div id="control-ref3" class="control" style="text-align: center"><input type="text" class="span2" id="ref3" name="ref[]" value="ET-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases3"><div id="control-purchases3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases3" name="purchases[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other3"><div id="control-other3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other3" name="other[]" value="11460" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash3" name="cash[]" value="11460" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row4"><td><div class="table-column" id="group-date4"><div id="control-date4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date4" name="date[]" value="2010-01-11" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct4"><div id="control-acct4" class="control" style="text-align: center;"><input type="text"  id="acct4" name="acct[]" value="Purchases" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef4"><div id="control-sdRef4" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef4" name="sdRef[]" value="18373" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref4"><div id="control-ref4" class="control" style="text-align: center"><input type="text" class="span2" id="ref4" name="ref[]" value="PT-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases4"><div id="control-purchases4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases4" name="purchases[]" value="12717" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other4"><div id="control-other4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other4" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash4" name="cash[]" value="12717" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove4" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row5"><td><div class="table-column" id="group-date5"><div id="control-date5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date5" name="date[]" value="2010-01-12" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct5"><div id="control-acct5" class="control" style="text-align: center;"><input type="text"  id="acct5" name="acct[]" value="Purchases" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef5"><div id="control-sdRef5" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef5" name="sdRef[]" value="25626" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref5"><div id="control-ref5" class="control" style="text-align: center"><input type="text" class="span2" id="ref5" name="ref[]" value="PT-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases5"><div id="control-purchases5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases5" name="purchases[]" value="2152.18" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other5"><div id="control-other5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other5" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash5" name="cash[]" value="2152.18" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																																																		</tbody>
						</table>
						<table id="total-entries" class="table table-hover">
							<tbody>
																																																																																																																																																								<tr>
												<td style="width: 80px"></td>
												<td style="width: 180px"></td>
												<td style="width: 140px"></td>
												<td style="width: 140px; text-align: right"><strong>TOTAL</strong></td>
												<td>
													<input type="text" class="span2" id="total_purchases" name="total_purchases"  style="width: 80px" value="35000" placeholder="Php 0.00"/>
												</td>
												<td>
													<input type="text" class="span2" id="total_other" name="total_other" style="width: 80px" value="20000" placeholder="Php 0.00"/>
												</td>
												<td>
													<input type="text" class="span2" id="total_cash" name="total_cash"  style="width: 80px" value="35000" placeholder="Php 0.00"/>
												</td>
												<input type="hidden" class="span2" id="total_label" name="total_label" value="Total"/>
												<td style="width: 20px"></td>
											</tr>
																																		</tbody>
						</table>
					</div>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">
						* - required fields
						<br>*Account refers to the ledger account name (e.g. Sales, Purchases, etc.)
						<br>*Source Document Reference # refers to any identification number on the source document of the transaction (e.g. OR No. [can be a single one or a range of OR Nos], voucher no, etc). If no identification number is available, say for example, in giving salary to employees, description can be a substitute (e.g. "first half payment, second half payment, etc.)
						<br>*Reference File, in the case of Trailblazer Digital Transaction Audit Trail System, refers to the filename of the document where a ledger entry can be referenced to. For example, a cash disbursements journal entry can be referenced to a purchase transaction file with filename pt-1-2010.jl. The Reference File input, therefore, is PT-1-2010.
						<br>*Commas are not allowed in Purchases (Db), Other (Db), and Cash (Db) columns
						<br>*Other (Db) refers to debited ledger accounts other than the Purchases ledger account
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="jtype" name="jtype" value="cashDisbursements" />
							<input type="hidden" id="month" name="month" value="January"/>
							<input type="hidden" id="year" name="year" value="2010"/>
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
				$('#journal-entries').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-date' + rowNo + '"><div id="control-date' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date' + rowNo + '" name="date[]" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct' + rowNo + '"><div id="control-acct' + rowNo + '" class="control" style="text-align: center;"><input type="text"  id="acct' + rowNo + '" name="acct[]" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef' + rowNo + '"><div id="control-sdRef' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef' + rowNo + '" name="sdRef[]" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref' + rowNo + '"><div id="control-ref' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="ref' + rowNo + '" name="ref[]" placeholder="ex: PT-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-purchases' + rowNo + '"><div id="control-purchases' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="purchases' + rowNo + '" name="purchases[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other' + rowNo + '"><div id="control-other' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other' + rowNo + '" name="other[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash' + rowNo + '" name="cash[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				sdRef = $('#sdRef' + no).val();
				$('#row' + no).remove();
				rows--;
				$.ajax({
						type: "GET",
						url: 'deleteJournalEntry?sdRef=' + sdRef,
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
						url: 'saveJournal',
						data: $("#add-journal").serialize(),				
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