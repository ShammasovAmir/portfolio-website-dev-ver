<!DOCTYPE html>
<html lang="en"><!--TODO:-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/057aaff998.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome</title>
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><a href="#banner"><span class="logo-part">nomad</span>codr</a></div>
        <ul class="links">
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

    <section class="banner" id="banner">
        <div class="banner-content">
            <div class="banner-text-wrapper">
                <h1>Handcrafting incredible web experience</h1>
                <span>Meet Amir</span>
                <a href="#my-work" class="btn-learn-more">Learn More</a>
            </div>
        </div>
        <div class="banner-img"></div>
    </section>

    <section class="my-work" id="my-work">
        <h5>Featured Projects</h5>

        <div class="project">
            <div class="left">
                <h3>Amazing Website Number One</h3>
                <p>An amazing website I have built for my client. He was super happy and you will be too.</p>
                <a href="#" class="btn-read-more"></a>
            </div>
            <div class="right">
                <a href="#">
                    <img src="img/project_placeholder.png" alt="Featured Project One">
                    <div class="right-text">
                        <span><i class="fas fa-external-link-alt"></i> Learn More</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="services-container">
            <div class="how-can-i-help">
                <h3>How Can I help You</h3>
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
                        <p>Simple but well-designed landing pages built with html or WordPress that will attract costumers to your company/buisness</p>
                    </div>
                </div>
            </div>
            <div class="tech-i-use">
                <h5>Tech I Use</h5>
                <p>Below is the list of technologies I use</p>
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
    
    <section class="contact-me" id="contact-me">
        <div class="form-bg">
            <div class="form-container">
                <p>Like what you see?</p>
                <h2>Contact Me</h2>
                <div class="border"></div>
                <form action="" class="contact-form">
                    <label for="name">Your name*</label>
                    <input type="text" class="contact-form-text error-form">
                    <p class="error-message hidden">*Please enter a valid name</p>
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

    <footer>
        <div class="footer-container">
            <div class="choose-language">
                <h5>Change Language</h5>
                <a href="#">EN </a>|<a href="#"> RU</a>
            </div>
        </div>
    </footer>

</body>
</html>