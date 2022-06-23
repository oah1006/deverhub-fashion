<header>
    <div class="flex lg:flex-row flex-col lg:px-20 py-3 text-white text-xl font-medium items-center lg:gap-0 gap-3">
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 40" width="90" height="40"><title>ユニクロ｜UNIQLO</title><path fill="red" d="M50 0h40v40H50zM0 0h40v40H0z"></path><g fill="#fff"><path d="M79.48 5.47h2.53v12.64h-2.53zM63.47 13.9a4.21 4.21 0 0 1-8.42 0V5.47h2.53v8.43a1.68 1.68 0 1 0 3.36 0V5.47h2.53zM75.26 34.53h-8.42V21.89h2.53V32h5.89v2.53zM75.26 18.11h-2.53l-3.36-7.22v7.22h-2.53V5.47h2.53l3.36 7.22V5.47h2.53v12.64zM59.26 21.89a4.21 4.21 0 0 0-4.21 4.22v4.21a4.21 4.21 0 0 0 4.21 4.21 4.34 4.34 0 0 0 .82-.07l.86 2.6h2.53l-1.25-3.75a4.2 4.2 0 0 0 1.25-3v-4.2a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 1 1-3.36 0v-4.21a1.68 1.68 0 1 1 3.36 0zM80.74 21.89a4.22 4.22 0 0 0-4.22 4.22v4.21a4.21 4.21 0 0 0 8.42 0v-4.21a4.21 4.21 0 0 0-4.21-4.22m1.68 8.43a1.68 1.68 0 0 1-3.37 0v-4.21a1.68 1.68 0 0 1 3.37 0z"></path><g><path d="M22.74 15.16H34.1v2.52H22.74zM24 5.47h8.84V8H24zM14.74 5.47H7.15V8h5.06v7.16H5.9v2.52h11.36v-2.52h-2.52V5.47zM22.74 22.31v12.22H34.1V22.31zM31.57 32h-6.31v-7.16h6.31zM7.15 22.31l-1.28 6.12h2.52l.76-3.59h5.07L12.73 32H5.14l-.51 2.53h10.11l2.52-12.22H7.15z"></path></g></g></svg>
        </a>
        <ul class="lg:ml-auto flex gap-8 text-black">
            <li>
                <a href="{{ route('detail') }}">Men</a>
            </li>
            <li>
                <a href="{{ route('detail') }}">Men</a>
            </li>
            <li>about</li>
            <li>contact</li>
        </ul>
    </div>
    <div class="flex list-none lg:px-20 py-3 border-t border-solid border-zinc-200">
            <ul class="flex lg:ml-auto items-center lg:gap-8 gap-4">
                <li>
                    <input type="text" class="placeholder-gray-600 text-black px-4 py-1 rounded-md shadow-lg border-gray-300 border-solid border" placeholder="Search...">
                </li>
                @auth
                    <li>
                        <a href="{{ route('auth.login') }}" class="bg-red-500 px-4 py-2 text-white rounded-lg font-bold">{{ auth()->user()->first_name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('auth.logout') }}" class="font-bold">Logout</a>
                    </li>
                @endauth

                @guest
                <li>
                        <a href="{{ route('auth.login') }}" class="bg-black px-4 py-2 text-white rounded-lg font-bold">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('auth.register') }}" class="text-black font-bold lg:block hidden">Register</a>
                    </li>
                @endguest
            </ul>
    </div>
</header>