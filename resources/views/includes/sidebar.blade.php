<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{ url('/template/images/brand/logo_orion_white.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ url('/template/images/brand/logo_orion_white.png') }}"
                    class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ url('/template/images/brand/logo_orion_icon.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ url('/template/images/brand/logo_orion.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Analisis</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/orion-wilayah') }}"><i
                            class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Analisis
                            Wilayah</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/orion-keluarga') }}"><i
                            class="side-menu__icon mdi mdi-account-network"></i><span class="side-menu__label">Analisis
                            Keluarga</span></a>
                </li>


                <li class="sub-category">
                    <h3>About</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/about') }}"><i
                            class="side-menu__icon fe fe-info"></i><span class="side-menu__label">About</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/faqs') }}"><i
                            class="side-menu__icon mdi mdi-help-circle-outline"></i><span class="side-menu__label">FAQS</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/team') }}"><i
                            class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Our Team</span></a>
                </li>

                <li class="sub-category">
                    <h3>END</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/logout') }}"><i
                            class="side-menu__icon fe fe-log-out"></i><span class="side-menu__label">Sign Out</span></a>
                </li>


            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
