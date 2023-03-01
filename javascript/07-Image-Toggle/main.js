// ---------------------------
// Display Images
// ---------------------------
// Display the corresponding image when the button is clicked



// Cache each button, attach event listener to trigger imgToggle

// Do the same thing below for the other buttons:

// ADD YOUR CODE HERE!


// var fry = document.querySelector('.fry');
// fry.addEventListener('click', imgToggle)

// var leela = document.querySelector('.leela');
// leela.addEventListener('click', imgToggle)

// var bender = document.querySelector('.bender');
// bender.addEventListener('click', imgToggle)

// var professor = document.querySelector('.professor');
// professor.addEventListener('click', imgToggle)

// var amy = document.querySelector('.amy');
// amy.addEventListener('click', imgToggle)

// var zapp = document.querySelector('.zapp');
// zapp.addEventListener('click', imgToggle)

// var zoidberg = document.querySelector('.zoidberg');
// zoidberg.addEventListener('click', imgToggle)

// var mom = document.querySelector('.mom');
// mom.addEventListener('click', imgToggle)


function imgToggle(e) {
	var pic = document.getElementById( this.className );

	// check to see if the element has a class of 'isHidden'
	if (pic.classList.contains('isHidden')) {
		// remove it
		pic.classList.remove('isHidden');
	} else {
		pic.classList.add('isHidden');
		// add it
	}
	console.log(btn)
}
var btn = document.querySelector(['.fry', '.leela', '.bender', '.professor', '.amy', '.zapp', '.zoidberg', '.mom'])
btn.addEventListener('click', imgToggle)
for(var i = 0; i < btn.length; i++){
	console.log(i, btn[i])
}











//////////////////////////////////////////////////////////////////////////////////////////
// [ Bonus ]
// Instead of creating a variable for each item on the screen, select them all at once and add an event listener to each one in a loop.
//////////////////////////////////////////////////////////////////////////////////////////


// function addingImages() {
    // for (var i = 1; i <= 8; i++) {
        // var image = document.createElement("img");
        // image.setAttribute("url", "images/" + i + ".jpg");
        // document.querySelector(".image").appendChild(image);
//    }
// }

// var characters = new Array();
// characters[0] = '<span id="fry" class="image isHidden" style="background-image: url('images/fry.jpg');">Fry</span>';
// characters[1] = '<span id="leela" class="image isHidden" style="background-image: url('images/leela.jpg');">Leela</span>';
// characters[2] = '<span id="bender" class="image isHidden" style="background-image: url('images/bender.jpg');">Bender</span>';
// characters[3] = '<span id="professor" class="image isHidden" style="background-image: url('images/professor.jpg');">Professor</span>';
// characters[4] = '<span id="amy" class="image isHidden" style="background-image: url('images/amy.jpg');">Amy</span>';
// characters[5] = '<span id="zapp" class="image isHidden" style="background-image: url('images/zapp.jpg');">Zapp</span>';
// characters[6] = '<span id="zoidberg" class="image isHidden" style="background-image: url('images/zoidburg.jpg');">Zoidberg</span>';
// characters[7] = '<span id="mom" class="image isHidden" style="background-image: url('images/mom.jpg');">Mom</span>';


//  ['images/fry.jpg','images/leela.jpg','images/bender.jpg','images/professor.jpg','images/amy.jpg','images/zapp.jpg','images/zoidberg.jpg','images/mom.jpg'];
















