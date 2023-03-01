

function redbg(){
    document.querySelector('.box').style.backgroundColor = 'red';
}
function redb(){
    document.querySelector('.redbutton').addEventListener('click', redbg);
}






function bluebg(){
    document.querySelector('.box').style.backgroundColor = 'blue';
}
function blueb(){
    document.querySelector('.bluebutton').addEventListener('click', bluebg);
}




function clear(){
    document.querySelector('.box').style.backgroundColor = "#ffffff";
}
function clearred(){
    document.querySelector('.box').style.border = "thin dotted red";
}
function clearb(){
    document.querySelector('.clearbt').addEventListener('click', clear);
}


redb();
blueb();
clearb();
