<?php


if( isset( $_GET['submit']) ){
    ?>
    <p>Your name is: <?= $_GET['fname'] . ' ' . $_GET['lname'] ?> </p>
    <p>Your email is: <?= $_GET['email'] ?> </p>
    <p>Your country is: <? $_GET['country'] ?> </p>



<form method = 'GET'>
    <p>Please enter first name: <input type='text' name='fname'></p>
    <p>Please enter last name: <input type='text' name='lname'></p>
    <p>Please enter email: <input type='email' name='email'></p>
    <select name='country'>
        <option value='CA'>Canada</option>
        <option value='US'>United States</option>
        <option value="Unknown" selected="selected">No country selected</option>
    </select>
<p><button name='submit'>Submit</button></p>
</form>

<?php
}
?>


    
