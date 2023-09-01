<?php
$error = false;
$success = false;
include '../partials/_dbconnect.php';

extract($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES);

		$sql = "SELECT * from `admin` where adm_email='$email'";
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);

		if (empty(trim($email))) {
			$error = 'Please Enter Your Email';
		} elseif (!$num) {
			$error = "Email doesn't exist.";
		} elseif ($success) {
			$error = 'OTP has been sent. Please Try after sometimes.';
		} else {
			// while ($row = mysqli_fetch_assoc($result)) {

			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP(); //Send using SMTP
			$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
			$mail->SMTPAuth = true; //Enable SMTP authentication
			$mail->Username = 'mitpatel0044@gmail.com'; //SMTP username
			$mail->Password = 'xlwcdytayvjefnvx'; //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
			$mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			//Recipients
			$mail->setFrom('mitpatel0044@gmail.com', 'iWebsite');
			$mail->addAddress($email);

			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true); //Set email format to HTML
			$mail->Subject = 'Forgot Password';
			$mail->Body =
				'<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
            <div style="margin:50px auto;width:70%;padding:20px 0">
                <div style="border-bottom:1px solid #eee">
                    <a href="" style="font-size:1.4em;color: #1b00ff;text-decoration:none;font-weight:600">iWebsite</a>
                </div>
                <p style="font-size:1.1em">Hi,</p>
                <p>Thank you for choosing iWebsite. Use the following OTP to reset your forget password
                    procedures. OTP is valid for 5 minutes</p>
                <h2 style="background: #1b00ff;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">' .
				$otp = rand(111111, 999999);
			// $hash = password_hash($otp, PASSWORD_DEFAULT);
			$sql = "UPDATE `admin` SET `adm_otp`='$otp' WHERE adm_email = '$email'";
			$result = mysqli_query($conn, $sql) .
				'</h2> <p style="font-size:0.9em;">Regards,<br />iWebsite</p>
                <hr style="border:none;border-top:1px solid #eee" />
                <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                    <p>iWebsite Solutions</p>
                    <p>Mumbai, Maharashtra</p>
                    <p>India</p>
                </div>
            </div>
        </div>';
			$mail->send();
			$success = true;
			$success = 'OTP has been sent to your email';
			header('location: otp-verification.php?mail='.$email.'');
		}
	}
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assests/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assests/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assests/vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />
	<style>
		.error {
			color: red;
		}

		.digit-group input {
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			/* font-size: 24px; */
			font-weight: 800;
			color: black;
			margin: 0 2px;
			border-radius: 18px;
			border: 3px solid #1b00ff;
		}

		.prompt {
			margin-bottom: 20px;
			/* font-size: 20px; */
			color: white;
		}
	</style>
</head>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a>
					<img src="../assests/vendors/images/deskapp-logo.svg" alt="" />
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="../assests/vendors/images/forgot-password.png" alt="" />
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Forgot Password</h2>
						</div>
						<?php
						if ($success) {
							echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Successful!  </strong> ' .
								$success .
								'
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>';
						}
						if ($error) {
							echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Error!  </strong>' .
								$error .
								'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>';
						}
						?>
						<h6 class="text-center mb-20">Enter your email address to send the OTP</h6>
						<form action="" method="POST" id="Form">
							<div id="Email">
								<div class="input-group custom mb-20">
									<input type="text" class="form-control form-control-lg" placeholder="Email" name="email" />
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<label id="email-error" class="error" for="email"></label>
								<div class="row mt-2">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary">Send</button>
										<a type="button" href="../main/index.php" class="btn btn-secondary">Cancel</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<script src="../assests/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script>
		$(function() {
			$("#Form").validate({
				rules: {
					email: {
						required: true,
						email: true,
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		});
	</script>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>