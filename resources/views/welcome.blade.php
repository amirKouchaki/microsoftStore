<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


</head>
<body class="antialiased">

<aside>
    <nav>
        <ul>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="https://img.icons8.com/fluency-systems-regular/30/000000/home.png"
                        alt="Home"
                    />
                    <img
                        class="filled-icon"
                        src="https://img.icons8.com/fluency-systems-filled/30/1d6978/home.png"
                        alt="Home"
                    />
                    <span class="nav-link-text">Home</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="https://img.icons8.com/fluency-systems-regular/30/000000/apps.png"
                        alt="Apps"
                    />
                    <img
                        class="filled-icon"
                        src="https://img.icons8.com/fluency-systems-filled/30/1d6978/apps.png"
                        alt="Apps"
                    />
                    <span class="nav-link-text">Apps</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="https://img.icons8.com/fluency-systems-regular/30/000000/controller.png"
                        alt="Gaming"
                    />
                    <img
                        class="filled-icon"
                        src="https://img.icons8.com/fluency-systems-filled/30/1d6978/controller.png"
                        alt="Gaming"
                    />
                    <span class="nav-link-text">Gaming</span>
                </div>
            </li>
            <li>
                <span class="border"></span>
                <div>
                    <img
                        src="https://img.icons8.com/fluency-systems-regular/30/000000/tv.png"
                        alt="Movies and TV"
                    />
                    <img
                        class="filled-icon"
                        src="https://img.icons8.com/fluency-systems-filled/30/1d6978/tv.png"
                        alt="Movies and TV"
                    />
                    <span class="nav-link-text">Movies & TV</span>
                </div>
            </li>
        </ul>
    </nav>
</aside>
<article id="container relative">
    <div >
    @if (Route::has('login'))
        <div class="hidden  px-6 py-4 sm:block right-0">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
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
                        src="https://images-na.ssl-images-amazon.com/images/I/51LGj5--KsL.png"
                        alt="Netflix"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="sugget">Netflix</h5>
                        <span class="category">Entertainment</span>
                    </section>
                </li>
                <li class="option2">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRCyC4_C1ojg0N7_7s9ClG0vcKxuxa9dJfA_w89GHOHr45CSowxy-DFJsieI_K4eiRQFY&usqp=CAU"
                        alt="Spotify"
                    />
                    <section class="suggestions-items-text">
                        <h5>Spotify</h5>
                        <span class="category">Music</span>
                    </section>
                </li>
                <li class="option3">
                    <img
                        src="https://im0-tub-com.yandex.net/i?id=ce2b17a0a86813175207cd9d86460748&n=13"
                        alt="Pinterest"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">Pinterest</h5>
                        <span class="category">Social media</span>
                    </section>
                </li>
                <li class="option4">
                    <img
                        src="data:image/png;base64,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"
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
                        src="https://im0-tub-com.yandex.net/i?id=3997def387445ea2b2be78d3bf607104&n=13"
                        alt="Asphalt 9"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="sugget">Asphalt 9</h5>
                        <span class="category">Racing & Flying</span>
                    </section>
                </li>
                <li class="option2">
                    <img
                        src="https://statics.viralizalo.com/virs/2016/02/VIR_128500_10876_relaciona_personajes_de_gta_v.jpg?cb=7350"
                        alt="GTA V"
                    />
                    <section class="suggestions-items-text">
                        <h5>GTA V</h5>
                        <span class="category">Action - Adventure</span>
                    </section>
                </li>
                <li class="option3">
                    <img
                        src="https://im0-tub-com.yandex.net/i?id=9925a7066c2c37e2f1d59400aa39c228&n=13"
                        alt="AC valhalla"
                    />
                    <section class="suggestions-items-text">
                        <h5 class="">AC valhalla</h5>
                        <span class="category">Action - Adventure</span>
                    </section>
                </li>
                <li class="option4">
                    <img
                        src="https://static.newmobilelife.com/wp-content/uploads/2018/04/God-of-War-1.jpg"
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
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
            <li>
                <img
                    src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                    alt="App Name"
                />
                <section>
                    <h5 class="apps-name">App's name</h5>
                    <span class="apps-category">Category</span>
                </section>

                <span class="price">Price</span>
            </li>
        </ul>
    </section>
    <section id="trending">
        <span class="title">Trending</span>
        <div>
            <ul>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
                <li>
                    <img
                        src="https://img.icons8.com/external-those-icons-lineal-those-icons/50/000000/external-app-applications-windows-those-icons-lineal-those-icons-5.png"
                        alt="App Name"
                    />
                    <section>
                        <h5 class="apps-name">App's name</h5>
                        <span class="apps-category">Category</span>
                    </section>

                    <span class="price">Price</span>
                </li>
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
