<x-guest-layout>
    <x-slot name="head">
        <title>Sign in | Microsoft store</title>
        <link rel="stylesheet" href="/css/css reset.css" />
        <link rel="stylesheet" href="/css/login/style.css" />
        <!--ubuntu font cdn-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
            rel="stylesheet"
        />
    </x-slot>

    <main id="container">
        <img
            src="{{asset('/images/microsoft_store_icon.png')}}"
            alt="Logo"
        />
        <h1>Sign in</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
            <section>
                <input
                    type="text"
                    name="email"
                    id="username"
                    placeholder="email"
                />
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                />
            </section>
            <button type="submit">Sign in</button>
        </form>
        <a href="{{route('register')}}">Create an account</a>
    </main>

    <x-slot name="footerScripts">
        <script src="/js/login/script.js"></script>
    </x-slot>

</x-guest-layout>
