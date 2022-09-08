document.getElementById('followers_model').addEventListener('click', function () {
    document.getElementById('modal_container_followers').classList.add('show');
    let URLsearch = window.location.search;
    let id = URLsearch.split("=")
    // console.log(id[1])
    fetch("/LEAFING/Crea-J-2022/client/api/consultas.php?sql=SELECT user_data.id_user_data, user_data.user_name, user_data.name, user_data.lastname, user_data.img_path FROM `followers` INNER JOIN user_data ON followers.id_follower = user_data.id_user_data WHERE id_following = " + id[1])
        .then(res => res.json())
        .then(data => {

            document.getElementById('containerFollowers').innerHTML = cardsFollows(data);

        })
})



document.getElementById('following_model').addEventListener('click', function () {
    document.getElementById('modal_container_following').classList.add('show');
    let URLsearch = window.location.search;
    let id = URLsearch.split("=")
    // console.log(id[1])
    fetch("/LEAFING/Crea-J-2022/client/api/consultas.php?sql=SELECT user_data.id_user_data, user_data.user_name, user_data.name, user_data.lastname, user_data.img_path FROM `followers` INNER JOIN user_data ON followers.id_following = user_data.id_user_data WHERE id_follower = " + id[1])
        .then(res => res.json())
        .then(data => {

            document.getElementById('containerFollowing').innerHTML = cardsFollows(data);

        })
})



function closeModalFollowers() {
    document.getElementById('modal_container_followers').classList.remove('show');
}


function closeModalFollowing() {
    document.getElementById('modal_container_following').classList.remove('show');
}




function cardsFollows(dataFolow) {
    //console.log(dataEvents);
    let followCard = '';
    for (let i = 0; i < dataFolow.length; i++) {
        followCard += `
    <div class="whoIFollow">
        <img src="../assets/user_images/profile_images/${dataFolow[i]['img_path']}" alt="d" class="img_whoIfollow">
        <div class="nombres_whoiFollow">
            <a href="./public_account.php?desiree=${dataFolow[i]['id_user_data']}" target="_blank" class="username_modal">${dataFolow[i]['user_name']}</a>
            <a href="./public_account.php?desiree=${dataFolow[i]['id_user_data']}" target="_blank" class="name_modal">${dataFolow[i]['name'] + dataFolow[i]['lastname']}</a>
        </div>
    </div> \n`
    }

    return followCard;
}