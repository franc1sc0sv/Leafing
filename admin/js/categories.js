const keep = document.getElementById('kepp');
const containerModelNotification = document.getElementById('containerModelNotification')

keep.addEventListener('click', function () {
    let inputCategoryES = document.getElementById('inputCategoryES');
    let inputCategoryEN = document.getElementById('inputCategoryEN');

    fetch(`../php/API/categories.php?inputCategoryES=${inputCategoryES.value}&inputCategoryEN=${inputCategoryEN.value}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModal.style.removeProperty('display');
                inputCategoryES.value = ""
                inputCategoryEN.value = ""

                setTimeout(showNotification(alertNice), 1000)

            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})