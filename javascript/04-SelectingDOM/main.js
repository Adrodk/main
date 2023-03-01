// -------------------------------
// DOM doDOM DOM DoooooooM!
// -------------------------------

////////////////////////////////////////////////////////
// You are going to be selecting things.
// There are various elements in the HTML file that need to be selected.
// Select them and log them to the console.
//
// The items you need to select are as follows :
// 1. Select the div with a class of alert-danger.
// 2. Select the paragraph with a class of alert-warning
// 3. Select the span with a class of alert-success
// 4. Select the h1 with an id of userName
// 5. Select the h2 with an id of currentWeather
// 6. Select the h3 with an id of currentYear

var danger = document.querySelector('div.alert-danger');
console.log(danger);

var warning = document.querySelector('p.alert-warning');
console.log(warning);

var success = document.querySelector('span.alert-success');
console.log(success);

var userName = document.querySelector('h1#userName');
console.log(userName);

var currentWeather = document.querySelector('h2#currentWeather');
console.log(currentWeather);

var currentYear = document.querySelector('h3#currentYear');
console.log(currentYear);


console.log(`${danger} ${warning}`)