function validateSearchBar(inputTxt){
	if(inputTxt==''){
		alert("You have not entered any data in the search bar");
	}
	else {
		document.getElementById('searchBarForm').action = 'filter.php'
	}
}


function validateFilterSearch(){
	//Get the elements for all the input
	let checkBoxCheck = false;
	let actionCB = document.getElementById('Action').checked;
	
	let adventureCB = document.getElementById('Adventure').checked;
	let crimeCB = document.getElementById('Crime').checked;
	let mysteryCB = document.getElementById('Mystery').checked;
	let thrillerCB = document.getElementById('Thriller').checked;
	let romanceCB = document.getElementById('Romance').checked;
	let fantasyCB = document.getElementById('Fantasy').checked;
	let dramaCB = document.getElementById('Drama').checked;
	let animationsCB = document.getElementById('Animations').checked;
	let familyCB = document.getElementById('Family').checked;
	let comedyCB = document.getElementById('Comedy').checked;
	let horrorCB = document.getElementById('Horror').checked;
	let historyCB = document.getElementById('History').checked;
	let warCB = document.getElementById('War').checked;
	let scienceFictionCB = document.getElementById('Science Fiction').checked;
	let foreignCB = document.getElementById('Foreign').checked;
	let musicCB = document.getElementById('Music').checked;
	let westernCB = document.getElementById('Western').checked;
	let documentryCB = document.getElementById('Documentary').checked;
	let tvMovieCB = document.getElementById('TV Movie').checked;
	
	//alert('action ticked = '+actionCB);
	
	var checkboxArray = [actionCB, adventureCB, crimeCB, mysteryCB, thrillerCB, romanceCB, fantasyCB, 
	dramaCB, animationsCB, familyCB, comedyCB, horrorCB, historyCB, warCB, scienceFictionCB,
	foreignCB, musicCB, westernCB, documentryCB, tvMovieCB];
	//alert(checkboxArray.length);
	let i;
	//alert(checkboxArray.length);
	for(i=0; i<checkboxArray.length; i++){
		if(checkboxArray[i] == true){
			console.log(i);
			checkBoxCheck = true;
		}
	}

	let presence = false;
	let year = document.getElementById('Year').value;
	let budgetLowerBound = document.getElementById('Budget1').value;
	let budgetUpperBound = document.getElementById('Budget2').value;
	let revenueLowerBound = document.getElementById('Revenue1').value;
	let revenueUpperBound = document.getElementById('Revenue2').value;
	let director = document.getElementById('Director').value;
	let actor = document.getElementById('Actor').value;
	console.log(presence);
	console.log(checkBoxCheck);
		
	if(presence == false){
		if(checkBoxCheck == false){
			alert('You have not entered any data');
		}

	}else{
		//Check the 
	}
	//if(finished==t){
	//	document.getElementById('filterModal').style.display='none';
	//}
}