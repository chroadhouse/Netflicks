	//wait for html page to be fully loaded and register custom listners 
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