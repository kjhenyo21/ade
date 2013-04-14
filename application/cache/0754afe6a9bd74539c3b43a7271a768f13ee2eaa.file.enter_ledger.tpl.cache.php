<?php /* Smarty version Smarty-3.1.7, created on 2013-04-14 02:32:59
         compiled from "C:\xampp\htdocs\ade\application/views\edit\enter_ledger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2390451679fb0a5e971-15450790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0754afe6a9bd74539c3b43a7271a768f13ee2eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_ledger.tpl',
      1 => 1365874331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2390451679fb0a5e971-15450790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51679fb10d388',
  'variables' => 
  array (
    'entries' => 0,
    'curr_acct' => 0,
    'e' => 0,
    'rowNo' => 0,
    'type' => 0,
    'month' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51679fb10d388')) {function content_51679fb10d388($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\ade\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
				<div id="response" class="alert alert-success" style="margin: 0 auto; margin-bottom: 50px; text-align:center; width: 280px; display: none">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<i class="icon-thumbs-up"></i> Successfully saved the changes! Refresh the page to load the changes.
				</div>
				<form id="add-ledger" class="form-horizontal">
					<center>
						<h4>General Ledger</h4>
					</center>
					<?php $_smarty_tpl->tpl_vars['curr_acct'] = new Smarty_variable('', null, 0);?>
					<?php if (($_smarty_tpl->tpl_vars['entries']->value)){?>
						<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
							<?php if (($_smarty_tpl->tpl_vars['curr_acct']->value!=$_smarty_tpl->tpl_vars['e']->value['acct_name'])){?>
								<?php $_smarty_tpl->tpl_vars['curr_acct'] = new Smarty_variable($_smarty_tpl->tpl_vars['e']->value['acct_name'], null, 0);?>
								<div style="margin-top: 60px; margin-bottom: 20px">
									<div style="margin: 10px 0">
										<span>Acct. Name</span>
										<span><input type="text" class="span2" id="acct_name" name="acct_name[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_name'];?>
"/></span>
									</div>
									<div "margin: 10px 0">
										<span>Acct. No.</span>
										<span><input type="text" class="span1" id="acct_no" name="acct_no[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_no'];?>
"/></span>
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
										<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable(0, null, 0);?>
										<?php if (($_smarty_tpl->tpl_vars['entries']->value)){?>
											<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
												<?php if ((($_smarty_tpl->tpl_vars['curr_acct']->value==$_smarty_tpl->tpl_vars['e']->value['acct_name'])&&($_smarty_tpl->tpl_vars['e']->value['ref']!='Total'))){?>
												<tr id="row<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><td><div class="table-column" id="group-date<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-date<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" style="width: 80px" id="date<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="date[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['date'];?>
" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-sdRef<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-sdRef<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" class="span2" id="sdRef<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="sdRef[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['sdRef'];?>
" placeholder="e.g. OR No, voucher no." onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-ref<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-ref<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" class="span2" id="ref<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="ref[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['ref'];?>
" placeholder="ex: CRJ-1-2010" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-debit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-debit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" style="width: 80px" id="debit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="debit[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['debit'];?>
" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-credit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-credit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" style="width: 80px" id="credit<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="credit[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['credit'];?>
" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" style="color: red;" onClick="removeRow(this.id)"></i></a></div></div></td><input type="hidden" id="perEntryAcct<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="perEntryAcct[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_name'];?>
"/><input type="hidden" id="perEntryAcctNo<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="perEntryAcctNo[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_no'];?>
"/></tr>
												<?php }?>
												<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowNo']->value+1, null, 0);?>
											<?php } ?>
										<?php }?>
										</tbody>
									</table>
									<table id="total-entries" class="table table-hover">
										<tbody>
										<?php if (($_smarty_tpl->tpl_vars['entries']->value)){?>
											<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
												<?php if ((($_smarty_tpl->tpl_vars['curr_acct']->value==$_smarty_tpl->tpl_vars['e']->value['acct_name'])&&($_smarty_tpl->tpl_vars['e']->value['ref']=='Total'))){?>
													<tr>
														<td style="width: 140px"></td>
														<td style="width: 200px"></td>
														<td style="width: 220px; text-align: right"><strong>TOTAL</strong></td>
														<td style="width: 110px; text-align: center">
															<input type="text" class="span2" id="total_debit" name="total_debit[]"  style="width: 80px" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['debit'];?>
" placeholder="Php 0.00"/>
														</td>
														<td style="width: 170px; text-align: center">
															<input type="text" class="span2" id="total_credit" name="total_credit[]"  style="width: 80px" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['credit'];?>
" placeholder="Php 0.00"/>
														</td>
														<input type="hidden" class="span2" id="total_label" name="total_label[]" value="Total"/>
														<td></td>
														<input type="hidden" name="headEntryAcct[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_name'];?>
"/>
														<input type="hidden" name="headEntryAcctNo[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['acct_no'];?>
"/>
													</tr>
												<?php }?>
											<?php } ?>
										<?php }?>
										</tbody>
									</table>
								</div>
								<hr style="margin-bottom: 5px; margin-top: 50px">
							<?php }?>
						<?php } ?>
					<?php }?>	
					
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">
						* - required fields
						<br>*Source Document Reference # refers to any identification number on the source document of the transaction (e.g. OR No. [can be a single one or a range of OR Nos], voucher no, etc). If no identification number is available, say for example, in giving salary to employees, description can be a substitute (e.g. "first half payment, second half payment, etc.)
						<br>*Reference File, in the case of Trailblazer Digital Transaction Audit Trail System, refers to the filename of the document where a ledger entry can be referenced to. For example, a ledger entry can be referenced to a journal file with filename crj-1-2010.jl. The Reference File input, therefore, is CRJ-1-2010.
					</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
							<input type="hidden" id="month" name="month" value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
" />
							<input type="hidden" id="year" name="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" />
							<a id="submit" class="btn" onClick="submitIt(); return false">Save</a>
							<button type="reset" id="reset" class="btn" onClick="resetIt();">Reset</button>
							<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
" id="reset" class="btn">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.validate.min.js" type="text/javascript"></script>
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
							//location.replace("<?php echo smarty_function_url(array(),$_smarty_tpl);?>
");
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