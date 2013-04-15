<?php /* Smarty version Smarty-3.1.7, created on 2013-04-15 01:13:20
         compiled from "C:\xampp\htdocs\ade\application/views\help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11080516b313af05936-16179168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a81f9e5f69c32a1b8900214c60adfd643baf09e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\help.tpl',
      1 => 1365981199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11080516b313af05936-16179168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516b313b1053f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516b313b1053f')) {function content_516b313b1053f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\ade\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Help</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="navi" style="float: right; font-size: 14pt; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif">
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
"><i class="icon-home"> Back to Home</i></a>
			</div>
			<br>
			<br>
			<div id="content-container">
				<center>
					<h3>How to Use the Program</h3>
				</center>
				<div id="content" style="padding: 20px">
					<p>The application's four major functions are: (1) adding (encoding) accounting data, (2) editing accounting data that have been entered, (3) exporting accounting data into a file, and (4) clearing all the data entered, that are accessible from the application's homepage.</p>
					<br>
					<br>
					<p><strong>Adding (Encoding) Accounting Data</strong></p>
					<p>To add accounting data, the user will have to click the "Enter Accounting Data Entries" button in the Homepage. After clicking the button, a modal dialog pops up asking the user to enter the file type (e.g. Income Statement, General Ledger, Cash Receipts Journal, etc.) and the accounting period (month and year) as shown in the image in the next page. For non-income statement files, month and year must be specified while for income statement files, only the year is required to be specified as income statements can be monthly or yearly.</p>
					<p>After entering all the data required and clicking the "Proceed" button, the user is redirected to the Add Accounting Data Page, depending on the file type that the user has chosen. The images in the next pages show the Graphical User Interface (GUI) of the "add" and "edit" pages of specific accounting file types.</p>
					<p>Meanwhile, the user can add many entries as necessary by clicking the "Add Entry" link. After clicking, entry rows are being automatically added.
					</p>
					<p>The user can, on the other hand, delete a row by clicking the "x" button at the rightmost part of such row. The accounting data are, then, saved into the database when the user clicks the "Save" button.</p>
					<br>
					<br>
					<p><strong>Editing Accounting Data</strong></p>
					<p>To start editing accounting data that have been entered, the user will have to click the "Edit Accounting Data Entries" button on in the Homepage. A modal dialog pops up asking the user to enter the file type (e.g. Income Statement, General Ledger, Cash Receipts Journal, etc.) and the accounting period (month and/or year). Basically, the process is the same as that of adding accounting data except that the application does not support adding more entries on the Edit Page, itself. It only allows the user to edit what has/have been entered. The user will have to go back to the Add Page in order to add more entries to the desired accounting file.</p>
					<p>The user can remove an entry form the database by clicking the "x" button at the rightmost part of the row that contains such entry. Lastly, the changes will be saved after clicking the "Save" button.</p>
					<br>
					<br>
					<p><strong>Exporting Accounting Data Into a File</strong></p>
					<p>The "export" function of the application is responsible for processing the data entered and compile them into files that are in formats required by the Trailblazer Digital Transaction Audit Trail System. To begin exporting accounting data into a file, the user will have to click the "Export to File" button in the Homepage. Afterwards, a modal dialog pops up asking the user to enter the file type, the accounting period (month and/or year), and the filename. The filename must be in the format required by the Trailblazer Digital Transaction Audit Trail System as enumerated in the table below:</p>
					<table class="table table-bordered table-striped">
						<thead>
							<th>Document</th>
							<th>Shortname</th>
							<th>Filename Format</th>
							<th>Example</th>
						</thead>
						<tbody>
							
							<tr>
								<td>Income Statement</td>
								<td>is</td>
								<td>is-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt; or is-&lt;year&gt;.&lt;ext&gt;</td>
								<td>is-1-2010.is or is-2010.is</td>
							</tr>
							<tr>
								<td>General Ledger</td>
								<td>gl</td>
								<td>gl-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>gl-1-2010.lg</td>
							</tr>
							<tr>
								<td>Cash Receipts Journal</td>
								<td>crj</td>
								<td>crj-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>crj-3-2010.jl</td>
							</tr>
							<tr>
								<td>Cash Disbursements Journal</td>
								<td>cdj</td>
								<td>cdj-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>								
								<td>cdj-2-2012.jl</td>
							</tr>
							<tr>
								<td>Sales Transaction File</td>
								<td>st</td>
								<td>st-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>st-1-2011.tf</td>
							</tr>
							<tr>
								<td>Purchases Transaction File</td>
								<td>pt</td>
								<td>pt-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>pt-1-2011.tf</td>
							</tr>
							<tr>
								<td>Expenses Transaction File</td>
								<td>et</td>
								<td>et-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>et-1-2011.tf</td>
							</tr>
							<tr>
								<td>Sales Transaction Details File</td>
								<td>std</td>
								<td>std-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>std-1-2011.tf</td>
							</tr>
										
			
							<tr>
								<td>Purchases Transaction Details File</td>
								<td>ptd</td>
								<td>ptd-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>ptd-1-2011.tf</td>
							</tr>
							<tr>
								<td>Expense Transaction Details File</td>
								<td>etd</td>
								<td>etd-&lt;month&gt;-&lt;year&gt;.&lt;ext&gt;</td>
								<td>etd-1-2011.tf</td>
							</tr>
							
						</tbody>


					</table>
					<p>Meanwhile, the user is given an option not to enter a filename. If he/she does so, the application does the naming in accordance to the filename format required by the Trailblazer Digital Transaction Audit Trail System. The filename of the transaction details files, on the other hand, are automatically generated by the application, whether the user enters a filename for a transaction file or not.</p>
					<p>The exporting begins as the user clicks the "Export" button. When the exporting is done, a modal dialog pops up asking the user if he/she wants the application to locate the exported (downloaded) file for him/her. If the user clicks "Yes", the folder stated in the dialog is automatically opened; thereby, locating the exported (downloaded) file.</p>
					<br>
					<br>
					<p><strong>Clearing All the Data Entered</strong></p>
					<p>Clearing all the data entered means clearing the database of ADE; thus, deleting. To do this, the user will have to click the "Clear the Archive" button in the Homepage. A modal dialog, then, pops up to ask for confirmation from the user whether he/she really wants to clear all the data he/she entered or not.</p>
				</div>
			</div>
		</div>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script><?php }} ?>