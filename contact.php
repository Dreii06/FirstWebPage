<?php

$name = $_POST['uname'];
$email = $_POST['uemail'];
$mess = $_POST['umess'];

$email_to = 'mecm06.mm@gmail.com';
$email_subj = "Feedback Message";
$email_body = "Feedback from $name.\n. Message: \n $mess."

if (empty($name) || empty($email) || empty($mess)) {
	echo('Please enter all required information!');
} else {
	mail($email_to, $email_subj, $email_body);
	echo "<script type='text/javascript'>alert('Thank you for sending us your feedback!')
		window.history.go(-1);
	</script>";
}
?>