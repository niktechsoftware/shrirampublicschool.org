
<?php $this->load->view("header");?>
				
				<div class="heading">
					<h3>Contact Us</h3>
					<h2>Shri Ram Public School</h2>
				</div>
			</div><!--Header Start-->
						
				<style type="text/css">
#left_content .ddsmoothmenu-v ul li ul li a{top:0; height:30px;}
</style>
<?php $this->load->view("sidemenu");?>

<div id="middle_content_inner"><!--Middle Content Start -->		
				<div class="contents">
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/validation_contactus.js"></script>
				<style>
					.con_tab{border:1px solid #D0BCD5; width:100%;}
					.con_tab tr td{padding:5px 10px 3px 10px;}
					.con_tab tr td .red{color: red; font-size: 13px;padding-right:4px; font-weight: bold;}
					.con_tab tr td .colon {font-size: 13px; font-weight: bold; width:3px;}
					.con_tab tr td .tbox{border:1px solid #884990;}
					.con_tab tr td .tbox:hover{border: 1px solid #F68C1F;}
				</style>
				<h5 style="margin-bottom:10px;">Please Contact Us:</h5>					
						<table class="con_tab">
							<tr>
								<td width="100%" style="border-right:1px solid #D0BCD5;">									 
									<h3 style="font-size: 14px; text-align: left;padding:10px; ">Shri RamPublic School </h3>
										<p><img src="<?php echo base_url();?>assets/images/address1.jpg" style="margin-right:8px; margin-left:6px;" /><b>Address :</b> Bawara  Ghazipur - 232332</p>
										<p><img src="<?php echo base_url();?>assets/images/phone.jpg" style="margin-right:8px; margin-left:6px;" /><b>Telephone :</b> +919453484515, 9554355215</p>
										
										<p><img src="<?php echo base_url();?>assets/images/email.jpg" style="margin-right:8px; margin-left:6px;"/><b>Email Id :</b> <a href="mailto:spsicse@ymail.com">c.p.singhsrps@gmail.com</a></p>
										<p><img src="<?php echo base_url();?>assets/images/website.jpg" style="margin-right:8px; margin-left:6px;"/><b>Website :</b> <a href="index.html" target="_blank">www.shrirampublicschool.org</a></p>
                                                                                </p>
								</td>
						</tr>
					</table>
					<table class="con_tab">
						<tr>
							<td style="padding:10px;">To know more about Shri Ram Public School and for further queries, please call/e-mail us. We look forward to hearing from you.</td>										
						</tr>
						<tr>
								<td  width="100%">
																	<form name="contact_us" method="post" action="#">
								<table>
									<tr>
										<td><span class="red">*</span>Name</td>
										<td class="colon">:</td>
										<td><input type="text" class="tbox" tabindex="1" name="select_name" id="select_name"></td>										
									</tr>
									<tr>
										<td><span class="red">*</span>Subject</td>
										<td class="colon">:</td> 
										<td><input type="text" class="tbox" tabindex="2" name="select_subject" id="select_subject"></td>
									</tr>
									<tr>
										<td><span class="red">&nbsp;</span>Phone</td>
										<td class="colon">:</td> 
										<td><input type="text" class="tbox" tabindex="3" name="select_phone" id="select_phone"></td>
									</tr>
									<tr>
										<td><span class="red">*</span>E-mail</td>
										<td class="colon">:</td> 
										<td><input type="text" class="tbox" tabindex="4" name="select_email" id="select_email"></td>
									</tr>
									<tr>
										<td style="padding:40px 0 0 0;"><span class="red">*</span>Comments / Questions</span></td>
										<td class="colon" style="padding:40px 0 0 10px;">:</td> 
										<td>
											<textarea cols="25" rows="5" class="tbox" tabindex="5" name="select_comments" id="select_comments" wrap="physical" onKeyDown="textCounter(this.form.select_comments,this.form.remLen1,160);" onKeyUp="textCounter(this.form.select_comments,this.form.remLen1,160);"></textarea>
										</td>										
									</tr>
									<tr>
										<td></td>
										<td colspan="2" align="right">
											<input type="text" name="remLen1" size="1" maxlength="3" value="160" disabled="true"  style="color:#ea6515; border:0; background-color:#F9F9F9; margin-left:4px;"> Characters Remaining
										</td>									
									</tr>
									<tr>
										<td>"<span class="red">&nbsp;*</span>" Mandatory</td><td>
										<td colspan="2">
											<input class="button" type="submit" value="Submit" onclick="return ValidateForm();" name="sbmt"><input class="button" type="reset" value="Reset">
										</td>
									</tr>	
								</table>
                                 </form>
								 					
								</td>
							</tr>
						</table>								
				</div>							
			</div>





<?php $this->load->view("footer");?>