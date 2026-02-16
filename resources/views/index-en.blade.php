<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baraya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- aso -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Custom CSS -->
    <link href="./assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/baraya.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#why">
                                Why Us
                            </a>
                        </li>


                    </ul>
                    <div class="demo-container">
                        <div class="lang-btn-4" onclick="toggleSwitch(this)">
                            <a href="{{ route('home') }}" class="lang-option ">AR</a>
                            <a href="{{ route('home_en') }}" class="lang-option active">EN</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container">
                <div class="main_hero_container">
                    <div class="hero-content">
                        <h1>
                            Your first step
                            <span class="orange-text">towards rehabilitation </span> and <span
                                class="blue-text">recovery </span>
                            starts here.
                        </h1>

                        <p class="hero-description">
                            Baraya Extended Care
                            and Medical Rehabilitation is committed.
                            to providing exceptional and
                            comprehensive healthcare services,
                            including long-term care, medical
                            rehabilitation, and home healthcare. Our
                            medical services are carefully designed.
                            <br>
                            to meet the needs of all patients and
                            improve their quality of life.
                        </p>

                        <div class="cta-buttons">
                            <button class="btn btn-orange" id="openBooking">
                                <span>Book Your Appointment Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <a href="tel:+966920014962" class="btn btn-blue">
                                <i class="fas fa-phone"></i>
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>

                    <div class="hero-image">
                        <div class="image-wrapper">

                            <div class="main-image-container">
                                <div class="glow-orange"></div>
                                <div class="image-border">
                                    <div class="image-inner">
                                        <img src="./assets/img/Logo...jpg" alt="أخصائي علاج طبيعي" class="doctor-image">

                                    </div>
                                </div>
                            </div>


                            <div class="floating-card card-customers">
                                <div class="card-title">
                                    <i class="fas fa-smile"></i>
                                    <span>Happy customers</span>
                                </div>
                                <div class="avatars-row">
                                    <img src="https://i.pravatar.cc/150?img=33" alt="Client" class="avatar">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="Client" class="avatar">
                                    <img src="https://i.pravatar.cc/150?img=25" alt="Client" class="avatar">
                                    <div class="avatar-more">+90</div>
                                </div>
                            </div>

                            <div class="floating-card card-rating">
                                <div class="rating-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="rating-text">Fast and guaranteed results</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="who-we-are-section" id="about">
            <div class="container">
                <div class="main_about">
                    <div class="video-container">
                        <div class="video-wrapper">
                            <div class="image-box">
                                <video id="myVideo" width="100%" autoplay loop playsinline>
                                    <source src="./assets/img/axxs.mp4" type="video/mp4">
                                    متصفحك لا يدعم الفيديو.
                                </video>

                                <div class="video-controls">
                                    <button id="playPauseBtn">
                                        <i class="fa-solid fa-pause"></i>
                                    </button>

                                    <button id="muteBtn">
                                        <i class="fa-solid fa-volume-high"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="info-cards">
                            <div class="info-card">
                                <div class="info-number">5000+</div>
                                <div class="info-label">Patients</div>
                            </div>
                            <div class="info-card">
                                <div class="info-number">30+</div>
                                <div class="info-label">Specialists</div>
                            </div>
                            <div class="info-card">
                                <div class="info-number">98%</div>
                                <div class="info-label">Success Rate</div>
                            </div>
                        </div>
                    </div>
                    <div class="values-container_main">
                        <h2 class="section-title">Who We Are</h2>
                        <p class="description-text">
                            Baraya Medical Hospitals and out Patient Clinics is one of the projects and investments of
                            TVM Capital Healthcare Partners, an investment fund known for its expertise in establishing
                            and operating long-term care and medical rehabilitation facilities in the Arabian Gulf
                            region.
                        </p>
                        <div class="main_item">
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <span class="value-text">Trust</span>
                            </div>

                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span class="value-text">Care</span>
                            </div>

                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="value-text">Excellence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Our Medical Services</h2>
                    <p class="section-subtitle">We offer a comprehensive range of specialized medical services with the
                        highest quality standards.</p>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_2.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Physical Therapy</h3>
                            <p>Comprehensive physiotherapy services to restore mobility and improve quality of life.
                            </p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_1.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Occupational Therapy</h3>
                            <p>We help patients develop daily living skills and regain independence.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_3.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Speech & Language Therapy</h3>
                            <p>Specialized treatment for communication and swallowing difficulties with proven results..
                            </p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_4.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Elderly Care</h3>
                            <p>Comprehensive, humane care tailored to the special needs of the elderly.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_5.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Rehabilitation of chronic conditions
                            </h3>
                            <p>Advanced treatment programs for chronic conditions under the supervision of experienced
                                specialists</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_6.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Advanced Device Sessions</h3>
                            <p>utilize the latest therapeutic technologies to achieve effective and measurable results
                            </p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_7.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Hand injuries and stress injuries
                            </h3>
                            <p>We assess and treat injuries and conditions of the upper extremities from the shoulder to
                                the hands.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_9.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Women's Health</h3>
                            <p>We offer specialized therapy sessions and exercises for women to treat common pelvic
                                problems such as urinary incontinence and chronic pain.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_19.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Children's Developmental and Motor Delays</h3>
                            <p>Our specialized team helps you diagnose and treat developmental delays, sensory
                                impairments, and cerebral palsy (hemiplegia, quadriplegia, and neuralgia).</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_12.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Spine & Back Conditions</h3>
                            <p>We help prevent and treat spinal problems such as scoliosis and kyphosis, and the
                                associated postural and functional imbalances.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_13.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Balance and Walking Disorders
                            </h3>
                            <p>We help prevent and treat falls and imbalances resulting from vestibular disorders and
                                tinnitus..</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="./assets/img/main_14.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Lymphedema</h3>
                            <p>We assess swelling and fluid accumulation in organs and hands resulting from injuries and
                                surgeries and provide an appropriate treatment plan for lymphatic drainage.</p>
                            <button class="btn-book">
                                <span>Book Now</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="main-section" id="why">
            <div class="container">
                <h2 class="section-title_main">Why Choose Braya</h2>
                <p>We offer a comprehensive range of specialized medical services with the highest quality standards.
                </p>

                <div class="container">
                    <div class="main_card_container">

                        <div class="card">
                            <img src="./assets/img/b.jpg" alt="Physical Therapy" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <div class="gear"></div>
                                </div>
                                <h3 class="card-title">Highly Experienced Specialized Medical Team</h3>
                                <p class="card-description">
                                    We offer comprehensive rehabilitation services aimed at improving quality of life by
                                    reducing pain, restoring mobility, improving strength and flexibility. Our services
                                    include different type pf rehabilitation services for variety of cases such as
                                    pediatrics conditions, sports injuries conditions, musculoskeletal conditions,
                                    neurological conditions, Lymphedema conditions, and women health conditions. Our
                                    high experienced team relies on accurate assessment and new treatment techniques to
                                    help you confidently regain the efficiency and the quality of your
                                    daily life.
                                </p>
                                <button class="card-btn btn-book">Book Now</button>
                            </div>
                        </div>

                        <div class="card">
                            <img src="./assets/img/v.jpg" alt="Rehabilitation Programs" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <div class="gear"></div>
                                </div>
                                <h3 class="card-title">Trust – Care – Excellence</h3>
                                <p class="card-description">
                                    Scientifically proven and specialized treatment programs tailored to each individual
                                    case based on a comprehensive assessment. These programs are delivered under the
                                    supervision of highly qualified and experienced professionals. They help accelerate
                                    recovery, support treatment outcomes, prevent recurrence, and improve overall health
                                    and Wellness for all ages.
                                </p>
                                <button class="card-btn btn-book">Book Now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="social-icons">
                <a href="https://www.tiktok.com/@baraya_care" title="TikTok" target="_blank" class="social-icon">
                    <i class="fab fa-tiktok"></i>
                </a>



                <a href="https://x.com/baraya_care" title="X">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.244 2H21.552L14.324 10.263L22.828 22H16.172L10.956 14.977L4.81 22H1.5L9.228 13.165L1.073 2H7.897L12.606 8.353L18.244 2ZM17.076 19.98H18.91L6.904 4.02H4.94L17.076 19.98Z" />
                    </svg>
                </a>


                <a href="https://www.instagram.com/baraya_care/?hl=ar" title="إنستغرام">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/company/barayacare/" title="لينكد إن">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>

                <a href="https://www.snapchat.com/explore/barayacare" title="Snapchat">
                    <i class="fa-brands fa-snapchat"></i>
                </a>


            </div>

            <div class="footer-links d-flex justify-content-center">
                <a class="nav-link ">الرئيسية</a>
                <a class="nav-link " href="#">من نحن</a>
                <a class="nav-link " href="#">الخدمات</a>
                <a class="nav-link" href="#why">لماذا نحن</a>

            </div>

            <div class="copyright">
                <p>2025 جميع الحقوق محفوظة - برايا للرعاية الطبية.</p>
            </div>
        </div>
    </footer>

    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <button class="modal-close" id="closeBooking">×</button>
            <div class="modal-header">
                <h2>Book Your Appointment</h2>
                <p>Fill in the details and we will contact you shortly</p>
            </div>

            <form id="bookingForm">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" required placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="phone">Mobile Number *</label>
                    <input type="tel" id="phone" required placeholder="Enter your mobile number">
                </div>

                <div class="form-group">
                    <label for="city">City *</label>
                    <select id="city" required>
                        <option value="">Select City</option>
                        <option value="jeddah">Jeddah</option>
                        <option value="riyadh">Riyadh</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Comment (Optional)</label>
                    <textarea id="comment" placeholder="Add any notes or additional details"></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit Booking</button>
            </form>
        </div>
    </div>

    <div class="modal" id="successModal">
        <div class="modal-content success-modal">
            <button class="modal-close" id="closeSuccess">×</button>
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h2>Your booking has been sent successfully</h2>
            <p>We will contact you as soon as possible</p>
        </div>
    </div>


    <div class="whatsapp-floating">
        <a href="https://wa.me/966556339036" target="_blank" class="wa-icon wa-one" data-city="Riyadh ">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a href="https://wa.me/966555970651" target="_blank" class="wa-icon wa-two" data-city="Jeddah">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: false,
            mirror: true
        });

        document.addEventListener("DOMContentLoaded", function () {
            console.log("DOM loaded - Starting initialization");

            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            console.log("Found nav links:", navLinks.length);

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    console.log("Nav link clicked:", href);

                    if (href.startsWith('#')) {
                        e.preventDefault();

                        const targetId = href;
                        const targetSection = document.querySelector(targetId);

                        if (targetSection) {
                            const navbar = document.querySelector('.navbar');
                            const navbarHeight = navbar ? navbar.offsetHeight : 0;
                            const targetPosition = targetSection.offsetTop - navbarHeight;

                            window.scrollTo({
                                top: targetPosition,
                                behavior: 'smooth'
                            });

                            const navbarCollapse = document.querySelector('.navbar-collapse');
                            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                                    toggle: true
                                });
                            }

                            navLinks.forEach(nav => nav.classList.remove('active'));
                            this.classList.add('active');
                        } else {
                            console.warn("Section not found:", targetId);
                        }
                    }
                });
            });

            window.addEventListener('scroll', function () {
                let current = '';
                const sections = document.querySelectorAll('section[id]');
                const navbar = document.querySelector('.navbar');
                const navbarHeight = navbar ? navbar.offsetHeight : 0;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - navbarHeight - 100;
                    const sectionHeight = section.offsetHeight;

                    if (window.pageYOffset >= sectionTop &&
                        window.pageYOffset < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });

            const bookBtns = document.querySelectorAll(".btn-book, .btn-primary");
            const bookingModal = document.getElementById("bookingModal");
            const successModal = document.getElementById("successModal");
            const closeBooking = document.getElementById("closeBooking");
            const closeSuccess = document.getElementById("closeSuccess");
            const bookingForm = document.getElementById("bookingForm");

            console.log("Found booking buttons:", bookBtns.length);
            console.log("Booking modal:", bookingModal);
            console.log("Success modal:", successModal);

            bookBtns.forEach((btn, index) => {
                console.log("Adding listener to button", index + 1);
                btn.addEventListener("click", function (e) {
                    e.preventDefault();
                    console.log("Booking button clicked!", index + 1);
                    if (bookingModal) {
                        bookingModal.classList.add("show");
                        document.body.style.overflow = "hidden";
                    }
                });
            });

            if (closeBooking) {
                closeBooking.addEventListener("click", function () {
                    console.log("Close booking clicked");
                    bookingModal.classList.remove("show");
                    document.body.style.overflow = "auto";
                });
            }

            if (closeSuccess) {
                closeSuccess.addEventListener("click", function () {
                    console.log("Close success clicked");
                    successModal.classList.remove("show");
                    document.body.style.overflow = "auto";
                });
            }

            if (bookingForm) {
                bookingForm.addEventListener("submit", function (e) {
                    e.preventDefault();
                    console.log("Form submitted");

                    const name = document.getElementById("name").value;
                    const phone = document.getElementById("phone").value;
                    const comment = document.getElementById("comment").value;

                    console.log("Booking Data:", { name, phone, comment });

                    bookingModal.classList.remove("show");
                    successModal.classList.add("show");

                    bookingForm.reset();

                    setTimeout(function () {
                        successModal.classList.remove("show");
                        document.body.style.overflow = "auto";
                    }, 3000);
                });
            }

            window.addEventListener("click", function (e) {
                if (e.target === bookingModal) {
                    bookingModal.classList.remove("show");
                    document.body.style.overflow = "auto";
                }
                if (e.target === successModal) {
                    successModal.classList.remove("show");
                    document.body.style.overflow = "auto";
                }
            });

            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape") {
                    if (bookingModal) bookingModal.classList.remove("show");
                    if (successModal) successModal.classList.remove("show");
                    document.body.style.overflow = "auto";
                }
            });

            console.log("All event listeners initialized successfully");
        });
    </script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/bundled/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
