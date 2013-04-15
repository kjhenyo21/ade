<?php /*%%SmartyHeaderCode:254465166b8cb981281-33709611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6a3ef0e3d5e64deba122ee522cf85ff2f0cc2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\home.tpl',
      1 => 1366035673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254465166b8cb981281-33709611',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516c134d8d454',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516c134d8d454')) {function content_516c134d8d454($_smarty_tpl) {?>  <!--
 * Accounting Data Encoder (ADE) for Trailblazer Digital Transaction Audit Trail System
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created April 11, 2013
-->
	<head>
		<title>Accounting Data Encoder</title>
	</head>
	
	<body>
		<!-- Startup Modal -->
		<div id="startup-modal" class="modal hide fade" style="margin-top: -150px; margin-left: -240px; width: 450px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Tip!</h3>
			</div>
			<div id="startup-modal-body" class="modal-body">
				Good day, dear user! We suggest that you start encoding data from source documents or transaction files up to financial statements for referencing purposes.
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btm-primary" data-dismiss="modal" aria-hidden="true">OK</a>
			</div>
		</div>
		<!-- About Modal -->
		<div id="about-modal" class="modal hide fade" style="margin-top: -150px; margin-left: -240px; width: 450px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>What is ADE?</h3>
			</div>
			<div id="about-modal-body" class="modal-body">
				<p><strong><em>Accounting Data Encoder (ADE)</em></strong> is an add-on to the <strong>Trailblazer Digital Transaction Audit Trail System</strong>. It is an application that allows Trailblazer users to enter accounting data of various accounting files (financial statements, ledgers, journals, transaction files, etc.) that are necessary for the audit trail and have the application process them into becoming output files in CSV (comma-separated values) form and in formats required by Trailblazer. These files, then, become the input files of the Trailblazer Digital Transaction Audit Trail System.</p>
				<p>For more info, click the Help button. May this application be of great service to you!</p>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</a>
			</div>
		</div>
		<!-- Modal for Add Entries -->
		<div id="add-entries-modal" class="modal hide fade" style="margin-top: -100px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>File Type</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="index/determineType" id="add-entry-form" class="form-horizontal" style="margin-bottom: 0px">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								Select the type of accounting file that you are going to enter data into and the accounting period as well..
							</div>
							<br>
							<div class="field" id="file-type-field" style="text-align: left">
								<div class="control">
									<span>File Type</span>
									<select class="span3" id="add-file-type" name="add-file-type" onChange="monitor(); return false;">
										<option></option>
										<option>Income Statement</option>
										<option>General Ledger</option>
										<option>Cash Receipts Journal</option>
										<option>Cash Disbursements Journal</option>
										<option>Sales Transaction File</option>
										<option>Purchases Transaction File</option>
										<option>Expenses Transaction File</option>
									</select>
								</div>
							</div>
							<br>
							<div class="field" id="add-date-field">
								<div class="control">
									<span>Month</span>
									<span>
										<select class="span2 small" id="add_month" name="add_month" onChange="monitor(); return false;">
											<option></option>
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</span>
									<span>Year</span>
									<span><input type="text" class="span1" id="add_year" name="add_year"/></span>
								</div>
							</div>
						</div>
			</div>
			<div class="modal-footer" style="text-align: center">
				<a type="button" id="proceed" class="btn" disabled="disabled" onClick="validateAdd(); return false;">Proceed</a>
				<input class="btn span1" data-dismiss="modal" value="Cancel" />
			</div>
					</fieldset>
				</form>
		</div>

		<!-- Modal for Edit Entries -->
		<div id="edit-entries-modal" class="modal hide fade" style="margin-top: -100px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>File Type</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="index/determineEditType" id="edit-entry-form" class="form-horizontal" style="margin-bottom: 0px">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								Select the type of accounting file that you are going to edit  and the accounting period as well.
							</div>
							<br>
							<div class="field" id="file-type-field">
								<div class="control">
									<span>Type</span>
									<span>
										<select class="span3" id="edit-file-type" name="edit-file-type" onChange="monitor(); return false;">
											<option></option>
											<option>Income Statement</option>
											<option>General Ledger</option>
											<option>Cash Receipts Journal</option>
											<option>Cash Disbursements Journal</option>
											<option>Sales Transaction File</option>
											<option>Purchases Transaction File</option>
											<option>Expenses Transaction File</option>
										</select>
									</span>
								</div>
							</div>
							<br>
							<div class="field" id="edit-date-field">
								<div class="control">
									<span>Month</span>
									<span>
										<select class="span2 small" id="edit_month" name="edit_month" onChange="monitor(); return false;">
											<option></option>
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</span>
									<span>Year</span>
									<span><input type="text" class="span1" id="edit_year" name="edit_year"/></span>
								</div>
							</div>
						</div>
			</div>
			<div class="modal-footer" style="text-align: center">
				<a type="button" id="go" class="btn" disabled="disabled" onClick="validateEdit(); return false;">Go</a>
				<input class="btn span1" data-dismiss="modal" value="Cancel" />
			</div>
					</fieldset>
				</form>
		</div>
		
		<!-- Modal for Export to File -->
		<div id="export-file-modal" class="modal hide fade" style="margin-top: -180px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Export to File</h3>
			</div>
			<div class="modal-body">
				<form id="export-to-file-form" class="form-horizontal" style="margin-bottom: 0px">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								Select the type of accounting file that you are going to export and the accounting period as well.
							</div>
							<br>
							<div class="field" id="file-type-field">
								<div class="control">
									<span>File Type</span>
									<span>
										<select class="span3" id="export-file-type" name="export-file-type" onChange="monitor(); return false;">
											<option></option>
											<option>Income Statement</option>
											<option>General Ledger</option>
											<option>Cash Receipts Journal</option>
											<option>Cash Disbursements Journal</option>
											<option>Sales Transaction File</option>
											<option>Purchases Transaction File</option>
											<option>Expenses Transaction File</option>
										</select>
									</span>
								</div>
							</div>
							<br>
							<div class="field" id="export-date-field">
								<div class="control">
									<span>Month</span>
									<span>
										<select class="span2 small" id="ex_month" name="ex_month" onChange="monitor(); return false;">
											<option></option>
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										</select>
									</span>
									<span>Year</span>
									<span><input type="text" class="span1" id="ex_year" name="ex_year"/></span>
								</div>
							</div>
							<br>
							<div class="field" id="filename-field">
								<div class="control">
									<span>Filename</span>
									<span><input type="text" class="span3" id="filename" name="filename"/></span>
								</div>
							</div>
							<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 10px">
								Filename must be in the format required by Trailblazer Digital Audit Trail System. If you leave it blank, the system will do the naming for you. Please refer to the README for ADE file.
							</div>
						</div>
			</div>
			<div class="modal-footer" style="text-align: center">
				<a id="export" class="btn" onClick="validateExp(); return false;">Export</a>
				<button class="btn" data-dismiss="modal">Cancel</button>
			</div>
					</fieldset>
				</form>
		</div>
		<!-- Modal for Finished Exporting File -->
		<div id="dloadModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Download has finished!</h3>
			</div>
			<div id="dload-modal-body" class="modal-body">
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" id="locateFileButton">Yes</a>				
				<a href="http://localhost/ade/" type="button" class="btn">No</a>
				<!--<a type="button" class="btn" data-dismiss="modal" aria-hidden="true" onClick="closeDloadModal(); return false;">No</a>-->
			</div>
		</div>
		<!-- Modal for Failed Exporting File -->
		<div id="dloadFailModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Fail!</h3>
			</div>
			<div id="dload-fail-modal-body" class="modal-body">
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">OK</a>				
			</div>
		</div>
		<!-- Modal for Clearing the Archive -->
		<div id="clear-archive-modal" class="modal hide fade" style="margin-top: -100px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Clear the Archive</h3>
			</div>
			<div class="modal-body">
				Are you sure you want to clear all the data you have entered?
			</div>
			<div class="modal-footer" style="text-align: center">
				<a href="index/clearArchive" id="clear" class="btn">Yes</a>
				<a class="btn btn-primary" data-dismiss="modal">No</a>
			</div>
		</div>
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center">
			Accounting Data Encoder (ADE)
			<br>Switchboard 
		</h3>
		<div id="main-wrapper" style="width: 300px; text-align: center">
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<center>
					Good day, dear user! We suggest that you start encoding data from source documents or transaction files up to financial statements for referencing purposes.
				</center>
			</div>
			<br>
			<a href="#add-entries-modal" data-toggle="modal" class="btn btn-primary" style="margin-bottom: 10px"><i class="icon-plus"></i> Enter Accounting Data Entries</a>
			<a href="#edit-entries-modal" data-toggle="modal" class="btn" style="margin-bottom: 10px"><i class="icon-pencil"></i> Edit Accounting Data Entries</a>
			<a href="#export-file-modal" data-toggle="modal" class="btn" style="margin-bottom: 10px"><i class="icon-download"></i> Export to File</a>
			<br><a href="#clear-archive-modal" data-toggle="modal" class="btn" style="margin-bottom: 10px"><i class="icon-trash"></i> Clear Archive</a>
			<br><a href="help" class="btn" style="margin-bottom: 10px"><i class="icon-question-sign"></i> Help</a>
			<a href="#about-modal" data-toggle="modal" class="btn" style="margin-bottom: 10px"><i class="icon-info-sign"></i> About ADE</a>
		</div>
		<link href="http://localhost/ade/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/ade/assets/stylesheets/main.css" rel="stylesheet"></link>
		<script src="http://localhost/ade/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/ade/assets/scripts/bootstrap.js" type="text/javascript"></script>
		<script>
			add_file_type = $('#add-file-type').val();
			edit_file_type = $('#edit-file-type').val();
			exp_file_type = $('#export-file-type').val();
			
			function showStartupModal() {
				$('#startup-modal').modal('show');
			}
			
			function validateAdd() {
				errors = 0;
				month = $('#add_month').val();
				year = $('#add_year').val();
				if (add_file_type != 'Income Statement') {
					if (month == '' || year == '') {
						$('#notify-add').remove();
						$('#add-date-field').append('<div id="notify-add" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For non-income statement files, month and year must be specified!</div>');
						errors++;
					} else {
						$('#notify-add').remove();
						errors--;
					}
				} else {
					if (year == '') {
						$('#notify-add').remove();
						$('#add-date-field').append('<div id="notify-add" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For income statements, at least, the year must be specified!</div>');
						errors++;
					} else {
						$('#notify-add').remove();
						errors--;
					}
				}
				console.log(errors);
				if (errors <= 0) {
					$('#add-entry-form').submit();
				}
			}
			
			function validateEdit() {
				errors = 0;
				month = $('#edit_month').val();
				year = $('#edit_year').val();
				if (edit_file_type != 'Income Statement') {
					if (month == '' || year == '') {
						$('#notify-edit').remove();
						$('#edit-date-field').append('<div id="notify-edit" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For non-income statement files, month and year must be specified!</div>');
						errors++;
					} else {
						$('#notify-edit').remove();
						errors--;
					}
				} else {
					if (year == '') {
						$('#notify-edit').remove();
						$('#edit-date-field').append('<div id="notify-edit" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For income statements, at least, the year must be specified!</div>');
						errors++;
					} else {
						$('#notify-edit').remove();
						errors--;
					}
				}
				
				console.log(errors);
				if (errors <= 0) {
					$('#edit-entry-form').submit();
				}
			}

			function validateExp() {
				errors = 0;
				month = $('#ex_month').val();
				year = $('#ex_year').val();
				if (exp_file_type != 'Income Statement') {
					if (month == '' || year == '') {
						$('#notify-export').remove();
						$('#export-date-field').append('<div id="notify-export" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For non-income statement files, month and year must be specified!</div>');
						errors++;
					} else {
						$('#notify-export').remove();
						errors--;
					}
				} else {
					if (year == '') {
						$('#notify-export').remove();
						$('#export-date-field').append('<div id="notify-export" style="color: red; font-size: 9pt; font-style: italic; text-align: left">For income statements, at least, the year must be specified!</div>');
						errors++;
					} else {
						$('#notify-export').remove();
						errors--;
					}
				}
				
				console.log(errors);
				if (errors <= 0) {
					exportIt();
				}
			}
			
			if (add_file_type != '') {
				$('#proceed').removeAttr('disabled');
				$('#proceed').addClass('btn-primary');
			} else {
				$('#proceed').attr('disabled', 'disabled');
				$('#proceed').removeClass('btn-primary');
			}

			if (edit_file_type != '') {
				$('#go').removeAttr('disabled');
				$('#go').addClass('btn-primary');
			} else {
				$('#go').attr('disabled', 'disabled');
				$('#go').removeClass('btn-primary');
			}				
			
			if (exp_file_type != '') {
				$('#export').removeAttr('disabled');
				$('#export').addClass('btn-primary');
			} else {
				$('#export').attr('disabled', 'disabled');
				$('#export').removeClass('btn-primary');
			}
				
			$('#form-login input').keydown(function(e) {
				if (e.keyCode == 13) {
					$('#form-login').submit();
				}
			});
			
			$('#form-login input').keydown(function(e) {
				if (e.keyCode == 13) {
					$('#form-login').submit();
				}
			});
						
			function monitor() {
				add_file_type = $('#add-file-type').val();
				if (add_file_type != '') {
					$('#proceed').removeAttr('disabled');
					$('#proceed').addClass('btn-primary');
				} else {
					$('#proceed').attr('disabled', 'disabled');
					$('#proceed').removeClass('btn-primary');
				}
				
				edit_file_type = $('#edit-file-type').val();
				if (edit_file_type != '') {
					$('#go').removeAttr('disabled');
					$('#go').addClass('btn-primary');
				} else {
					$('#go').attr('disabled', 'disabled');
					$('#go').removeClass('btn-primary');
				}
				
				exp_file_type = $('#export-file-type').val();
				if (exp_file_type != '') {
					$('#export').removeAttr('disabled');
					$('#export').addClass('btn-primary');
				} else {
					$('#export').attr('disabled', 'disabled');
					$('#export').removeClass('btn-primary');
				}
			}
			
			function exportIt() {
				$.ajax({
					type: "POST",					
					url: 'index/export',
					data: $("#export-to-file-form").serialize(),
					dataType: 'text',
					success: function(data) {
						console.log(data);
						if (data != 'fail') {
							$('#export-file-modal').hide();
							$('#content').remove();
							$('#dload-modal-body').append('<p id="content">Your downloaded file has been saved to ' + data + '. Do you want to locate the file?</p>');
							$('#dloadModal').removeClass('hide');
							$('#dloadModal').addClass('in');
							$('#locateFileButton').attr("href", "http://localhost/ade/export/open?path=" + data);
						} else {
							$('#export-file-modal').modal('hide');
							$('#content').remove();
							$('#dload-fail-modal-body').append('<p id="content">Exporting failed. It might be that the query yields no results. Try again.</p>');
							$('#dloadFailModal').modal('show');
						}
					}
				});		
			}
			
			function closeDloadModal() {
				$('#dloadModal').addClass('hide');
				$('#dloadModal').removeClass('in');
				$('.modal-backdrop').remove();
			}
		</script><?php }} ?>