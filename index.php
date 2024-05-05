<!DOCTYPE html>
<html>
<head>
    <title>GamesX</title>
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
        <a href="/gamebaaz/login.php">Login</a>
        <a href="/gamebaaz/signup.php">Signup</a>
    </div>
</div>

<nav>
    <ul class="sidebar">
        <li onclick="closeSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="offers.php">Offers</a></li>
    </ul>
    <ul>
        <li><a href=""><strong>GamesX</strong></a></li>
        <li class="hideOnMobile"><a href="index.php">Home</a></li>
        <li class="hideOnMobile"><a href="about.php">About</a></li>
        <li class="hideOnMobile"><a href="contacts.php">Contacts</a></li>
        <li class="hideOnMobile"><a href="news.php">News</a></li>
        <li class="hideOnMobile"><a href="offers.php">Offers</a></li>
        <li class="open_button" onclick="openSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
</nav>

<div class="hd">
    <div class="about">
        <h3>Welcome to GamesX - Where Gaming Dreams Come True!</h3>
        <br>
        <p>Embark on an exhilarating journey into the heart of gaming excellence with GamesX. Whether you're a seasoned gamer or just stepping into the realm of virtual adventures, we've got something for everyone.</p>
        <br>
        <div class="social">
            <a href=""><img src="/social_icons/instagram.png" alt=""></a>
            <a href=""><img src="/social_icons/twitter.png" alt=""></a>
            <a href=""><img src="/social_icons/facebook.png" alt=""></a>
            <a href=""><img src="/social_icons/whatsapp.png" alt=""></a>
            <a href=""><img src="/social_icons/youtube.png" alt=""></a>
            <a href=""><img src="/social_icons/discord.png" alt=""></a>
        </div>
    </div>
    
    <div class="slide">
        <div class="slideshow-container">
            <div class="slides fade">
              <img src="game_thumbs/assetto-corsa-competizione-pc-cover.jpg">
            </div>
          
            <div class="slides fade">
              <img src="game_thumbs/dying-light-2-stay-human-pc-cover.jpg">
            </div>
          
            <div class="slides fade">
              <img src="game_thumbs/forza-motorsport-pc-cover.jpg">
            </div>
          
          </div>
    </div>
</div>

<div class="game_list">
    <div class="games">
        <div class="game1">
            <img src="game_thumbs/the-callisto-protocol-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>The Callisto Protocol</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="The_Callisto_Protocol.html">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/horizon-forbidden-west-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Horizon Forbidden</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="Horizon_Forbidden.html">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/tekken-8-ultimate-edition-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Tekken 8</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="Tekken_8.html">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/assetto-corsa-competizione-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Assetto Corsa</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="Assetto_Corsa.html">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/grand-theft-auto-5-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>GTA 5</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="gta_5.html">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/dying-light-2-stay-human-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Dying Light 2</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/forza-motorsport-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Forza Motorsport</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/brothers-a-tale-of-two-sons-remake-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Brothers</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/cyberpunk-2077-ultimate-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Cyperpunk 2077</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/fallout-4-pc-cover-www.ovagames.com.jpg" alt="">
            <div class="g1_info">
                <h3>Fallout 4</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/sons-of-the-forest-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Sons of Forest</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/sker-ritual-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Sker Rituals</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/no-mans-sky-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>No Man Sky</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/remnant-2-pc-cover.jpg" alt="">
            <div class="g1_info">
                <h3>Remnant 2</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>

    <div class="games">
        <div class="game1">
            <img src="game_thumbs/shadow-of-the-tomb-raider-definitive-edition-pc-cover.jpeg" alt="">
            <div class="g1_info">
                <h3>Tomb Raider</h3>
                <h3 class="off">75% OFF</h3>
            </div>
            <div class="know_more">
                <a href="">Click to know more!</a>
            </div>
        </div>
    </div>
</div>

<div class="bottom">
    <h1>Join the Community!</h1>
    <br>
    <h3>Connect with fellow gamers, share tips, strategies, and game recommendations. Stay updated on the latest gaming news, releases, and exclusive offers. Whether you're a casual player or a hardcore gamer, there's something for everyone in our vibrant community.</h3>
</div>

<footer>
    <pre>Designed By - <strong>M O H I T  K U M A R</strong>  &  <strong>A B H A Y  S E M W A L</strong></pre>
    <p>© GamesX 2024. All rights reserved. All trademarks and registered trademarks are the property of their respective owners. </p>
</footer>
<script src="dark_mode.js"></script>
<script src="Carousel/carousel.js"></script>
<script src="Sidebar/sidebar.js"></script>
</body>
</html>
