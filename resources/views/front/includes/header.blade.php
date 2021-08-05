        <!-- Begin Main Header Area -->
        <header class="header">
            <div class="header-area header-position-absolute header-sticky header-style-5">
                <div class="container header-container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2 col-6">
                            <a href="{{ route('home') }}" class="header-logo">
                                <img class="primary-img" src="front/assets/images/logo/laravel-logo.png" alt="Header Logo">
                                <img class="sticky-img" src="front/assets/images/logo/laravel-logo.png" alt="Header Logo">
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-8 d-none d-lg-block">
                            <div class="header-menu text-lg">
                                <nav class="header-menu-nav onepage-nav">
                                    <ul>
                                        <li>
                                        <a href="{{ route('home') }}">home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contato</a>
                                    </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-6">
                            <ul class="header-right">
                                <li class="d-none d-md-block">
                                    <a class="btn btn-custom-size btn-md extbot-primary-5 blackcurrant-hover" href="contact.html">Entrar</a>
                                </li>
                                <li class="d-flex d-lg-none">
                                    <button class="btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                        <i class="icofont-navigation-menu"></i>
                                    </button>
                                </li>
                                <li class="setting-btn-wrap d-block d-md-none">
                                    <a href="#" class="setting-btn">
                                        <i class="icofont-ui-settings"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="setting-body">
                        <ul class="header-right setting-item">
                            <li>
                                <a href="contact.html">Crie uma conta</a>
                            </li>
                            <li>
                                <a class="btn btn-custom-size btn-md sapphire-color extbot-primary-hover" href="contact.html">Entrar
                                    <i class="icofont-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
                <div class="offcanvas-header">
                    <a href="index.html" class="header-logo">
                        <img src="front/assets/images/logo/1-1.png" alt="Header Logo">
                    </a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="header-offcanvas-menu">
                        <nav class="header-offcanvas-nav onepage-offcanvas-nav">
                            <ul>
                                <li class="active">
                                    <a href="#feature">home</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header Area End Here -->