var numbers = new Array( 1, 1, 2, 3, 5, 8, 13, 21 );

var sum = 0;

// normal for loop
for ( var i = 0; i < numbers.length; i++ )
{
	sum += numbers[i];
}

alert( sum );

sum = 0;

// while loop
var counter = 0;
while ( counter < numbers.length ) 
{
	sum += numbers[ counter ];
	counter++;
}

alert( sum );

