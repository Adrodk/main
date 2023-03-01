<?php

// Two arrays
// a) numeric keys


$colors = ['Green', 'Red', 'Blue', 'Yellow'];
$colors[] = 'Orange';
$colors[3] = 'Purple';
unset($colors[2]);




// b) string keys


$states = [ 'FL' => 'Florida', 'GA' => 'Georgia', 'NJ' => 'New Jersey'];
?>

<h3>Colors</h3>
<?php
// Loop through both arrays (one at a time please!) and print their keys and values

foreach($colors as $numeric => $n){
    ?>
    <?= $n ?> is <?= $numeric ?> <br>
    <?php
}

?>
<h3>States</h3>
<?php

foreach($states as $n => $state){
    ?>
    <?= $n ?> is <?= $state ?> <br>
    <?php
}


?>