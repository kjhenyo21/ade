<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 16:48:28
         compiled from "C:\xampp\htdocs\ade\application/views\edit\enter_trans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246051678a7a5a0025-63309860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b66a5367660e7747b1751f1e236ce35c560716' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_trans.tpl',
      1 => 1366037306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246051678a7a5a0025-63309860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51678a7a9c8c4',
  'variables' => 
  array (
    'month' => 0,
    'year' => 0,
    'entries' => 0,
    'e' => 0,
    'entries_det' => 0,
    'ed' => 0,
    'rowNo' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51678a7a9c8c4')) {function content_51678a7a9c8c4($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\ade\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Accounting Data Encoder (ADE) for Trailblazer Digital Transaction Audit Trail System
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created April 11, 2013
-->
	<head>
		<title>Transaction File</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="response" class="alert alert-success" style="margin: 0 auto; margin-bottom: 50px; text-align:center; width: 280px; display: none">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-thumbs-up"></i> Successfully saved the changes! Refresh the page to load the changes.
			</div>
			<div id="form-container">
				<form id="add-trans" class="form-horizontal">
					<center>
						<h4>Transaction File</h4>
						<em><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</em>
					</center>
					<br>
					<br>
					<?php if (($_smarty_tpl->tpl_vars['entries']->value)){?>
						<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
							<div id="tables" style="margin: 0 auto; width: 100%">
								<table id="heading" class="table table-hover">
									<thead>
										<th style="text-align: center; width: 80px">Date<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 180px">OR No<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 30px">Amount<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 250px">Name<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 200px">Address<span class="asterisk">*</span></th>
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
														<input type="text" style="width: 80px" id="date" name="date[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['date'];?>
" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['or_no'];?>
" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['amt_due'];?>
" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['address'];?>
"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['contact'];?>
"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<table id="sub-heading" class="table table-hover">
									<thead>
										<th style="text-align: center;" class="span5">Item<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 170px">Quantity<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 170px">Unit Price<span class="asterisk">*</span></th>
										<th style="text-align: center; width: 120px">Amount<span class="asterisk">*</span></th>
										<th></th>
									</thead>
									<table id="trans-details-entries" class="table table-hover">
										<tbody>
											<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable(0, null, 0);?>
											<?php if (($_smarty_tpl->tpl_vars['entries_det']->value)){?>
												<?php  $_smarty_tpl->tpl_vars['ed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries_det']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ed']->key => $_smarty_tpl->tpl_vars['ed']->value){
$_smarty_tpl->tpl_vars['ed']->_loop = true;
?>
													<?php if ((($_smarty_tpl->tpl_vars['e']->value['date']==$_smarty_tpl->tpl_vars['ed']->value['date'])&&($_smarty_tpl->tpl_vars['e']->value['or_no']==$_smarty_tpl->tpl_vars['ed']->value['or_no']))){?>
														<tr id="row<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><td><div class="table-column" id="group-item<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-item<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" class="span3" id="item<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="item[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['item'];?>
" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-qty<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" class="span2" id="qty<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="qty[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['qty'];?>
" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-uprice<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="uprice[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['uprice'];?>
" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
"><div id="control-amt<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="amt[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['amt'];?>
" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="date_det[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['date'];?>
" />
														<input type="hidden" id="or_no_det<?php echo $_smarty_tpl->tpl_vars['rowNo']->value;?>
" name="or_no_det[]" value="<?php echo $_smarty_tpl->tpl_vars['ed']->value['or_no'];?>
" /></tr>
													<?php }?>
													<?php $_smarty_tpl->tpl_vars['rowNo'] = new Smarty_variable($_smarty_tpl->tpl_vars['rowNo']->value+1, null, 0);?>
												<?php } ?>
											<?php }?>
										</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
						<?php } ?>
					<?php }?>
					<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
							<a id="submit" class="btn btn-primary" onClick="submitIt(); return false">Save</a>
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