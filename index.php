<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ichiraku's Kitchen</title>
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>

    <header>
        <div class="header-container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="logo"
                    width="40"
                    height="40"
                    viewBox="0 0 640 640"
                    fill="currentColor">
                    <path d="M127.9 78.4C127.1 70.2 120.2 64 112 64C103.8 64 96.9 70.2 96 78.3L81.9 213.7C80.6 219.7 80 225.8 80 231.9C80 277.8 115.1 315.5 160 319.6L160 544C160 561.7 174.3 576 192 576C209.7 576 224 561.7 224 544L224 319.6C268.9 315.5 304 277.8 304 231.9C304 225.8 303.4 219.7 302.1 213.7L287.9 78.3C287.1 70.2 280.2 64 272 64C263.8 64 256.9 70.2 256.1 78.4L242.5 213.9C241.9 219.6 237.1 224 231.4 224C225.6 224 220.8 219.6 220.2 213.8L207.9 78.6C207.2 70.3 200.3 64 192 64C183.7 64 176.8 70.3 176.1 78.6L163.8 213.8C163.3 219.6 158.4 224 152.6 224C146.8 224 142 219.6 141.5 213.9L127.9 78.4zM512 64C496 64 384 96 384 240L384 352C384 387.3 412.7 416 448 416L480 416L480 544C480 561.7 494.3 576 512 576C529.7 576 544 561.7 544 544L544 96C544 78.3 529.7 64 512 64z" />
                </svg>

                <strong>Ichiraku's</strong>
            </div>

            <div class="navs">
                <div>
                    <ul class="nav-list">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./dashboard.php">Dashboard</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="navs">

                <ul class="nav-list">
                    <li><a href="./login.php" id="log">Login</a></li>
                    <li><a href="./register.php" id="regi">Register</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main-body">
        <section class="content">
            <div class="welcome-section">
                <h1>
                    <span style="margin-left: 100px;">Welcome</span> to<br />
                    <span style="color: #bb0000; font-family: 'Arial Black', sans-serif; font-size: 50px;">
                        Ichiraku's Kitchen
                    </span>
                </h1>
                <h2 style="font-family: sans-serif;">The world of tasty and fresh food.</h2>
                <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    Experience the finest flavors and highest quality<br> ingredients in every dish we serve.<br />
                </p>
                <p style="margin-top: 30px;">
                    <strong> Hungry for the full experience?</strong> <br>
                    Unlock our secret menu and exclusive offers.
                </p>

                <div class="button-container">
                    <div class="login-btn" style="margin-top: 20px;">
                        <a href="./login.php" class="cta-button">
                            <strong><em>Get Started</em></strong>
                        </a>
                    </div>

                    <div id="register">
                        <p>Not signed in yet?</p>
                        <a href="./register.php" class="cta-btn">
                            <strong><em>Register NOW</em></strong>
                        </a>
                    </div>

                </div>
            </div>

            <div class="image-section" style="transform: translateY(-50px);">
                <img src="./images/burger.jpg" alt="Burger Image" width="500px" height="500px" />
            </div>
        </section>
    </main>

    <footer>
        <div class="main-footer">

            <div class=contact>
                <h2><u>Contact Us</u></h2>
                <div class="phone">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="contact-svg"
                        viewBox="0 0 640 640"
                        width="20"
                        height="20"
                        fill="currentColor">
                        <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                    </svg>
                    <p>+233 24 567 8901</p>
                </div>

                <div class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                        class="contact-svg"
                        width="20"
                        height="20"
                        fill="currentColor">
                        <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                    </svg>
                    <p>info@ichirakuskitchen.com</p>
                </div>

            </div>

            <div class="follow">
                <h2><u>Follow Us</u></h2>
                <div class="socials">
                    <div class="fb">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                            class="social"
                            width="20"
                            height="20"
                            fill="currentColor">
                            <path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z" />
                        </svg>
                    </div>
                    <div class="x">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                            class="social"
                            width="20"
                            height="20"
                            fill="currentColor">
                            <path d="M523.4 215.7C523.7 220.2 523.7 224.8 523.7 229.3C523.7 368 418.1 527.9 225.1 527.9C165.6 527.9 110.4 510.7 64 480.8C72.4 481.8 80.6 482.1 89.3 482.1C138.4 482.1 183.5 465.5 219.6 437.3C173.5 436.3 134.8 406.1 121.5 364.5C128 365.5 134.5 366.1 141.3 366.1C150.7 366.1 160.1 364.8 168.9 362.5C120.8 352.8 84.8 310.5 84.8 259.5L84.8 258.2C98.8 266 115 270.9 132.2 271.5C103.9 252.7 85.4 220.5 85.4 184.1C85.4 164.6 90.6 146.7 99.7 131.1C151.4 194.8 229 236.4 316.1 240.9C314.5 233.1 313.5 225 313.5 216.9C313.5 159.1 360.3 112 418.4 112C448.6 112 475.9 124.7 495.1 145.1C518.8 140.6 541.6 131.8 561.7 119.8C553.9 144.2 537.3 164.6 515.6 177.6C536.7 175.3 557.2 169.5 576 161.4C561.7 182.2 543.8 200.7 523.4 215.7z" />
                        </svg>
                    </div>
                    <div class="ig">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                            class="social"
                            width="20"
                            height="20"
                            fill="currentColor">
                            <path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <span class="copyright">&copy; 2026 Ichiraku's Kitchen. All rights reserved.</span>
    </footer>
</body>

</html>