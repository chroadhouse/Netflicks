function validateSearchBar(inputTxt){
	if(inputTxt==''){
		alert("You have not entered any data in the search bar");
	}
	else {
		document.getElementById('searchBarForm').action = 'filter.php'

	}
}


function validateSearchBar(){
	
}