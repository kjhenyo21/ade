<?php /*%%SmartyHeaderCode:246051678a7a5a0025-63309860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b66a5367660e7747b1751f1e236ce35c560716' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ade\\application/views\\edit\\enter_trans.tpl',
      1 => 1365837721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246051678a7a5a0025-63309860',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_516907aeb45c4',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516907aeb45c4')) {function content_516907aeb45c4($_smarty_tpl) {?>  <!--
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
														<input type="text" style="width: 80px" id="date" name="date[]" value="2010-01-02" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="6253" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="997.50" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="Mary Ann Polinars"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="Lahug, Cebu City"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="9158342099"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
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
																																																													<tr id="row0"><td><div class="table-column" id="group-item0"><div id="control-item0" class="control" style="text-align: center"><input type="text" class="span3" id="item0" name="item[]" value="DISCRT-MATH-ROSEN-4TH-ED" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty0"><div id="control-qty0" class="control" style="text-align: center"><input type="text" class="span2" id="qty0" name="qty[]" value="21" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice0"><div id="control-uprice0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice0" name="uprice[]" value="480" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt0"><div id="control-amt0" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt0" name="amt[]" value="960" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove0" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det0" name="date_det[]" value="2010-01-02" />
														<input type="hidden" id="or_no_det0" name="or_no_det[]" value="6253" /></tr>
																																																																																																																																																																																																																																																									</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
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
														<input type="text" style="width: 80px" id="date" name="date[]" value="2010-01-02" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="6254" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="36" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="Yvette Doyongang"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="Kamputhaw, Cebu City"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="9179414753"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
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
																																																																																																			<tr id="row1"><td><div class="table-column" id="group-item1"><div id="control-item1" class="control" style="text-align: center"><input type="text" class="span3" id="item1" name="item[]" value="SUPERB-GP-318" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty1"><div id="control-qty1" class="control" style="text-align: center"><input type="text" class="span2" id="qty1" name="qty[]" value="4" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice1"><div id="control-uprice1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice1" name="uprice[]" value="94" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt1"><div id="control-amt1" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt1" name="amt[]" value="36" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove1" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det1" name="date_det[]" value="2010-01-02" />
														<input type="hidden" id="or_no_det1" name="or_no_det[]" value="6254" /></tr>
																																																																																																																																																																																																																			</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
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
														<input type="text" style="width: 80px" id="date" name="date[]" value="2010-01-02" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="6255" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="314.50" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="Mae Carmel Boquia"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="Dumanjug"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="9332567821"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
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
																																																																																																																																									<tr id="row2"><td><div class="table-column" id="group-item2"><div id="control-item2" class="control" style="text-align: center"><input type="text" class="span3" id="item2" name="item[]" value="GUIDE-LEADRSHP-LEE" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty2"><div id="control-qty2" class="control" style="text-align: center"><input type="text" class="span2" id="qty2" name="qty[]" value="1" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice2"><div id="control-uprice2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice2" name="uprice[]" value="124.50" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt2"><div id="control-amt2" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt2" name="amt[]" value="124.50" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove2" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det2" name="date_det[]" value="2010-01-02" />
														<input type="hidden" id="or_no_det2" name="or_no_det[]" value="6255" /></tr>
																																																																	<tr id="row3"><td><div class="table-column" id="group-item3"><div id="control-item3" class="control" style="text-align: center"><input type="text" class="span3" id="item3" name="item[]" value="OPTCL-MOUSE-ORANGE" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty3"><div id="control-qty3" class="control" style="text-align: center"><input type="text" class="span2" id="qty3" name="qty[]" value="1" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice3"><div id="control-uprice3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice3" name="uprice[]" value="180" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt3"><div id="control-amt3" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt3" name="amt[]" value="180" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove3" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det3" name="date_det[]" value="2010-01-02" />
														<input type="hidden" id="or_no_det3" name="or_no_det[]" value="6255" /></tr>
																																																																																																																																							</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
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
														<input type="text" style="width: 80px" id="date" name="date[]" value="2010-01-04" placeholder="yyyy-mm-dd" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-or_no" class="control" style="text-align: center;">
														<input type="text"  id="or_no" name="or_no[]" style="width: 100px" value="6256" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-amt" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="amt_due" name="amt_due[]" value="210" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-name" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="name" name="name[]" value="Eriberta Canada"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-address" class="control" style="text-align: center">
														<input type="text" style="width: 180px" id="address" name="address[]" value="Carcar"  onChange="expAcctOnChange(this.id); return false;">
													</div>
												</div>
											</td>
											<td>
												<div class="table-column">
													<div id="control-contact" class="control" style="text-align: center">
														<input type="text" style="width: 80px" id="contact" name="contact[]" value="9053171598"  placeholder="9xxxxxxxxx" onChange="expAcctOnChange(this.id); return false;">
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
																																																																																																																																																																																																																					<tr id="row4"><td><div class="table-column" id="group-item4"><div id="control-item4" class="control" style="text-align: center"><input type="text" class="span3" id="item4" name="item[]" value="BOND-PAPR-METRO" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty4"><div id="control-qty4" class="control" style="text-align: center"><input type="text" class="span2" id="qty4" name="qty[]" value="1" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice4"><div id="control-uprice4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice4" name="uprice[]" value="160" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt4"><div id="control-amt4" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt4" name="amt[]" value="160" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove4" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det4" name="date_det[]" value="2010-01-04" />
														<input type="hidden" id="or_no_det4" name="or_no_det[]" value="6256" /></tr>
																																																																	<tr id="row5"><td><div class="table-column" id="group-item5"><div id="control-item5" class="control" style="text-align: center"><input type="text" class="span3" id="item5" name="item[]" value="HBW-BALLPEN" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-qty5"><div id="control-qty5" class="control" style="text-align: center"><input type="text" class="span2" id="qty5" name="qty[]" value="5" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-uprice5"><div id="control-uprice5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="uprice5" name="uprice[]" value="10" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column" id="group-amt5"><div id="control-amt5" class="control" style="text-align: center"><input type="text" style="width: 80px" id="amt5" name="amt[]" value="50" placeholder="Php 0.00" onChange="expAcctOnChange(this.id); return false;"></div></div></div></td><td><div class="table-column"><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" id="remove5" style="color: red;" onClick="removeDetRow(this.id)"></i></a></div></div></td>
														<input type="hidden" id="date_det5" name="date_det[]" value="2010-01-04" />
														<input type="hidden" id="or_no_det5" name="or_no_det[]" value="6256" /></tr>
																																																											</tbody>
									</table>
								</table>
							</div>
							<hr style="margin: 50px 0">
																<div style="font-style: italic; font-size: 8pt; color: red; margin-bottom: 20px">* - required fields</div>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<input type="hidden" id="type" name="type" value="sales" />
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