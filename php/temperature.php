    <p>Enter value</p>
    <input type="text" name="inputbar">

        <select name="list">
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
        </select>
    


    <p><button type="submit" name="submit">Submit</p>




</form>

<?php
 function conversion(){
    if($list == "fahrenheit"){
       return ( $fah - 32 ) * 0.5556;
   }
    elseif ($list == "celsius"){
       return ($inputbar - 32) * (9/5));
   }
}

$list = _GET['inputbar'];
$inputbar = _GET['list'];


if ( isset($_GET['submit'])) { 
$inputbar = $_GET['inputbar'];
$list = $_GET['list'];

echo "The initial temperature was" . $inputbar . "The new temperature is" . conversion($list, $inputbar);
}
?>
