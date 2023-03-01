// ---------------------------
// Validate form
// ---------------------------
// How much would it cost for your name to be converted to a sign
// Each letter and special characters cost 5 dollars, you should be
// taxed on the product and not shipping, shipping comes in 3 flavors,
// and you get a small choice of different fonts ( no extra charge ).
//
// Take everything you have learned form the past examples to execute the app.


// Cache all DOM Input elements
var nameInput = document.querySelector('[name="name"]');
var fontInput = document.querySelector('[name="font-select"]');
var specialCharsInput = document.querySelector('[name="specialChars"]');
var shippingInput = document.querySelector('[name="shipping"]');
var calculateCostsButton = document.querySelector('button#calculate');


// Cache all DOM Display Elements
var nameDisplay = document.querySelector('#name');

// Add the 6 other Display elements here.***


nameInput.addEventListener('input', function(e) {
  // if the user has entered a value in the nameInput, then display it
  // if not, then display 'Your Name Here'
  if (nameInput.value != '') {
    nameDisplay.innerHTML = nameInput.value;
  } else {
    nameDisplay.innerHTML = 'Your Name Here';
  }
});


// Listening to the fontInput drop down for a change.
// when it changes, change the font family style of the name display
fontInput.addEventListener('change', function(e) {
  nameDisplay.style.fontFamily = fontInput.value;
});


// Business logic constants
var costPerLetter = 5;
var taxRate = .06;
var specialCharacterCost = 5;
var shippingCostPercentage = 0.4;



function calculateCosts(e) {

  var lettersCost = costPerLetter * nameInput.value.length
  document.querySelector('span#lettersCostDisplay').innerText = lettersCost

  var specialCharCost = specialCharacterCost * specialCharsInput.value
  document.querySelector('span#specialCharsCostDisplay').innerText = specialCharCost

  var subtotalCost = specialCharCost + lettersCost
  document.querySelector('span#subTotalDisplay').innerText = subtotalCost

  var taxCost = subtotalCost * taxRate
  document.querySelector('span#taxCostDisplay').innerText = taxCost

  var shippingCost = shipVal + subtotalCost
  document.querySelector('span#shippingCostDisplay').innerText = shippingCost

  var grandTotalCost = subtotalCost + taxCost + shippingCost
  document.querySelector('span#grandTotalDisplay').innerText = grandTotalCost

  console.log('First sale ' + grandTotalCost);

  
//   if(subtotalCost >= 25){
//     document.querySelector('#shippingCostDisplay').innerText = 'FREE' + '!'
//   }else{
//     document.querySelector('#shippingCostDisplay').innerText = subtotalCost * shippingCostPercentage
//   }
// }


var select = document.getElementById('selector');
var shipVal = parseInt(select.options[select.selectedIndex].value);

     if(subtotalCost >= 150){
      document.querySelector('#shippingCostDisplay').innerText = 'Free' + '!'
     }else{
      document.querySelector('#shippingCostDisplay').innerText = shipVal;
     }
    }
     
calculateCostsButton.addEventListener('click', calculateCosts)