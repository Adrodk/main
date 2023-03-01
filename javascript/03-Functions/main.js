// -------------------------------
// Fuuuuuuunctions!
// -------------------------------

/*

You are going to create several functions.
Give each function a name that makes sense according to what the function will accomplish.

For example :

// Given a room's width and length, return its area:
function area(width, length){
	return width * length;
}

Create the following functions AND invoke them:

1. A function to output your name to the console.
	Expected output in the console: your name (e.g. Jill Smith)

2. A function to greet all humans by outputting to the console: 'Greetings Human!'

3. A function to greet whatever species name is passed into the function.
	Expected output in the console is: 'Greetings [SPECIES]',
	where [SPECIES] is whatever species name was passed into the function.
	Do not include the brackets [] in the output!

4. A function which will accept a message and a species name as parameters,
   and log to the console the message as well as the species name.
	Expected output in the console is : '[GREETING], [SPECIES]!',
	where [GREETING] is the greeting that was passed to the function,
	and [SPECIES] is whatever species was passed to the function.
	Do not include the brackets [] in the output!
	You might invoke the function like this: greet_species( 'Hi there', 'Martians' )

5. A function which will accept a number as parameter, and log to the console the square of that number.
	Expected output in the console is: number * number
	For example, if you pass in the number 5, the expected output will be 25

// To declare a function:
function display_my_name() {
	console.log( 'Jill Smith' );
}

// To invoke the function:
display_my_name();

*/

// PUT YOUR CODE HERE:

function display_my_name(){
	console.log( 'Albert Rodriguez' );
}

function greet_all_humans(){
	console.log('Greetings Human!');
}



function greet_species(species){
	console.log('Greetings ' + species);
}


greet_species('giraffes')
greet_species('elephants')
greet_species('lizards')

display_my_name()
greet_all_humans()

function greet_aliens(greeting_message, species_name){
	console.log(greeting_message + ' , ' + species_name + '!');
	console.log(`${greeting_message}, ${species_name}!`);

}

greet_aliens('How ya doing', 'Martians')
greet_aliens('Wazzup', 'Venutians')
greet_aliens('Hey there', 'Earthlings')


function log_square(n){
	console.log(n * n)
	

}

log_square(5)
log_square(3)
log_square(2)