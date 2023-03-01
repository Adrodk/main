// ---------------------------
// Validate form
// ---------------------------

/*

When the user submits the form, we want the info from that form
(first name, last name, Twitter handle) to display in the h1.displayName element.

You will need to do the following two things:

1. Add an event listener to the form so that when the form is submitted, it calls the function named displayName().

2. Add code to the displayName() function so it does the following:

	a) Retrieve the values that the user typed into the fname, lname, and twitterHandle fields
	b) Show those values in the h1.displayName element by changing its .innerHTML property

BONUS: If either the first name, last name, or Twitter handle are blank, don't display them.
       Instead, display a suitable error message telling the user that the need to enter the missing data.

*/

// 1. ADD YOUR EVENT LISTENER HERE:


function displayName(e){
	
	e.preventDefault(); // This prevents the form from submitting
	console.log("Form Validation");

	// 2. PROVIDE CODE BELOW TO DO THE FOLLOWING:

	// Retrieve the first name:
	var firstName = document.querySelector(`input[name="firstName"]`).value

	
	// Retrieve the last name:
	var lastName = document.querySelector(`input[name="lastName"]`).value


	// Retrieve the Twitter handle:
	var twitterHandle = document.querySelector(`input[name="twitterHandle"]`).value


	// Display first name, last name, and Twitter handle in the displayName element:
	document.querySelector('h1.displayName').intterHTML = `${firstName} ${lastName} @${twitterHandle}`

	console.log{firstName, lastName, twitterHandle}
}
