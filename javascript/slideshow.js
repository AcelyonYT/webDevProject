let index = 0;
slideShow();
function slideShow() {
    let slides = document.getElementsByClassName("slides");
    slides[index].style.display = "none";
    index++;
    if( (index + 1) > slides.length) index = 0;
    slides[index].style.display = "block";
    setTimeout(slideShow, 5000);
}