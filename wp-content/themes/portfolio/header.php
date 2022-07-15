<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="root">
        <div id="loader">
            <!-- LOADING DOTS... -->
            <div class="spinner-box">
                <div class="pulse-container">
                    <div class="pulse-bubble pulse-bubble-1"></div>
                    <div class="pulse-bubble pulse-bubble-2"></div>
                    <div class="pulse-bubble pulse-bubble-3"></div>
                </div>
            </div>
        </div>

        <header id="navbar" class="header">
            <nav class="header__nav">
                <h1 class="header__nav--logo">Mehul Singh</h1>
                <ul class="header__nav--links">
                    <li id="home-link"><a href="/#home">Home</a></li>
                    <li id="about-link"><a href="/#about">About</a></li>
                    <li id="skills-link"><a href="/#skills">Skills</a></li>
                    <li id="projects-link"><a href="/#projects">Projects</a></li>
                    <li id="contact-link"><a href="/#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <div id="hamburger-box" class="hamburger__box" onclick="toggleHamburger()">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div id="hamburger-container" class="hamburger__container">
                        <ul class="hamburger__container--links">
                            <li onclick="toggleHamburger()"><a href="/#home">Home</a></li>
                            <li onclick="toggleHamburger()"><a href="/#about">About</a></li>
                            <li onclick="toggleHamburger()"><a href="/#skills">Skills</a></li>
                            <li onclick="toggleHamburger()"><a href="/#projects">Projects</a></li>
                            <li onclick="toggleHamburger()"><a href="/#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="left-element">
            <ul class="socials">
                <li><a href="https://github.com/mehulsingh721"><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                            <title>GitHub</title>
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                        </svg></a></li>
                <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                            <title>Twitter</title>
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg></a></li>
                <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                            <title>LinkedIn</title>
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg></a></li>
            </ul>
        </div>

        <div class="right-element">
            <div class="email">
                <a href="">mehulsingh@gmail.com</a>
            </div>
        </div>
    </div>
