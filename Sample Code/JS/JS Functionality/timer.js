
// Ongoing Timer
setInterval( function() {
	var box = document.getElementById( "counter" );
	box.value = parseInt( box.value ) + 1;
}, 1000 );


// One-time countdown

setTimeout( function() {
	alert( "It's been two seconds!" );
}, 2000 );
