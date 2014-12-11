    var posts =
    [
        {
        // 'date': moment().startOf('day').fromNow(),
        'date': '1992-11-18',
        'title': 'The Contest',
        'content': "George: You're sleeping with the maid? Jerry: Yes. George: I've done that. Did you ever eat an ostrich burger. George: What's so great about a mom and pop store? Let me tell you something, if my mom and pop ran a store I wouldn't shop there? Kramer: It's the timeless art of seduction. Elaine: Snapple? Babu's Brother: No, too fruity. Jerry: We’re pathetic, you know that? George: Yeah, like I don’t know that I’m pathetic. George: Why do they make the condom packets so hard to open? Jerry: Probably to give the woman a chance to change her mind. George: Bald men with no jobs and no money who live with their parents don't approach strange women. George [trying to be cool]: I am down. I am totally down. Mark me down. Man on beach: Is anyone here a marine biologist. Jerry: Do the people that work in those little shops at the airport have any idea what the prices are, everywhere else in the world. Puddy: I painted my face. Elaine: You painted your face? Puddy: Yeah. Elaine: Why? Puddy: Well, you know, support the team.",
        'image': 'img/seinfeld1.jpg'
        },
        {
        'date': '1997-17-22',
        'title': 'The Pez Dispenser',
        'content': "Elaine: Have you ever been to the ballet? Jerry: No, but I've seen people on tiptoes. Estelle Costanza (chastising her son for treating his body like an amusement park): Too bad you couldn't do *that* for a living. Susan: It's not a name, it's a number! George: She wants me to dress smart-casual. What is that? Jerry: I don't know, but you don't have it. The Bubble Boy [to Susan]: How 'bout taking your top off. George: I can't carry a pen. I'm afraid I'll puncture my scrotum. George: Back it up, back it up. Beep, beep, beep. Tractor story? Jerry: ’Beep, beep, beep’? What are you doing. George: Oh, it's got cachet, baby! It's got cachet up the yin-yang! Elaine: I was looking at my chart and it said that I was difficult. Why would they write that? Jerry: They've gotten to know you.",
        'image': 'img/banner1.jpg'
        },
        {
        'date': '1992-03-18',
        'title': 'The Junior Mint',
        'content': "Mickey: It’s 100% cotton, and some wool. Newman: Too many people got their mail. Close to 80%. Nobody’s ever cracked the 50% barrier! Jerry: I do not like the bank. I've heard the expression 'Laughing all the way to the bank'. I have never seen anyone actually doing it.",
        'image': 'img/tree.jpg'
        }
    ];


// var  = document.getElementById('posts').innerHTML = html;
var title = document.getElementById('title');
var date = document.getElementById('date');
var content = document.getElementById('content');
var image = document.getElementById('image');


posts.forEach(function(element, index, array) {
    title.innerHTML+= '<h3>' + element.title + '</h3>';
    date.innerHTML+= '<p>' + element.date + '</p>';
    image.innerHTML+= '<img src="' + element.image + '"></>';
    content.innerHTML+= '<p>' + element.content + '</p>';

});


// for (blogPost in posts) {

// }