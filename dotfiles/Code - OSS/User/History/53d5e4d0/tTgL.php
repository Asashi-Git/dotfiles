<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decarnelle Samuel</title>
    <!-- Link to the external CSS file for styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcq0f0qAAAAAMhH8YUwOcguzI2tQJMh7iES9tdp"></script>
</head>

<body>
    <!-- Header section containing the logo and navigation menu -->
    <header>
        <div class="logo"><img src="" alt=""></div>
        <nav>
            <ul>
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="main">About</a></li>
                <li><a href="footer">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Banner section with background city image and content -->
    <div class="banner" id="home">
        <div id="bg_city"></div>
        <div class="content">
            <div class="item fadeIn">
                <div>
                    <p>SAMUEL DECARNELLE</p>
                    <p>CYBERSECURITY ENTHUSIAST</p>
                </div>
                <div>
                    <p>STUDENT DEVELOPER</p>
                    <p>FRENCH</p>
                </div>
            </div>
            <div class="item title fadeIn">
                <p>SAMUEL</p>
                <p>DECARNELLE</p>
            </div>
            <div id="fadeOut" class="header-seemore">
                <div class="see-more-main">
                    <div class="see-more">
                        <h5>Scroll down to explore</h5>
                        <div class="chevron-container">
                            <button><a href="#about-me"><i class="fa-solid fa-chevron-down"></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main content section -->
    <main>
        <div id="about-me" class="language-logo">
            <div class="me">
                <h1>Samuel Decarnelle</h1>
                <h2>Student Developer & Cybersecurity</h2>
                <p>I'm pleased to see you on my portfolio, and I hope you have a beautiful day <br> learning about programming and cybersecurity</p>
            </div>
            <!-- List of logo icons using Font Awesome -->
            <ul class="infinite-scroll">
                <li><i class="fab fa-html5"></i></li>
                <li><i class="fab fa-css3-alt"></i></li>
                <li><i class="fab fa-js"></i></li>
                <li><i class="fab fa-cuttlefish"></i></li>
                <li><i class="fab fa-php"></i></li>
                <li><i class="fa-brands fa-unity"></i></li>
                <li><i class="fa-brands fa-python"></i></li>
                <li><i class="fab fa-linux"></i></li>
                <li><i class="fa-brands fa-git"></i></li>
                <li><i class="fa-brands fa-gitlab"></i></li>
            </ul>
        </div>
        <!-- -------------------------------------- -->
        <div id="about-and-skills-main">
            <div id="button-about-skills">
                <button id="about-me-button" class="active">About Me</button>
                <button id="skills-button">Skills</button>
                <a href="/projects/cv-sam/cv-english.pdf" target="_blank"><button>Curriculum Vitae</button></a>
            </div>
            <div id="about-and-skills">
                <div id="about-me-section">
                    <p>I am a passionate French student specializing in cybersecurity, with a strong interest in artificial intelligence and software development.<br> My fascination with technology started at a young age and deepened in high school, where I began exploring computer science in greater depth. Since then, my passion has continued to grow, leading me to my current studies. I enjoy solving complex problems, creating innovative projects, and continuously expanding my skill set. Currently studying in Paris, my goal is to reach an engineering level in cybersecurity by the end of my studies. Although my portfolio currently highlights web development, I am actively building my cybersecurity expertise</p>
                    <p>through hands-on networking projects and coursework. I'm always eager to connect with like-minded individuals to exchange insights on cybersecurity. I have had the opportunity to develop networking skills using Cisco Packet Tracer. Additionally, this website is hosted on an Ubuntu Server virtual machine within my Proxmox hypervisor. Networking has been one of my favorite areas of exploration!<br> I am eager to gain hands-on experience through an internship in networking, where I can apply my skills in a real-world environment. I look forward to collaborating on exciting projects! Feel free to reach out through the Contact section of this portfolio.</p>
                </div>
                <div id="skills-section" class="hidden">
                    <div id="left-skills">
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">HTML</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="95"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">CSS</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="90"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">JS</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="80"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">C</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="79"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">PHP</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="50"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="right-skills">
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">PYTHON</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="85"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">PPROXMOX</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="85"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">CISCO</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="85"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">LINUX</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="80"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills">
                            <div class="skill">
                                <div class="skill-name">GIT</div>
                                <div class="skill-bar">
                                    <div class="skill-level" data-level="65"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------------- -->
        <!-- see more -->
        <div class="see-more-main">
            <div class="see-more">
                <h5>Scroll down to explore</h5>
                <div class="chevron-container">
                    <button><a href="#my-projects"><i class="fa-solid fa-chevron-down"></i></a></button>
                </div>
            </div>
        </div>
        <!-- Projects section -->
        <div id="projects" class="projects-section">
            <h2>My Projects</h2>
            <h2>My Projects</h2>
            <div id="my-projects" class="project-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/portfolio.PNG" alt="Project 1">
                    </div>
                    <div class="project-info">
                        <h3>Hosting My Portfolio</h3>
                        <p>I created within my Proxmox hypervisor, a Ubuntu server virtual machine with a web server using Apache2 and a MySQL database.</p>
                        <div class="project-tags">
                            <span>Network</span>
                            <span>Proxmox</span>
                            <span>MySQL</span>
                            <span>Linux</span>
                            <span>DNS</span>
                        </div>
                        <a href="/projects/hosting-portfolio/hosting-my-portfolio.pdf" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="images/proxmoxx.webp" alt="Project 2">
                    </div>
                    <div class="project-info">
                        <h3>I Built My Own Server Using Proxmox as my Hypervisor</h3>
                        <p>I built a server with a Proxmox hypervisor, to be able to create VM machines from anywhere.</p>
                        <div class="project-tags">
                            <span>Network</span>
                            <span>Linux</span>
                            <span>VPN</span>
                            <span>Switch</span>
                            <span>Proxmox</span>
                        </div>
                        <a href="/projects/proxmox/proxmox-setup.pdf" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="images/forest-scroll.PNG" alt="Project 3">
                    </div>
                    <div class="project-info">
                        <h3>Template Of a Scroll Animation</h3>
                        <p>Since I'm a student, I follow guides to do some sites that I think are beautiful! This one is one of them.</p>
                        <div class="project-tags">
                            <span>Web</span>
                            <span>JavaScript</span>
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>Photoshop</span>
                        </div>
                        <a href="/projects/forest-scroll/index.html" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/sipder-effect.PNG" alt="Project 4">
                    </div>
                    <div class="project-info">
                        <h3>Template Of a Spider <br>Effect</h3>
                        <p>Since I'm a student, I follow guides to do some sites that I think are beautiful! This one is one of them.</p>
                        <div class="project-tags">
                            <span>Web</span>
                            <span>JavaScript</span>
                            <span>HTML</span>
                            <span>CSS</span>
                        </div>
                        <a href="/projects/spider-effect/index.html" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/mountain-parallax.PNG" alt="Project 5">
                    </div>
                    <div class="project-info">
                        <h3>Template Of a simple Parallax</h3>
                        <p>Since I'm a student, I follow guides to do some sites that I think are beautiful! This one is one of them.</p>
                        <div class="project-tags">
                            <span>Web</span>
                            <span>JavaScript</span>
                            <span>HTML</span>
                            <span>CSS</span>
                        </div>
                        <a href="/projects/mountain-parallax/index.html" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="images/css-only.PNG" alt="Project 6">
                    </div>
                    <div class="project-info">
                        <h3>Template Of a CSS ONLY Animation</h3>
                        <p>Since I'm a student, I follow guides to do some sites that I think are beautiful! This one is one of them.</p>
                        <div class="project-tags">
                            <span>Web</span>
                            <span>HTML</span>
                            <span>CSS</span>
                        </div>
                        <a href="/projects/css-only-samurai/index.html" target="_blank" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- see more -->
        <div class="see-more-main">
            <div class="see-more">
                <h5>Scroll down to explore</h5>
                <div class="chevron-container">
                    <button><a href="#contact-main"><i class="fa-solid fa-chevron-down"></i></a></button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer section -->
<footer>
    <div id="footer-main">
        <div id="contact-main" class="contact-main">
            <h2>Contact Me</h2>
            <div class="contact-form">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                    <button id="submit-button" type="submit">Send Message</button>
                </form>
            </div>
        </div>
        <div id="footer-info">
            <h2>Personnal Infos</h2>
            <p>Bellow, you can find my personnal infos to contact me directly.</p>
            <p>Email: samueldecarnelle@gmail.com</p>
            <p>Phone: +33 7 82 23 10 39</p>
            <p>Address: Paris, France</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/samuel-decarnelle-1357b130b/">Samuel Decarnelle</a></p>
        </div>
    </div>
    <div id="footer-copyright">
        <p>&copy;Copyright 2025 samueldecarnelle.com</p>
    </div>
</footer>

<!-- External JavaScript libraries for animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<!-- Link to the external JavaScript file for custom scripts -->
<script src="app.js"></script>

</body>
</html>