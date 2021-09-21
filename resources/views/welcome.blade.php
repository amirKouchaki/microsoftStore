<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Microsoft Store</title>
    <link rel="stylesheet" href="/css/css reset.css"/>
    <link rel="stylesheet" href="/css/index/style.css"/>
    <!--ubuntu font cdn-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
        rel="stylesheet"
    />
    <!--end-->
</head>
<body>
<aside>
    <nav>
        <ul>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="{{asset('images/home-r.png')}}"
                        alt="Home"
                    />
                    <img
                        class="filled-icon"
                        src="{{asset('images/home-f.png')}}"
                        alt="Home"
                    />
                    <span class="nav-link-text">Home</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="{{asset('images/apps-r.png')}}"
                        alt="Apps"
                    />
                    <img
                        class="filled-icon"
                        src="{{asset('images/apps-f.png')}}"
                        alt="Apps"
                    />
                    <span class="nav-link-text">Apps</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="{{asset('images/controller-r.png')}}"
                        alt="Gaming"
                    />
                    <img
                        class="filled-icon"
                        src="{{asset('images/controller-f.png')}}"
                        alt="Gaming"
                    />
                    <span class="nav-link-text">Gaming</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="{{asset('images/tv-r.png')}}"
                        alt="Movies and TV"
                    />
                    <img
                        class="filled-icon"
                        src="{{asset('images/tv-f.png')}}"
                        alt="Movies and TV"
                    />
                    <span class="nav-link-text">Movies & TV</span>
                </div>
            </li>
        </ul>
    </nav>

    <label for="check-for-drop-down" id="user-info">
        @guest
            <a href="{{route('login')}}">

                <!-- Ignore input below -->
                <input hidden type="checkbox" id="check-for-drop-down"/>
                <img
                    src="{{asset('storage/images/users/avatars/defaults/def-pic.png')}}"
                    alt="Username"
                />
            </a>
        @endguest
        @auth
                <input hidden type="checkbox" id="check-for-drop-down"/>
                <img
                    src="{{asset('storage/'.auth()->user()->avatar)}}"
                    alt="Username"
                />
            <div id="drop-down">
                <section id="user-data">
                    <img
                        src="{{asset('storage/'.auth()->user()->avatar)}}"
                        alt="Username"
                    />
                    <section>
                        <span>{{auth()->user()->first_name}}</span> <span>{{auth()->user()->last_name}}</span>
                        <span id="username">{{auth()->user()->email}}</span>
                    </section>
                </section>
                <ul>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Setting</a></li>
                    <li><a href="">Downloaded</a></li>
                    <li><a href="">Updates</a></li>
                    <li>
                        <form id="form-id" action="{{route('logout')}}" method="POST">
                            @csrf
                            <a href="#" onclick="document.getElementById('form-id').submit();">Log out</a>
                        </form>
                    </li>
                </ul>

            </div>
        @endauth
    </label>

