<style>
    .navbar-menu-wrapper .nav-item h5 {
        margin-right: 15px;
    }

    .navbar-menu-wrapper .nav-item h5 a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #ffd600;
        /* Yellow background */
        color: #1692e9;
        /* Blue icon */
        font-size: 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
</style>

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row custom-navbar"
    style="border-bottom:white; height: 110px;">

    <div class="navbar-brand-wrapper d-flex justify-content-center" style="background: white; height: 100%;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
            style="background-color: white; height: 100%;">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ asset('images/dashboard_logo.png') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="{{ asset('images/dashboard_logo.png') }}" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        style="background-color: #1692e9; height: 100%;">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-flex">
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
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>
