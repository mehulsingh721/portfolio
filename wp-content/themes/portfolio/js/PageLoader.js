document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector(
            "body").style.visibility = "hidden";
        document.querySelector(
            "#loader").style.visibility = "visible";
    } else {
        document.querySelector(
            "#loader").style.display = "none";
        document.querySelector(
            "body").style.visibility = "visible";
        document.getElementById("home-link").style.animation = "link-in 1.2s ease 0s forwards"
        document.getElementById("about-link").style.animation = "link-in 1.2s ease .2s forwards"
        document.getElementById("skills-link").style.animation = "link-in 1.2s ease .4s forwards"
        document.getElementById("projects-link").style.animation = "link-in 1.2s ease .6s forwards"
        document.getElementById("contact-link").style.animation = "link-in 1.2s ease .8s forwards"

        document.getElementById("home-h1").style.animation = "fade-up 1s ease 1s forwards"
        document.getElementById("home-h2").style.animation = "fade-up 1s ease 1.2s forwards"
        document.getElementById("home-h3").style.animation = "fade-up 1s ease 1.4s forwards"
        document.getElementById("home-p").style.animation = "fade-up 1s ease 1.6s forwards"
        document.getElementById("home-btn").style.animation = "fade-up 1s ease 1.8s forwards"
    }
};
