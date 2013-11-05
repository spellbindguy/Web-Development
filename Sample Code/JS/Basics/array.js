var votes = new Array( 1, 3, 2, 4, 5, 5, 3, 2, 1 );

var sum = 0;
for( var i = 0; i < votes.length; i++ )
{
	sum += votes[i];
}

var average = sum / votes.length;

alert( "Average rating: " + average );
