function revealTop() {
    var reveals = document.querySelectorAll(".reveal-top");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", revealTop);

function revealRight() {
    var reveals = document.querySelectorAll(".reveal-right");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementRight = reveals[i].getBoundingClientRect().right;
        var elementVisible = 150;

        if (elementRight < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } 
        // else {
        //     reveals[i].classList.remove("active");
        // }
    }
}

window.addEventListener("scroll", revealRight);