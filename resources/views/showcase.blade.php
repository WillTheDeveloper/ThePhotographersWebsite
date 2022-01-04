<!doctype html>
<head>
    <title>Showcase | Will's Photography</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{ mobileMenu: false }" class="select-none">

<div class="bg-white">
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div x-show="mobileMenu"
         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         x-cloak class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
            <div class="px-4 pt-5 pb-2 flex">
                <button @click="mobileMenu = false" type="button"
                        class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="/" class="-m-2 p-2 block font-medium text-gray-900">Home</a>
                </div>

                <div class="flow-root">
                    <a href="/showcase" class="-m-2 p-2 block font-medium text-gray-900">Showcase</a>
                </div>

                <div class="flow-root">
                    <a href="/equipment" class="-m-2 p-2 block font-medium text-gray-900">Equipment</a>
                </div>

                <div class="flow-root">
                    <a href="/about" class="-m-2 p-2 block font-medium text-gray-900">About me</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero section -->
    <div class="relative bg-gray-900">
        <!-- Decorative image and overlay -->
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
            <img
                src="https://d10lvax23vl53t.cloudfront.net/images/Article_Images/ImageForArticle_1883_15815060668326781.png"
                alt="" class="w-full h-full object-center object-cover">
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

        <!-- Navigation -->
        <header class="relative z-10">
            <nav aria-label="Top">

                <!-- Secondary navigation -->
                <div class="backdrop-blur-md backdrop-filter bg-opacity-10 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="h-16 flex items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                    {{--Yeah--}}
                                </div>

                                <div class="hidden h-full lg:flex">
                                    <!-- Flyout menus -->
                                    <div class="px-4 bottom-0 inset-x-0">
                                        <div class="h-full flex justify-center space-x-8">

                                            <a href="/" class="flex items-center text-sm font-medium text-white">Home</a>

                                            <a href="/showcase" class="flex items-center text-sm font-medium text-white">Showcase</a>

                                            <a href="/equipment" class="flex items-center text-sm font-medium text-white">Equipment</a>

                                            <a href="/about" class="flex items-center text-sm font-medium text-white">About me</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex-1 flex items-center lg:hidden">
                                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                    <button @click="mobileMenu = true" type="button" class="-ml-2 p-2 text-white">
                                        <span class="sr-only">Open menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex-1 flex items-center justify-end">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="relative max-w-3xl mx-auto py-32 px-6 flex flex-col items-center text-center sm:py-64 lg:px-0">
            <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">Will's Photography</h1>
            <p class="mt-4 text-xl text-white">Welcome to my website, where I showcase all my photography.</p>
        </div>
    </div>
            <main>
                <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="py-24 text-center">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Photo Showcase</h1>
                        <p class="mt-4 max-w-3xl mx-auto text-base text-gray-500">Only the best of the best photos make it to this showcase.</p>
                    </div>

                    <!-- Product grid -->
                    <section aria-labelledby="products-heading" class="mt-8">
                        <h2 id="products-heading" class="sr-only">Products</h2>

                        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://images.unsplash.com/photo-1599522336242-0db868a98cb1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8MTYlM0E5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Focus Paper Refill
                                    </h3>
                                    <p>
                                        $13
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    3 sizes available
                                </p>
                            </a>

                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://images.unsplash.com/photo-1558637845-c8b7ead71a3e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8MTYlM0E5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Paper card sitting upright in walnut card holder on desk." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Focus Card Holder
                                    </h3>
                                    <p>
                                        $64
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    Walnut
                                </p>
                            </a>

                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8MTYlM0E5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Focus Carry Pouch
                                    </h3>
                                    <p>
                                        $32
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    Heather Gray
                                </p>
                            </a>

                            <!-- More products... -->
                        </div>
                    </section>

                    <section aria-labelledby="featured-heading" class="relative mt-16 rounded-lg overflow-hidden lg:h-96">
                        <div class="absolute inset-0">
                            <img src="https://www.scottaspinall.com/wp-content/uploads/2019/07/16x9-Boundless.jpg" alt="" class="w-full h-full object-center object-cover">
                        </div>
                        <div aria-hidden="true" class="relative w-full h-96 lg:hidden"></div>
                        <div aria-hidden="true" class="relative w-full h-32 lg:hidden"></div>
                        <div class="absolute inset-x-0 bottom-0 bg-black bg-opacity-75 p-6 rounded-bl-lg rounded-br-lg backdrop-filter backdrop-blur sm:flex sm:items-center sm:justify-between lg:inset-y-0 lg:inset-x-auto lg:w-96 lg:rounded-tl-lg lg:rounded-br-none lg:flex-col lg:items-start">
                            <div>
                                <h2 id="featured-heading" class="text-xl font-bold text-white">Photography Collection</h2>
                                <p class="mt-1 text-sm text-gray-300">Upgrade your desk with objects that keep you organized and clear-minded.</p>
                            </div>
                            <a href="#" class="mt-6 flex-shrink-0 flex bg-white bg-opacity-0 py-3 px-4 border border-white border-opacity-25 rounded-md items-center justify-center text-base font-medium text-white hover:bg-opacity-10 sm:mt-0 sm:ml-8 lg:ml-0 lg:w-full">View the collection</a>
                        </div>
                    </section>

                    <section aria-labelledby="more-products-heading" class="mt-16 pb-24">
                        <h2 id="more-products-heading" class="sr-only">More products</h2>

                        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://expertphotography.b-cdn.net/wp-content/uploads/2018/07/Aspect-ratio-photography-qantab-beach-Oman-1.jpg" alt="Close up of long kettle spout pouring boiling water into pour-over coffee mug with frothy coffee." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Electric Kettle
                                    </h3>
                                    <p>
                                        $149
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    Black
                                </p>
                            </a>

                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://www.wallpapers13.com/wp-content/uploads/2019/07/Assiniboine-Provincial-Park-British-Columbia-Canada-Sunrise-Landscape-Photography-4k-uhd-16-9-desktop-wallpapers-hd-3840x2160-1920x1080.jpg" alt="Extra large black leather workspace pad on desk with computer, wooden shelf, desk organizer, and computer peripherals." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Leather Workspace Pad
                                    </h3>
                                    <p>
                                        $165
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    Black
                                </p>
                            </a>

                            <a href="#" class="group">
                                <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                    <img src="https://wallpaperaccess.com/full/25636.jpg" alt="Leather long wallet held open with hand-stitched card dividers, full-length bill pocket, and simple tab closure." class="w-full h-full object-center object-cover group-hover:opacity-75">
                                </div>
                                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        Leather Long Wallet
                                    </h3>
                                    <p>
                                        $118
                                    </p>
                                </div>
                                <p class="mt-1 text-sm italic text-gray-500">
                                    Natural
                                </p>
                            </a>

                            <!-- More products... -->
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

