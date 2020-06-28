<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            </button>
            <!-- lOGO TEXT HERE -->
            <a href="/" class="navbar-brand">Blog</a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="active"><a href="/">Home</a></li>
                <!-- <li class="active"><a href="index.html">Home</a></li> -->
                <li><a href="{{ route('articles.index') }}">Blog</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="team.html">Authors</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                @guest
                @else
                <li class="nav-item dropdown navbar-right">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('articles.create') }}">Add new article</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
            <!-- <ul class="nav navbar-nav navbar-nav-first navbar-nav ml-auto">
            </ul> -->
        </div>
    </div>
</section>