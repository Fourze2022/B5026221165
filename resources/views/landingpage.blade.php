<!DOCTYPE html>
<html lang="en">

<head>
    <link class="rounded-circle" rel="icon" type="image/png" href="images/landingpage/profile-picture-circle.png">
    <title>Satria Jati Kusuma</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/scripts.js"></script>
    <link rel="stylesheet" href="css/landingpage/styles.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("DJ4YWv9X8j3FktzkI");
        })();
    </script>
</head>

<body class="bg-primary-dark" data-spy="scroll" data-target="nav" data-offset="120">
    <div class="bg-primary-dark navbar-div fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top max-w-7xl mx-auto">
            <a class="navbar-brand" href="#home">
                <img class="navbar-logo" src="images/landingpage/profile-picture.jpg" alt="profile-picture"></a>
            <div class="navbar-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-right">
                <a href="#contact">
                    <button class="button-contact bg-primary-dark">
                        Contact
                    </button>
                </a>
            </div>
        </nav>
    </div>

    <div class="max-w-7xl mx-auto mt-31">
        <div id="home" class="row align-items-center">
            <div class="col-6 px-20">
                <div class="pl-20 pt-20 pb-20">
                    <p style="color: var(--tertiary-color);">Hello World, I'm</p>
                    <h1>Satria Jati Kusuma</h1>
                    <div class="container-typewriter">
                        <span class="text typing-text typing-gradient">
                            Information Systems Student
                        </span>
                        <script>
                            const text = document.querySelector(".typing-text");
                            const textLoad = () => {
                                setTimeout(() => {
                                    text.textContent = "Information Systems Student";
                                }, 0);
                                setTimeout(() => {
                                    text.textContent = "Tech Enthusiast";
                                }, 6000);
                                setTimeout(() => {
                                    text.textContent = "Generalist";
                                }, 12000);
                            }
                            textLoad();
                            setInterval(textLoad, 18000);
                        </script>
                    </div>
                    <p class="pt-3">Welcome to my personal website.
                        <span class="wave">👋🏼</span>
                    </p>
                </div>
            </div>
            <div class="col-6 px-20">
                <div class="pr-20 pt-20 pb-20">
                    <img class="profile-picture glow" src="images/landingpage/profile-picture.jpg" alt="profile-picture">
                </div>
            </div>
        </div>

        <div id="about" class="container-about p-20 mt-20">
            <h1 class="title-h1">About Me</h1>
            <br>
            <div class="row align-items-center">
                <div class="col-6 px-20">
                    <img class="profile-picture" src="images/landingpage/profile-picture.jpg" alt="profile-picture">
                </div>
                <div class="col-6 pr-20">
                    <p class="text-justify paragraph">
                        Hi everyone! My name is Satria Jati Kusuma,a passionate individual with a strong interest in the
                        IT field, particularly in software engineering and data analysis. Currently, I'm a sophomore
                        undergraduate student majoring in Information Systems at Sepuluh Nopember Institute of
                        Technology (ITS), Surabaya.
                    </p>
                    <br>
                    <p class="text-justify paragraph">
                        Despite the fact that I am an undergraduate student, I am not only concerned with learning; I'm
                        driven by ambition and a constant desire to enhance my skills, both in soft skills and hard
                        skills. Challenges don't deter me; in fact, I thrive on them. As a result of that, I'm currently
                        delving into front-end web development and data analysis. But my ambitions don't end there; I'm
                        actively looking for opportunities to contribute to initiatives in these industries. So, if
                        you're interested in bringing me on board, please contact me using the listed contact
                        information.
                    </p>
                </div>
            </div>
        </div>

        <div id="education" class="p-20 mt-10">
            <h1 class="title-h1">Education</h1>
            <br>
            <div class="row">
                <div class="col-4">
                    <div>
                        <a href="https://www.smpn1-sby.sch.id/" target="_blank">
                            <img class="logo-education" src="images/landingpage/logo-spensabaya.png" alt="logo-spensabaya">
                        </a>
                    </div>
                    <div class="container-education">
                        <h3>Junior High School State 1 Surabaya</h3>
                        <p class="font-weight-light">2016 - 2019</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="https://sman2-sby.sch.id/" target="_blank">
                            <img class="logo-education" src="images/landingpage/logo-smadabaya.png" alt="logo-smadabaya">
                        </a>
                    </div>
                    <div class="container-education">
                        <h3>State Senior High School 2 Surabaya</h3>
                        <p>High School Diploma, Natural Sciences</p>
                        <p class="font-weight-light">2019 - 2022</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="https://www.its.ac.id/" target="_blank">
                            <img class="logo-education" src="images/landingpage/logo-its.png" alt="logo-its">
                        </a>
                    </div>
                    <div class="container-education">
                        <h3>Sepuluh Nopember Institute of Technology</h3>
                        <p>Bachelor's Degree, Information Systems</p>
                        <p class="font-weight-light">2022 - Present</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="experience" class="p-20 mt-10">
            <h1 class="title-h1">Experience</h1>
            <br>
            <div class="design-div">
                <div class="timeline">
                    <div class="timeline-empty"></div>
                    <div class="timeline-middle">
                        <div class="timeline-circle"></div>
                    </div>
                    <div class="timeline-component-right timeline-content">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="https://ise-its.com/" target="_blank">
                                    <img class="logo-experience" src="images/landingpage/logo-ise.png" alt="logo-ise">
                                </a>
                            </div>
                            <div class="col-8">
                                <h3>Information Systems Expo (ISE!) 2023</h3>
                                <p>Staff of BIONIX (Business and IT Olympiad on Information Systems Expo) Division ·
                                    <b>Contract</b>
                                </p>
                                <p class="font-weight-light line-spacing-small">Apr 2023 - Present</p>
                                <p class="font-weight-light line-spacing-small">Surabaya, East Java, Indonesia</p>
                                <p class="font-weight-light line-spacing-small">Work onsite</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-component-left timeline-content">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3>Barunastra ITS Roboboat Team</h3>
                                <p>Programmer Internship · <b>Internship</b></p>
                                <p class="font-weight-light line-spacing-small">Dec 2022 - Jan 2023</p>
                                <p class="font-weight-light line-spacing-small">Surabaya, East Java, Indonesia</p>
                                <p class="font-weight-light line-spacing-small">Work remotely</p>
                            </div>
                            <div class="col-4">
                                <a href="https://barunastra-its.vercel.app/" target="_blank">
                                    <img class="logo-experience" src="images/landingpage/logo-barunastra.jpeg" alt="logo-barunastra">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-middle">
                        <div class="timeline-circle"></div>
                    </div>
                    <div class="timeline-empty"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-31 container-link p-20 mt-20">
        <h1 class="title-h1">Navigation</h1>
        <br>
        <div class="boxes text-link">
            <a class="items" href="welcome">Welcome</a>
            <a class="items" href="blog">Blog</a>
            <a class="items" href="w1">W1</a>
            <a class="items" href="w2">W2</a>
            <a class="items" href="w3">W3</a>
            <a class="items" href="w4">W4</a>
            <a class="items" href="w5">W5</a>
            <a class="items" href="w6">W6</a>
            <a class="items" href="w7">W7</a>
            <a class="items" href="/pegawai">Database Pegawai</a>
            <a class="items" href="/nilaikuliah">Database Nilai Kuliah</a>
            <a class="items" href="/keranjangbelanja">Database Keranjang Belanja</a>
            <a class="items" href="/vga">Tugas Pra EAS (VGA)</a>
        </div>
    </div>

    <div id="contact" class="bg-secondary-dark mt-10">
        <div class="max-w-7xl mx-auto p-20">
            <h1 class="title-h1">Let's Be Connected!</h1>
            <br>
            <div class="row">
                <div class="col-6">
                    <h3>Contact Information</h3>
                    <p class="text-justify">If you'd like to connect, collaborate, or discuss opportunities in the
                        future, get in touch with me through the contact information provided below:</p>
                    <br>
                    <a class="text-decoration-none"
                        href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=mastersatria2014@gmail.com"
                        target="_blank">
                        <div class="row align-content-center">
                            <div class="col-1 m-auto">
                                <img class="logo-contact" src="images/landingpage/logo-email.png" alt="logo-email">
                            </div>
                            <div class="col-11 m-auto">
                                <span class="text-contact">mastersatria2014@gmail.com</span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a class="text-decoration-none" href="https://www.linkedin.com/in/satria-jk/" target="_blank">
                        <div class="row align-content-center">
                            <div class="col-1 m-auto">
                                <img class="logo-contact" src="images/landingpage/logo-linkedin.png" alt="logo-linkedin">
                            </div>
                            <div class="col-11 m-auto">
                                <span class="text-contact">Satria Jati Kusuma</span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a class="text-decoration-none" href="https://github.com/Fourze2022" target="_blank">
                        <div class="row align-content-center">
                            <div class="col-1 m-auto">
                                <img class="logo-contact" src="images/landingpage/logo-github.png" alt="logo-github">
                            </div>
                            <div class="col-11 m-auto">
                                <span class="text-contact">Fourze2022</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <div id="contactForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                            <div id="nameError" style="display: none;">Please fill out this field with letters only!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="johnDoe@example.com" required>
                            <div id="emailError" style="display: none;">Please fill out this field with a valid email
                                address!</div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                            <div id="subjectError" style="display: none;">Please fill out this field!</div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="2" required></textarea>
                            <div id="messageError" style="display: none;">Please fill out this field!</div>
                        </div>
                        <button id="submitButton" class="button-submit" type="submit" value="Submit"
                            onclick="sendMail();">Submit</button>
                    </div>
                    <div id="successMessage" style="display: none;">Your message has been sent successfully!</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
