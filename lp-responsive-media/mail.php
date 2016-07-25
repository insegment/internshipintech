<?php

/*USER MAIL*/

$message ='
<style type="text/css">
	@media screen and (max-width: 361px){
		.column-1{
			width: 100% !important;
		}

		.column-2{
			display: none !important;
		}
		.column-2-mobile{
			display: table !important;
			width: 100% !important;
		}
	}
</style>	
<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
		<tr>
			<td style="background:#374043;padding: 40px 30px 40px 30px;">
				<a href="http://www.arbornetworks.com" target="_blank"><img img width="221" height="60" src="http://i.imgur.com/87g1I1l.png" alt="logo for arbor networks a division of netscout"></a>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td>
							<h1 style="font-size: 25px;">THANK YOU FOR YOUR INTEREST IN <span style="color:#94bb00">ARBOR NETWORKS</span></h1>
						</td>
					</tr>
					<tr>
						<td>
							<p style="margin:0;padding:0 0 15px 0;">If you are currently under attack, get immediate assistance from our mitigation experts NOW by calling <a style="color:#94bb00;text-decoration:none;" href="tel:8558982400">855-898-2400</a>.</p>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="column-1" width="50%" valign="top" style="text-align: center;">
										<p>First Name</p>									
									</td>
									<td class="column-2" width="50%" valign="top" style="text-align: center;">
										<p>' . $_POST['fname'] . '</p>
									</td>
								</tr>
								<tr>
									<td class="column-2" width="50%" valign="top" style="text-align: center;display:none;">
										<p>' . $_POST['fname'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Last Name</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['lname'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Company</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['company'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Email</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['email'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Country</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['country'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Phone Number</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['phone'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Job Title</p>									
									</td>
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['job'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr width="100%">
									<td width="50%" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">Industry</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p style="padding: 15px 0">' . $_POST['industry'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background:#374043;padding: 40px 30px 40px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr width="100%">
						<td width="50%" valign="top">
							<span style="color:#ffffff">&copy; Copyright 2016 Arbor Networks, Inc. All rights reserved.</span>									
						</td>
						<td width="50%" valign="top" align="right">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<td width="20%" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/v18sBvL.png"></a>
								</td>
								<td width="20%" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/y8UPLsa.png"></a>
								</td>
								<td width="20%" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/IT0M8kX.png"></a>
								</td>
								<td width="20%" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/aG5VvPn.png"></a>
								</td>
								<td width="20%" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/95uUqJ5.png"></a>
								</td>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
';


$to ="puscas.ovidiu93@gmail.com";
$today = date("F j, Y, g:i a");
$subiect = "Form submission from Arbor - networks visibility LP: ". $today;
$headers = "";
$headers .= "From: contact@arbornetworks.com" . "\r\n";
$headers .= "Bcc: ovidiu.puscas@intechdynamics.com" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

mail( $_POST['email'], $subiect, $message, $headers );

/*INFORMATIVE MAIL*/

$message ='
<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
		<tr>
			<td style="background:#374043;padding: 40px 30px 40px 30px;">
				<a href="http://www.arbornetworks.com" target="_blank"><img img width="221" height="60" src="http://i.imgur.com/87g1I1l.png" alt="logo for arbor networks a division of netscout"></a>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td>
							<h1 style="font-size: 25px;">New request in <span style="color:#94bb00">ARBOR NETWORKS</span></h1>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>First Name</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['fname'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Last Name</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['lname'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Company</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['company'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Email</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['email'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Country</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['country'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Phone Number</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['phone'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Job Title</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['job'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<table border="1" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td width="260px" valign="top" style="text-align: center;">
										<p>Industry</p>									
									</td>
									<td width="260px" valign="top" style="text-align: center;">
										<p>' . $_POST['industry'] . '</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background:#374043;padding: 40px 30px 40px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="260px" valign="top">
							<span style="color:#ffffff">&copy; Copyright 2016 Arbor Networks, Inc. All rights reserved.</span>									
						</td>
						<td width="260px" valign="top" align="right">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<td width="52px" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/v18sBvL.png"></a>
								</td>
								<td width="52px" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/y8UPLsa.png"></a>
								</td>
								<td width="52px" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/IT0M8kX.png"></a>
								</td>
								<td width="52px" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/aG5VvPn.png"></a>
								</td>
								<td width="52px" valign="top" style="text-align: center;">
									<a href="#"><img src="http://i.imgur.com/95uUqJ5.png"></a>
								</td>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
';

mail( $to, $subiect, $message, $headers );
header("Location: http://internship.instagingserver.com/ovidiu/lp-responsive-media/thank-you.html");
die();

?>