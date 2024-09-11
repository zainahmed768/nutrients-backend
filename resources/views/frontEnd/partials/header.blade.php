<form action="{{ route('user.logout') }}" id="logout-form" method="POST" style="display: none;">
    @csrf
</form>
<header id="header">
    <div class="secondary-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-cta-wrapper">
                        <ul>
                            <li><a href="mailto:Yourname@email.com"><i class="fa fa-envelope"></i>
                                    Yourname@email.com</a></li>
                            <li><a href="tel:+1-234-567-8901"><i class="fa fa-phone"></i> +1-234-567-8901</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social-icons-wrapper">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li> <i class="fa fa-flag"></i>
                                <select name="" id="">
                                    <option selected value="Language">Language</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img src="{{ asset('assets/img/logo_n.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="navbar-items-wrapper">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php" class="nav-links">Home</a></li>
                            <li class="nav-item"><a href="{{ route('shop') }}" class="nav-links">Shop</a></li>
                            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-links">Blogs</a></li>

                            <li class="nav-item"><a href="shop.php" class="nav-links">Special Offers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header-icons-wrapper">
                        <ul>
                            <li class="site-header__search">
                                <button href="#" class="search-trigger"><i class="fa fa-search"></i></button>
                            </li>
                            <li>
                                <a href="{{ route('user.login') }}"><i class="fa fa-user"></i></a>
                            </li>
                            @if (Auth::check())
                                <li>
                                    <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i>
                                        <span class="total-cart-no">1</span>
                                    </a>
                                </li>
                            @endif
                            @if (Auth::check())
                                <li>
                                    <button type="submit"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="btn">Logout</button>
                                </li>
                            @else
                                <li>
                                    <a href="contact.php" class="btn">Get A Quote</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="#">
            <button class="go-btn search__button" type="submit"><i class="fa fa-search"></i></button>
            <input class="search__input" type="search" name="q" value=""
                placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="fa fa-close"></i></button>
    </div>
</div>
