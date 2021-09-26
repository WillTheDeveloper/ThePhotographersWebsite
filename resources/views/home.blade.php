<!doctype html>
<head>
    <title>Home | Will's Photography</title>
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
        <!-- Category section -->
        <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:max-w-7xl xl:mx-auto xl:px-8">
            <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">My Equipment</h2>
            </div>

            <div class="mt-4 flow-root">
                <div class="-my-2">
                    <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                        <div
                            class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                            <a href="#"
                               class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img
                      src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/144836-cameras-review-canon-eos-m50-review-image1-lfonpdrwua.jpg"
                      alt="" class="w-full h-full object-center object-cover">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Canon M50</span>
                            </a>

                            <a href="#"
                               class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img
                      src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Canon_EF-M_15-45mm_f3.5-6.3_IS_STM_01.jpg/1200px-Canon_EF-M_15-45mm_f3.5-6.3_IS_STM_01.jpg"
                      alt="" class="w-full h-full object-center object-cover">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">15-45mm</span>
                            </a>

                            <a href="#"
                               class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://brain-images-ssl.cdn.dixons.com/0/9/10150990/u_10150990.jpg" alt=""
                       class="w-full h-full object-center object-cover">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">55-200mm</span>
                            </a>

                            <a href="#"
                               class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://www.productiongear.co.uk/images/source/DJI/DJI-RSC2-Gimbal-1.JPEG" alt=""
                       class="w-full h-full object-center object-cover">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">RSC-2</span>
                            </a>

                            <a href="#"
                               class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                <span aria-hidden="true" class="absolute inset-0">
                  <img src="https://www.freeiconspng.com/uploads/video-camera-tripod-png-16.png" alt=""
                       class="w-full h-full object-center object-cover">
                </span>
                                <span aria-hidden="true"
                                      class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">Tripod</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 px-4 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all
                    categories<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </section>

        <!-- Featured section -->
        <section aria-labelledby="social-impact-heading" class="max-w-7xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:px-8">
            <div class="relative rounded-lg overflow-hidden">
                <div class="absolute inset-0">
                    <img
                        src="https://birdsofpreycentre.co.uk/wp-content/uploads/2016/03/Photography-Camera-HD-Wallpaper1.jpg"
                        alt="" class="w-full h-full object-center object-cover">
                </div>
                <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                    <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                        <h2 id="social-impact-heading"
                            class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            <span class="block sm:inline">Level up</span>
                            <span class="block sm:inline">your skills</span>
                        </h2>
                        <p class="mt-3 text-xl text-white">Photography can be quite hard to get into so take some advice
                            from me!</p>
                        <a href="#"
                           class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Learn
                            more</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collection section -->
        <section aria-labelledby="collection-heading"
                 class="max-w-xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 id="collection-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Latest photos</h2>

            <div class="mt-10 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                <a href="#" class="group block">
                    <div aria-hidden="true"
                         class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://iso.500px.com/wp-content/uploads/2016/10/stock-photo-159358357.jpg"
                             alt="Brown leather key ring with brass metal loops and rivets on wood table."
                             class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose
                        everything at once.</p>
                </a>

                <a href="#" class="group block">
                    <div aria-hidden="true"
                         class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img
                            src="https://i1.wp.com/digital-photography-school.com/wp-content/uploads/2021/06/aperture-photography-15.jpg?resize=1500%2C1205&ssl=1"
                            alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk will
                        look great.</p>
                </a>

                <a href="#" class="group block">
                    <div aria-hidden="true"
                         class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6BEudHusiLHgAWlyf7ya2BS67jOMwao-qvw&usqp=CAU"
                            alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a
                        single piece of paper.</p>
                </a>
            </div>
        </section>

        <!-- Featured section -->
        <section aria-labelledby="comfort-heading" class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="relative rounded-lg overflow-hidden">
                <div class="absolute inset-0">
                    <img src="https://pbblogassets.s3.amazonaws.com/uploads/2019/09/06113039/camera-trends.jpg" alt=""
                         class="w-full h-full object-center object-cover">
                </div>
                <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                    <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                        <h2 id="comfort-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            Don't have time? Make it a hobby.</h2>
                        <p class="mt-3 text-xl text-white">Not everyone has a lot of time so why don't you do what I did
                            and make photography something that you do in your free time rather than dedicating yourself
                            to it too soon.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    <p class="mt-6 text-sm text-gray-300">Email - will@teamatlas.cloud</p>
                </div>
            </div>

            <div class="border-t border-gray-800 py-10">
                <p class="text-sm text-gray-400">Copyright &copy; {{now()->year}} - Will's Photography</p>
            </div>
        </div>
    </footer>
</div>

</body>
