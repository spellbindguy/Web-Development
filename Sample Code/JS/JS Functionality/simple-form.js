window.onload = function() {

	var inputBox = document.getElementById( "username" );
	
	// Add error checking when the box is changed
	inputBox.onchange = function() {
		if ( inputBox.value == "" ) {
			inputBox.style.background = "#FFAAAA";
		}
	};

};


