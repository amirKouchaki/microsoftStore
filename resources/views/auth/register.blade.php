<x-guest-layout>
    <x-slot name="head">
        <title>Sign up | Microsoft store</title>
        <link rel="stylesheet" href="/css/css reset.css" />
        <link rel="stylesheet" href="/css/register/style.css" />
        <!--ubuntu font cdn-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
            rel="stylesheet"
        />
    </x-slot>
<div id="container">
    <img
        src="{{asset('/images/microsoft_store_icon.png')}}"
        alt="Logo"
    />
    <h1>Sign up</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <section>
            <input
                type="text"
                name="first_name"
                id="first-name"
                placeholder="First name"
                required
            />
            <input
                type="text"
                name="last_name"
                id="last-name"
                placeholder="Last name"
                required
            />
        </section>
        <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
        />
        <span>Email will be used for your username.</span>
        <div id="pass">
            <section>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    required
                />
                <input
                    type="password"
                    name="password_confirmation"
                    id="confirm-password"
                    placeholder="Confirm"
                    required
                />
            </section>
            <span
            >Use at least 8 characters with a mix of letters, numbers &
            symbols</span
            >
        </div>
        <button type="submit">Sign up</button>
    </form>
    <a href="{{route('login')}}">I have an account.</a>
</div>

</x-guest-layout>
