<!DOCTYPE html>
<html lang="en-US"><!--TODO:-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/057aaff998.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome</title>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><a href="#banner"><span class="logo-part">nomad</span>codr</a></div>
        <ul class="links">
            <li id="langBtn">
                <span>En <i class="fas fa-chevron-down"></i></span>
            </li>
            <li><a href="#my-work">My Work</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact-me">Contact Me</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <!-- Banner -->
    <section class="banner" id="banner">
        <div class="banner-content">
            <div class="banner-text-wrapper">
                <h1 class="stagger1">Handcrafting incredible web experience</h1>
                <span class="stagger1">Meet Amir</span>
                <a href="#my-work" class="btn-learn-more stagger1">Learn More</a>
            </div>
        </div>
        <div class="banner-img"></div>
    </section>

    <!-- Featured Projects -->
    <section class="my-work" id="my-work">
        <h5 class="transition2">Featured Projects</h5>

        <div class="project">
            <div class="left transition2">
                <h3>Amazing Website Number One</h3>
                <p>An amazing website I have built for my client. He was super happy and you will be too.</p>
                <a href="#" class="btn-read-more"></a>
            </div>
            <div class="right transition2">
                <a href="#">
                    <img src="img/project_placeholder.png" alt="Featured Project One">
                    <div class="right-text">
                        <span><i class="fas fa-external-link-alt"></i> Learn More</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="services-container">
            <div class="how-can-i-help">
                <h3 class="h3-transition">How Can I help You</h3>
                <div class="card-wrapper">
                    <div class="card">
                        <div class="icon-container one">
                            <img src="img/Tilda_Icons_40_IT_adaptive.svg" alt="Adaptive App Icon">
                        </div>
                        <h4>Frontend Development</h4>
                        <p>Dynamic easy-to-use web apps with responsive design and intuitive user interface</p>
                    </div>
                    <div class="card">
                        <div class="icon-container two">
                            <img src="img/Tilda_Icons_40_IT_data.svg" alt="Database Icon">
                        </div>
                        <h4>Backend Development</h4>
                        <p>Secure web sites with server-site functionality, complex backend applications with database integration</p>
                    </div>
                    <div class="card">
                        <div class="icon-container three">
                            <img src="img/Tilda_Icons_40_IT_landing.svg" alt="Landing Page Icon">
                        </div>
                        <h4>Simple Landing Pages</h4>
                        <p>Simple but well-designed landing pages that will attract costumers to your company/buisness</p>
                    </div>
                </div>
            </div>
            <div class="tech-i-use">
                <h5 class="h5-transition-tiu">Tech I Use</h5>
                <p class="p-transition-tiu">Below is the list of technologies I use</p>
                <div class="skill-container">
                    <div class="skill">
                        <img src="img/html5-original-wordmark.svg" alt="HTML Icon">
                    </div>
                    <div class="skill">
                        <img src="img/css3-original-wordmark.svg" alt="CSS Icon">
                    </div>
                    <div class="skill">
                        <img src="img/sass-original.svg" alt="Sass Icon">
                    </div>
                    <div class="skill">
                        <img src="img/bootstrap-plain-wordmark.svg" alt="Bootstrap Icon">
                    </div>
                    <div class="skill">
                        <img src="img/javascript-original.svg" alt="JavaScript Icon">
                    </div>
                    <div class="skill">
                        <img src="img/php-plain.svg" alt="PHP Icon">
                    </div>
                    <div class="skill">
                        <img src="img/mysql-original-wordmark.svg" alt="MySQL Icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Me -->
    <section class="contact-me" id="contact-me">
        <div class="form-bg">
            <div class="form-container">
                <p>Like what you see?</p>
                <h2>Contact Me</h2>
                <form action="" class="contact-form">
                    <label for="name">Your name*</label>
                    <input type="text" class="contact-form-text"><!--error-form-->
                    <p class="error-message hidden"></p>
                    <label for="email">Your email*</label>
                    <input type="text" class="contact-form-text">
                    <p class="error-message hidden"></p>
                    <label for="name">Your message*</label>
                    <textarea class="contact-form-text"></textarea>
                    <p class="error-message hidden"></p>
                    <input type="submit" class="btn-contact-me" value="Send">
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="social-links">
                <h6>Links to Social Media</h6>
                <ul>
                    <li><a href="#"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                    <li><a href="#"><i class="fab fa-github"></i> GitHub</a></li>
                </ul>
            </div>
            <div class="credits">
               <h6>Credits:</h6>
                <ul>
                    <li><a href="https://unsplash.com/@altumcode">Altum Code</a></li>
                    <li><a href="https://tilda.cc/free-icons/">Tilda Icons</a></li>
                    <li><a href="https://github.com/devicons/devicon">Devicon</a></li>
                </ul>
            </div>
        </div>
        <p>&#169; 2021 nomadcodr.com</p>
    </footer>

    <!-- Modal Section -->
    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">&times;</div>
            <div class="modal-txt">
                <h6>Choose Your Language</h6>
                    <a href="#">
                        <span><?php echo file_get_contents("img/us.svg"); ?></span>
                        <span> English(US)</span>
                    </a>
                    <a href="#">
                        <span><?php echo file_get_contents("img/gb.svg"); ?></span>
                        <span> English(UK)</span>
                    </a>
                    <a href="#">
                        <span><?php echo file_get_contents("img/ru.svg"); ?></span>
                        <span lang="ru"> Русский</span>
                    </a>
            </div>
        </div>
    </div>

    <!-- GSAP Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>

    <!-- Animation Files Links -->
    <script src="animations/animations-main.js"></script>
    <script src="animations/smooth-scroll.js"></script>
    <script src="animations/animation-onscroll.js"></script>

    <!-- JS Scripts Links -->
    <script src="js/popup-lang.js"></script>

</body>
</html>