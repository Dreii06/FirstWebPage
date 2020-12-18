<?php

$uname = $_REQUEST['uname'];
$uemail = $_REQUEST['uemail'];
$umess = $_REQUEST['umess'];

if (empty($uname) || empty($uemail) || empty($umess)) {
	echo('Please enter all required information');
}
else {
	mail("mecm06.mm@gmail.com", "Feedback Message", $umess, "From: $name <$email>");
	echo "<script type='text/javascript'>alert('Thank you for sending us your feedback!')
		window.history.log(-1);
	</script>";
}
?>