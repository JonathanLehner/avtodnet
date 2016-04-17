// JavaScript Document
function submitdata() {
	var username  = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'username=' + username + '&password=' + password;
		if (username == '' || password == '') {
		alert("Please Fill All Fields");
		} 
		else {
					// AJAX code to submit form.
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					alert(html);
					}
					});
				}
		return false;
}
