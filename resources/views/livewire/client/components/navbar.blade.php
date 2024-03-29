<div>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <h2>Sport</h2>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href=" {{ route('client.home')}}" wire:click='$refresh'> Trang Chủ </a></li>
                                    <li><a href=" {{ route('client.shop') }}"> Sản Phẩm </a></li>
                                    <li><a href=" {{ route('client.shop') }}"> Giới Thiệu </a></li>
                                    <li><a href="contact.html"> Liên Hệ </a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li><a href='{{ route('auth.login') }}'><span class="flaticon-user"></span></a></li>
                                <li><a href='{{ route('client.cart') }}'><span class="flaticon-shopping-cart"><span style="margin-left: -10px">{{ $cartTotal }}</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</div>
