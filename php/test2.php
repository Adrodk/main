<p>
Currently it is
<?php
	$year = date( 'Y' );
    echo  $year;
?>
</p>
<p>
In 20 years it will be 

<?= 
// short echo tag 
	( $year + 20 );
?>.
</p>