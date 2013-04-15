<!--
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
			<div id="form-container">
				<form id="add-income-statement" class="form-horizontal">
					<center>
						<h4>Income Statement</h4>
						<em>{$month} {$year}</em>
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
						<table id="revenues" class="table">
							<tbody>
							</tbody>
						</table>
						<a href="#" onclick="addRevEntry(); return false;">Add Entry</a>
						<br><strong>Total Revenues</strong><span style="margin-left:240px"><input type="text" class="span2" id="total_rev" name="total_rev" placeholder="Php 0.00"/></span>
						<br><br><br><strong>Less: Expenses:</strong>
						<table id="expenses" class="table table-hover">
							<tbody>
							</tbody>
						</table>
						<a href="#" onclick="addExpEntry(); return false;">Add Entry</a>
						<br><strong>Total Expenses</strong><span style="margin-left:240px"><input type="text" class="span2" id="total_exp" name="total_exp" placeholder="Php 0.00"/></span>
						<br><br><br><strong>NET INCOME</strong><span style="margin-left:260px"><input type="text" class="span2" id="net_income" name="net_income" placeholder="Php 0.00"/></span>
					</div>
					<hr style="margin-bottom: 5px">
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">
						* - required fields
						<br>*Account - refers to ledger account name (e.g., Sales, Purchases, Taxes, etc.)
						<br>*Amount field must not contain comma.
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="month" name="month" value="{$month}"/>
							<input type="hidden" id="year" name="year" value="{$year}"/>
							<a id="submit" class="btn btn-primary" disabled="disabled" onClick="submitIt(); return false">Save</a>
							<button type="reset" id="reset" class="btn" onClick="resetIt();">Reset</button>
							<a href="{url}" id="reset" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
		<script src="{url}assets/scripts/jquery.validate.min.js" type="text/javascript"></script>
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
			
			is_year = $('#is_year').val();
			if (is_year != '') {
				$('#submit').removeAttr('disabled');
				$('#submit').addClass('btn-primary');
			} else {
				$('#submit').attr('disabled', 'disabled');
				$('#submit').removeClass('btn-primary');
			}
				
			function monitor() {
				is_year = $('#is_year').val();
				if (is_year != '') {
					$('#submit').removeAttr('disabled');
					$('#submit').addClass('btn-primary');
				} else {
					$('#submit').attr('disabled', 'disabled');
					$('#submit').removeClass('btn-primary');
				}
			}

			function addRevEntry() {
				rowNo += 1;
				rows += 1;
				$('#revenues').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-revAcct' + rowNo + '"><div id="control-revAcct' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span3" id="revAcct' + rowNo + '" name="revAcct[]" placeholder="e.g. Sales, Interest Income, Service Income, etc." onChange="revAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="revAmt' + rowNo + '" name="revAmt[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			function addExpEntry() {
				rowNo += 1;
				rows += 1;
				$('#expenses').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-expAcct' + rowNo + '"><div id="control-expAcct' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span3" id="expAcct' + rowNo + '" name="expAcct[]" placeholder="e.g. Purchases, Rent, Taxes, etc."></div></div></div></td><td><div class="table-column"><div class="control" style="text-align: center"><input type="text" class="span2" id="expAmt' + rowNo + '" name="expAmt[]" placeholder="Php 0.00" ></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			
			function removeRow(row) {
				no = row.substring(6);
				console.log(no);
				$('#row' + no).remove();
				rows--;
			}
			
			function submitIt() {
				error = 0;
				empty = true;
				$('input[name="revAcct[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						error++;
						empty = true;
					} else {
						error--;
						empty = false;
					}					
				});
				
				$('input[name="revAmt[]"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						error++;
						empty = true;
					} else {
						error--;
						empty = false;
					}
				});
				
				$('input[name="total_rev"]').each(function() {
					id = $(this).attr('id');
						if ($(this).val() == '') {
						error++;
						empty = true;
					} else {
						error--;
						empty = false;
					}
				});
				
				$('input[name="total_exp"]').each(function() {
					id = $(this).attr('id');
						if ($(this).val() == '') {
						error++;
						empty = true;
					} else {
						error--;
						empty = false;
					}
				});
				
				$('input[name="net_income"]').each(function() {
					id = $(this).attr('id');
					if ($(this).val() == '') {
						error++;
						empty = true;
					} else {
						error--;
						empty = false;
					}
				});
				
				console.log("ERRORS: " + error);
				if (!empty) {
					$('#response').remove();
					$.ajax({
						type: "POST",
						url: 'saveIncomeStatement',
						data: $("#add-income-statement").serialize(),				
						success: function(data){
							//alert('Setup successful! You will now be directed to the Login Page.');
							location.replace("{url}");
						}
					});
				} else {
					$('#response').remove();
					$('#form-container').prepend('<div id="response" class="alert alert-error" style="margin: 0 auto; text-align:center; width: 280px"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="icon-thumbs-down"></i> Cannot process while there are errors. Check that all fields are not empty.</div>');
					$("html, body").animate({ scrollTop: 0 }, "slow");
				}
			}
			
			function resetIt() {
				$('#submit').attr("disabled", "disabled");
				$('#submit').removeClass("btn-primary");
				$("#submit").get(0).onclick = null;
			}
		</script>