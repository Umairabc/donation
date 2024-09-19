<style>
    .nav-link {
        color: white !important;
        display: flex;
        align-items: center;
        padding: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        background-color: #ffd600 !important;
        color: black !important;
    }

    .nav-link i {
        color: white !important;
    }

    .nav-link:hover i,
    .nav-link.active i {
        color: black !important;
    }

    .nav-link .menu-title {
        color: white !important;
    }

    .nav-link:hover .menu-title,
    .nav-link.active .menu-title {
        color: black !important;
    }

    /* Ensure hover and active styles apply only to the specific nav-link */
    .nav-item .nav-link:hover,
    .nav-item .nav-link.active {
        background-color: #ffd600 !important;
        color: black !important;
    }

    .nav-item .nav-link:hover i,
    .nav-item .nav-link.active i {
        color: black !important;
    }

    .nav-item .nav-link .menu-title:hover,
    .nav-item .nav-link.active .menu-title {
        color: black !important;
    }
</style>


<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #1692e9;">
    <ul class="nav">
        @php
            $userRole = Auth::check() ? Auth::user()->role : null;
        @endphp

        <!-- Dashboard Item -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="typcn typcn-home-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        @if ($userRole == '2')
            <!-- Only show Logout for users with role '2' -->
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="typcn typcn-mortar-board menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        @else
            <!-- Donation Menu Item -->
            <li class="nav-item">
                <a href="{{ route('donation.index') }}"
                    class="nav-link {{ request()->routeIs('donation.index') ? 'active' : '' }}">
                    <i class="typcn typcn-user-outline menu-icon"></i>
                    <span class="menu-title">Donation</span>
                </a>
            </li>

            <!-- Employee Attendance Menu Item -->

            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="typcn typcn-mortar-board menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