<footer aria-labelledby="footer-heading" class="bg-gray-900">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-medium text-white">
                            Shop
                        </h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Bags
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Tees
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Objects
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Home Goods
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Accessories
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-white">
                            Company
                        </h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Who we are
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Sustainability
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Press
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Careers
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Terms &amp; Conditions
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Privacy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-medium text-white">
                            Account
                        </h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Manage Account
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Returns &amp; Exchanges
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    Redeem a Gift Card
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-white">
                            Connect
                        </h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="https://github.com/WillTheDeveloper" class="text-gray-300 hover:text-white">
                                    Github
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="https://www.instagram.com/willdotchill/" class="text-gray-300 hover:text-white">
                                    Instagram
                                </a>
                            </li>

                            <li class="text-sm">
                                <a href="https://twitter.com/WillDotChill" class="text-gray-300 hover:text-white">
                                    Twitter
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-12 md:mt-16 xl:mt-0">
                <h3 class="text-sm font-medium text-white">Contact Details</h3>
                <p class="mt-6 text-sm text-gray-300">Email - willthedeveloper13@gmail.com</p>
            </div>
        </div>

        <div class="border-t border-gray-800 py-10">
            <p class="text-sm text-gray-400">Copyright &copy; {{now()->year}} - Will's Photography</p>
        </div>
    </div>
</footer>

</div>
