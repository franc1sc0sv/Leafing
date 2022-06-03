// Grab DOM elements
const images = document.querySelector(".images")
const imagesCollection = document.querySelectorAll(".image")
const prevBtn = document.querySelector(".prev")
const nextBtn = document.querySelector(".next")

prevBtn.addEventListener("click", prevSlide)
nextBtn.addEventListener("click", nextSlide)

// Utility vars
let index = 0

// Set interval
let interval = setInterval(startInterval, 2000)

function startInterval() {
    index++
    moveCarousel()
}

function resetInterval() {
    clearInterval(interval)
    interval = setInterval(startInterval, 500)
}

function moveCarousel() {
    // Last image
    if (index > imagesCollection.length -1) {
        index = 0
    } else if (index < 0) {
        index = imagesCollection.length -1
    }

    images.style.transform = `translateX(-${index * 800}px)`
}

// Nav buttons
function prevSlide() {
    index--
    //resetInterval()
    clearInterval(interval) 
    moveCarousel()
}

function nextSlide() {
    index++
    //resetInterval()
    clearInterval(interval) 
    moveCarousel()
}