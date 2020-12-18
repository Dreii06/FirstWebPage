<?php
	if(isset($_POST['submit'])){
		$name=$_POST['uname'];
		$email=$_POST['uemail'];
		$msg=$_POST['umess'];

		$to='mecm06.mm@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Feedback Message';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<script type='text/javascript'>alert('Thank you for sending us your feedback!')
				window.history.go(-1);
			</script>";
		}
		else{
			echo "Please input all required information!";
		}
	}
?>