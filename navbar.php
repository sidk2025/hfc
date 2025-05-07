<nav>
    <div class="top-column">
        <div class="logo">
            <a href="./">
                <img src="./static/img/logo.jpeg" alt="Logo">
            </a>
        </div>
        <div class="burger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
    <div class="navgrp">
        <div class="nav-btn">
            <a href="./" class="nav-btn">Home</a>
        </div>
        <div class="nav-btn">
            <a href="./team" class="nav-btn">Our Team</a>
        </div>
        <div class="nav-btn">
            <a href="./about" class="nav-btn">About Us</a>
        </div>
        <div class="nav-btn">
            
            <a href="./events" class="nav-btn">Events</a>
        </div>
        <div class="nav-btn">
            <a href="./gallery" class="nav-btn">Gallery</a>
        </div>
        <div class="nav-btn">
            <a href="./contact" class="nav-btn">Contact Us</a>
        </div>
        <!-- Desktop Dropdown -->
        <div class="nav-btn dropdown desktop-only">
            <a href="#" class="nav-btn dropbtn">Get Involved</a>
            <div class="dropdown-content">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKuddV0fHvNAh8tl0twVjDqi8wJdADqGskdO-WviMiVzngrA/viewform">Internship Opportunities</a>
                <a href="./contact">Corporate Partnerships</a>
                <a href="./join">Join the Club</a>
                <a href="./join">Purchase Services</a>
            </div>
        </div>
        <!-- Mobile Direct Links -->
        <div class="mobile-only">
            <div class="nav-btn">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKuddV0fHvNAh8tl0twVjDqi8wJdADqGskdO-WviMiVzngrA/viewform" class="nav-btn">Internship Opportunities</a>
            </div>
            <div class="nav-btn">
                <a href="./contact" class="nav-btn">Corporate Partnerships</a>
            </div>
            <div class="nav-btn">
                <a href="./join" class="nav-btn">Join the Club</a>
            </div>
            <div class="nav-btn">
                <a href="./join" class="nav-btn">Purchase Services</a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Dropdown styles */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #5f9e8b;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #4a8b78;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Responsive visibility */
    @media screen and (min-width: 769px) {
        .mobile-only {
            display: none;
        }
    }

    @media screen and (max-width: 768px) {
        .desktop-only {
            display: none;
        }
    }
</style>