<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

header {
    width: 100%;
}

.top-bar {
    background-color: #ffff;
    padding: 15px 0;
    font-size: 14px;
    position: relative;
}

.container {
    width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    /* Center the contact info */
    align-items: center;
    position: relative;
}

.contact-info {
    display: inline-block;
    text-align: center;
}

.contact-info span {
    margin-right: 20px;
    display: inline-block;
    color: #1692e9;
}

.contact-info i {
    color: #ffd600;
}

.social-icons {
    position: absolute;
    right: 0;

}

.social-icons a {
    margin-left: 5px;
    color: #ffcc00;
    font-size: 15px;
    text-decoration: none;
}

.social-icons a:hover {
    color: #ff9900;
}

.navbar {
    background-color: #007bff;
    padding: 30px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
    height: 85px;
    border-bottom: 0px solid #844fc1;
}

.navbar::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 250px;
    height: 100%;
    background-color: #fff;
    transform: skewX(20deg);
    z-index: 0;
    margin-left: -60px;
}

.logo {
    position: relative;
    z-index: 2;
}

.logo img {
    max-width: 312%;
    /* Make the logo responsive */
    height: auto;
    /* Maintain aspect ratio */
    margin-left: -61px;
    /* Adjust as necessary */
}

.nav-links {
    list-style-type: none;
    display: flex;
    gap: 20px;
    z-index: 2;
    margin-left: 20px;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
}

.nav-links a:hover {
    color: #ffcc00;
}

.donate-btn {
    background-color: #ffcc00;
    padding: 10px 20px;
    color: #007bff;
    font-weight: bold;
    border-radius: 5px;
    text-decoration: none;
    z-index: 2;
}

.donate-btn:hover {
    background-color: #ff9900;
}

.social-icons.d-flex a {
    align-items: center;
    background-color: #ffd600;
    border-radius: 60%;
    color: var(--blue);
    display: inline-block;
    display: flex;
    height: 2vmax;
    justify-content: center;
    width: 2vmax;
}

.social-icons {
    position: absolute;
    top: 81%;
    transform: translateY(-50%);
}

@media (max-width: 768px) {
    .top-bar {
        padding: 10px 0;
        font-size: 12px;
    }

    .container {
        flex-direction: column;
        /* Stack elements vertically */
        align-items: flex-start;
        /* Align items to the left */
    }

    .contact-info {
        margin-bottom: 10px;
        /* Space between contact info and social icons */
    }

    .social-icons {
        position: relative;
        /* Adjust position for smaller screens */
        top: auto;
        transform: none;
        /* Reset transformation */
    }

    .navbar {
        padding: 20px 0;
        /* Reduce padding */
        height: auto;
        /* Let height adjust automatically */
    }

    .nav-links {
        flex-direction: column;
        /* Stack navigation links vertically */
        align-items: flex-start;
        /* Align links to the left */
        margin-left: 0;
        /* Remove left margin */
    }

    .nav-links li {
        margin-right: 0;
        /* Remove right margin for stacked items */
        margin-bottom: 10px;
        /* Add space between items */
    }

    .logo img {
        height: 60px;
        /* Adjust logo size for smaller screens */
    }

    .donate-btn {
        padding: 8px 15px;
        /* Adjust button padding */
        font-size: 14px;
        /* Smaller font size */
    }
}

@media (max-width: 480px) {
    .top-bar {
        font-size: 10px;
        /* Further reduce font size */
    }

    .contact-info span {
        margin-right: 10px;
        /* Reduce margin */
    }

    .social-icons a {
        font-size: 12px;
        /* Adjust icon size */
    }

    .donate-btn {
        width: 100%;
        /* Make button full width */
        text-align: center;
        /* Center button text */
    }

}
</style>

<header>
    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <span><i class="fa-solid fa-location"></i> 111 - Ferozepur Road, Lahore-54600 Pakistan</span>
                <span><i class="fa-regular fa-envelope"></i> info@psrd.org.pk</span>
                <span><i class="fa-solid fa-phone"></i> 042 37427130</span>
                <span><i class="fa-brands fa-whatsapp"></i> +92-306-5555201</span>
            </div>
            <div class="social-icons d-flex">
                <h5><a href="https://www.facebook.com/profile.php?id=100085683547755" target="_blank"
                        rel="noreferrer"><i class="fa-brands fa-facebook-f"></i></a></h5>
                <h5><a href="https://youtube.com/channel/UCWOanPUFY07jLLtWO7-C82w" target="_blank" rel="noreferrer"><i
                            class="fa-brands fa-youtube"></i></a></h5>
                <h5><a href="https://instagram.com/psrd.org.pk?igshid=YmMyMTA2M2Y=" target="_blank" rel="noreferrer"><i
                            class="fa-brands fa-instagram"></i></a></h5>
                <h5><a href="https://www.tiktok.com/@psrd.org.pk?_t=8kRZlT946WV&_r=1" target="_blank"
                        rel="noreferrer"><i class="fa-brands fa-tiktok"></i></a></h5>
                <h5><a href="https://www.linkedin.com/company/psrd-official/" target="_blank" rel="noreferrer"><i
                            class="fa-brands fa-linkedin-in"></i></a></h5>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/dashboard_logo.png') }}" alt="Logo" style="height: 85px; margin-top:-35px">
            </div>
        </div>
    </nav>
</header>