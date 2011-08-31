<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />	
		<title>Newsletter template</title>
		<!--general stylesheet-->
		<style type="text/css">
			p { padding: 0; margin: 0; }
			h1, h2, h3, p, li { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
			td { vertical-align:top;}
			ul, ol { margin: 0; padding: 0;}
			.title, .date {
				text-shadow: #8aa3c6 0px 1px 0px;
			}
			
			.textshadow {
				text-shadow: #ffffff 0px 1px 0px;
			}
			.trxtshadow-2 {
				text-shadow: #768296 0px -1px 0px;
			}
		</style>
	</head>
	<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0" background="" style="margin: 0px; background-color: #eee; background-image: url(''); background-repeat: repeat;" bgcolor="">
		<table cellspacing="0" border="0" cellpadding="0" width="100%" >
			<tbody>
				<tr valign="top">
					<td valign="top"><!--container-->
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="626">
							<tbody>
								<tr>
									<td valign="middle" bgcolor="#546781" height="97" background="<?=Configure::read('app.full_url_with_http');?>/img/email/default/header-bg.jpg" style="vertical-align: middle;">
										<table cellspacing="0" cellpadding="0" border="0" align="center" width="600" height="97">
											<tbody>
												<tr>
													<td valign="middle" width="36" style="vertical-align:middle; text-align: left;">
														<img  src="<?=Configure::read('app.full_url_with_http');?>/img/email/default/logo_box.png" alt="" hspace="10" vspace="10" style="margin-right:10; margin-top: 4px; display: block;"  />
													</td>
													<td valign="middle" style="vertical-align: middle; text-align: left;">
														<h1 class="title" style="margin:0; padding:0; font-size:30px; font-weight: normal; color: #192c45;">
														<span style="font-weight: bold;"><?=Configure::read('app.company.name');?></span></h1>
													
														
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td valign="top">
										<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" bgcolor="#ffffff" style="border-width: 3px; border-color: #ffffff; border-style: solid;">
											<tbody>
												<tr>
													<td width="100%" valign="top" bgcolor="#eef0f3" style="border-bottom-width: 3px; border-bottom-color: #ffffff; border-bottom-style: solid;"><!--content-->
										<!--article--><table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
															<tbody>
																<tr>
																	<td valign="top">
																		<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
																			<tbody>
																				<tr>
																					<td width="100%" valign="top" bgcolor="#edeff2" style="padding-top: 20px; padding-bottom: 15px; padding-left: 21px; padding-right: 21px; border-left-width: 1px; border-left-color: #bac2cc; border-left-style: solid; border-right-width: 1px; border-right-color: #bac2cc; border-right-style: solid; border-bottom-width: 3px; border-bottom-color: #ffffff; border-bottom-style: solid; border-top-width: 1px; border-top-color: #ffffff; border-top-style: solid;">
																						
                                                                                    
                                                                                    <?php echo $content_for_layout ?>
                                                                                    </td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																  <td valign="top"><table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
																	      <tbody>
																	        <tr>
																	          <td height="49" width="100%" valign="middle" bgcolor="#c8cfd8" background="<?=Configure::read('app.full_url_with_http');?>/img/email/default/article-title-bg.jpg" style="vertical-align:middle; border-left-width: 1px; border-left-color: #BAC2CC; border-left-style: solid; border-right-width: 1px; border-right-color: #BAC2CC; border-right-style: solid; border-bottom-width: 1px; border-bottom-color: #98a3b4; border-bottom-style: solid; border-top-width: 1px; border-top-color: #BAC2CC; border-top-style: solid;"><h3 class="textshadow" style="margin:0; margin-left: 17px; padding:0; font-size: 18px; font-weight: normal; color:#324258;">
																	            <?=Configure::read('app.company.name');?>
																	          is on Facebook</h3></td>
																            </tr>
																	        <tr>
																	          <td valign="top" bgcolor="#edeff2" style="padding-top: 20px; padding-bottom: 15px; padding-left: 21px; padding-right: 21px; border-left-width: 1px; border-left-color: #bac2cc; border-left-style: solid; border-right-width: 1px; border-right-color: #bac2cc; border-right-style: solid; border-top-width: 1px; border-top-color: #ffffff; border-top-style: solid; border-bottom-width: 3px; border-bottom-color: #ffffff; border-bottom-style: solid;"><p style="font-size: 12px; line-height: 20px; font-weight: normal; color: #56667d; margin: 0; margin-bottom: 10px;"> <span style="padding-right: 20px;"><a href="http://www.facebook.com/mihinlanka" target="_blank" title="Goto <?=Configure::read('app.company.name');?> Facebook page"><img src="<?=Configure::read('app.full_url_with_http');?>/img/email/default/mihin_on_fb.jpg" alt="<?=Configure::read('app.company.name');?> duty free shopping" border="0" align="left" style="margin-right:20px;" /></a></span>Like
<?=Configure::read('app.company.name');?> Page to be the first to receive alerts and promotions from Mihin Lanka</p></td>
																            </tr>
																        </tbody>
																      </table></td>
																</tr>
															</tbody>
										<!-- /article--></table>
													</td><!--/content-->
												</tr>
												<tr>
													<td colspan="2" valign="middle" height="50" bgcolor="#e7eaee" style="vertical-align:middle; border-width: 1px; border-style: solid; border-color: #b6bec9; text-align: center;">
														<p style="margin:0; font-size: 9px;  color: #96a2b3; font-family: verdana; line-height: 18px;">
														   
														   <?=Configure::read('app.company.name');?>
														   Logo is registered trademark of 
														   <?=Configure::read('app.company.full_name');?>
														   . <br />
														  
														   <?=Configure::read('app.company.address');?>
														 Mail generated on : <?= date('d-M-Y');?></p>
														<p style="margin:0; font-size: 10px; font-weight: bold; color: #96a2b3; font-family: Arial; line-height: 18px;">&nbsp;</p>
												  </td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table><!--/container-->
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>