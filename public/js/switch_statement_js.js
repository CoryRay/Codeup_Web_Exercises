// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
    case 'blue':
        console.log('Blue is the color of a blue ball');
        break;
    case 'red':
        console.log('Red is the color of red food coloring');
        break;
    case 'orange':
        console.log('Orange is the color of a monkey');
        break;
    case 'yellow':
        console.log('Yellow is the color of a light ray with a wavelength of 600nm.');
        break;
    case 'green':
        console.log('Green is the color of a flamingo after eating green shrimp.');
        break;
    default:
        console.log('I do not know anything by that color.');
        break;
}


    // todo: create a case statement that will handle every color except indigo and violet
    // todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // todo: create a default case that will catch indigo and violet
    // todo: for the default case, log: I do not know anything by that color.