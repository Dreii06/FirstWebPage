function validateForm() {
	var name = document.forms["feedbackForm"]["uname"].value;
	var email = document.forms["feedbackForm"]["uemail"].value;
	var mess = document.forms["feedbackForm"]["umess"].value;
	if (name == "" && email == "" && mess == "") {
		alert("Please enter all required information.");
		return false;
	}
	else if (name == "") {
		alert("Please enter your name.");
		return false;
	}
	else if (email == "") {
		alert("Please enter your email address.");
		return false;
	}
	else if (mess == "") {
		alert("Please enter your feedback about the website.");
		return false;
	}
	else {
		return true;
	}
}

function sendToMail() {
	
	if (validateForm()) // Calling validation function
	{
    var link = "mailto:mecm06.mm@gmail.com"
             + "?cc=" + encodeURIComponent(document.getElementsByName("uemail").value)
             + "&subject=" + encodeURIComponent("Feedback Message")
             + "&body=" + encodeURIComponent(document.getElementsByName("umess").value);
	alert("Thank you for sending us your feedback!");
    window.location.href = link;
	}
}