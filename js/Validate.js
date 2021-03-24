function validateSearchBar(inputTxt){
	if(inputTxt==''){
		alert("You have not entered any data in the search bar");
	}
	else {
		document.getElementById('searchBarForm').submit();
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
	
	
	var checkboxArray = [actionCB, adventureCB, crimeCB, mysteryCB, thrillerCB, romanceCB, fantasyCB, 
	dramaCB, animationsCB, familyCB, comedyCB, horrorCB, historyCB, warCB, scienceFictionCB,
	foreignCB, musicCB, westernCB, documentryCB, tvMovieCB];
	let i;
	
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
	//console.log(presence);
	//console.log(checkBoxCheck);
	
	if(year=='' && budgetUpperBound =='' && budgetLowerBound=='' && revenueLowerBound =='' && revenueUpperBound=='' && director=='' && actor==''){
		presence = true; // There is nothing 
	}

	if(presence == true){
		if(checkBoxCheck == false){
			alert('You have not entered any data');
		}
		else{
			//Check box data without the any other day
			document.getElementById('filterModal').style.display='none';
			document.getElementById('modal-content').submit();
		}

	}else{
		let validYear = true;
		let validBudget = true;
		let validRevenue = true;
		
		if(year!==''){
			let tempYear = parseInt(year);
			
			 
			console.log("temp year is "+tempYear);
			
			
			if(tempYear!==tempYear){ // Checks to see if it is NaN
				alert('You have not entered a number');
				validYear = false;
			}
			else{
				if(tempYear < 1900 || tempYear > 2020 ){
					alert("Year is out of range");
					validYear = false;
				}
			}
		}


		if(budgetLowerBound!=='' && budgetUpperBound!==''){
			let tempLowerBoundBudget = parseInt(budgetLowerBound);
			let tempUpperBoundBudget = parseInt(budgetUpperBound);

			if(tempUpperBoundBudget !== tempUpperBoundBudget || tempLowerBoundBudget !== tempLowerBoundBudget){
				alert("The data in budget is not a valid number");
				validBudget = false;
			}else{
				if(tempLowerBoundBudget <0 || tempUpperBoundBudget > 1000000000){
					alert("The numbers you have entered for the budget are out of bounds");
					validBudget = false;
				}
			}
		}else if(budgetLowerBound!=='' && budgetUpperBound=='' || budgetLowerBound=='' && budgetUpperBound!==''){
			alert("You have left one of the boxes empty");
			validBudget = false;
		}


		if(revenueLowerBound!=='' && revenueUpperBound!==''){
			let tempLowerBoundRevenue = parseInt(revenueLowerBound);
			let tempUpperBoundRevenue = parseInt(revenueUpperBound);

			if(tempUpperBoundRevenue !== tempUpperBoundRevenue || tempLowerBoundRevenue !== tempLowerBoundRevenue){
				alert("The data in Revenue is not a valid number");
				validRevenue = false;
			}else{
				if(tempLowerBoundRevenue <=0 || tempUpperBoundRevenue >= 1000000000){
					alert("The numbers you have entered for the Revenue are out of bounds");
					validRevenue = false;
				}
			}
		}else if(revenueLowerBound!=='' && revenueUpperBound=='' || revenueLowerBound=='' && revenueUpperBound!==''){
			alert("You have left one of the boxes empty");
			validRevenue = false;
		}

		if(validRevenue == true && validBudget ==true && validYear==true){
			document.getElementById('filterModal').style.display='none';
			document.getElementById('modal-content').submit();
		}	}

}