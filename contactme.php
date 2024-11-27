<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contactme.css">
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
                <li class="navmenu_items"><a href="portfolio.php">Portfolio</a></li>
                <a href="#" class="bn5">Contact Me</a>
            </ul>
        </div>
    </header>
    <div class="contact-section" id="letstalkform">
        <h2>Let's Talk</h2>
        <p>Feel free to drop a message. I'll get back to you as soon as possible!</p>

        <form class="contact-form">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="number">Your Contact Number:</label>
                <input type="number" id="number" placeholder="Enter your contact number" class="no-spinner">
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" rows="5" placeholder="Write your message"></textarea>
            </div>

            <a href="/"><button type="button" class="bn632-hover bn23">Button</button></a>
        </form>
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