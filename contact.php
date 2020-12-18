<?php

$name = $_REQUEST['uname'];
$email = $_REQUEST['uemail'];
$mess = $_REQUEST['umess'];

if (empty($name) || empty($email) || empty($mess)) {
	echo('Please enter all required information');
}
else {
	mail("mecm06.mm@gmail.com", "Feedback Message", $mess, "From: $name <$email>");
	echo "<script type='text/javascript'>alert('Thank you for sending us your feedback!')
		window.history.go(-1);
	</script>";	
}
?>