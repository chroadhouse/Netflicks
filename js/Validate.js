function validateSearchBar(inputTxt){
	if(inputTxt==''){
		alert("You have not entered any data in the search bar");
	}
	else {
		//alert("Button working");
		//Here the search button would be to say what's going to happen next
		window.location = "filter.php";
	}
}