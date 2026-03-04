<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
echo "<img src='uploads/" . $_SESSION['user']['profile_image'] . "' width='120'>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ichiraku's Kitchen</title>
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
                    <li><a href="./logout.php" id="log">Logout</a></li>

                </ul>
            </div>
        </div>
    </header>

    <section class="welcome">
        <h1>Hi, <?php echo $_SESSION['user']['first_name'];
             ?>!!<br>
            Welcome to<br>
            <span class="sect-h2">
                Ichiraku's Kitchen
            </span><br>
        </h1>
        <p>Delicious Meals Delivered To Your Doorstep</p>
        <button class="dash-cta-btn">Order Now</button>
    </section>

    <section class="products">
        <h2 class="prod-head">Our Menu</h2>
        <p class="prod-para"><u><em>Choose Your Favorite Dish</em></u></p>

        <div class="product-list">
            <div class="product-item">
                <img src="./images/burger-fries.png" alt="Food" width="150px">
                <h3>Burger & Fries</h3>
                <p style="color: #d33c00;">GhC <strong>120.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>

            <div class="product-item">
                <img src="./images/joff.jpg" alt="Food" width="150px">
                <h3>Jollof Rice</h3>
                <p style="color: #d33c00;">GhC <strong>200.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>

            <div class="product-item">
                <img src="./images/pizza.png" alt="Food" width="150px">
                <h3>Pizza</h3>
                <p style="color: #d33c00;">GhC <strong>250.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>

            <div class="product-item">
                <img src="./images/hotdog.jpg" alt="Food" width="150px">
                <h3>Hotdog</h3>
                <p style="color: #d33c00;">GhC <strong>150.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>

            <div class="product-item">
                <img src="./images/sushi-im.jpg" alt="Food" width="150px">
                <h3>Sushi</h3>
                <p style="color: #d33c00;">GhC <strong>290.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>

            <div class="product-item">
                <img src="./images/grill.png" alt="Food" width="200px">
                <h3>Grilled Chicken</h3>
                <p style="color: #d33c00;">GhC <strong>180.00</strong></p>
                <button class="order-btn">Add To Cart</button>
            </div>
        </div>

        <div class="delivery-info">
            <div class="delivery-mode">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640"
                    width="40"
                    height="40"
                    fill="currentColor">
                    <path d="M64 160C64 124.7 92.7 96 128 96L416 96C451.3 96 480 124.7 480 160L480 192L530.7 192C547.7 192 564 198.7 576 210.7L621.3 256C633.3 268 640 284.3 640 301.3L640 448C640 483.3 611.3 512 576 512L572.7 512C562.3 548.9 528.3 576 488 576C447.7 576 413.8 548.9 403.3 512L300.7 512C290.3 548.9 256.3 576 216 576C175.7 576 141.8 548.9 131.3 512L128 512C92.7 512 64 483.3 64 448L64 400L24 400C10.7 400 0 389.3 0 376C0 362.7 10.7 352 24 352L136 352C149.3 352 160 341.3 160 328C160 314.7 149.3 304 136 304L24 304C10.7 304 0 293.3 0 280C0 266.7 10.7 256 24 256L200 256C213.3 256 224 245.3 224 232C224 218.7 213.3 208 200 208L24 208C10.7 208 0 197.3 0 184C0 170.7 10.7 160 24 160L64 160zM576 352L576 301.3L530.7 256L480 256L480 352L576 352zM256 488C256 465.9 238.1 448 216 448C193.9 448 176 465.9 176 488C176 510.1 193.9 528 216 528C238.1 528 256 510.1 256 488zM488 528C510.1 528 528 510.1 528 488C528 465.9 510.1 448 488 448C465.9 448 448 465.9 448 488C448 510.1 465.9 528 488 528z" />
                </svg>
                <h3>Fast Delivery</h3>
                <p>Quick & Reliable</p>
            </div>

            <div class="delivery-mode">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    stroke="currentColor" s
                    troke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-cash-register">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M21 15h-2.5c-.398 0 -.779 .158 -1.061 .439c-.281 .281 -.439 .663 -.439 1.061c0 .398 .158 .779 .439 1.061c.281 .281 .663 .439 1.061 .439h1c.398 0 .779 .158 1.061 .439c.281 .281 .439 .663 .439 1.061c0 .398 -.158 .779 -.439 1.061c-.281 .281 -.663 .439 -1.061 .439h-2.5" />
                    <path d="M19 21v1m0 -8v1" />
                    <path d="M13 21h-7c-.53 0 -1.039 -.211 -1.414 -.586c-.375 -.375 -.586 -.884 -.586 -1.414v-10c0 -.53 .211 -1.039 .586 -1.414c.375 -.375 .884 -.586 1.414 -.586h2m12 3.12v-1.12c0 -.53 -.211 -1.039 -.586 -1.414c-.375 -.375 -.884 -.586 -1.414 -.586h-2" />
                    <path d="M16 10v-6c0 -.53 -.211 -1.039 -.586 -1.414c-.375 -.375 -.884 -.586 -1.414 -.586h-4c-.53 0 -1.039 .211 -1.414 .586c-.375 .375 -.586 .884 -.586 1.414v6m8 0h-8m8 0h1m-9 0h-1" />
                    <path d="M8 14v.01" />
                    <path d="M8 17v.01" />
                    <path d="M12 13.99v.01" />
                    <path d="M12 17v.01" />
                </svg>
                <h3>MoMo Payment</h3>
                <p>Easy MTN MoMo Payments</p>
            </div>

            <div class="delivery-mode">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640"
                    width="40"
                    height="40"
                    fill="currentColor">
                    <path d="M320 128C241 128 175.3 185.3 162.3 260.7C171.6 257.7 181.6 256 192 256L208 256C234.5 256 256 277.5 256 304L256 400C256 426.5 234.5 448 208 448L192 448C139 448 96 405 96 352L96 288C96 164.3 196.3 64 320 64C443.7 64 544 164.3 544 288L544 456.1C544 522.4 490.2 576.1 423.9 576.1L336 576L304 576C277.5 576 256 554.5 256 528C256 501.5 277.5 480 304 480L336 480C362.5 480 384 501.5 384 528L384 528L424 528C463.8 528 496 495.8 496 456L496 435.1C481.9 443.3 465.5 447.9 448 447.9L432 447.9C405.5 447.9 384 426.4 384 399.9L384 303.9C384 277.4 405.5 255.9 432 255.9L448 255.9C458.4 255.9 468.3 257.5 477.7 260.6C464.7 185.3 399.1 127.9 320 127.9z" />
                </svg>
                <h3>24/7 Support</h3>
                <p>Always Here to Help</p>

            </div>
        </div>
    </section>

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