let projectModal;

const closeProjectModal = () => {
    let slideshow = document.getElementById("project-slideshow__container");
    let slides = document.getElementsByClassName("slide");
    const dots = document.getElementById("dots")
    projectModal = document.getElementById("project-modal");
    projectModal.style.display = "none";
    dots.innerHTML = ""
    slideshow.innerHTML = ""
}

const openProjectModal = (projectId) => {
    projectModal = document.getElementById("project-modal");
    projectModal.style.display = "flex";
    let slideshow = document.getElementById("project-slideshow__container");
    const projectDescription = document.getElementById("project-description")
    const slides = []

    jQuery.getJSON(`http://localhost:10003/wp-json/wp/v2/project/${projectId}?acf_format=standard`, (project) => {
        const images = project.acf.images
        const content = project.content.rendered
        projectDescription.innerHTML = content

        for (let i = 0; i < images.length; i++) {
            const dots = document.getElementById("dots")
            const span = document.createElement("span")
            span.classList += "dot"
            span.addEventListener("click", () => {
                currentSlide(i)
            })
            dots.appendChild(span)

            const divSlide = document.createElement("div")
            const overlayDiv = document.createElement("div")
            const img = document.createElement("img")
            divSlide.classList += "slide"
            overlayDiv.classList += "title"
            const divSlideChild = slideshow.appendChild(divSlide)
            img.setAttribute("src", images[i])
            divSlideChild.appendChild(overlayDiv).innerHTML = `<h1>${project.title.rendered}</h1>`
            divSlideChild.appendChild(img)

            slides.push(divSlide)
        }
    }).then(() => {
        showSlides(slides)
    })
}

const projectSlideshowShrink = (el, slideshow) => {
    if (el.scrollTop > 0) {
        slideshow.style.height = "15%"
        el.style.maxHeight = "85%"
    }
    else {
        slideshow.style.height = "45%"
        el.style.maxHeight = "55%"
    }
}
