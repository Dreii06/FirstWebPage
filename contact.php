<?php

$uname = $_REQUEST['uname'];
$uemail = $_REQUEST['uemail'];
$umess = $_REQUEST['umess'];

mail("mecm06.mm@gmail.com", "Feedback Message", $umess, "From: $name <$email>");

?>