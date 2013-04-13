<?php /*%%SmartyHeaderCode:157135152956bd4f6c3-56403837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16a3a7a926cc16081f55eb3dbf607705da8351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trans_details.tpl',
      1 => 1364792920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157135152956bd4f6c3-56403837',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5165b414cfddb',
  'variables' => 
  array (
    'name' => 0,
    'address' => 0,
    'contact' => 0,
    'date' => 0,
    'or_no' => 0,
    'details' => 0,
    'd' => 0,
    'dets_total_amt' => 0,
    'error_msg_det' => 0,
    'amt_due' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165b414cfddb')) {function content_5165b414cfddb($_smarty_tpl) {?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!-- Modal for Loading Transaction Details-->
	<div id="trans-details" class="modal hide fade in" style="margin-top: -180px; width: 520px; display: block;" aria-hidden="false">
		<div class="modal-header">
			<div id="close"><a href="#" class="close" onClick="closeIt(); return false;">&times;</a></div>
			<h3>Transaction Details</h3>
		</div>
		<div class="modal-body"  style="height: 200px; position: relative">
			<div class="input" style="margin: 0 10px">
				<div>Name: Samuel Castro</div>
				<div>Address: Naval, Biliran</div>
				<div>Contact: 9053525992</div>
				<div>Date: 2010-01-07</div>
				<div>OR No: 6273</div>
				<br>
				<div id="table-container" style="position: relative">
																	<table id="table" style="text-align: center; color: black">
							<thead>
								<th style="padding: 0 10px;">Item</th>
								<th style="width:5%">Qty</th>
								<th>Unit Price</th>
								<th style="width:25%">Amount</th>
							</thead>
							<tbody>
																	<tr>
										<td style="padding: 0 10px;">BOB-ONG-HUDAS</td>
										<td>1</td>
										<td class="amount">180.00</td>
										<td class="amount">180.00</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">OPTCL-MOUSE-ORANGE</td>
										<td>1</td>
										<td class="amount">180.00</td>
										<td class="amount">180.00</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">DISCRT-MATH-ROSEN-4th-ED</td>
										<td>1</td>
										<td class="amount">480.00</td>
										<td class="amount">480.00</td>
									</tr>
																	<tr>
										<td style="padding: 0 10px;">SUPERB-GP-318</td>
										<td>5</td>
										<td class="amount">9.00</td>
										<td class="amount">45.00</td>
									</tr>
																<tr id=total-trans-amt>
									<td></td>
									<td></td>
									<td style="font-weight: bold; text-align: right">TOTAL</td>
									<td class="amount" style="font-weight: bold">Php <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: dets_total_amt</p>
<p>Filename: cache/6e16a3a7a926cc16081f55eb3dbf607705da8351.file.trans_details.tpl.cache.php</p>
<p>Line Number: 90</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: cache/6e16a3a7a926cc16081f55eb3dbf607705da8351.file.trans_details.tpl.cache.php</p>
<p>Line Number: 90</p>

</div>0.00</td>								
								</tr>
							</tbody>
						</table>
									</div>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</div>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
									<!--<a href="skype:+639053525992?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
					<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt('Samuel Castro', 9053525992, '2010-01-07', 6273, 885); return false;">Send SMS to Confirm</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div><?php }} ?>