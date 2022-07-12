
const isElementInViewport = (el) => {
const rect = el.getBoundingClientRect();
    const isInViewport = rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth);
    return isInViewport;

}

['load', 'scroll'].forEach(evt =>
    window.addEventListener(evt, () => {
        const home = document.getElementById("home");
        const about = document.getElementById("about");
        const skills = document.getElementById("skills");
        const projects = document.getElementById("projects");
        const contact = document.getElementById("contact");

        const home_link = document.getElementById("home-link");
        const about_link = document.getElementById("about-link");
        const skills_link = document.getElementById("skills-link");
        const project_link = document.getElementById("projects-link");
        const contact_link = document.getElementById("contact-link");

        if (isElementInViewport(home)) {
            home_link.style.color = "#5F85DB"
        }
        else{
            home_link.style.color = "inherit"
        }
        if (isElementInViewport(about)) {
            about_link.style.color = "#5F85DB"
        }
        else {
            about_link.style.color = "inherit"
        }
        console.log(isElementInViewport(skills))
        if (isElementInViewport(skills)) {
            skills_link.style.color = "#5F85DB"
        }
        else {
            skills_link.style.color = "inherit"
        }
        if (isElementInViewport(projects)) {
            project_link.style.color = "#5F85DB"
        }
        else {
            project_link.style.color = "inherit"
        }
        if (isElementInViewport(contact)) {
            contact_link.style.color = "#5F85DB"
        }
        else {
            contact_link.style.color = "inherit"
        }
    })
)
