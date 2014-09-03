// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['mercury', 'venus', 'earth', 'mars', 'jupiter', 'saturn', 'uranus', 'neptune'];

// function for logging the planets array
function logPlanets() {
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.unshift('the sun');
logPlanets();

console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('pluto')
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.shift(0, 1);
logPlanets();

console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.pop(8, 0);
logPlanets();

console.log('Finding and logging the index of "Earth" in the planets array.');
var earthIndex = planets.indexOf('earth');
console.log('Earth Index was ' + earthIndex);
// todo: Do what the log statement above says you will do.

console.log('Using splice to remove the planet after Earth.');
// todo: Do what the log statement above says you will do.
var afterEarth = planets.splice(earthIndex + 1, 1);
logPlanets();

console.log('Using splice to add back the planet after Earth.');
// todo: Do what the log statement above says you will do.
planets.splice(earthIndex + 1, 0, afterEarth[0]);
logPlanets();

console.log('Reversing the order of the planets array.');
// todo: Do what the log statement above says you will do.
planets.reverse();
logPlanets();

console.log('Sorting the planets array.');
// todo: Do what the log statement above says you will do.
planets.sort();
logPlanets();