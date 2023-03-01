var $score = 0;


$("#more").on('click', button1);
$("#fewer").on('click', button2);





function button1(){
    if($score >= 90){
        $("div").css('background-color', 'green')
        $score += 10;
    }else if($score >= 40){
        $("div").css('background-color', 'yellow')
        $score += 10;
    }else{
        $score += 10;
    }
    $('span').text($score);
    console.log()
}

function button2(){
    
    if($score <= 50){
        
        $("div").css('background-color', '#ffffff')
        $score -= 10
        
    }else if($score <= 100){
        
        $("div").css('background-color', 'yellow')
        $score -= 10
        
    }else{
        $score -= 10
    }
    $('span').text($score);
    console.log()
}







