function clearTheBoard(){
    console.log('We are in the clearTheBoard() function!!!')
    $('table.board td').removeClass('x o')
    playerTurn = 1
    $('#player-turn').text(playerTurn)
}
clearTheBoard();

var playerTurn = 1
// var i = 0

// var tableArray = ['#square1', '#square2', '#square3', '#square4', '#square5', '#square6', '#square7', '#square8', '#square9']
// console.log(tableArray, i++)


$('table.board td').click(function(){
    console.log('We are in the click function!')

    if($(this).hasClass('x') || $(this).hasClass('o') ){
        console.log('Not allowed')
        return 
    }    


    if(playerTurn == 1){
        $(this).addClass('x')  
        playerTurn = 2
    }else if(playerTurn == 2){
        $(this).addClass('o')
        playerTurn = 1
    }
    $('#player-turn').text(playerTurn)

    if(isBoardFull()){
        console.log('The board is full!')
        alert('The board is full! Game will restart...')
        clearTheBoard()
    }
})




$('#reset').click(clearTheBoard)

function isBoardFull(){
    // console.log($('table.board td.x').length)
    // var x = $('table.board td.x').length
    // var o = $('table.board td.o').length
         // var sum = $('table.board td.x, table.board td.o').length
    // console.log(sum)
    // if(sum == 9){
    //     return true
    // }else{
    //     return false
    // }
         // return(sum == 9)

    return($('table.board td.x, table.board td.o').length == 9)

}










