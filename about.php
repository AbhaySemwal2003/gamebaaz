<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="Sidebar/sidebar.css">
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <img src="logo.jpg" alt="">
            </div>
            <div class="name">
                <h1>GamesX</h1>
            </div>
            <div class="lgn_snp">
                <a href="">Login</a>
                <a href="">Signup</a>
            </div>
        </div>
        
        <nav>
            <ul class="sidebar">
                <li onclick="closeSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="offers.html">Offers</a></li>
            </ul>
            <ul>
                <li><a href=""><strong>GamesX</strong></a></li>
                <li class="hideOnMobile"><a href="index.html">Home</a></li>
                <li class="hideOnMobile"><a href="about.html">About</a></li>
                <li class="hideOnMobile"><a href="contacts.html">Contacts</a></li>
                <li class="hideOnMobile"><a href="news.html">News</a></li>
                <li class="hideOnMobile"><a href="offers.html">Offers</a></li>
                <li class="open_button" onclick="openSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </nav>
        <div class="abt_block" style="margin-top: 10px; padding: 15px;">
            <h1 style="color: #ff005d;">Welcome to GamesX!</h1>
            <br>
            <p>At GamesX, we're not just another gaming store – we're your ultimate destination for all things gaming. Whether you're a hardcore gamer, a casual player, or somewhere in between, we've got everything you need to fuel your passion for gaming.</p>
        </div>
        <div class="about_container">
            <div class="abt_block">
                <h3>Our Mission:</h3>
                <br>
                <p>GamesX was founded with a clear mission in mind: to create a haven for gamers of all kinds. We're dedicated to providing an unparalleled shopping experience, where gamers can find the latest releases, classic favorites, and everything in between under one roof. Our goal is to be more than just a store; we want to be a community hub where gamers can connect, share their passion, and immerse themselves in the world of gaming.</p>
            </div>
            <div class="abt_block">
                <h3>What Sets Us Apart:</h3>
                <br>
                <p>What makes GamesX stand out from the crowd? It's simple – our unwavering commitment to our customers. We're not here just to sell games; we're here to help you find the perfect game for you, offer expert advice, and ensure that you have everything you need to enjoy your gaming experience to the fullest. From our extensive selection to our top-notch customer service, we go above and beyond to exceed your expectations every step of the way.</p>
            </div>
            <div class="abt_block">
                <h3>Our Team:</h3>
                <br>
                <p>Behind GamesX is a team of passionate gamers who eat, sleep, and breathe gaming. From our knowledgeable staff on the front lines to our dedicated support team behind the scenes, every member of the GamesX family is driven by a shared love for gaming and a commitment to delivering excellence.</p>
            </div>
            <div class="abt_block">
                <h3>Get in Touch:</h3>
                <br>
                <p>Ready to level up your gaming experience? Whether you're looking for the hottest new releases, seeking advice on your next purchase, or just want to chat with fellow gamers, we're here for you. Visit us in-store, browse our online catalog, or reach out to us via phone or email – whatever works best for you, we're always here to help.</p>
            </div>
        </div>
        
        <footer>
            <pre>Designed By - <strong>M O H I T  K U M A R</strong>  &  <strong>A B H A Y  S E M W A L</strong></pre>
            <p>© GamesX 2024. All rights reserved. All trademarks and registered trademarks are the property of their respective owners. </p>
        </footer>
        <script src="Sidebar/sidebar.js"></script>
    </body>
</html>