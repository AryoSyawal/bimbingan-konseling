var slideindexbk = 1;
slideShow(slideindexbk);

function nextslidebk(n) {
    slideShow(slideindexbk += n);
}

function dotslide(n) {
    slideShow(slideindexbk = n);
}

function slideShow(n) {
    var i;
    var slides = document.getElementsByClassName("imgslidebk-fade");

    if (n > slides.length) {
        slideindexbk = 1
    }

    if (n < 1) {
        slideindexbk = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideindexbk - 1].style.display = "block"
}