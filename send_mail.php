include('ContactUs.html');
<?php
if(isset($_POST['submit'])){
	$to = "1sttushar2003@gmail.com"; // Your email address
	$name = $_POST['firstname'];
	$name = $_POST['lastname'];
	$from = $_POST['email'];
	$city = $_POST['city'];
	$message = $_POST['User_question'];
	$subject = "Contact Form Details";
	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}
?>