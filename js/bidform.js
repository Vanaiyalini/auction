
function checkPassword()
{

	if(document.getElementById("pwd").value!=document.getElementById("confirmpwd").value)
	{
		
		alert("Password Mismatched!");
		
	}

	else{
		alert("Success!");
	}

}	

// Get references to the checkbox and submit button
var checkBox = document.getElementById("checkBox");
var submitBtn = document.getElementById("submitBtn");

// Function to enable/disable the submit button based on checkbox state
function enableButton() {
    if (checkBox.checked) {
        submitBtn.disabled = false; // Enable the button if checkbox is checked
    } else {
        submitBtn.disabled = true; // Disable the button if checkbox is unchecked
    }
}
