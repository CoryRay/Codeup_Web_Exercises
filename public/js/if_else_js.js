// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
	var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
	var color = colors[Math.floor(Math.random()*colors.length)];

	var favorite = 'blue'; // todo, change this to your favorite color from the list

// todo: Create a block of if/else statements to check for every color except indigo and violet.

	if (color == 'blue') {
		console.log('Blue is the color of a blue ball');
	} else if (color == 'red') {
		console.log('Red is the color of red food coloring');
	} else if (color == 'orange') {
		console.log('Orange is the color of a monkey');
	} else if (color == 'yellow') {
		console.log('Yellow is the color of a light ray with a wavelength of 600nm.');
	} else if (color == 'green') {
		console.log('Green is the color of a flamingo after eating green shrimp.');
	} else {
		console.log('I do not know anything by that color.');
	}
// todo: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// todo: Have a final else that will catch indigo and violet.
// todo: In the else, log: I do not know anything by that color.

// todo: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.	

color == ('blue') ? console.log("Blue is my favorite color") : console.log("This is not my favorite color.");