
var $score = 0;

document.querySelector('#button2').addEventListener('click', button2);
document.querySelector('#button1').addEventListener('click', button1);




function button2(){
    if($score < 0){
        $score = 0;
    }else{
        $score -= 10;
    }
    document.querySelector('span').innerText = $score
}

function button1(){
    if($score >= 100){
        $score += 50;
    }else{
        $score +=10;
    }
    document.querySelector('span').innerText = $score
}




