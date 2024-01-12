
<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="/"><img src="images/iium.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">About</a>
                </li>
                {{-- <li class="nav-item">
                   <a class="nav-link" href="services.html">Players</a> --}}
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="contact.html">Contact</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    {{-- app --}}
    <div class="container-fluid">
        <div class="logo-container flex items-center justify-center">
            <a href="/"><img src="images/iium.png" alt="Logo"></a>
        </div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href={{url('about_us')}}>About</a></li>
                {{-- <li><a href="services.html">Players</a></li> --}}
                <li><a href={{'news'}}>News</a></li>
                <li><a href={{'donation'}}>Donation</a></li>
                <li><a href={{'my_player'}}>Players</a></li>
                <li><a href={{'merchandise'}}>Merchandise</a></li>
                <li><a href={{'game'}}>Match</a></li>

                @if (Route::has('login'))

                    @auth
                    <li>
                        <x-app-layout></x-app-layout>
                    </li>

                    <li><a href={{'create_donation'}}>Donate Here</a></li>

                    @else

                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>

                    @endauth

                @endif
            </ul>
        </div>
    </div>
 </div>
