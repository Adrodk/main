// ---------------------------
// Simple calculator
// ---------------------------
// Create variables and functions necessary to add, subtract, multiply, and divide two numbers together.
// You are going to need to select the DOM elements, listen for events, and run some code based on that event being triggered.

////////////////////////////////////////////////////////////////////////////////
// 1. Add the two numbers from input fields "add-one" and "add-two":
function add() {
    var one = Number( document.querySelector(".add-one").value );
    var two = Number( document.querySelector(".add-two").value );

    // ADD YOUR CODE HERE to display the result in the sum DOM element by changing its .innerText or .innerHTML property:
    var sum = one + two;
    document.querySelector(".add-result").innerText = sum;
}

// This sets up an event handler to invoke the add() function when the user types in the add-one field:
document.querySelector(".add-one").addEventListener("input", add);
// Question: should you add another listener for add-two? Why, or why not?
document.querySelector('.add-two').addEventListener("input", add);

////////////////////////////////////////////////////////////////////////////////
// 2. Subtract the two numbers from input fields "sub-one" and "sub-two"
// Create subtract() function here:

function substract(){
    var sub1 = Number( document.querySelector('.sub-one').value );
    var sub2 = Number( document.querySelector('.sub-two').value );
    var sub = sub1 - sub2;
    document.querySelector('.sub-result').innerText = sub;
}

// Remember to set up event listeners that listen for the input change,
// and invoke the subtract() function when triggered
document.querySelector(".sub-one").addEventListener("input", substract);
document.querySelector(".sub-two").addEventListener("input", substract);

////////////////////////////////////////////////////////////////////////////////
// 3. Multiply the two numbers from input fields "mult-one" and "mult-two"
// Create multiply() function here

function multiply(){
    var mul1 = Number( document.querySelector('.mult-one').value);
    var mul2 = Number( document.querySelector('.mult-two').value);
    var mul = mul1 * mul2;
    document.querySelector('.mult-result').innerText = mul;

}

// Remember to set up event listeners that listen for the input change,
// and invoke the multiply() function when triggered
document.querySelector(".mult-one").addEventListener("input", multiply);
document.querySelector(".mult-two").addEventListener("input", multiply);


////////////////////////////////////////////////////////////////////////////////
// 4. Divide the two numbers from input fields "div-one" and "div-two"
// Create divide() Function here
function divide(){
    var div1 = Number( document.querySelector('.div-one').value);
    var div2 = Number( document.querySelector('.div-two').value);
    var div3 = div1 / div2;
    document.querySelector('.div-result').innerText = div3;

}

// Remember to set up event listeners that listen for the input change,
// and invoke the divide() function when triggered
document.querySelector(".div-one").addEventListener("input", divide);
document.querySelector(".div-two").addEventListener("input", divide);



function operator(){

    
    var op1 = Number( document.querySelector('.custom-one').value);
    var operation = document.querySelector('.operation').value;
    var op2 = Number( document.querySelector('.custom-two').value);
    // var op3 = op1, oper2, op2;
    // var oper2 = ["+", "-", "*", "/"];
    if(operation == '+'){
        var result = op1 + op2
    }
    if(operation == '-'){
        var result = op1 - op2
    }
    if(operation == '*'){
        var result = op1 * op2
    }
    if(operation == '/'){
        var result = op1 / op2
    }
    
    
    document.querySelector('.custom-result').innerText = result;
    
    console.log('operation');
    
    


}

        

    





document.querySelector(".custom-one").addEventListener("input", operator);
document.querySelector(".operation").addEventListener("input", operator);
document.querySelector(".custom-two").addEventListener("input", operator);