</aside>
<article id="container">
    <span id="nav-selected-item"></span>
    <div id="slider-container">
        <div id="slider">
            <div id="slide-image">
                <span class="fade"></span>
                <section id="image-text">
                    <h4>Microsoft 365</h4>
                    <p>Make your life more organized and secure</p>
                    <form action="#">
                        <button>More details</button>
                    </form>
                </section>
            </div>
        </div>
        <section id="slider-items">
            <ul>
                <li id="m365">
                    <span class="slide-item-fade"></span>
                    <h4>Microsoft 365</h4>
                </li>
                <li id="entertainment">
                    <span class="slide-item-fade"></span>
                    <h4>Entertainment apps</h4>
                </li>
                <li id="reddit">
                    <span class="slide-item-fade"></span>
                    <h4>Reddit</h4>
                </li>
                <li id="own-it-today">
                    <span class="slide-item-fade"></span>
                    <h4>Own it today</h4>
                </li>
                <li id="among-us">
                    <span class="slide-item-fade"></span>
                    <h4>Among Us</h4>
                </li>
                <li id="racing-game">
                    <span class="slide-item-fade"></span>
                    <h4>Racing Game</h4>
                </li>
            </ul>
        </section>
    </div>
    <section id="essential-apps" class="suggestions-panel">
        <section class="suggestions-panel-text">
            <h4>Essential Apps</h4>
            <p>
                Take your experience to new heights with <br/>
                these must-have apps
            </p>
        </section>
        <section class="suggestions-options">
            <ul>
                <li class="option1">
                    <img
                        src="{{asset('images/netflix.png')}}"
                        alt="Netflix"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="sugget">Netflix</h5>
                        <span class="category">Entertainment</span>
                    </section>
                </li>
                <li class="option2">
                    <img
                        src="{{asset('images/spotify.jpg')}}"
                        alt="Spotify"
                    />
                    <section class="suggestions-items-text">
                        <h5>Spotify</h5>
                        <span class="category">Music</span>
                    </section>
                </li>
                <li class="option3">
                    <img
                        src="{{asset('images/pinterest.webp')}}"
                        alt="Pinterest"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">Pinterest</h5>
                        <span class="category">Social media</span>
                    </section>
                </li>
                <li class="option4">
                    <img
                        src="{{asset('images/adobe.png')}}"
                        alt="Adobe Lightroom"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">Adobe Lightroom</h5>
                        <span class="category">Photo & Video</span>
                    </section>
                </li>
            </ul>
        </section>
    </section>
    <section id="games" class="suggestions-panel">
        <section class="suggestions-panel-text">
            <h4>Featured free games</h4>
            <p>Explore free fun to play games and find a new favorite.</p>
        </section>
        <section class="suggestions-options">
            <ul>
                <li class="option1">
                    <img
                        src="{{asset('images/asphalt.webp')}}"
                        alt="Asphalt 9"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="sugget">Asphalt 9</h5>
                        <span class="category">Racing & Flying</span>
                    </section>
                </li>
                <li class="option2">
                    <img
                        src="{{asset('images/gtav.jpg')}}"
                        alt="GTA V"
                    />
                    <section class="suggestions-items-text">
                        <h5>GTA V</h5>
                        <span class="category">Action - Adventure</span>
                    </section>
                </li>
                <li class="option3">
                    <img
                        src="{{asset('images/ac.webp')}}"
                        alt="AC valhalla"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">AC valhalla</h5>
                        <span class="category">Action - Adventure</span>
                    </section>
                </li>
                <li class="option4">
                    <img
                        src="{{asset('images/gow.jpg')}}"
                        alt="God of war"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">God of war</h5>
                        <span class="category">Action - Adventure</span>
                    </section>
                </li>
            </ul>
        </section>
    </section>
    <section id="top-free-apps">
        <span class="title">Top free apps</span>
        <ul>
            <x-app-list/>
            <x-app-list/>
            <x-app-list/>
            <x-app-list/>
            <x-app-list/>
            <x-app-list/>
        </ul>
    </section>
    <section id="trending">
        <span class="title">Trending</span>
        <div>
            <ul>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
                <x-app-list/>
            </ul>
        </div>
    </section>
    <section id="collections">
        <span class="title">Collections</span>
        <ul>
            <li id="racing-game0">
                <div class="image"></div>
                <span class="fade-one"></span>
                <section>
                    <span>Racing games</span>
                    <p>
                        Start you engine. Race the world's fastest cars and other wild
                        vehicles through...
                    </p>
                </section>
            </li>
            <li id="social-media">
                <div class="image"></div>
                <span class="fade-one"></span>
                <section>
                    <span>Connect and stay informed</span>
                    <p>
                        Use these helpful apps to get news, listen to podcasts and stay
                        confected.
                    </p>
                </section>
            </li>
        </ul>
    </section>
</article>
</body>

<script src="/js/index/script.js"></script>
</html>
