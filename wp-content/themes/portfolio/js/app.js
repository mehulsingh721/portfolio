let calendarModal;

const toggleCalendarModal = () => {
    if(calendarModal.style.display == "none"){
        calendarModal.style.display = "block";
    }
    else{
        calendarModal.style.display = "none";
    }
}

window.addEventListener("load", () => {
    calendarModal = document.getElementById("calendar-modal");

    const projectDescription = document.getElementById("project-description")
    const slideshow = document.getElementById("project-slideshow")
    projectDescription.addEventListener("scroll", () => {
        projectSlideshowShrink(projectDescription, slideshow)
    })
})

const toggleHamburger = () => {
    const content = document.getElementById("content")
    if(content.classList.contains("blur")){
        content.classList.remove("blur")
    }
    else{
        content.classList.add("blur")
    }
    const hamburgerBox = document.getElementById("hamburger-box");
    if(hamburgerBox.classList.contains("hamburger-active")){
        hamburgerBox.classList.remove("hamburger-active")
    }
    else{
        hamburgerBox.classList.add("hamburger-active")
    }
    const hamburgerContainer = document.getElementById("hamburger-container");


    if(hamburgerContainer.classList.contains("hamburger-active")){
        hamburgerContainer.classList.remove("hamburger-active")
    }
    else{
        hamburgerContainer.classList.add("hamburger-active")
    }
}
