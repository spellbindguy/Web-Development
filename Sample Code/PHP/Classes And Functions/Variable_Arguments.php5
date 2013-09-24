<?

function AddNumbers( $numberArray )
{
	$sum = 0;
	foreach ( $numberArray as $number ) 
	{
		$sum += $number;
	}
	return $sum;
}

?>

<p>Add 3 numbers</p>

<p>3 + 5 + 7 = <?=AddNumbers( Array( 3, 5, 7 ) )?></p>

<p>Add 5 numbers</p>

<p>1 + 6 + 3 + 9 + 20 = <?=AddNumbers( Array( 1, 6, 3, 9, 20 ) )?></p>
