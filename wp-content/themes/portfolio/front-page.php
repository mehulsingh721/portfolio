<?php get_header();
?>
<div id="content">
    <?php calendarModal() ?>
    <?php projectModal() ?>
    <main class="home-page">
        <section id="home" class="home-page__hero">
            <div>
                <h1 id="home-h1">Hi, my name is</h1>
            </div>
            <div>
                <h2 id="home-h2" class="heading-1">Mehul Singh.</h1>
            </div>
            <div>
                <h3 id="home-h3" class="heading-1-sec">And I build awesome stuff.</h1>
            </div>
            <div>
                <p id="home-p" class="copy__para--big">I’m a software developer specializing in building (and occasionally designing) exceptional digital experiences. Currently, I’m focused on building accessible, human-centered softwares as a freelancer.</p>
            </div>
            <div>
                <button id="home-btn" class="btn" onclick="toggleCalendarModal()">Let's Talk</button>
            </div>
        </section>

        <section id="about" class="home-page__about" data-aos="fade-up">
            <div class="home-page__about--container">
            <?php echo plugins_url()?>
                <div>
                    <h1 class="section-heading">Who am I</h1>
                    <?php
                    $home_page = get_option("home-page");
                    $fields = get_fields($home_page);
                    echo $fields['about_content'];
                    ?>
                </div>
                <div>
                    <div class="outer">
                        <img src=<?php echo get_template_directory_uri() ?>'/images/AvatarMaker.svg' alt="">
                    </div>
                    <div class="inner"></div>
                </div>
            </div>
        </section>

        <section id="skills" class="home-page__skills" data-aos="fade-up">
            <div class="home-page__skills--heading">
                <div class="line"></div>
                <h1 class="heading">What I know</h1>
                <div class="line"></div>
            </div>
            <div class="home-page__skills--cards">
                <div class="card">
                    <h1>Frontend Development</h1>
                    <p>As a FullStack Developer I understand a good and stable UI is a key component for success of any application. That is why I have mastered different frameworks and languages so that I can fullfill this need for a good UI.</p>
                    <div class="skills">
                        <ul>
                            <li>Javascript</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>ReactJs</li>
                        </ul>
                        <ul>
                            <li>VueJs</li>
                            <li>Wordpress</li>
                            <li>Flutter (learning)</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <h1>Backend Development</h1>
                    <p>I build fast, maintainable and relible backends for awesome softwares. And since every application has its different needs I have learn multiple tech stacks so that I can build powerfull softwares.</p>
                    <div class="skills">
                        <ul>
                            <li>PHP</li>
                            <li>Java</li>
                            <li>Python</li>
                            <li>Laravel</li>
                            <li>Spring Boot</li>
                        </ul>
                        <ul>
                            <li>Heroku</li>
                            <li>NodeJS</li>
                            <li>Linux</li>
                            <li>Data Structures & Algorithms(learing)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="home-page__projects" data-aos="fade-up">
            <h1 class="section-heading">Some Things I've Built</h1>
            <?php
            /* $posts = get_posts(array( */
            /*     'numberposts' => 1, */
            /*     'post_type' => 'projects', */
            /* )); */
            $args = array(
                'posts_per_page'   => -1, // -1 to fetch all posts
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'project', // the post type 
                'post_status'      => null,
            );

            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <ul>
                    <?php while ($query->have_posts()) : $query->the_post() ?>
                        <li class="container">
                            <div class="container__content">
                                <div class="info">
                                    <h3 class="title heading-3" onclick="openProjectModal(<?php echo the_ID() ?>)"><?php the_title() ?></h3>
                                    <p class="description" onclick="openProjectModal(<?php echo the_ID() ?>)"><?php the_field("intro_description") ?></p>
                                    <?php
                                    $string = the_field("tech_stack");
                                    echo $string;
                                    ?>
                                    <ul class="links">
                                        <li class="link"><a href="<?php the_field("github_link")?>"><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                    <title>GitHub</title>
                                                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                </svg></a></li>
                                        <li class="link">
                                            <a href="<?php the_field("project_link") ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
                                                    <title>External Link</title>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                    <polyline points="15 3 21 3 21 9"></polyline>
                                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                                </svg></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="container__image">
                                <img src="<?php the_field("intro_image") ?>" alt="">
                            </div>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
                <div>
                </div>
            <?php
            endif;
            ?>
        </section>

        <section id="contact" class="home-page__contact" data-aos="fade-up">
            <h1 class="heading-2">Get In Touch</h1>
            <p class="copy__para--big">I am looking for any new opportunities, my calendar is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!</p>
            <button class="btn-sec" onclick="toggleCalendarModal()">Say Hello</button>
        </section>
    </main>
    <?php get_footer(); ?>
    <script>
        AOS.init({
            once: true,
            duration: 600,
            delay: 200,
        });
    </script>
</div>
