// ---------------------------
// Mutator Methods
// ---------------------------
// This exercise is all about altering an array.
var characters = ['Fry', 'Leela', 'Bender'];

////////////////////////////////////////////////////////
// 1. Add 'Professor' and 'Amy' to the end of the array. Log the contents of the array before and after you alter it, so you can prove it worked.
console.log(characters);
characters.push('Professor', 'Amy');
console.log(characters);

////////////////////////////////////////////////////////
// 2. Remove the last value off the end of the array. Log the contents of the array before and after you alter it, so you can prove it worked.
console.log(characters);
characters.pop();
console.log(characters);

////////////////////////////////////////////////////////
// 3. Remove 'Bender' and ' Professor' from the array. Log the contents of the array before and after you alter it, so you can prove it worked.

console.log(characters);
characters.pop();
characters.pop();
console.log(characters);

////////////////////////////////////////////////////////
// 4. Add 'Bender', 'Professor', and 'Zoidberg' into the array. Log the contents of the array before and after you alter it, so you can prove it worked.

console.log(characters);
characters.push('Bender', 'Professor', 'Zoidberg');
console.log(characters);

////////////////////////////////////////////////////////
// 5. Sort the array alphabetically by name. Log the contents of the array before and after you alter it, so you can prove it worked.

console.log(characters);
characters.sort();
console.log(characters);
