<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{$others->pagename}}</title>

        <link rel="stylesheet" href="assets/css/style.css" />
        <link
            rel="stylesheet"
            href="assets/vendor/bootstrap/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        />
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">{{$others->navbarname}}</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
            <section class="header-section" id="header">
            <!-- Introduction Image -->
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-3">
                        <div class="header-img-border">
                            <img
                                src="/image/{{$header->image}}"
                                alt="Profile Picture"
                                class="header-img"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <!-- Introduction -->
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6">
                        <p class="text-green fw-semibold">
                            <span class="rounded-textstyle">Hi, I'm {{$header->name}} 👋</span>
                        </p>
                        <h1 class="header-title fw-bold mb-5">
                            <span class="fw-light">I'm a</span>
                            <span>{{$header->interest}}</span>
                            <br />
                            <span class="fw-light"
                                >Based In
                            <span class="text-green text-uppercase fw-bold"
                                >{{$header->country}}</span
                            ></span
                            >
                        </h1>
                    </div>
                </div>
            </div>
        <!-- Social Media Icon -->
        <div class="container">
            <div class="wrapper">
                <div class="button">
                    <a
                        href="{{$header->linkedin}}"
                        target="_blank"
                        style="text-decoration: none"
                    >
                        <div class="icon"><i class="bx bxl-linkedin"></i></div>
                        <span class="text-icon">LinkedIn</span>
                    </a>
                </div>
            <div class="button">
                <a
                href="{{$header->github}}"
                target="_blank"
                style="text-decoration: none"
                >
                <div class="icon"><i class="bx bxl-github"></i></div>
                <span class="text-icon">GitHub</span>
                </a>
            </div>
            <div class="button">
                <a
                href="{{$header->instagram}}"
                target="_blank"
                style="text-decoration: none"
                >
                <div class="icon"><i class="bx bxl-instagram"></i></div>
                <span class="text-icon">Instagram</span>
                </a>
            </div>
            <div class="button">
                <a
                href="{{$header->spotify}}"
                target="_blank"
                style="text-decoration: none"
                >
                <div class="icon"><i class="bx bxl-spotify"></i></div>
                <span class="text-icon">Spotify</span>
                </a>
            </div>
            <div class="button">
                <a
                href="{{$header->youtube}}"
                target="_blank"
                style="text-decoration: none"
                >
                <div class="icon"><i class="bx bxl-youtube"></i></div>
                <span class="text-icon">YouTube</span>
                </a>
            </div>
            </div>
        </div>
        </section>

        <!-- About Me -->
        <section class="about-section" id="about">
        <div class="container">
            <p class="text-green fw-semibold">About Me</p>
            <h2 class="section-title mb-5">So, Who am I?</h2>
            <div class="row">
            <div class="col-sm-3">
                <div class="card-left">
                <div class="card">
                    <div
                    class="card-body-title d-flex flex-wrap justify-content-center"
                    >
                    <div class="image-border">
                        <img
                        class="image"
                        src="/image/{{$about->profile}}"
                        alt="Profile"
                        />
                    </div>
                    <a
                        class="button-download"
                        href="/data/{{$about->cv}}"
                        download="CV"
                        style="text-decoration: none"
                    >
                        <button type="button" class="btn btn-green">
                        Download CV
                        </button>
                    </a>
                    <a
                        class="button-download"
                        href="#contact"
                        style="text-decoration: none"
                    >
                        <button type="button" class="btn btn-green">
                        Contact Me
                        </button>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card-right">
                <div class="card">
                    <div class="card-body">
                    <div class="column">
                        <h5>General Information</h5>
                        <ul>
                        <li>
                            <span class="key">Full Name</span>
                            <span class="value">{{$about->fullname}}</span>
                        </li>
                        <li>
                            <span class="key">Age</span>
                            <span class="value">{{$about->age}}</span>
                        </li>
                        <li>
                            <span class="key">Degree</span>
                            <span class="value"
                            >{{$about->degree}}</span
                            >
                        </li>
                        <li>
                            <span class="key">Interest</span>
                            <span class="value">{{$about->interest}}</span>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-contact">
                <div class="card-right">
                    <div class="card">
                    <div class="card-body">
                        <div class="column">
                        <h5>Contact Information</h5>
                        <ul>
                            <li>
                            <span class="key">Phone</span>
                            <span class="value">{{$about->phone}}</span>
                            </li>
                            <li>
                            <span class="key">Email</span>
                            <span class="value">{{$about->email}}</span>
                            </li>
                            <li>
                            <span class="key">Freelance</span>
                            <span class="value">{{$about->freelance}}</span>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-kota">
                <div class="card">
                    <img
                    class="card-img"
                    src="/image/{{$about->imagefrom}}"
                    alt="From Image"
                    />
                    <div class="card-img-overlay">
                    <h5>From</h5>
                    <span class="value">
                        <span class="bx bxs-map"></span>
                        {{$about->from}}
                    </span>
                    </div>
                </div>
                </div>
                <div class="card-kota2">
                <div class="card-kota">
                    <div class="card">
                    <img
                        class="card-img"
                        src="/image/{{$about->imagecurrently}}"
                        alt="Currently In Image"
                    />
                    <div class="card-img-overlay">
                        <h5>Currently In</h5>
                        <span class="value">
                        <span class="bx bxs-map"></span>
                        {{$about->currently}}
                        </span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- Skills -->
        <section class="skills-section" id="skills">
            <div class="container">
                <p class="text-green fw-semibold">Skills</p>
                <h2 class="section-title mb-5">My Skills in a Nutshell</h2>
                <div class="row">
                    <!-- Frontend Skills -->
                    <div class="col-md-4">
                        <div class="skills-content">
                            <h3 class="skills-title">
                            <i class="bx bx-bracket"></i>
                            Frontend Developer
                            </h3>
                            <div class="skills-info">
                            @foreach ($skillsFrontend as $skillsfrontend)
                                <div class="skills-data">
                                    <div class="skills-logo">
                                        <img
                                            src="/image/{{$skillsfrontend->logo}}"
                                            alt="Skills Image"
                                        />
                                    </div>
                                        <h3 class="skills-name">{{$skillsfrontend->title}}</h3>
                                        <span class="skills-subtitle">{{$skillsfrontend->level}}</span>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Backend Skills -->
                    <div class="col-md-4">
                        <div class="skills-content">
                            <h3 class="skills-title">
                            <i class="bx bx-bracket"></i>
                            Backend Developer
                            </h3>
                            <div class="skills-info">
                            @foreach ($skillsBackend as $skillsbackend)
                                <div class="skills-data">
                                    <div class="skills-logo">
                                        <img
                                            src="/image/{{$skillsbackend->logo}}"
                                            alt="Skills Image"
                                        />
                                    </div>
                                        <h3 class="skills-name">{{$skillsbackend->title}}</h3>
                                        <span class="skills-subtitle">{{$skillsbackend->level}}</span>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Others Skills -->
                    <div class="col-md-4">
                        <div class="skills-content">
                            <h3 class="skills-title">
                            <i class="bx bx-bracket"></i>
                            Others Skills
                            </h3>
                            <div class="skills-info">
                            @foreach ($skillsOther as $skillsother)
                                <div class="skills-data">
                                    <div class="skills-logo">
                                        <img
                                            src="/image/{{$skillsother->logo}}"
                                            alt="Skills Image"
                                        />
                                    </div>
                                        <h3 class="skills-name">{{$skillsother->title}}</h3>
                                        <span class="skills-subtitle">{{$skillsother->level}}</span>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resume -->
        <section class="resume-section" id="resume">
            <div class="container">
                <p class="text-green fw-semibold">Resume</p>
                <h2 class="section-title mb-5">My Journey So Far</h2>
                <div class="row">
                    <!-- Summary -->
                    <div class="col-md-4">
                        <div class="resume-content">
                        <h3 class="resume-title">
                            <i class="bx bx-book-reader"></i>
                            Summary
                        </h3>
                        <div class="resume-info">
                            <div>
                            <h3 class="resume-name">{{$resumesummary->name}}</h3>
                            <span class="resume-caption">{{$resumesummary->description}}</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="col-md-4">
                        <div class="resume-content">
                            <h3 class="resume-title">
                                <i class="bx bxs-graduation"></i>
                                Education
                            </h3>
                            @foreach ($resumeEducation as $resumeeducation)
                                <div class="resume-info">
                                    <div>
                                        <h3 class="resume-name">{{$resumeeducation->major}}</h3>
                                        <span class="resume-country">{{$resumeeducation->place}}</span>
                                        <span class="resume-year">{{$resumeeducation->year}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Experience -->
                    <div class="col-md-4">
                        <div class="resume-content">
                            <h3 class="resume-title">
                                <i class="bx bxs-briefcase-alt"></i>
                                Experience
                            </h3>
                            @foreach ($resumeExperience as $resumeexperience)
                                <div class="resume-info">
                                    <div>
                                        <h3 class="resume-name">{{$resumeexperience->experience}}</h3>
                                        <span class="resume-country">{{$resumeexperience->place}}</span>
                                        <span class="resume-year">{{$resumeexperience->year}}</span>
                                        <br />
                                        <ul>
                                            <li>{{$resumeexperience->description}}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="portfolio-section" id="portfolio">
            <div class="container">
                <p class="text-green fw-semibold">Portfolio</p>
                <h2 class="section-title mb-5">Selected Projects</h2>
                <div class="swiper portfolio-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($portfolioProject as $portfolioproject)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <img
                                            src="/image/{{$portfolioproject->image}}"
                                            alt="Image"
                                            class="card-img-top rounded mb-3"
                                        />
                                        <h6 class="fw-semibold">{{$portfolioproject->title}}</h6>
                                        <a
                                            href="{{$portfolioproject->link}}"
                                            target="_blank"
                                            style="text-decoration: none"
                                            class="text-green"
                                        >
                                            Detail Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end gap-3 mt-3">
                    <button class="btn btn-light d-flex align-items-center justify-content-center btn-prev">
                        <i class="bx bx-left-arrow-alt fs-5"></i>
                    </button>
                    <button class="btn btn-light d-flex align-items-center justify-content-center btn-next">
                        <i class="bx bx-right-arrow-alt fs-5"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact-section" id="contact">
            <div class="container">
                <p class="text-green fw-semibold">Contact</p>
                <h2 class="section-title mb-5">Let's Work Together.</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">
                            <h3 class="contact-title">
                                <i class="bx bxs-chat"></i>
                                Talk to Me
                            </h3>
                            <div class="contact-info">
                                <div class="contact-data">
                                    <i class="bx bxs-envelope"></i>
                                    <h4 class="contact-data-title">Email</h4>
                                    <span class="contact-data-info">{{$contact->email}}</span>
                                </div>
                                <div class="contact-data">
                                    <i class="bx bxs-phone"></i>
                                    <h4 class="contact-data-title">Phone</h4>
                                    <span class="contact-data-info">{{$contact->phone}}</span>
                                </div>
                                <div class="contact-data">
                                    <i class="bx bxs-map"></i>
                                    <h4 class="contact-data-title">Location</h4>
                                    <span class="contact-data-info">{{$contact->location}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-content">
                            <h3 class="contact-title">
                                <i class="bx bxs-send"></i>
                                Get in Touch
                            </h3>
                            <form action="" class="contact-form" id="contact-form">
                                <div class="contact-form-div">
                                    <label class="contact-form-tag">Fullname</label>
                                    <input
                                        type="text"
                                        name="user_name"
                                        required
                                        placeholder="Your Fullname"
                                        class="contact-form-input"
                                        id="contact-name"
                                    />
                                </div>
                                <div class="contact-form-div">
                                    <label class="contact-form-tag">Email</label>
                                    <input
                                        type="email"
                                        name="user_email"
                                        required
                                        placeholder="Your Email"
                                        class="contact-form-input"
                                        id="contact-email"
                                    />
                                </div>
                                <div class="contact-form-div contact-form-area">
                                    <label class="contact-form-tag">Message</label>
                                    <textarea
                                        name="user_message"
                                        required
                                        placeholder="Your Message"
                                        class="contact-form-input"
                                        id="contact-message"
                                    ></textarea>
                                </div>
                                <p class="contact-check" id="contact-check"></p>
                                <button type="submit" class="contact-button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-3">
            <div class="container">
                <p class="text-white text-center fs-7 mb-0">&copy; Copyright 2023
                    <span class="fw-bold">{{$others->copyrightname}}</span>
                </p>
            </div>
        </footer>

        <!-- Bootstrap Framework -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- SwiperJS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper(".portfolio-swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
            nextEl: ".btn-next",
            prevEl: ".btn-prev",
            },
            breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            },
        });
        </script>

        <!-- Automated Typed Text -->
        <script src="assets/js/typedtext.js"></script>

        <!-- Scroll Reveal -->
        <script>
        ScrollReveal({
            // reset: true,
            distance: "60px",
            duration: 2500,
            delay: 400,
        });

        ScrollReveal().reveal(
            ".header-section, .about-section, .skills-section, .resume-section, .portfolio-section , .contact-section",
            { delay: 500, origin: "bottom" }
        );
        </script>

        <!-- EmailJS -->
        <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
        ></script>
        <script src="assets/js/email.js"></script>
    </body>
</html>
