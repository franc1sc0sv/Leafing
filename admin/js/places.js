const keepPlace = document.getElementById('keepPlace');

keepPlace.addEventListener('click', function () {
    let inputPlace = document.getElementById('inputPlace');

    fetch(`../php/API/places.php?place=${inputPlace.value}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModal.style.removeProperty('display');
                inputPlace.value = ""

                setTimeout(showNotification(alertNice), 1000)

            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})