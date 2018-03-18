<!--[if lt IE 8]>
<div class="alert alert-warning">
You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars" style= "color: red;"></i>
            </button>
            <a class="navbar-brand page-scroll header__logo__a" href="/">
                <img class="nav-logo" src="/img/logo.svg">
            </a>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a title="About" href="/about">About</a></li>
                    <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a title="Careers" href="/career">Careers</a></li>
                    <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a title="Blog" href="/blog">Blog</a></li>
                    <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a title="Contact" href="/contact">Contact</a></li>
                    <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a title="Order" href="http://order.personalwaiter.dev" rel="noopener noreferrer" target="_blank">Order</a></li>
                @else
                    <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a title="Post" href="{{ route('posts.index') }}">Posts</a></li>
                    <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a title="Categories" href="{{ route('categories.index') }}">Categories</a></li>
                    <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a title="Tags" href="{{ route('tags.index') }}">Tags</a></li>
                    <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                @endif
            </ul>
        </div>
    </div>
</nav>    
