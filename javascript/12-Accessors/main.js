// ---------------------------
// Accessor Methods
// ---------------------------
// These methods are all about letting you know whats in your array.
var characters = ['Fry', 'Leela', 'Amy', 'Bender', 'Professor', 'Zapp', 'Zoidberg', 'Kif'];

////////////////////////////////////////////////////////
// 1. Where is Bender in the array?
// Display in the console what index he can be found at:
// "Bender is at position [n]"
// (Hint: don't do the calculation yourself; have Javascript do it for you!)


////////////////////////////////////////////////////////
// 2. Determine whether Bender is in the array.
// Display in the console a message that tells whether Bender is (or isn't!) in the array:
// "Bender is in the array" or "Bender is NOT in the array"


////////////////////////////////////////////////////////
// 3. Where is Scruffy in the array?
// Display in the console what index he can be found at:
// "Scruffy is at position [n]"


////////////////////////////////////////////////////////
// 4. Determine whether Scruffy is in the array.
// Display in the console a message that tells whether Scruffy is (or isn't!) in the array.
// "Scruffy is in the array" or "Scruffy is NOT in the array"

console.log("Bender is at position "  + characters.indexOf('Bender'))


if(characters.indexOf('Bender') == -1){
    console.log('Bender is NOT in the array');
}else{
    console.log('Bender IS in the array');
}

console.log("Scruffy is found at position " + characters.indexOf('Scruffy'))

if(characters.indexOf('Scruffy') == -1){
    console.log('Scruffy is NOT in the array');
}else{
    console.log('Scruffy IS in the array');
}
