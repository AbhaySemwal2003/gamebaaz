<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
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

        <div class="cont" style="margin-top: 10px;">
            <h1 style="color: white;">Contact us</h1>
        </div>

        <div class="contacts_container">

            <div class="cont">
                <a href=""><img src="social_icons/discord.png" alt="">Join us on DiscorJod</a>
                <a href=""><img src="social_icons/facebook.png" alt="">Follow us on facebook</a>
                <a href=""><img src="social_icons/instagram.png" alt="">Follow us on instagram</a>
                <a href=""><img src="social_icons/twitter.png" alt="">Follow us on Twitter(X)</a>
                <a href=""><img src="social_icons/whatsapp.png" alt="">Drop a Hi! on Whatsapp</a>
                <a href=""><img src="social_icons/youtube.png" alt="">Subscribe us on YouTube</a>
            </div>

            <div class="feedb">
                <form action="sumbit.php" method="post">
                    <h2>Your valuable Feedback!</h2>
                    <br><br>
                        Name: <input type="text" id="name" name="name">
                        <br><br>
                        Email: <input type="email" name="email" id="email">
                        <br><br>
                        <textarea name="message" id="message" rows="10"></textarea>
                        <br><br>
                        <input type="submit" name="submit" id="submit" value="Submit the Feedback!">
                </form>
            </div>
        </div>
        
        <footer>
            <pre>Designed By - <strong>M O H I T  K U M A R</strong>  &  <strong>A B H A Y  S E M W A L</strong></pre>
            <p>© GamesX 2024. All rights reserved. All trademarks and registered trademarks are the property of their respective owners. </p>
        </footer>
        <script src="Sidebar/sidebar.js"></script>
    </body>
</html>