<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yeseva+One&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="navbar">
            <div class="navdiv">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/Logo.png" alt="My Logo">
                    </a>
                </div>
            </div>
            <ul class="navmenu">
                <li class="navmenu_items"><a href="index.php">Home</a></li>
                <li class="navmenu_items"><a href="aboutme.php">About Me</a></li>
                <li class="navmenu_items"><a href="skills.php">Skills</a></li>
                <li class="navmenu_items"><a href="#">Portfolio</a></li>
                <a href="contactme.php" class="bn5">Contact Me</a>
            </ul>
        </div>
    </header>

    <div class="projectpart">
        <div class="project-title">
            <h1>PROJECTS</h1>
        </div>
        <div class="first-row" id="first-row">
            <div class="modal" id="modalbox">
                <div class="modalcontent">
                    <div class="modal-images-div">
                        <div class="proj1-img1">
                            <img src="assets/images/proj1.png" alt="Project 1">
                        </div>
                        <div class="proj1-img2">
                            <img src="assets/images/proj1-pic1.png" alt="Project 1">
                            <img src="assets/images/proj1-pic3.png" alt="Project 1">
                        </div>
                    </div>
                    <div class="modaldesc">
                        <h1>Barangay Scheduling KIOSK</h1>
                        <p>In this project, I developed a comprehensive barangay kiosk system to streamline local
                            services and improve accessibility. The system featured a mobile application,
                            built using Android Studio, that provided users with a convenient way to access barangay
                            information and services. Complementing the app, I designed a responsive website using
                            HTML, CSS, and JavaScript to ensure seamless interaction across various devices. For
                            data storage and management, I integrated Firebase, enabling secure, real-time updates
                            and efficient handling of user data and service requests. This project demonstrated my
                            ability to combine mobile development, web technologies, and cloud-based solutions into
                            a cohesive and user-friendly system.
                        </p>
                    </div>
                    <a href="#modalcontent" class="modalclose">&times;</a>
                </div>
            </div>

            <div class="modal" id="modalbox2">
                <div class="modalcontent">
                    <div class="modal-images-div">
                        <div class="proj2-img1">
                            <img src="assets/images/proj2-1.jpeg" alt="Project 1">
                            <img src="assets/images/proj2-2.jpeg" alt="Project 1">
                            <img src="assets/images/proj2-3.jpeg" alt="Project 1">
                        </div>
                    </div>
                    <div class="modaldesc">
                        <h1>JAAMPS Engineering Calculator</h1>
                        <p>As part of this project, I designed and built an innovative engineering calculator
                            application using Android Studio. The app offered functionalities such as advanced
                            computations, resistor value decoding from color codes, and seamless conversion between
                            various engineering metrics (e.g., voltage, current, resistance, and more).
                            This project honed my skills in Android app development, UI/UX design, and
                            integrating real-world engineering concepts into functional software solutions.
                        </p>
                    </div>
                    <a href="#modalcontent" class="modalclose">&times;</a>
                </div>
            </div>

            <div class="modal" id="modalbox3">
                <div class="modalcontent">
                    <div class="modal-images-div">
                        <div class="proj3-img1">
                            <img src="assets/images/WORD OF THE DAY PAGE 1.png" alt="Project 1">
                            <img src="assets/images/SEARCH BAR PAGE.png" alt="Project 1">
                            <img src="assets/images/RECENT WORD PAGE.png" alt="Project 1">
                        </div>
                    </div>
                    <div class="modaldesc">
                        <h1>Dictionary with Merriam-Webster API</h1>
                        <p>I created a mobile dictionary app powered by
                            Node.js and the Merriam-Webster API. The app
                            allowed users to search for word definitions,
                            synonyms, and examples, providing a fast and user-friendly experience.
                            By integrating the Merriam-Webster API, I ensured accurate and
                            up-to-date linguistic data. This project enhanced my skills in backend
                            development, API integration, and building responsive, data-driven mobile applications.
                        </p>
                    </div>
                    <a href="#modalcontent" class="modalclose">&times;</a>
                </div>
            </div>

            <div class="first-proj">
                <div class="images">
                    <img src="assets/images/proj1.png" alt="Project 1">
                </div>
                <div class="description">
                    <h1>Barangay Tambubong Scheduling Kiosk</h1>
                    <p>
                        I developed a barangay kiosk system to streamline services and improve accessibility.
                        It included a mobile app built with Android Studio, a responsive website using HTML,
                        CSS, and JavaScript, and Firebase for secure, real-time data management. This project
                        showcased my skills in mobile development, web technologies, and cloud-based solutions.
                    </p>
                    <div class="button-div">
                        <a class="bn39" href="#modalbox"><span class="bn39span">Button</span></a>
                    </div>
                </div>
            </div>

            <div class="second-proj">
                <div class="images">
                    <img src="assets/images/proj2-1.jpeg" alt="Project 2">
                </div>
                <div class="description">
                    <h1>JAAMPS Engineering Calculator</h1>
                    <p>
                        I developed an engineering calculator app using Android Studio with features like
                        advanced computations, resistor color code decoding, and metric conversions.
                        This project enhanced my skills in Android development, UI/UX design, and integrating
                        engineering concepts into software solutions.
                    </p>
                    <div class="button-div">
                        <a class="bn39" href="#modalbox2"><span class="bn39span">Button</span></a>
                    </div>
                </div>
            </div>
            <div class="third-proj">
                <div class="images">
                    <img src="assets/images/WORD OF THE DAY PAGE 1.png" alt="Project 1">
                </div>
                <div class="description">
                    <h1>Dictionary with<br>Merriam-Webster API</h1>
                    <p>I developed a mobile dictionary app using Node.js and the Merriam-Webster API,
                        enabling users to access word definitions, synonyms, and examples. This project
                        enhanced my skills in backend development, API integration, and building responsive
                        mobile applications.
                    </p>
                    <div class="button-div">
                        <a class="bn39" href="#modalbox3"><span class="bn39span">Button</span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<footer>
    <div class="footer-button">
        <a class="button" href="#">
            <svg class="svgIcon" viewBox="0 0 384 512">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"></path>
            </svg>
        </a>
    </div>
    <div class="copyright">
        <p>@2024 Jay Ruiz De Ocampo All Rights Reserved.</p>
    </div>

</footer>

</html>