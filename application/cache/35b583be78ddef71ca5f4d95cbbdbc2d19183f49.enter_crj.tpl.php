<?php /*%%SmartyHeaderCode:1649951678701207021-22027054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b583be78ddef71ca5f4d95cbbdbc2d19183f49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_crj.tpl',
      1 => 1366036965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649951678701207021-22027054',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c11e7eabb5',
  'variables' => 
  array (
    'month' => 0,
    'year' => 0,
    'entries' => 0,
    'e' => 0,
    'rowNo' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c11e7eabb5')) {function content_516c11e7eabb5($_smarty_tpl) {?><!--
 * Accounting Data Encoder (ADE) for Trailblazer Digital Transaction Audit Trail System
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created April 11, 2013
-->
	<head>
		<title>Cash Receipts Journal</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<div id="response" class="alert alert-success" style="margin: 0 auto; margin-bottom: 50px; text-align:center; width: 280px; display: none">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<i class="icon-thumbs-up"></i> Successfully saved the changes! Refresh the page to load the changes.
				</div>
				<form id="add-journal" class="form-horizontal">
					<center>
						<h4>Cash Receipts Journal</h4>
						<em>January 2010</em>
					</center>
					<br>
					<div id="tables" style="margin: 0 auto; width: 100%">
						<table id="heading" class="table table-hover">
							<thead>
								<th style="text-align: center; width: 80px">Date<span class="asterisk">*</span></th>
								<th style="text-align: center; width: 180px">Account<span class="asterisk">*</span></th>
								<th style="text-align: center; width: 140px">Source Document Reference #<span class="asterisk">*</span></th>
								<th style="text-align: center">Reference File<span class="asterisk">*</span></th>
								<th style="text-align: center">Cash (Db)<span class="asterisk">*</span></th>
								<th style="text-align: center">Other (Cr)<span class="asterisk">*</span></th>
								<th style="text-align: center">Sales (Cr)<span class="asterisk">*</span></th>
								<th></th>
							</thead>
						</table>
						<table id="journal-entries" class="table table-hover">
							<tbody>
																																									<tr id="row0"><td><div class="table-column" id="group-date0"><div id="control-date0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date0" name="date[]" value="2010-01-02" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct0"><div id="control-acct0" class="control" style="text-align: center;"><input type="text"  id="acct0" name="acct[]" value="Sales" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef0"><div id="control-sdRef0" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef0" name="sdRef[]" value="6253-6255" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref0"><div id="control-ref0" class="control" style="text-align: center"><input type="text" class="span2" id="ref0" name="ref[]" value="ST-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-cash0"><div id="control-cash0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash0" name="cash[]" value="1338" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other0"><div id="control-other0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other0" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="sales0" name="sales[]" value="1338" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row1"><td><div class="table-column" id="group-date1"><div id="control-date1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date1" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct1"><div id="control-acct1" class="control" style="text-align: center;"><input type="text"  id="acct1" name="acct[]" value="Sales" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef1"><div id="control-sdRef1" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef1" name="sdRef[]" value="6256-6260" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref1"><div id="control-ref1" class="control" style="text-align: center"><input type="text" class="span2" id="ref1" name="ref[]" value="ST-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-cash1"><div id="control-cash1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash1" name="cash[]" value="587" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other1"><div id="control-other1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other1" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="sales1" name="sales[]" value="587" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove1" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row2"><td><div class="table-column" id="group-date2"><div id="control-date2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date2" name="date[]" value="2010-01-05" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct2"><div id="control-acct2" class="control" style="text-align: center;"><input type="text"  id="acct2" name="acct[]" value="Sales" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef2"><div id="control-sdRef2" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef2" name="sdRef[]" value="6261-6264" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref2"><div id="control-ref2" class="control" style="text-align: center"><input type="text" class="span2" id="ref2" name="ref[]" value="ST-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-cash2"><div id="control-cash2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash2" name="cash[]" value="731" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other2"><div id="control-other2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other2" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="sales2" name="sales[]" value="731" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row3"><td><div class="table-column" id="group-date3"><div id="control-date3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date3" name="date[]" value="2010-01-06" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct3"><div id="control-acct3" class="control" style="text-align: center;"><input type="text"  id="acct3" name="acct[]" value="Sales" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef3"><div id="control-sdRef3" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef3" name="sdRef[]" value="6265-6269" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref3"><div id="control-ref3" class="control" style="text-align: center"><input type="text" class="span2" id="ref3" name="ref[]" value="ST-1-2010" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-cash3"><div id="control-cash3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash3" name="cash[]" value="284" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other3"><div id="control-other3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other3" name="other[]" value="" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="sales3" name="sales[]" value="284" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
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
													<input type="text" class="span2" id="total_cash" name="total_cash"  style="width: 80px" value="48659.27" placeholder="Php 0.00"/>
												</td>
												<td>
													<input type="text" class="span2" id="total_other" name="total_other" style="width: 80px" value="" placeholder="Php 0.00"/>
												</td>
												<td>
													<input type="text" class="span2" id="total_sales" name="total_sales"  style="width: 80px" value="48659.27" placeholder="Php 0.00"/>
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
						<br>*Reference File, in the case of Trailblazer Digital Transaction Audit Trail System, refers to the filename of the document where a ledger entry can be referenced to. For example, a cash receipts journal entry can be referenced to a sale transaction file with filename st-1-2010.jl. The Reference File input, therefore, is ST-1-2010.
						<br>*Commas are not allowed in Cash (Db), Other (Db), and Sales (Db) columns
						<br>*Other (Db) refers to debited ledger accounts other than the Cash ledger account
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="jtype" name="jtype" value="cashReceipts" />
							<input type="hidden" id="month" name="month" value="January"/>
							<input type="hidden" id="year" name="year" value="2010"/>
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
				$('#journal-entries').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-date' + rowNo + '"><div id="control-date' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date' + rowNo + '" name="date[]" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-acct' + rowNo + '"><div id="control-acct' + rowNo + '" class="control" style="text-align: center;"><input type="text"  id="acct' + rowNo + '" name="acct[]" style="width: 150px" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef' + rowNo + '"><div id="control-sdRef' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef' + rowNo + '" name="sdRef[]" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref' + rowNo + '"><div id="control-ref' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="ref' + rowNo + '" name="ref[]" placeholder="ex: ST-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-cash' + rowNo + '"><div id="control-cash' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="cash' + rowNo + '" name="cash[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-other' + rowNo + '"><div id="control-other' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="other' + rowNo + '" name="other[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" style="width: 80px" id="sales' + rowNo + '" name="sales[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
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