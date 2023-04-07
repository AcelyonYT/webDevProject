// Sets a global index
let index = 0;

// Runs the function when the window loads
window.onload = slideShow();

/**
 * Grabs all elements with the class slides
 * Sets current slide display to none
 * increases the index by 1
 * checks if the index is greater than the amount of slides we have
 * if true it sets index back to 0 to start all over again
 * we set the next slide display to block to show the slide with our new index
 * sets a timeout for 5 seconds, and calls the function again
 */
function slideShow() {
    let slides = document.getElementsByClassName("slides");
    slides[index].style.display = "none";
    index++;
    if( (index + 1) > slides.length) index = 0;
    slides[index].style.display = "block";
    setTimeout(slideShow, 5000);
}