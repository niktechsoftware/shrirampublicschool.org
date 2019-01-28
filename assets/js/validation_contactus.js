function ValidateForm(){
	if (document.contact_us.select_name.value == "") {
		alert("Please Enter Name");
		document.contact_us.select_name.focus();
		return false;
	}
	if (document.contact_us.select_subject.value == "") {
		alert("Please Enter Subject");
		document.contact_us.select_subject.focus();
		return false;
	}
	var emailstr = document.getElementById("select_email").value;
	var objTxtBox = document.getElementById("select_email");
	if (emailstr == "") {
		alert("Enter an Email ID");
		objTxtBox.focus();
		objTxtBox.select();
		return false;
	}
	else 
		if (emailstr.charAt(0) == " ") {
			alert("Enter an Email ID");
			objTxtBox.focus();
			objTxtBox.select();
			return false;
		}
		else 
			if (emailstr.indexOf("@") != emailstr.lastIndexOf("@")) {
				alert("Enter a Proper Email ID");
				objTxtBox.focus();
				objTxtBox.select();
				return false;
			}
			else 
				if ((emailstr.indexOf("@") <
				1) ||
				(emailstr.indexOf(".") < 1)) {
					alert("Enter a Proper Email ID");
					objTxtBox.focus();
					objTxtBox.select();
					return false;
				}
				else 
					if (parseInt(emailstr.lastIndexOf(".")) <
					parseInt(emailstr.indexOf("@"))) {
						alert("Enter a Proper Email ID");
						objTxtBox.focus();
						objTxtBox.select();
						return false;
					}
					else 
						if (emailstr.lastIndexOf(".") == (emailstr.length - 1)) {
							alert("Enter a Proper Email ID");
							objTxtBox.focus();
							objTxtBox.select();
							return false;
						}
						else 
							if (emailstr.indexOf(".") == (emailstr.indexOf("@") - 1)) {
								alert("Enter a Proper Email ID");
								objTxtBox.focus();
								objTxtBox.select();
								return false;
							}
							else 
								if (emailstr.indexOf("@") == (emailstr.lastIndexOf(".") - 1)) {
									alert("Enter a Proper Email ID");
									objTxtBox.focus();
									objTxtBox.select();
									return false;
								}
	var chk1 = emailstr.substr(emailstr.lastIndexOf(".") + 1);
	if (chk1.length <
	2) {
		alert("Enter a Proper Email ID");
		objTxtBox.focus();
		objTxtBox.select();
		return false;
	}
	if (chk1 == "co") {
		alert("Enter a Proper Email ID");
		objTxtBox.focus();
		objTxtBox.select();
		return false;
	}
	 
	if (document.contact_us.select_comments.value == "") {
        alert("Please Enter Comments / Questions");
        document.contact_us.select_comments.focus();
        return false;
    }
	
	if (document.contact_us.recaptcha_response_field.value == "") {
        alert("Please Enter Verification Code!");
        document.contact_us.recaptcha_response_field.focus();
        return false;
    }
	
    return true;
}
//validation

function textCounter(field, countfield, maxlimit){
    if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
    // otherwise, update 'characters left' counter
    else 
        countfield.value = maxlimit - field.value.length;
}