<!--HEADER START -->
<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="site-branding">
                    <a href="/" class="custom-logo-link" rel="home" title="Medicare">
                        <img width="241" height="50" src="{{ asset('assets/images/site-logo.png') }}" alt="site-logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="header-menu">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="header-mobile-menu">
                            <div class="menu-menu-1-container">
                                <ul id="primary-menu" class="menu nav-menu">
                                    <li class="active"><a href="/" title="Home">Home</a></li>
                                    <li><a href="#about" title="About">about</a></li>
                                    <li class="dropdown-items">
                                        <a href="#blogs">Blogs <span><i class="fas fa-angle-down"></i></span></a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('blog-list') }}" title="Blog List">Blog List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#contact" title="Contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->