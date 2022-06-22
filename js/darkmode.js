let btnMode = document.getElementById("btnMode");
let body = document.body;

btnMode.addEventListener("click", function(){
    let val = body.classList.toggle("darkmode")
    localStorage.setItem("btnMode", val)
})
let valor = localStorage.getItem("darkmode")

if(valor=="true") {
    body.classList.add("darkmode")
} else {
    body.classList.remove("darkmode")
}