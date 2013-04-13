<!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Transaction File</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<form id="add-trans" class="form-horizontal">
					<center>
						<h4>Transaction File</h4>
					</center>
					
					{if ($entries)}
						{foreach $entries as $e}
							<div id="tables" style="margin: 0 auto; width: 100%">
								<table id="heading" class="table table-hover">
									<thead>
										<th style="text-align: center; width: 80px">Date<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 180px">OR No<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 30px">Amount<span class="asterisk">*</span></th>
										<th style="text-align: center">Name<span class="asterisk">*</span></th>
										<th style="text-align: center">Address<span class="asterisk">*</span></th>
										<th style="text-align: center">Contact<span class="asterisk">*</span></th>
										<th></th>
									</thead>
								</table>
								<table id="trans-entries" class="table table-hover">
									<tbody>
										<tr>
											<td>
												<div class="table-column">
													<div id="control-date" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="date" name="date[]" value="{$e['date']}" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="{$e['or_no']}" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="{$e['amt_due']}" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="{$e['name']}"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="{$e['address']}"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="{$e['contact']}"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<table id="sub-heading" class="table table-hover">
									<thead>
										<th style="text-align: center;" class="span5">Item<span class="asterisk">*</span></th>
										<th style="text-align: center">Quantity<span class="asterisk">*</span></th>
										<th style="text-align: center">Unit Price<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 120px">Amount<span class="asterisk">*</span></th>
										<th></th>
									</thead>
									<table id="trans-details-entries" class="table table-hover">
										<tbody>
											{$rowNo = 0}
											{if ($entries_det)}
												{foreach $entries_det as $ed}
													{if (($e['date'] == $ed['date']) && ($e['or_no'] == $ed['or_no']))}
														<tr id="row{$rowNo}"><td><div class="table-column" id="group-item{$rowNo}"><div id="control-item{$rowNo}" class="control" style="text-align: center"><input type="text" class="span3" id="item{$rowNo}" name="item[]" value="{$ed['item']}" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty{$rowNo}"><div id="control-qty{$rowNo}" class="control" style="text-align: center"><input type="text" class="span2" id="qty{$rowNo}" name="qty[]" value="{$ed['qty']}" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice{$rowNo}"><div id="control-uprice{$rowNo}" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice{$rowNo}" name="uprice[]" value="{$ed['uprice']}" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt{$rowNo}"><div id="control-amt{$rowNo}" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt{$rowNo}" name="amt[]" value="{$ed['amt']}" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove{$rowNo}" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det{$rowNo}" name="date_det[]" value="{$ed['date']}" />
														<input type="hidden" id="or_no_det{$rowNo}" name="or_no_det[]" value="{$ed['or_no']}" /></tr>
													{/if}
													{$rowNo = $rowNo + 1}
												{/foreach}
											{/if}
										</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
						{/foreach}
					{/if}
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="type" name="type" value="{$type}" />
							<a id="submit" class="btn" onClick="submitIt(); return false">Save</a>
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
				$('#trans-details-entries').append('<tr id="row' + rowNo + '"><td><div class="table-column" id="group-item' + rowNo + '"><div id="control-item' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span3" id="item' + rowNo + '" name="item[]" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty' + rowNo + '"><div id="control-qty' + rowNo + '" class="control" style="text-align: center"><input type="text" class="span2" id="qty' + rowNo + '" name="qty[]" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice' + rowNo + '"><div id="control-uprice' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice' + rowNo + '" name="uprice[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt' + rowNo + '"><div id="control-amt' + rowNo + '" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt' + rowNo + '" name="amt[]" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove' + rowNo + '" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td></tr>');
			}
			
			function removeDetRow(row) {
				no = row.substring(6);
				console.log(no);
				or_no_det = $('#or_no_det' + no).val();
				item = $('#item' + no).val();
				$('#row' + no).remove();
				rows--;
				$.ajax({
					type: "GET",
					url: 'deleteTransDetEntry?or_no=' + or_no_det + '&item=' + item,
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
						url: 'saveTrans',
						data: $("#add-trans").serialize(),				
						success: function(data){
							//alert('Setup successful! You will now be directed to the Login Page.');
							//location.replace("{url}");
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
		</script>