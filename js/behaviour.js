	//wait for html page to be fully loaded and register custom listners 
	//Page will initilise for either login page to open or the sign up page to open once the user has clicked on the event to occur
	//This will call each of the function called redirecttoURL and the redirectToSignUpUrl to open the html files accordingly
	document.addEventListener("DOMContentLoaded",  initialiseWebPage);

	function initialiseWebPage() {
    	const loginPageBtn = document.getElementById("loginButton");
		const signUpPageBtn = document.getElementById("signUpButton");
		loginPageBtn.addEventListener("click", redirectToUrl);
		signUpButton.addEventListener("click", redirectToSignUpUrl);

		function redirectToUrl() {
        	location.href = "login.html";
   	 	}

		function redirectToSignUpUrl() {
			location.href = "SignUp.html";
		}
	}
