var pet = {
	type : "dog",
	breed : "corgi",
	name : "Freddie",
	
	DisplayInfo: function() {
		alert( this.name + " is a " + this.type );
		alert( "Its breed is " + this.breed );
	}
};

pet.DisplayInfo();

var pets = [
	{ // 0
		name : "Tesla",
		type : "Cat",
		age : 5
	},
	{ // 1
		name : "Magellan",
		type : "Cat",
		age : 5
	}
];

alert( pets[0].name );




