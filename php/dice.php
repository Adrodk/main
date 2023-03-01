<?php
function roll_dice(){
    return rand(1, 6);
}




$total = 0;
for($i = 1;$i<=10;$i++){
    $current_roll = roll_dice();
    $total += $current_roll;
    echo "$i: rolled $current_roll <br>";
}

echo "total: $total";


?>