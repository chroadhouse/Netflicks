//This function takes input and runs a presence check on the search bar 
function validateSearchBar(inputTxt){
	if(inputTxt==''){
		alert("You have not entered any data in the search bar");
	}
	else {
		document.getElementById('searchBarForm').submit();
	}
}

//Validates the filter 
function validateFilterSearch(){
	//Create flag for the genre 
	let checkBoxCheck = false;
	//Create variables for the genre checkboxes 
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
	
	//Add these variables to an array 
	var checkboxArray = [actionCB, adventureCB, crimeCB, mysteryCB, thrillerCB, romanceCB, fantasyCB, 
	dramaCB, animationsCB, familyCB, comedyCB, horrorCB, historyCB, warCB, scienceFictionCB,
	foreignCB, musicCB, westernCB, documentryCB, tvMovieCB];
	let i;
	//Runs for loop and one of the boxes is true then the flag is set to true 
	for(i=0; i<checkboxArray.length; i++){
		if(checkboxArray[i] == true){
			console.log(i);
			checkBoxCheck = true;
		}
	}

	//Flag for presence check 
	let presence = false;
	let year = document.getElementById('Year').value;
	let budgetLowerBound = document.getElementById('Budget1').value;
	let budgetUpperBound = document.getElementById('Budget2').value;
	let revenueLowerBound = document.getElementById('Revenue1').value;
	let revenueUpperBound = document.getElementById('Revenue2').value;
	let director = document.getElementById('Director').value;
	let actor = document.getElementById('Actor').value;
	//If one of the variables fails the flag is set to true 
	if(year=='' && budgetUpperBound =='' && budgetLowerBound=='' && revenueLowerBound =='' && revenueUpperBound=='' && director=='' && actor==''){
		presence = true; // There is nothing 
	}
	//Checks what values the flags hold 
	if(presence == true){
		if(checkBoxCheck == false){
			alert('You have not entered any data'); // No data in the filter 
		}
		else{
			//Check box data without the any other day
			document.getElementById('filterModal').style.display='none';
			document.getElementById('modal-content').submit();
		}

	}else{
		//Flags for year, budget and revenue 
		let validYear = true;
		let validBudget = true;
		let validRevenue = true;
		//Check for year 
		if(year!==''){
			let tempYear = parseInt(year);
			if(tempYear!==tempYear){ // Checks to see if it is NaN
				alert('You have not entered a number'); //Lets the user know they have not entered the right data 
				validYear = false;
			}
			else{
				if(tempYear < 1900 || tempYear > 2020 ){ //Checks range 
					alert("Year is out of range");
					validYear = false;
				}
			}
		}


		if(budgetLowerBound!=='' && budgetUpperBound!==''){ //presence check for both input boxes for budget 
			let tempLowerBoundBudget = parseInt(budgetLowerBound);
			let tempUpperBoundBudget = parseInt(budgetUpperBound);

			if(tempUpperBoundBudget !== tempUpperBoundBudget || tempLowerBoundBudget !== tempLowerBoundBudget){
				alert("The data in budget is not a valid number"); // Checks to see if number 
				validBudget = false;
			}else{
				if(tempLowerBoundBudget <0 || tempUpperBoundBudget > 1000000000){
					alert("The numbers you have entered for the budget are out of bounds"); // Checks the bounds of the number 
					validBudget = false;
				}
			}
		}else if(budgetLowerBound!=='' && budgetUpperBound=='' || budgetLowerBound=='' && budgetUpperBound!==''){
			alert("You have left one of the boxes empty"); //Makes sure both boxes are full or empty 
			validBudget = false;
		}


		if(revenueLowerBound!=='' && revenueUpperBound!==''){ // Presence check for revenue 
			//Parses the data from string to int 
			let tempLowerBoundRevenue = parseInt(revenueLowerBound);
			let tempUpperBoundRevenue = parseInt(revenueUpperBound);

			if(tempUpperBoundRevenue !== tempUpperBoundRevenue || tempLowerBoundRevenue !== tempLowerBoundRevenue){
				alert("The data in Revenue is not a valid number"); // Checks if number 
				validRevenue = false;
			}else{
				if(tempLowerBoundRevenue <=0 || tempUpperBoundRevenue >= 1000000000){
					alert("The numbers you have entered for the Revenue are out of bounds"); // Checks bounds of number 
					validRevenue = false;
				}
			}
		}else if(revenueLowerBound!=='' && revenueUpperBound=='' || revenueLowerBound=='' && revenueUpperBound!==''){
			alert("You have left one of the boxes empty"); // Makes sure both boxes have data in them or are empty 
			validRevenue = false;
		}
 
		if(validRevenue == true && validBudget ==true && validYear==true){ // Finally checks the flags for these 
			document.getElementById('filterModal').style.display='none';
			document.getElementById('modal-content').submit(); // Before submitting the filter 
		}	}

}