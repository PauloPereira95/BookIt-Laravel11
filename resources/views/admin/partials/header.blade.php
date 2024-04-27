<!-- header -->
<header class="bg-white py-4 shadow-sm">
    <div class="container flex items-center justify-between">
        <a href="index.html">
            <img src="{{ asset('assets/images/icons/book-it-high-resolution-logo.svg') }}" alt="Logo" class="w-32">

        </a>

        <div class="relative flex w-full max-w-xl">
            <span class="absolute left-4 top-3 flex items-center text-lg text-gray-400">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" name="search" id="search"
                class="hidden w-full rounded-l-md border border-r-0 border-primary py-3 pl-12 pr-3 focus:outline-none md:flex"
                placeholder="search">
            <button
                class="hidden items-center rounded-r-md border border-primary bg-primary px-8 text-white transition hover:bg-transparent hover:text-primary md:flex">
                Search
            </button>
        </div>

        <div class="flex items-center space-x-4">
            <a href="#" class="relative text-center text-gray-700 transition hover:text-primary">
                <div class="mr-3 flex justify-center">
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart"></i>
                        <div class="text-xs leading-3">Favoritos</div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div
                        class="absolute -top-1 right-0 flex h-5 w-5 items-center justify-center rounded-full bg-primary text-xs text-white">
                        8</div>
                </div>
            </a>
            <a href="#" class="relative text-center text-gray-700 transition hover:text-primary">
                <div class="text-2xl">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <div class="text-xs leading-3">Carrinho</div>
                <div
                    class="absolute -right-3 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-primary text-xs text-white">
                    2</div>
            </a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="relative text-center text-gray-700 transition hover:text-primary">
                    @else
                        <a href="{{ route('login') }}" class="relative text-center text-gray-700 transition hover:text-primary">

                        @endauth
                        <div class="text-2xl">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="text-xs leading-3">Conta</div>
            @endif
            </a>
        </div>
    </div>
</header>
<!-- ./header -->
