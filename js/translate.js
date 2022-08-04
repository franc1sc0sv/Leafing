let english = document.getElementsByClassName("translate");
let buttonChange = document.getElementById("buttonChange");

//Esto es para el index//
translate1 = ["What are these events?", "These events have the purpose of helping the environment, using Leafing users as a connective medium between the interaction of events created by yourselves where you can contribute by registering and registering for them.", "Who are we?", "Create an event", "Explore more", "Upcoming community events", "View all community events", "Information and recommendations", "Contribute to environmental care from home", "Information and recommendations on how to help the planet without leaving home", "Habits to take advantage of natural resources", "Learn more", "Did you know?"];

//Esto es para about us//
translate2 = ["ABOUT US", "Saving the environment with your help", "There is no planet B, the Earth is dying. Leafing tries to solve this problem with the help of people, encouraging and stimulating them to be part of the solution. We organize events and help people to create their own events to help the planet.", "Our Mission", "To promote and contribute to the conservation of the environment and responsible management of resources, supporting initiatives aimed at reducing the impact of pollution on the planet.", "Our vision", "To be an organization that has a great positive impact on the environment, with the help of people by empowering and developing sustainable lifestyles."];

//Esto es para el concientizate//
translate3 = ["Contribute to environmental care from home", "The environment is suffering a lot of problems nowadays, that is why in this section we invite you to become aware of what you are doing to contribute and help the environment.", "With the following measures that we designed especially for you, you will be able to contribute from your home with simple actions that we hope you enjoy and love to do.", "Tips and actions to take care of the environment from home", "Separate garbage.", "From an early age, it is good for children to learn how to separate waste so that it can be recycled. Teach them what is thrown in each bin and why it should be done this way.", "Use products that can be reused.", "There are many products that can be used several times to protect nature. For example, use cloth napkins instead of paper napkins.", "Plant trees.", "Trees produce oxygen and are essential to nature, so plant a tree in your home or in the community where you live.", "Consume organic fruits and vegetables.", "Organic products are environmentally friendly because no fertilizers or other pollutants are used in their production.", "Recycle as much as you can", "Before throwing away clothes, books or toys, think if you can give them a second chance to avoid spending and buying everything new. You will save money and protect nature.", "Bring your own bags to the supermarket.", "More and more supermarkets are selling plastic bags to avoid their use and encourage recycling. Take your own bags to the supermarket and you can use them several times.", "Learn how to start plants", "Take care of the beach with us through our events"];


buttonChange.addEventListener("click", function () {

    for (let i = 0; i < english.length; i++) {
        english[i].innerHTML = translate1[i];
    }
    for (let j = 0; j < english.length; j++) {
        english[j].innerHTML = translate2[j];
    }
    for (let k = 0; k < english.length; k++) {
        english[k].innerHTML = translate3[k];
    }
 
})


















// for (let i = 0; i < english.length; i++) {
//     console.log(english[i])
// }







// //Elementos a cambiar//
// // traducir = ["Be part of the solution.", "The environment is dying, be part of the solution by supporting and creating community events."];
// // let buttonChange = document.addEventListener("click", click);
// // //Funcion para colocar el evento al boton//
// // function click(cambio) {
// //     buttonChange = document.getElementById("buttonChange");
// //     return document.getElementsByClassName("h1", "p").outerText;
// //    console.log(traducir);
// // }
// //Creacion de la funcion donde se hace el proceso de cambio//






















/*let english = document.getElementsByClassName("translate");
xD = english[0]["outerText"];
for (let i = 0; i < english.length; i++) {
    alert(english[i]["outerText"]);
}*/