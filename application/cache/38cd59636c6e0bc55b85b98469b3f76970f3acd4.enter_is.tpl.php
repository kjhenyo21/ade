<?php /*%%SmartyHeaderCode:3180051677cb662a549-10812269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38cd59636c6e0bc55b85b98469b3f76970f3acd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_is.tpl',
      1 => 1366036802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180051677cb662a549-10812269',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c114679e85',
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
<?php if ($_valid && !is_callable('content_516c114679e85')) {function content_516c114679e85($_smarty_tpl) {?><!--
 * Accounting Data Encoder (ADE) for Trailblazer Digital Transaction Audit Trail System
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created April 11, 2013
-->
	<head>
		<title>Income Statement</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="response" class="alert alert-success" style="margin: 0 auto; margin-bottom: 50px; text-align:center; width: 280px; display: none">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-thumbs-up"></i> Successfully saved the changes! Refresh the page to load the changes.
			</div>
			<div id="form-container">
				<form id="edit-income-statement" class="form-horizontal">
					<center>
						<h4>Income Statement</h4>
						<em>January 2010</em>
					</center>
					<br>
					<br>
					<div id="tables" style="margin: 0 auto; width: 60%">
						<table id="heading" class="table table-hover">
							<thead>
								<th style="text-align: center">Account<span class="asterisk">*</span></th>
								<th style="text-align: center">Amount<span class="asterisk">*</span></th>
								<th></th>
							</thead>
						</table>
						<strong>Revenues:</strong>
						<table id="revenues" class="table table-hover">
							<tbody>
																																									<tr id="row0"><td><div class="table-column" id="group-acct0"><div id="control-acct0" class="control" style="text-align: center"><input type="text" class="span3" id="acct0" name="revAcct[]" value=Sales placeholder="e.g. Sales, Interest Income, Service Income, etc." onChange="revAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt0" name="revAmt[]" value=48659.27 placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove0" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																																																																																																																																																																																																																											</tbody>
						</table>
																																													<strong>Total Revenues</strong><span style="margin-left:240px"><input type="text" class="span2" id="total_rev" name="total_rev" value="48659.27" placeholder="Php 0.00"/></span>
																																																																																																																																																																																																<br><br><br><strong>Less: Expenses:</strong>
						<table id="expenses" class="table table-hover">
							<tbody>
																																																																																						<tr id="row2"><td><div class="table-column" id="group-acct2"><div id="control-acct2" class="control" style="text-align: center"><input type="text" class="span3" id="acct2" name="expAcct[]" value="Purchases" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt2" name="expAmt[]" value="14869.18" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove2" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row3"><td><div class="table-column" id="group-acct3"><div id="control-acct3" class="control" style="text-align: center"><input type="text" class="span3" id="acct3" name="expAcct[]" value="Stall Rent" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt3" name="expAmt[]" value="11460" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove3" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row4"><td><div class="table-column" id="group-acct4"><div id="control-acct4" class="control" style="text-align: center"><input type="text" class="span3" id="acct4" name="expAcct[]" value="Other Taxes/Licenses" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt4" name="expAmt[]" value="3650.31" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove4" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row5"><td><div class="table-column" id="group-acct5"><div id="control-acct5" class="control" style="text-align: center"><input type="text" class="span3" id="acct5" name="expAcct[]" value="Registration" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt5" name="expAmt[]" value="1000" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove5" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row6"><td><div class="table-column" id="group-acct6"><div id="control-acct6" class="control" style="text-align: center"><input type="text" class="span3" id="acct6" name="expAcct[]" value="Salaries" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt6" name="expAmt[]" value="108000" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove6" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row7"><td><div class="table-column" id="group-acct7"><div id="control-acct7" class="control" style="text-align: center"><input type="text" class="span3" id="acct7" name="expAcct[]" value="Honorarium" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt7" name="expAmt[]" value="1600" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove7" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row8"><td><div class="table-column" id="group-acct8"><div id="control-acct8" class="control" style="text-align: center"><input type="text" class="span3" id="acct8" name="expAcct[]" value="Freight-In" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt8" name="expAmt[]" value="1380" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove8" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row9"><td><div class="table-column" id="group-acct9"><div id="control-acct9" class="control" style="text-align: center"><input type="text" class="span3" id="acct9" name="expAcct[]" value="Electricity" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt9" name="expAmt[]" value="417.80" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove9" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																													<tr id="row10"><td><div class="table-column" id="group-acct10"><div id="control-acct10" class="control" style="text-align: center"><input type="text" class="span3" id="acct10" name="expAcct[]" value="Communications" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="amt10" name="expAmt[]" value="300" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove10" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>
																																																																																												</tbody>
						</table>
																																																																																																																																																																																																			<strong>Total Expenses</strong><span style="margin-left:240px"><input type="text" class="span2" id="total_exp" name="total_exp" value="45537.29" placeholder="Php 0.00"/></span>
																																																																																																																																																																																																																																																						<br><br><br><strong>NET INCOME</strong><span style="margin-left:260px"><input type="text" class="span2" id="net_income" name="net_income" value="3121.98" placeholder="Php 0.00"/></span>
																										</div>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">
						* - required fields
						<br>*Account - refers to ledger account name (e.g., Sales, Purchases, Taxes, etc.)
						<br>*Amount field must not contain comma.
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="month" name="month" value="January"/>
							<input type="hidden" id="year" name="year" value="2010"/>
							<!---->
								
							<!---->
							<a id="submit" class="btn" onClick="submitIt(); return false;">Save</a>
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
			

			function addRevEntry() {
				rowNo += 1;
				rows += 1;
				$('#revenues').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-revAcct' + rowNo + '"><div id="control-revAcct' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span3" id="revAcct' + rowNo + '" name="revAcct[]" placeholder="e.g. Sales, Interest Income, Service Income, etc." onChange="revAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="revAmt' + rowNo + '" name="revAmt[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			function addExpEntry() {
				rowNo += 1;
				rows += 1;
				$('#expenses').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-expAcct' + rowNo + '"><div id="control-expAcct' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span3" id="expAcct' + rowNo + '" name="expAcct[]" placeholder="e.g. Purchases, Rent, Taxes, etc." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="expAmt' + rowNo + '" name="expAmt[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				acct = $('#acct' + no).val();
				amt = $('#amt' + no).val();
				$('#row' + no).remove();
				rows--;
				$.ajax({
					type: "GET",
					url: 'deleteISEntry?month=January&year=2010&acct=' + acct + '&amt=' + amt,
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
						url: 'saveIncomeStatement',
						data: $("#edit-income-statement").serialize(),				
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