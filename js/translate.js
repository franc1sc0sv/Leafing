let english = document.getElementsByClassName("translate");
let englishHeader = document.getElementsByClassName("translate-template");
let buttonChange = document.getElementById("buttonChange");
let html = document.querySelector("html");


//Esto es para el index//
translate0 = ["Be part of the solution.", "The environment is dying, be part of the solution by supporting and creating community events.", "Events", "What are these events?", "These events have the purpose of helping the environment, using Leafing users as a connective medium between the interaction of events created by yourselves where you can contribute by registering and registering for them.", "Who are we?", "Create an event", "Explore more", "Upcoming community events",  "View all community events", "Information and recommendations", "Contribute to environmental care from home", "Information and recommendations on how to help the planet without leaving home", "Learn more", "Habits to take advantage of natural resources", "Learn more", "Did you know?"];

//Esto es para about us//
translate1 = ["ABOUT US", "Saving the environment with your help", "There is no planet B, the Earth is dying. Leafing tries to solve this problem with the help of people, encouraging and stimulating them to be part of the solution. We organize events and help people to create their own events to help the planet.", "Our Mission", "To promote and contribute to the conservation of the environment and responsible management of resources, supporting initiatives aimed at reducing the impact of pollution on the planet.", "Our vision", "To be an organization that has a great positive impact on the environment, with the help of people by empowering and developing sustainable lifestyles."];

//Esto es para el concientizate//
translate2 = ["Contribute to environmental care from home", "The environment is suffering a lot of problems nowadays, that is why in this section we invite you to become aware of what you are doing to contribute and help the environment.", "With the following measures that we designed especially for you, you will be able to contribute from your home with simple actions that we hope you enjoy and love to do.", "Tips and actions to take care of the environment from home", "Separate garbage.", "From an early age, it is good for children to learn how to separate waste so that it can be recycled. Teach them what is thrown in each bin and why it should be done this way.", "Use products that can be reused.", "There are many products that can be used several times to protect nature. For example, use cloth napkins instead of paper napkins.", "Plant trees.", "Trees produce oxygen and are essential to nature, so plant a tree in your home or in the community where you live.", "Consume organic fruits and vegetables.", "Organic products are environmentally friendly because no fertilizers or other pollutants are used in their production.", "Recycle as much as you can", "Before throwing away clothes, books or toys, think if you can give them a second chance to avoid spending and buying everything new. You will save money and protect nature.", "Bring your own bags to the supermarket.", "More and more supermarkets are selling plastic bags to avoid their use and encourage recycling. Take your own bags to the supermarket and you can use them several times.", "Learn how to start plants", "Take care of the beach with us through our events"];

//Esto es para el formulario de creacion de evento//
translate3 = ["Create your own event", "Event title", "What will take place at the event?", "Requirements to attend the event", "Place of organization", "Date", "Time", "Transportation:", "Will your event have transportation available for registrants?", "Yes", "No", "Image", "Publish"];

//Esto es para el perfil//
translate4 = ["Account", "Password", "My events", "Registered events", "Log out ", "Account settings", "Name", "Last name", "User name", "Nickname", "Email", "Telephone number", "About me", "Save", "Cancel"];

//Esto es para el inicio de sesion//
translate5 = ["Don't have an account yet?", "Register", "Log in", "Email", "Password", "Next", "Check e-mail", "To verify your email address we have sent you a confirmation code to correoejemplo@gmail.com.", "Send the code again", "Next"];

//Esto es para el registro//
translate6 = ["Already have an account?", "Log in", "Create an account ", "Email", "Password", "Next", "Check e-mail", "To verify your email address we have sent you a confirmation code to correoejemplo@gmail.com.", "Send the code again", "Next", "Complete your information", "Name", "Lat name", "User name", "Date of birth", "Genre"];


translateGeneral = [
    translate0, //0 = index
    translate1, //1 = about_us.php
    translate2, //2 = cocientizate.php
    translate3, //3 = formulario de creacion de evento//
    translate4, //4 = perfil de usuario//
    translate5, //5 = inicio de sesion//
    translate6  //6 = creacion de cuenta//
];

//Esto es para el header// //Por la gran diabla como demonios hay un background en el header en fin//
translate7 = ["Home", "We", "Help the planet", "Events", "Create your events", "Become aware", "Special adjustments",  "My profile", "Close session", "We", "Community", "Become aware", "Events", "©2022 All rights reserved"];

translateSubGeneral = [
translate7,//Header y footer

];

buttonChange.addEventListener("click", function () {

    let pathname = window.location.pathname;
    let arrayString = pathname.split("/");

    function getID(path) {
        let id;

        if (path == "index.php") {
            id = 0 ;
        } else if (path == "about_us.php") {
            id = 1;
        }
        else if (path == "concientizate.php") {
            id = 2;
        }
        else if (path == "crear_evento.php") {
            id = 3;
        }
        else if (path == "cuenta.php") {
            id = 4;
        }
        else if (path == "formulario_inicio-sesion.php") {
            id = 5;
        }
        else if (path == "formulario_registro.php") {
            id = 6;
        }

        return id;
    }


    let id = getID(arrayString[4])
    console.log(id);

    for (let i = 0; i < english.length; i++) {
        english[i].innerHTML = translateGeneral[id][i];
    }
    for (let j = 0; j < englishHeader.length; j++) {
        englishHeader[j].innerHTML = translateSubGeneral[id][j];
    }
   
   



    //Fin//
            html.setAttribute("lang", "en")
        //console.log(html.lang);
        localStorage.setItem('lang', html.lang)
        let lang = localStorage.getItem('lang')

       

    // function almacenarStorage(){

    //     html.setAttribute("lang", "en")
    //     //console.log(html.lang);
    //     localStorage.setItem('lang', html.lang)
    //     let lang = localStorage.getItem('lang')
        
    //     if (lang == "es") {
            
    //     } else if (lang == "en") {
            
    //     }
    // }


})












 //console.log("xD");
    /**
     * // 1: index.php || ""
     * // 2: about_us.php
     * // 3: cocientizate.php
     * // 4: crear_evento.php
     * // 5: cuenta.php
     * // 6: formulario_inicio-sesion.php
     * // 7: formulario_registro.php
     */
    //     let pathname = window.location.pathname;
    //     console.log(typeof (pathname))

    //     let arrayString = pathname.split("/");
    // console.log(arrayString);



    // if (searchPage == index.php) 














// for (let i = 0; i < english.length; i++) {
//         english[i].innerHTML = translateGeneral[id][i];
//     }


/*let english = document.getElementsByClassName("translate");
xD = english[0]["outerText"];
for (let i = 0; i < english.length; i++) {
    alert(english[i]["outerText"]);
}*/