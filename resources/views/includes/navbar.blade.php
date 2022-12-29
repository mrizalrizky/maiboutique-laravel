<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a style="font-size: 20px; color: orange;" href="{{ route('index') }}">
                            MaiBoutique
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            @if (Auth::user()->roles->name == 'Member')
                            <li><a href="{{ route('transactions') }}">Transactions</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <div class="header-icons">
                                    @if (Auth::user()->roles->name == 'Member')
                                    <a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif
                                    <a class="mobile-hide search-bar-icon" href="{{ route('search') }}"><i class="fas fa-search"></i></a>
                                    @if (Auth::user()->roles->name == 'Admin')
                                    <a href="{{ route('add-product') }}"><i class="fas fa-plus-circle"></i> Add Item</a>
                                    @endif
                                    <a href="{{ route('profile') }}"><i class="fas fa-user"></i> {{ Auth::user()->username }}</a>
                                    <button class="btn font-weight-bold text-white " type="submit"><i class="fas fa-power-off"></i> Logout</button>
                                </div>
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="{{ route('search') }}"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
