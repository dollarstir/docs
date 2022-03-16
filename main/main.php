<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yolk - State of the art framework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">


    <!-- Primary Meta Tags -->
    <meta name="title" content="Yolk - State of the art framework">
    <meta name="description"
        content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built sql queries and has custom UI ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://phpyolk.com/">
    <meta property="og:title" content="Yolk - State of the art framework">
    <meta property="og:description"
        content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built sql queries and has custom UI">
    <meta property="og:image" content="yolkassets/img/shot.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://phpyolk.com/">
    <meta property="twitter:title" content="Yolk - State of the art framework">
    <meta property="twitter:description"
        content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built sql queries and has custom UI">
    <meta property="twitter:image" content="yolkassets/img/shot.png">

    <!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="yolkassets/default/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="yolkassets/default/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="yolkassets/default/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="yolkassets/default/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="yolkassets/default/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="yolkassets/default/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="yolkassets/default/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="yolkassets/default/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="yolkassets/default/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="yolkassets/default/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="yolkassets/default/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="yolkassets/default/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="yolkassets/default/favicon-16x16.png">
<link rel="manifest" href="yolkassets/default/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="main/css/typeskit.css">
    <link rel="stylesheet" type="text/css" href="main/css/app-id=b59affd817f095c5db73.css">
    <link rel="stylesheet" href="main/css/main.css">

    <script>
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (localStorage.theme === 'system') {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }
        });

        function updateTheme() {
            if (!('theme' in localStorage)) {
                localStorage.theme = 'system';
            }

            switch (localStorage.theme) {
                case 'system':
                    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                    document.documentElement.setAttribute('color-theme', 'system');
                    break;

                case 'dark':
                    document.documentElement.classList.add('dark');
                    document.documentElement.setAttribute('color-theme', 'dark');
                    break;

                case 'light':
                    document.documentElement.classList.remove('dark');
                    document.documentElement.setAttribute('color-theme', 'light');
                    break;
            }
        }

        updateTheme();
    </script>
</head>

<body x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }" class="language-php h-full w-full font-sans text-gray-900 antialiased">

    <div class="absolute top-0 w-full">
        <header x-trap.inert.noscroll="navIsOpen" class="relative z-50 text-gray-700"
            @keydown.window.escape="navIsOpen = false" @click.away="navIsOpen = false">
            <div
                class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
                <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
                    <div class="flex-1">
                        <a href="/" class="inline-flex items-center">
                            <img class="ml-5 sm:block" src="yolkassets/img/logo.png" alt="Yolk" width="70" height="25">
                            <!-- <img class="ml-5 sm:block" src="main/img/logo.png" alt="Yolk" width="114" height="29"> -->
                        </a>
                    </div>
                    <ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10">
                        <li><a href="download">Documentation</a></li>
                        <li><a href="download">Download</a></li>
                        <!-- <li><a href="components">Components</a></li> -->
                        <li><a href="plugins">Plugins</a></li>
                        <li><a href="plugins">Community</a></li>
                        
                        <li><a href="https://laravel-news.com">Donate</a></li>
                        <!-- <li><a href="https://partners.laravel.com">Partners</a></li> -->
                    </ul>
                    <div class="flex-1 flex items-center justify-end">
                        <button @click.prevent="$dispatch('toggle-search-modal')">
                            <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                        <!-- <a class="group relative inline-flex border border-red-600 focus:outline-none hidden lg:ml-4 lg:inline-flex"
                            href="docs/9.x.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Documentation
                            </span>
                        </a> -->
                        <button
                            class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden"
                            aria-label="Toggle Menu" @click.prevent="navIsOpen = !navIsOpen">
                            <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2" />
                                <line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2" />
                            </svg>
                            <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5"
                                viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)"
                                    fill="currentColor" />
                                <rect width="2" height="24"
                                    transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="navIsOpen" class="lg:hidden" x-transition:enter="duration-150"
                x-transition:leave="duration-100 ease-in" x-cloak>
                <nav x-show="navIsOpen" x-transition.opacity x-cloak
                    class="fixed inset-0 w-full pt-[4.2rem] z-10 pointer-events-none">
                    <div class="relative h-full w-full py-8 px-5 bg-white pointer-events-auto overflow-y-auto">
                        <ul>
                            <li><a class="block w-full py-2" href="https://forge.laravel.com">Documentation</a></li>
                            <li><a class="block w-full py-2" href="https://vapor.laravel.com">Download</a></li>
                            <li><a class="block w-full py-3" href="https://laravel-news.com">Plugins</a></li>
                            <li><a class="block w-full py-3" href="https://partners.laravel.com">Community</a></li>
                            <li><a class="block w-full py-3" href="https://partners.laravel.com">Donate</a></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <div>
        <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
            <span
                class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex left-[-20%] -top-24 w-[640px] h-[640px]"></span>
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="absolute -left-2 -translate-y-12 pointer-events-none md:left-[12%]">
                    <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                        viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" />
                        <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                            stroke-linejoin="bevel" />
                        <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
                    </svg>
                </div>
                <div class="absolute -right-2 -translate-y-20 pointer-events-none md:right-1/4">
                    <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 2000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                        viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" />
                        <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                            stroke-linejoin="bevel" />
                        <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
                    </svg>
                </div>
                <div class="absolute bottom-0 right-6 -translate-y-20 pointer-events-none md:right-[12%]">
                    <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 1000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                        viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" />
                        <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                            stroke-linejoin="bevel" />
                        <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
                    </svg>
                </div>
                <div class="relative">
                    <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-6xl lg:text-7xl">State Of The 
                        Art <br class="hidden lg:inline"><span class="text-red-500">Framework</span></h1>
                    <p
                        class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
                        Yolk is a PHP framework that helps to easily build web applications. Comes with in-built sql queries and has custom UI .</p>
                    <div
                        class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <a class="group relative inline-flex border border-red-500 focus:outline-none w-full sm:w-auto"
                            href="docs/9.x.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-white text-center font-bold uppercase bg-red-500 ring-1 ring-red-500 ring-offset-1 ring-offset-red-500 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Get Started
                            </span>
                        </a>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none w-full sm:w-auto"
                            href="https://laracasts.com" target="_blank">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Watch Laracasts
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="hidden md:block md:overflow-hidden md:mt-24">
        <div class="flex items-center justify-center gap-x-10">
            <img src="main/images/companies/st-jude.png" alt="St. Jude" style="height: 61px">
            <img src="main/images/companies/disney.png" alt="Disney" style="height: 39px">
            <img src="main/images/companies/wwe.png" alt="WWE" style="height: 42px">
            <img src="main/images/companies/warner-bros.png" alt="Warner Bros" style="height: 37px">
            <img src="main/images/companies/bankrate.png" alt="Bankrate" style="height: 24px">
            <img src="main/images/companies/twitch.png" alt="twitch" style="height: 32px">
            <img src="main/images/companies/the-new-york-times.png" alt="The New York Times" style="height: 31px">
            <img src="main/images/companies/about-you.png" alt="About You" style="height: 28px">
        </div>
    </div>

    <div class="relative overflow-hidden py-16 md:pt-24 lg:pt-64">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex right-[-20%] top-0 w-[640px] h-[640px]"></span>
        <div class="hidden lg:block absolute -right-2 bottom-40 pointer-events-none">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 2000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="hidden lg:block absolute left-2 top-48 pointer-events-none lg:top-auto lg:bottom-64 lg:left-1/2">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 3000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="hidden lg:block absolute top-20 right-1/4 pointer-events-none md:top-48 md:right-1/4">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 500);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="relative max-w-screen-xl w-full mx-auto xl:px-5">
            <div class="relative w-full grid gap-12 lg:grid-cols-2">
                <div class="overflow-hidden flex justify-center lg:order-last">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <svg width="587" height="342" viewBox="0 0 587 342" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.09839" y="0.998535" width="580" height="330" rx="8"
                                transform="rotate(1 6.09839 0.998535)" fill="#161414" />
                            <circle cx="23.7748" cy="19.6942" r="3.5" transform="rotate(1 23.7748 19.6942)"
                                stroke="#FA615B" />
                            <circle cx="35.773" cy="19.9037" r="3.5" transform="rotate(1 35.773 19.9037)"
                                stroke="#FCBB40" />
                            <circle cx="47.7711" cy="20.1131" r="3.5" transform="rotate(1 47.7711 20.1131)"
                                stroke="#41C84A" />
                            <path
                                d="M68.9206 54.5651L68.9418 53.3529L63.4275 56.4754L63.4111 57.4147L68.8131 60.7277L68.8342 59.5155L64.5099 57.0212L64.5119 56.907L68.9206 54.5651ZM71.5649 54.3764L72.6375 54.3951C72.7295 53.4888 73.3294 52.947 74.2497 52.963C75.1382 52.9786 75.738 53.535 75.724 54.3347C75.7124 55.0011 75.4388 55.3963 74.701 55.8405C73.835 56.3523 73.438 56.9104 73.436 57.7548L73.4259 58.3323L74.5302 58.3516L74.5374 57.939C74.5491 57.2663 74.7901 56.9213 75.5727 56.4588C76.445 55.9471 76.8893 55.2248 76.9055 54.2982C76.929 52.9527 75.8477 51.9752 74.3118 51.9484C72.7252 51.9207 71.6678 52.8481 71.5649 54.3764ZM73.9706 61.313C74.453 61.3214 74.8471 60.9283 74.8558 60.4269C74.8646 59.9255 74.4844 59.5189 74.0021 59.5105C73.5197 59.5021 73.1256 59.8952 73.1169 60.3966C73.1081 60.8979 73.4883 61.3045 73.9706 61.313ZM82.701 54.3422C81.7173 54.325 80.993 54.7187 80.618 55.474L80.5037 55.472L80.5221 54.4184L79.4559 54.3998L79.2951 63.6089L80.3931 63.628L80.4523 60.2389L80.5729 60.241C80.858 61.0015 81.5804 61.4394 82.5768 61.4568C84.1699 61.4846 85.2308 60.3541 85.2616 58.5897L85.2839 57.3077C85.3149 55.5369 84.294 54.37 82.701 54.3422ZM82.3728 55.3269C83.5088 55.3467 84.2182 56.1717 84.196 57.441L84.1787 58.4311C84.1566 59.7004 83.4187 60.5065 82.2827 60.4867C81.1466 60.4669 80.4373 59.6419 80.4596 58.3662L80.4768 57.3761C80.499 56.1068 81.2367 55.307 82.3728 55.3269ZM87.3579 61.426L88.4368 61.4448L88.5075 57.3957C88.528 56.2215 89.3098 55.4416 90.4459 55.4614C91.5248 55.4803 92.0222 56.0794 92.0006 57.317L91.9275 61.5058L93.0064 61.5246L93.0843 57.0629C93.113 55.4191 92.3164 54.5037 90.8186 54.4775C89.765 54.4592 88.9632 54.9277 88.5865 55.7781L88.4977 55.7766L88.5661 51.8543L87.5253 51.8362L87.3579 61.426ZM98.7708 54.6227C97.7871 54.6055 97.0628 54.9992 96.6878 55.7545L96.5735 55.7525L96.5919 54.6989L95.5257 54.6803L95.3649 63.8894L96.4629 63.9085L96.5221 60.5194L96.6427 60.5215C96.9278 61.282 97.6502 61.7199 98.6467 61.7373C100.24 61.7651 101.301 60.6346 101.331 58.8702L101.354 57.5882C101.385 55.8174 100.364 54.6505 98.7708 54.6227ZM98.4426 55.6074C99.5786 55.6272 100.288 56.4522 100.266 57.7215L100.249 58.7116C100.226 59.9809 99.4886 60.787 98.3525 60.7672C97.2165 60.7474 96.5071 59.9224 96.5294 58.6467L96.5467 57.6566C96.5688 56.3873 97.3065 55.5875 98.4426 55.6074Z"
                                fill="#8CE99A" />
                            <path
                                d="M65.8619 93.4058L67.5055 97.085L68.7685 97.107L66.9702 93.1966C68.0171 92.8721 68.7006 91.9 68.7216 90.7004C68.7513 88.9995 67.6336 87.9261 65.8185 87.8945L62.7467 87.8408L62.5868 96.9991L63.6911 97.0184L63.7548 93.369L65.8619 93.4058ZM63.8336 88.8566L65.6995 88.8891C66.9244 88.9105 67.6113 89.5701 67.5914 90.7061C67.5715 91.8485 66.8495 92.4771 65.5865 92.4551L63.7713 92.4234L63.8336 88.8566ZM73.4818 97.3163C75.3033 97.3481 76.4855 96.1815 76.518 94.3219L76.5361 93.2811C76.5686 91.4215 75.4279 90.2144 73.6064 90.1826C71.7849 90.1508 70.6027 91.3174 70.5702 93.1769L70.5521 94.2178C70.5196 96.0774 71.6603 97.2845 73.4818 97.3163ZM73.5898 91.1346C74.7702 91.1552 75.4918 92.0058 75.4682 93.3577L75.4535 94.2018C75.4298 95.56 74.6791 96.3785 73.4986 96.3579C72.3181 96.3373 71.5964 95.493 71.6201 94.1349L71.6348 93.2907C71.6584 91.9389 72.4093 91.114 73.5898 91.1346ZM84.4571 90.4926L83.3782 90.4738L83.3074 94.5293C83.2869 95.7035 82.5114 96.4835 81.3754 96.4637C80.3028 96.4449 79.8052 95.8522 79.827 94.6082L79.9002 90.4131L78.8212 90.3942L78.7433 94.8623C78.7144 96.5124 79.5112 97.4215 81.009 97.4477C82.0562 97.4659 82.8516 96.9973 83.2347 96.1469L83.3236 96.1485L83.3024 97.3607L84.3369 97.3788L84.4571 90.4926ZM88.5322 88.7163L88.4996 90.5822L86.6654 90.5502L86.6494 91.4705L88.4835 91.5025L88.4155 95.3994C88.3905 96.8337 89.1725 97.4949 90.8798 97.5247C91.2098 97.5305 92.0481 97.5134 92.22 97.4846L92.236 96.5707C92.0516 96.5865 91.3595 96.5935 90.9723 96.5867C90.0013 96.5698 89.4816 96.1544 89.4947 95.4055L89.5625 91.5213L92.3423 91.5698L92.3584 90.6496L89.5659 90.6008L89.5984 88.7349L88.5322 88.7163ZM99.4794 95.8655C99.2785 96.4651 98.631 96.822 97.7615 96.8068C96.5874 96.7863 95.8527 95.9609 95.8747 94.6979L95.8796 94.4186L100.57 94.5005L100.582 93.8278C100.616 91.8349 99.5835 90.6297 97.7937 90.5984C96.042 90.5679 94.8598 91.7408 94.8281 93.5559L94.81 94.5904C94.7758 96.5515 95.8539 97.7068 97.7452 97.7398C99.1923 97.765 100.297 97.0161 100.527 95.8837L99.4794 95.8655ZM97.7712 91.5249C98.8819 91.5443 99.5408 92.3494 99.5178 93.6632L95.8939 93.5999C95.9169 92.2798 96.6224 91.5049 97.7712 91.5249ZM64.2912 183.392L65.9348 187.071L67.1978 187.093L65.3995 183.183C66.4464 182.858 67.1299 181.886 67.1509 180.687C67.1806 178.986 66.0629 177.912 64.2477 177.881L61.1759 177.827L61.0161 186.985L62.1204 187.005L62.1841 183.355L64.2912 183.392ZM62.2629 178.843L64.1288 178.875C65.3537 178.897 66.0405 179.556 66.0207 180.692C66.0008 181.835 65.2788 182.463 64.0158 182.441L62.2006 182.41L62.2629 178.843ZM71.9111 187.303C73.7326 187.334 74.9148 186.168 74.9473 184.308L74.9654 183.267C74.9979 181.408 73.8572 180.201 72.0357 180.169C70.2142 180.137 69.032 181.304 68.9995 183.163L68.9814 184.204C68.9489 186.064 70.0896 187.271 71.9111 187.303ZM72.019 181.121C73.1995 181.141 73.9211 181.992 73.8975 183.344L73.8828 184.188C73.8591 185.546 73.1083 186.365 71.9279 186.344C70.7474 186.324 70.0257 185.479 70.0494 184.121L70.0641 183.277C70.0877 181.925 70.8385 181.1 72.019 181.121ZM82.8864 180.479L81.8074 180.46L81.7367 184.516C81.7162 185.69 80.9407 186.47 79.8047 186.45C78.7321 186.431 78.2345 185.838 78.2562 184.595L78.3295 180.399L77.2505 180.381L77.1725 184.849C77.1437 186.499 77.9405 187.408 79.4383 187.434C80.4855 187.452 81.2809 186.984 81.664 186.133L81.7528 186.135L81.7317 187.347L82.7662 187.365L82.8864 180.479ZM86.9615 178.703L86.9289 180.569L85.0947 180.536L85.0786 181.457L86.9128 181.489L86.8448 185.386C86.8198 186.82 87.6018 187.481 89.3091 187.511C89.6391 187.517 90.4774 187.5 90.6493 187.471L90.6653 186.557C90.4809 186.573 89.7888 186.58 89.4016 186.573C88.4306 186.556 87.9109 186.141 87.924 185.392L87.9918 181.508L90.7716 181.556L90.7877 180.636L87.9951 180.587L88.0277 178.721L86.9615 178.703ZM97.9087 185.852C97.7077 186.451 97.0603 186.808 96.1908 186.793C95.0167 186.773 94.2819 185.947 94.304 184.684L94.3089 184.405L98.9991 184.487L99.0108 183.814C99.0456 181.821 98.0128 180.616 96.223 180.585C94.4713 180.554 93.289 181.727 93.2574 183.542L93.2393 184.577C93.2051 186.538 94.2832 187.693 96.1745 187.726C97.6216 187.751 98.7266 187.002 98.9559 185.87L97.9087 185.852ZM96.2005 181.511C97.3111 181.531 97.97 182.336 97.9471 183.649L94.3232 183.586C94.3462 182.266 95.0517 181.491 96.2005 181.511ZM159.998 205.846C158.666 205.823 157.907 204.934 157.933 203.429L158.036 197.521L156.919 197.501L156.815 203.48C156.778 205.587 157.962 206.871 159.98 206.906C161.998 206.941 163.226 205.699 163.263 203.592L163.367 197.614L162.25 197.594L162.147 203.503C162.121 205.007 161.331 205.869 159.998 205.846ZM165.599 201.786C165.582 202.763 166.187 203.402 167.425 203.709L168.443 203.962C169.316 204.174 169.647 204.472 169.637 205.018C169.626 205.678 169.022 206.093 168.083 206.076C167.194 206.061 166.591 205.682 166.444 205.044L165.346 205.025C165.446 206.208 166.467 206.956 168.029 206.983C169.66 207.012 170.734 206.205 170.756 204.936C170.774 203.939 170.174 203.345 168.841 203.017L167.873 202.778C167.014 202.572 166.663 202.268 166.673 201.741C166.684 201.112 167.256 200.716 168.131 200.731C168.937 200.746 169.509 201.124 169.625 201.729L170.666 201.747C170.559 200.596 169.6 199.862 168.166 199.837C166.649 199.81 165.62 200.592 165.599 201.786ZM177.944 205.252C177.743 205.851 177.095 206.208 176.226 206.193C175.052 206.172 174.317 205.347 174.339 204.084L174.344 203.805L179.034 203.887L179.046 203.214C179.081 201.221 178.048 200.016 176.258 199.984C174.506 199.954 173.324 201.127 173.292 202.942L173.274 203.976C173.24 205.938 174.318 207.093 176.209 207.126C177.657 207.151 178.762 206.402 178.991 205.27L177.944 205.252ZM176.235 200.911C177.346 200.93 178.005 201.735 177.982 203.049L174.358 202.986C174.381 201.666 175.087 200.891 176.235 200.911ZM183.869 204.047C183.899 202.295 184.819 201.258 186.342 201.284C186.717 201.291 187.16 201.375 187.475 201.494L187.496 200.282C187.269 200.183 186.896 200.119 186.502 200.113C185.176 200.089 184.308 200.734 184.031 202.006L183.892 202.003L183.923 200.245L181.352 200.2L181.337 201.064L182.867 201.09L182.777 206.25L181.387 206.226L181.372 207.089L185.948 207.169L185.963 206.306L183.83 206.268L183.869 204.047ZM92.8332 238.032L92.8407 234.324L92.9233 234.326L94.6753 239.429L95.5511 239.444L97.4802 234.405L97.5627 234.407L97.4409 238.112L97.3795 241.628L98.3759 241.646L98.5358 232.487L97.2791 232.466L95.1807 238.117L95.0982 238.116L93.1855 232.394L91.9352 232.372L91.7754 241.531L92.7718 241.548L92.8332 238.032ZM102.41 241.837C103.413 241.854 104.169 241.455 104.512 240.724L104.62 240.726L104.602 241.761L105.63 241.779L105.712 237.063C105.737 235.629 104.825 234.788 103.207 234.759C101.798 234.735 100.718 235.471 100.572 236.573L101.632 236.592C101.82 236.005 102.384 235.678 103.178 235.692C104.136 235.709 104.655 236.194 104.64 237.057L104.629 237.679L102.736 237.741C101.167 237.796 100.278 238.505 100.257 239.723C100.235 240.974 101.097 241.814 102.41 241.837ZM102.738 240.897C101.868 240.881 101.337 240.428 101.349 239.704C101.362 238.987 101.877 238.583 102.842 238.556L104.614 238.504L104.6 239.317C104.584 240.237 103.779 240.915 102.738 240.897ZM111.416 233.296C111.923 233.305 112.317 232.931 112.326 232.423C112.335 231.922 111.954 231.535 111.447 231.526C110.939 231.517 110.545 231.891 110.536 232.392C110.527 232.9 110.908 233.288 111.416 233.296ZM114.154 241.921L114.169 241.026L111.891 240.987L111.996 234.995L108.587 234.936L108.572 235.831L110.914 235.872L110.825 240.968L108.464 240.927L108.448 241.822L114.154 241.921ZM122.189 242.061L122.204 241.167L119.932 241.127L120.084 232.432L116.669 232.372L116.654 233.267L118.989 233.308L118.853 241.108L116.499 241.067L116.483 241.962L122.189 242.061ZM360.365 240.537L361.618 246.241L362.671 246.259L364.405 237.128L363.345 237.11L362.729 240.768L362.11 244.573L362.04 244.572L360.852 239.161L359.85 239.144L358.473 244.51L358.404 244.509L357.918 240.685L357.43 237.007L356.37 236.988L357.784 246.174L358.838 246.192L360.289 240.535L360.365 240.537ZM370.153 244.612C369.952 245.212 369.305 245.569 368.435 245.553C367.261 245.533 366.526 244.707 366.548 243.444L366.553 243.165L371.244 243.247L371.255 242.574C371.29 240.581 370.257 239.376 368.467 239.345C366.716 239.314 365.534 240.487 365.502 242.302L365.484 243.337C365.45 245.298 366.528 246.453 368.419 246.486C369.866 246.512 370.971 245.763 371.2 244.63L370.153 244.612ZM368.445 240.272C369.556 240.291 370.215 241.096 370.192 242.41L366.568 242.346C366.591 241.026 367.296 240.251 368.445 240.272ZM379.306 246.549L379.321 245.655L377.049 245.615L377.201 236.92L373.787 236.86L373.771 237.755L376.107 237.796L375.97 245.596L373.616 245.555L373.6 246.45L379.306 246.549ZM387.284 241.946C387.131 240.528 386.105 239.647 384.582 239.62C382.71 239.587 381.598 240.717 381.563 242.691L381.548 243.592C381.513 245.566 382.585 246.734 384.457 246.766C385.98 246.793 387.042 245.954 387.238 244.555L386.172 244.536C386.025 245.321 385.344 245.81 384.455 245.795C383.255 245.774 382.603 244.95 382.629 243.471L382.64 242.849C382.666 241.37 383.346 240.563 384.546 240.584C385.434 240.6 386.098 241.119 386.218 241.928L387.284 241.946ZM392.365 246.904C394.187 246.936 395.369 245.77 395.401 243.91L395.419 242.869C395.452 241.01 394.311 239.802 392.49 239.771C390.668 239.739 389.486 240.905 389.453 242.765L389.435 243.806C389.403 245.665 390.544 246.873 392.365 246.904ZM392.473 240.723C393.653 240.743 394.375 241.594 394.351 242.946L394.337 243.79C394.313 245.148 393.562 245.967 392.382 245.946C391.201 245.925 390.48 245.081 390.503 243.723L390.518 242.879C390.542 241.527 391.292 240.702 392.473 240.723ZM403.81 241.905C403.832 240.629 403.343 239.954 402.384 239.937C401.692 239.925 401.133 240.334 400.944 240.991L400.829 240.989C400.695 240.307 400.245 239.9 399.598 239.888C398.951 239.877 398.448 240.275 398.265 240.963L398.151 240.961L398.168 239.99L397.203 239.974L397.083 246.86L398.054 246.877L398.135 242.231C398.15 241.374 398.54 240.854 399.149 240.865C399.733 240.875 400.03 241.318 400.016 242.149L399.933 246.909L400.897 246.926L400.978 242.281C400.993 241.424 401.371 240.903 401.974 240.914C402.551 240.924 402.848 241.367 402.833 242.205L402.75 246.959L403.722 246.976L403.81 241.905ZM410.328 245.313C410.127 245.913 409.479 246.27 408.61 246.255C407.436 246.234 406.701 245.409 406.723 244.146L406.728 243.866L411.418 243.948L411.43 243.276C411.465 241.283 410.432 240.077 408.642 240.046C406.89 240.016 405.708 241.189 405.676 243.004L405.658 244.038C405.624 245.999 406.702 247.155 408.594 247.188C410.041 247.213 411.146 246.464 411.375 245.332L410.328 245.313ZM408.619 240.973C409.73 240.992 410.389 241.797 410.366 243.111L406.742 243.048C406.765 241.728 407.471 240.953 408.619 240.973ZM414.23 243.642L414.237 239.934L414.32 239.936L416.072 245.039L416.947 245.054L418.877 240.015L418.959 240.017L418.837 243.722L418.776 247.238L419.772 247.256L419.932 238.097L418.675 238.076L416.577 243.727L416.495 243.726L414.582 238.004L413.332 237.982L413.172 247.141L414.168 247.158L414.23 243.642ZM426.398 245.594C426.197 246.193 425.549 246.55 424.68 246.535C423.506 246.515 422.771 245.689 422.793 244.426L422.798 244.147L427.488 244.229L427.5 243.556C427.534 241.563 426.502 240.358 424.712 240.327C422.96 240.296 421.778 241.469 421.746 243.284L421.728 244.319C421.694 246.28 422.772 247.435 424.663 247.468C426.11 247.493 427.215 246.744 427.445 245.612L426.398 245.594ZM424.689 241.253C425.8 241.273 426.459 242.078 426.436 243.391L422.812 243.328C422.835 242.008 423.541 241.233 424.689 241.253ZM430.123 242.408C430.106 243.386 430.71 244.025 431.949 244.332L432.967 244.585C433.839 244.797 434.171 245.095 434.161 245.64C434.15 246.3 433.546 246.715 432.606 246.699C431.718 246.683 431.115 246.305 430.967 245.667L429.869 245.648C429.969 246.831 430.991 247.579 432.552 247.606C434.183 247.634 435.258 246.828 435.28 245.558C435.297 244.562 434.698 243.967 433.364 243.639L432.397 243.4C431.537 243.195 431.187 242.89 431.196 242.364C431.207 241.735 431.779 241.339 432.655 241.354C433.461 241.368 434.032 241.746 434.149 242.352L435.189 242.37C435.083 241.219 434.124 240.485 432.69 240.46C431.173 240.433 430.143 241.215 430.123 242.408ZM438.158 242.549C438.14 243.526 438.745 244.165 439.984 244.472L441.002 244.725C441.874 244.937 442.206 245.235 442.196 245.781C442.184 246.441 441.58 246.856 440.641 246.839C439.753 246.824 439.15 246.445 439.002 245.807L437.904 245.788C438.004 246.971 439.026 247.719 440.587 247.746C442.218 247.775 443.293 246.968 443.315 245.699C443.332 244.702 442.733 244.108 441.399 243.78L440.432 243.541C439.572 243.335 439.222 243.031 439.231 242.504C439.242 241.875 439.814 241.479 440.69 241.494C441.496 241.509 442.067 241.887 442.184 242.492L443.224 242.51C443.118 241.359 442.159 240.625 440.725 240.6C439.208 240.573 438.178 241.355 438.158 242.549ZM447.911 247.868C448.914 247.885 449.67 247.486 450.013 246.755L450.121 246.757L450.103 247.792L451.131 247.809L451.213 243.094C451.239 241.66 450.326 240.818 448.708 240.79C447.299 240.765 446.22 241.502 446.073 242.604L447.133 242.623C447.321 242.036 447.886 241.709 448.679 241.723C449.637 241.74 450.156 242.225 450.141 243.088L450.13 243.71L448.237 243.772C446.668 243.827 445.779 244.535 445.758 245.754C445.736 247.004 446.598 247.845 447.911 247.868ZM448.239 246.927C447.369 246.912 446.838 246.458 446.85 245.735C446.863 245.018 447.378 244.614 448.343 244.586L450.115 244.535L450.101 245.347C450.085 246.268 449.28 246.945 448.239 246.927ZM456.398 250.479C458.264 250.512 459.385 249.566 459.414 247.948L459.534 241.062L458.468 241.043L458.449 242.109L458.328 242.107C458.043 241.359 457.296 240.908 456.299 240.891C454.687 240.863 453.614 241.987 453.583 243.757L453.561 244.995C453.53 246.759 454.557 247.926 456.15 247.954C457.153 247.972 457.922 247.547 458.24 246.829L458.354 246.831L458.335 247.903C458.316 249.008 457.639 249.605 456.433 249.584C455.513 249.568 454.828 249.182 454.698 248.608L453.632 248.59C453.751 249.734 454.805 250.451 456.398 250.479ZM454.649 244.862L454.665 243.916C454.688 242.653 455.438 241.847 456.58 241.867C457.716 241.887 458.432 242.712 458.41 243.981L458.394 244.927C458.371 246.196 457.627 247.002 456.491 246.982C455.349 246.963 454.627 246.125 454.649 244.862ZM466.572 246.295C466.371 246.895 465.724 247.252 464.854 247.236C463.68 247.216 462.945 246.39 462.967 245.127L462.972 244.848L467.662 244.93L467.674 244.257C467.709 242.264 466.676 241.059 464.886 241.028C463.135 240.997 461.952 242.17 461.921 243.985L461.903 245.02C461.868 246.981 462.947 248.136 464.838 248.169C466.285 248.195 467.39 247.446 467.619 246.313L466.572 246.295ZM464.864 241.955C465.975 241.974 466.633 242.779 466.61 244.093L462.987 244.029C463.01 242.709 463.715 241.934 464.864 241.955Z"
                                fill="#FFA94D" />
                            <path
                                d="M105.708 92.9142C106.336 92.9251 106.866 92.4011 106.877 91.7601C106.889 91.1191 106.377 90.5768 105.749 90.5659C105.121 90.5549 104.591 91.0789 104.58 91.72C104.569 92.361 105.08 92.9032 105.708 92.9142ZM105.623 97.7884C106.251 97.7994 106.781 97.2817 106.792 96.6343C106.803 95.9933 106.292 95.4575 105.664 95.4465C105.036 95.4355 104.506 95.9532 104.495 96.5942C104.483 97.2416 104.995 97.7774 105.623 97.7884ZM113.743 93.0544C114.371 93.0654 114.901 92.5413 114.912 91.9003C114.923 91.2593 114.412 90.7171 113.784 90.7061C113.156 90.6952 112.626 91.2192 112.615 91.8602C112.604 92.5012 113.115 93.0434 113.743 93.0544ZM113.658 97.9287C114.286 97.9396 114.816 97.4219 114.827 96.7746C114.838 96.1336 114.327 95.5977 113.699 95.5867C113.071 95.5758 112.541 96.0935 112.53 96.7345C112.518 97.3818 113.03 97.9177 113.658 97.9287ZM144.495 93.8451C144.457 96.003 145.072 97.8802 146.31 99.3366L147.382 99.3553C146.101 97.4855 145.577 95.8575 145.612 93.8646C145.646 91.8718 146.227 90.263 147.573 88.439L146.5 88.4203C145.212 89.8326 144.532 91.6936 144.495 93.8451ZM273.742 102.793L275.008 98.6881L273.58 98.6632L272.721 102.775L273.742 102.793ZM361.437 97.6319C361.4 99.7897 362.014 101.667 363.252 103.123L364.325 103.142C363.043 101.272 362.519 99.6442 362.554 97.6514C362.589 95.6585 363.169 94.0497 364.515 92.2258L363.443 92.2071C362.155 93.6194 361.475 95.4803 361.437 97.6319ZM370.791 101.509C369.458 101.486 368.699 100.596 368.725 99.0923L368.828 93.1835L367.711 93.164L367.607 99.1426C367.57 101.25 368.754 102.534 370.772 102.569C372.791 102.604 374.019 101.362 374.055 99.2552L374.16 93.2766L373.043 93.2571L372.94 99.1659C372.913 100.67 372.124 101.532 370.791 101.509ZM376.391 97.4485C376.374 98.4259 376.979 99.0649 378.218 99.3723L379.236 99.6249C380.108 99.837 380.439 100.135 380.43 100.681C380.418 101.341 379.814 101.755 378.875 101.739C377.986 101.724 377.384 101.345 377.236 100.707L376.138 100.688C376.238 101.871 377.26 102.619 378.821 102.646C380.452 102.674 381.526 101.868 381.549 100.599C381.566 99.6021 380.967 99.0076 379.633 98.6796L378.666 98.4405C377.806 98.235 377.456 97.9305 377.465 97.4037C377.476 96.7754 378.048 96.3791 378.924 96.3944C379.73 96.4085 380.301 96.7866 380.417 97.3918L381.458 97.41C381.351 96.259 380.393 95.5249 378.959 95.4998C377.442 95.4734 376.412 96.2553 376.391 97.4485ZM388.736 100.914C388.535 101.514 387.888 101.871 387.018 101.856C385.844 101.835 385.109 101.01 385.131 99.7469L385.136 99.4676L389.827 99.5495L389.838 98.8767C389.873 96.8839 388.84 95.6787 387.05 95.6474C385.299 95.6168 384.116 96.7898 384.085 98.6049L384.067 99.6394C384.033 101.601 385.111 102.756 387.002 102.789C388.449 102.814 389.554 102.065 389.783 100.933L388.736 100.914ZM387.028 96.5739C388.139 96.5933 388.797 97.3984 388.775 98.7122L385.151 98.6489C385.174 97.3288 385.879 96.5539 387.028 96.5739ZM394.661 99.7101C394.692 97.9584 395.612 96.9206 397.135 96.9472C397.509 96.9537 397.952 97.0376 398.267 97.1574L398.289 95.9452C398.062 95.846 397.688 95.7823 397.295 95.7755C395.968 95.7523 395.1 96.3974 394.824 97.6687L394.684 97.6662L394.715 95.9082L392.145 95.8633L392.13 96.7265L393.659 96.7532L393.569 101.913L392.179 101.889L392.164 102.752L396.74 102.832L396.755 101.969L394.623 101.931L394.661 99.7101ZM421.923 96.3831L420.844 96.3643L420.774 100.42C420.753 101.594 419.978 102.374 418.842 102.354C417.769 102.335 417.271 101.743 417.293 100.499L417.366 96.3036L416.287 96.2847L416.209 100.753C416.181 102.403 416.977 103.312 418.475 103.338C419.522 103.356 420.318 102.888 420.701 102.037L420.79 102.039L420.769 103.251L421.803 103.269L421.923 96.3831ZM424.601 98.29C424.584 99.2674 425.188 99.9064 426.427 100.214L427.445 100.466C428.318 100.678 428.649 100.976 428.639 101.522C428.628 102.182 428.024 102.597 427.084 102.581C426.196 102.565 425.593 102.186 425.445 101.549L424.347 101.53C424.447 102.712 425.469 103.46 427.031 103.487C428.662 103.516 429.736 102.709 429.758 101.44C429.775 100.444 429.176 99.8491 427.843 99.5211L426.875 99.282C426.016 99.0765 425.665 98.772 425.675 98.2452C425.686 97.6169 426.257 97.2206 427.133 97.2359C427.939 97.25 428.51 97.6281 428.627 98.2333L429.668 98.2515C429.561 97.1005 428.602 96.3664 427.168 96.3413C425.651 96.3149 424.622 97.0968 424.601 98.29ZM436.946 101.756C436.745 102.356 436.097 102.712 435.228 102.697C434.054 102.677 433.319 101.851 433.341 100.588L433.346 100.309L438.036 100.391L438.048 99.7182C438.082 97.7254 437.05 96.5202 435.26 96.4889C433.508 96.4583 432.326 97.6313 432.294 99.4464L432.276 100.481C432.242 102.442 433.32 103.597 435.211 103.63C436.658 103.656 437.764 102.907 437.993 101.774L436.946 101.756ZM435.237 97.4154C436.348 97.4348 437.007 98.2399 436.984 99.5537L433.36 99.4904C433.383 98.1703 434.089 97.3954 435.237 97.4154ZM442.871 100.552C442.901 98.7999 443.821 97.7621 445.344 97.7887C445.719 97.7952 446.162 97.8791 446.477 97.9989L446.498 96.7867C446.271 96.6875 445.898 96.6238 445.504 96.617C444.178 96.5938 443.31 97.2389 443.033 98.5102L442.894 98.5077L442.924 96.7497L440.354 96.7048L440.339 97.568L441.869 97.5947L441.778 102.755L440.389 102.73L440.373 103.593L444.949 103.673L444.965 102.81L442.832 102.773L442.871 100.552ZM452.588 99.2229C452.626 97.0714 452.011 95.1878 450.773 93.7314L449.701 93.7127C450.982 95.5825 451.506 97.2106 451.471 99.2034C451.437 101.196 450.856 102.805 449.51 104.629L450.583 104.648C451.871 103.235 452.551 101.381 452.588 99.2229ZM469.655 104.974L469.67 104.105L468.978 104.093C468.026 104.076 467.846 103.851 467.865 102.746L467.895 101.052C467.91 100.163 467.254 99.5614 465.966 99.5136L465.968 99.412C467.257 99.4028 467.934 98.8242 467.949 97.9356L467.979 96.2411C467.998 95.1367 468.186 94.9178 469.138 94.9344L469.83 94.9465L469.845 94.077L468.982 94.0619C467.439 94.035 466.942 94.5152 466.915 96.0828L466.89 97.5045C466.873 98.4882 466.292 99.0431 464.809 98.8649L464.789 100.014C466.277 99.8872 466.838 100.468 466.821 101.446L466.796 102.867C466.769 104.435 467.249 104.932 468.791 104.959L469.655 104.974ZM164.492 109.892L163.413 109.874L163.342 113.929C163.322 115.103 162.546 115.883 161.41 115.863C160.338 115.845 159.84 115.252 159.862 114.008L159.935 109.813L158.856 109.794L158.778 114.262C158.749 115.912 159.546 116.821 161.044 116.847C162.091 116.866 162.887 116.397 163.27 115.547L163.358 115.548L163.337 116.76L164.372 116.779L164.492 109.892ZM167.17 111.799C167.153 112.777 167.757 113.416 168.996 113.723L170.014 113.976C170.886 114.188 171.218 114.486 171.208 115.031C171.197 115.691 170.593 116.106 169.653 116.09C168.765 116.074 168.162 115.696 168.014 115.058L166.916 115.039C167.016 116.222 168.038 116.969 169.599 116.997C171.23 117.025 172.305 116.219 172.327 114.949C172.344 113.953 171.745 113.358 170.411 113.03L169.444 112.791C168.584 112.586 168.234 112.281 168.243 111.755C168.254 111.126 168.826 110.73 169.702 110.745C170.508 110.759 171.079 111.137 171.196 111.743L172.236 111.761C172.13 110.61 171.171 109.876 169.737 109.851C168.22 109.824 167.19 110.606 167.17 111.799ZM179.514 115.265C179.313 115.865 178.666 116.222 177.796 116.207C176.622 116.186 175.888 115.361 175.91 114.098L175.915 113.818L180.605 113.9L180.616 113.228C180.651 111.235 179.618 110.029 177.829 109.998C176.077 109.968 174.895 111.141 174.863 112.956L174.845 113.99C174.811 115.951 175.889 117.107 177.78 117.14C179.227 117.165 180.332 116.416 180.562 115.284L179.514 115.265ZM177.806 110.925C178.917 110.944 179.576 111.749 179.553 113.063L175.929 113C175.952 111.68 176.657 110.905 177.806 110.925ZM185.44 114.061C185.47 112.309 186.39 111.271 187.913 111.298C188.287 111.304 188.73 111.388 189.046 111.508L189.067 110.296C188.84 110.197 188.467 110.133 188.073 110.126C186.747 110.103 185.878 110.748 185.602 112.019L185.463 112.017L185.493 110.259L182.923 110.214L182.908 111.077L184.437 111.104L184.347 116.264L182.957 116.24L182.942 117.103L187.518 117.183L187.533 116.319L185.401 116.282L185.44 114.061ZM193.778 112.454C194.406 112.465 194.936 111.941 194.947 111.3C194.958 110.659 194.447 110.117 193.819 110.106C193.191 110.095 192.661 110.619 192.65 111.26C192.639 111.901 193.15 112.443 193.778 112.454ZM193.105 119.394L194.37 115.283L192.942 115.258L192.083 119.376L193.105 119.394ZM62.3305 133.87L63.1936 133.885C64.7359 133.912 65.2331 133.432 65.2605 131.864L65.2853 130.442C65.3023 129.465 65.8835 128.904 67.366 129.082L67.386 127.933C65.8982 128.06 65.3369 127.485 65.3541 126.501L65.3789 125.079C65.4063 123.512 64.9261 123.015 63.3838 122.988L62.5207 122.973L62.5055 123.842L63.1973 123.854C64.1493 123.871 64.3295 124.096 64.3102 125.2L64.2806 126.895C64.2651 127.784 64.9212 128.385 66.209 128.44L66.2073 128.541C64.9185 128.544 64.2417 129.123 64.2262 130.011L64.1967 131.706C64.1774 132.81 63.9895 133.029 63.0374 133.012L62.3457 133L62.3305 133.87ZM74.3193 128.626C74.3569 126.474 73.7422 124.591 72.5043 123.134L71.4317 123.115C72.7132 124.985 73.2371 126.613 73.2023 128.606C73.1675 130.599 72.5871 132.208 71.2411 134.032L72.3137 134.05C73.6017 132.638 74.2817 130.784 74.3193 128.626ZM80.9751 128.488C81.6034 128.499 82.1332 127.975 82.1443 127.334C82.1555 126.693 81.6444 126.151 81.0161 126.14C80.3878 126.129 79.858 126.653 79.8468 127.294C79.8357 127.935 80.3468 128.477 80.9751 128.488ZM80.3016 135.428L81.5669 131.317L80.1389 131.292L79.2798 135.41L80.3016 135.428ZM104.137 182.9C104.766 182.911 105.295 182.387 105.307 181.746C105.318 181.105 104.807 180.563 104.178 180.552C103.55 180.541 103.02 181.065 103.009 181.706C102.998 182.347 103.509 182.889 104.137 182.9ZM104.052 187.775C104.681 187.786 105.21 187.268 105.222 186.621C105.233 185.98 104.722 185.444 104.093 185.433C103.465 185.422 102.935 185.94 102.924 186.581C102.913 187.228 103.424 187.764 104.052 187.775ZM112.172 183.041C112.801 183.052 113.33 182.528 113.342 181.887C113.353 181.246 112.842 180.703 112.213 180.692C111.585 180.681 111.055 181.205 111.044 181.847C111.033 182.488 111.544 183.03 112.172 183.041ZM112.087 187.915C112.716 187.926 113.245 187.408 113.256 186.761C113.268 186.12 112.756 185.584 112.128 185.573C111.5 185.562 110.97 186.08 110.959 186.721C110.948 187.368 111.459 187.904 112.087 187.915ZM150.959 183.972C150.921 186.13 151.536 188.007 152.774 189.463L153.847 189.482C152.565 187.612 152.041 185.984 152.076 183.991C152.111 181.998 152.691 180.39 154.037 178.566L152.964 178.547C151.676 179.959 150.996 181.82 150.959 183.972ZM223.962 191.937L225.227 187.833L223.799 187.808L222.94 191.92L223.962 191.937ZM311.657 186.777C311.619 188.935 312.234 190.812 313.472 192.268L314.545 192.287C313.263 190.417 312.739 188.789 312.774 186.796C312.809 184.803 313.389 183.195 314.735 181.371L313.663 181.352C312.375 182.764 311.695 184.625 311.657 186.777ZM321.22 190.658C319.735 190.632 318.978 189.622 319.011 187.724L319.04 186.093C319.073 184.195 319.865 183.212 321.343 183.238C322.517 183.259 323.322 184.104 323.338 185.343L324.474 185.362C324.47 183.407 323.298 182.212 321.368 182.178C319.217 182.141 317.941 183.572 317.897 186.073L317.869 187.704C317.825 190.205 319.05 191.68 321.202 191.717C323.074 191.75 324.377 190.573 324.408 188.802L323.278 188.783C323.226 189.962 322.439 190.679 321.22 190.658ZM328.811 188.574C328.842 186.823 329.762 185.785 331.285 185.811C331.659 185.818 332.102 185.902 332.418 186.022L332.439 184.809C332.212 184.71 331.838 184.647 331.445 184.64C330.118 184.617 329.25 185.262 328.974 186.533L328.834 186.531L328.865 184.772L326.295 184.728L326.28 185.591L327.809 185.617L327.719 190.777L326.329 190.753L326.314 191.616L330.89 191.696L330.905 190.833L328.773 190.796L328.811 188.574ZM338.956 190.059C338.755 190.659 338.108 191.016 337.238 191.001C336.064 190.98 335.329 190.155 335.351 188.892L335.356 188.612L340.046 188.694L340.058 188.022C340.093 186.029 339.06 184.823 337.27 184.792C335.519 184.762 334.336 185.935 334.305 187.75L334.287 188.784C334.252 190.745 335.33 191.901 337.222 191.934C338.669 191.959 339.774 191.21 340.003 190.078L338.956 190.059ZM337.248 185.719C338.358 185.738 339.017 186.543 338.994 187.857L335.37 187.794C335.393 186.474 336.099 185.699 337.248 185.719ZM344.4 192.053C345.403 192.07 346.159 191.671 346.502 190.94L346.61 190.942L346.592 191.977L347.62 191.994L347.702 187.279C347.727 185.845 346.815 185.003 345.197 184.975C343.788 184.95 342.708 185.687 342.562 186.789L343.622 186.808C343.81 186.221 344.374 185.894 345.168 185.908C346.126 185.924 346.644 186.41 346.629 187.273L346.618 187.895L344.725 187.957C343.156 188.012 342.268 188.72 342.247 189.939C342.225 191.189 343.086 192.03 344.4 192.053ZM344.728 191.112C343.858 191.097 343.326 190.643 343.339 189.92C343.351 189.203 343.866 188.799 344.832 188.771L346.604 188.72L346.59 189.532C346.574 190.453 345.768 191.13 344.728 191.112ZM352.113 183.331L352.081 185.197L350.247 185.165L350.231 186.085L352.065 186.117L351.997 190.014C351.972 191.448 352.754 192.109 354.461 192.139C354.791 192.145 355.629 192.128 355.801 192.099L355.817 191.185C355.633 191.201 354.941 191.208 354.554 191.201C353.583 191.184 353.063 190.769 353.076 190.02L353.144 186.136L355.924 186.184L355.94 185.264L353.147 185.215L353.18 183.349L352.113 183.331ZM363.061 190.48C362.86 191.08 362.212 191.437 361.343 191.421C360.169 191.401 359.434 190.575 359.456 189.312L359.461 189.033L364.151 189.115L364.163 188.442C364.198 186.449 363.165 185.244 361.375 185.213C359.623 185.182 358.441 186.355 358.409 188.17L358.391 189.205C358.357 191.166 359.435 192.321 361.327 192.354C362.774 192.38 363.879 191.631 364.108 190.498L363.061 190.48ZM361.352 186.139C362.463 186.159 363.122 186.964 363.099 188.278L359.475 188.214C359.498 186.894 360.204 186.119 361.352 186.139ZM369.22 191.495C367.887 191.472 367.128 190.583 367.155 189.079L367.258 183.17L366.141 183.15L366.036 189.129C366 191.236 367.183 192.52 369.202 192.555C371.22 192.591 372.448 191.349 372.485 189.241L372.589 183.263L371.472 183.243L371.369 189.152C371.343 190.656 370.553 191.519 369.22 191.495ZM374.821 187.435C374.804 188.412 375.408 189.051 376.647 189.359L377.665 189.611C378.537 189.823 378.869 190.121 378.859 190.667C378.848 191.327 378.244 191.742 377.304 191.725C376.416 191.71 375.813 191.331 375.665 190.694L374.567 190.675C374.667 191.857 375.689 192.605 377.25 192.632C378.881 192.661 379.956 191.854 379.978 190.585C379.995 189.588 379.396 188.994 378.062 188.666L377.095 188.427C376.235 188.221 375.885 187.917 375.894 187.39C375.905 186.762 376.477 186.365 377.353 186.381C378.159 186.395 378.73 186.773 378.847 187.378L379.888 187.396C379.781 186.245 378.822 185.511 377.388 185.486C375.871 185.46 374.842 186.242 374.821 187.435ZM387.165 190.901C386.964 191.5 386.317 191.857 385.448 191.842C384.273 191.822 383.539 190.996 383.561 189.733L383.566 189.454L388.256 189.536L388.268 188.863C388.302 186.87 387.269 185.665 385.48 185.634C383.728 185.603 382.546 186.776 382.514 188.591L382.496 189.626C382.462 191.587 383.54 192.742 385.431 192.775C386.878 192.8 387.983 192.051 388.213 190.919L387.165 190.901ZM385.457 186.56C386.568 186.58 387.227 187.385 387.204 188.698L383.58 188.635C383.603 187.315 384.308 186.54 385.457 186.56ZM393.091 189.696C393.121 187.945 394.041 186.907 395.564 186.933C395.938 186.94 396.381 187.024 396.697 187.144L396.718 185.931C396.491 185.832 396.118 185.769 395.724 185.762C394.398 185.739 393.529 186.384 393.253 187.655L393.114 187.653L393.144 185.894L390.574 185.85L390.559 186.713L392.088 186.739L391.998 191.899L390.608 191.875L390.593 192.738L395.169 192.818L395.184 191.955L393.052 191.918L393.091 189.696ZM401.757 189.283L403.401 192.962L404.664 192.984L402.866 189.073C403.913 188.749 404.596 187.777 404.617 186.577C404.647 184.876 403.529 183.803 401.714 183.771L398.642 183.718L398.482 192.876L399.587 192.895L399.65 189.246L401.757 189.283ZM399.729 184.733L401.595 184.766C402.82 184.787 403.507 185.447 403.487 186.583C403.467 187.725 402.745 188.354 401.482 188.332L399.667 188.3L399.729 184.733ZM411.27 191.322C411.069 191.921 410.422 192.278 409.552 192.263C408.378 192.242 407.643 191.417 407.665 190.154L407.67 189.875L412.361 189.957L412.372 189.284C412.407 187.291 411.374 186.086 409.584 186.054C407.833 186.024 406.65 187.197 406.619 189.012L406.601 190.046C406.567 192.008 407.645 193.163 409.536 193.196C410.983 193.221 412.088 192.472 412.317 191.34L411.27 191.322ZM409.562 186.981C410.673 187 411.331 187.805 411.309 189.119L407.685 189.056C407.708 187.736 408.413 186.961 409.562 186.981ZM417.105 186.198C415.512 186.171 414.451 187.301 414.42 189.072L414.398 190.354C414.367 192.118 415.388 193.285 416.981 193.313C417.977 193.33 418.715 192.918 419.026 192.168L419.147 192.17L419.087 195.559L420.185 195.578L420.346 186.369L419.28 186.351L419.262 187.404L419.147 187.402C418.799 186.634 418.089 186.216 417.105 186.198ZM417.399 187.194C418.535 187.214 419.244 188.039 419.222 189.308L419.205 190.298C419.182 191.574 418.445 192.374 417.309 192.354C416.173 192.334 415.463 191.503 415.486 190.233L415.503 189.243C415.525 187.974 416.263 187.174 417.399 187.194ZM428.387 186.51L427.309 186.491L427.238 190.546C427.217 191.72 426.442 192.501 425.306 192.481C424.233 192.462 423.736 191.869 423.757 190.625L423.831 186.43L422.752 186.411L422.674 190.879C422.645 192.529 423.442 193.439 424.939 193.465C425.987 193.483 426.782 193.014 427.165 192.164L427.254 192.166L427.233 193.378L428.267 193.396L428.387 186.51ZM435.375 191.742C435.174 192.342 434.526 192.699 433.657 192.684C432.483 192.663 431.748 191.838 431.77 190.575L431.775 190.295L436.465 190.377L436.477 189.705C436.512 187.712 435.479 186.506 433.689 186.475C431.937 186.445 430.755 187.618 430.724 189.433L430.705 190.467C430.671 192.428 431.749 193.584 433.641 193.617C435.088 193.642 436.193 192.893 436.422 191.761L435.375 191.742ZM433.667 187.402C434.777 187.421 435.436 188.226 435.413 189.54L431.789 189.477C431.812 188.157 432.518 187.382 433.667 187.402ZM439.1 188.557C439.083 189.534 439.688 190.173 440.927 190.481L441.944 190.733C442.817 190.945 443.148 191.243 443.138 191.789C443.127 192.449 442.523 192.864 441.584 192.847C440.695 192.832 440.092 192.453 439.945 191.816L438.847 191.797C438.947 192.979 439.968 193.727 441.53 193.754C443.161 193.783 444.235 192.976 444.257 191.707C444.275 190.71 443.675 190.116 442.342 189.788L441.374 189.549C440.515 189.343 440.164 189.039 440.174 188.512C440.185 187.884 440.757 187.487 441.632 187.503C442.438 187.517 443.01 187.895 443.126 188.5L444.167 188.518C444.06 187.367 443.101 186.633 441.667 186.608C440.15 186.582 439.121 187.364 439.1 188.557ZM448.532 185.014L448.5 186.88L446.666 186.848L446.65 187.768L448.484 187.8L448.416 191.697C448.391 193.131 449.173 193.792 450.88 193.822C451.21 193.828 452.048 193.811 452.22 193.782L452.236 192.868C452.052 192.884 451.36 192.891 450.973 192.884C450.001 192.867 449.482 192.452 449.495 191.703L449.563 187.819L452.343 187.867L452.359 186.947L449.566 186.898L449.599 185.032L448.532 185.014ZM462.518 191.575C462.587 193.081 463.662 194.077 465.341 194.233L465.329 194.938L466.084 194.951L466.097 194.24C467.794 194.137 468.89 193.14 468.917 191.629C468.94 190.265 468.211 189.497 466.397 189.014L466.189 188.953L466.246 185.66C467.145 185.802 467.739 186.378 467.832 187.23L468.834 187.247C468.783 185.85 467.777 184.88 466.263 184.714L466.275 184.003L465.52 183.99L465.508 184.701C463.893 184.799 462.848 185.753 462.823 187.187C462.8 188.507 463.567 189.314 465.286 189.769L465.419 189.803L465.358 193.281C464.319 193.143 463.619 192.508 463.534 191.593L462.518 191.575ZM463.865 187.173C463.88 186.304 464.493 185.737 465.491 185.646L465.437 188.75C464.294 188.406 463.851 187.96 463.865 187.173ZM467.881 191.662C467.865 192.563 467.162 193.192 466.113 193.295L466.171 190.007C467.39 190.346 467.896 190.837 467.881 191.662ZM473.44 191.099C473.47 189.347 474.39 188.309 475.913 188.336C476.288 188.342 476.731 188.426 477.046 188.546L477.067 187.334C476.84 187.235 476.467 187.171 476.073 187.164C474.747 187.141 473.878 187.786 473.602 189.057L473.463 189.055L473.493 187.297L470.923 187.252L470.908 188.115L472.437 188.142L472.347 193.302L470.957 193.278L470.942 194.141L475.518 194.221L475.533 193.357L473.401 193.32L473.44 191.099ZM483.584 192.584C483.383 193.183 482.736 193.54 481.866 193.525C480.692 193.505 479.958 192.679 479.98 191.416L479.984 191.137L484.675 191.219L484.686 190.546C484.721 188.553 483.688 187.348 481.899 187.317C480.147 187.286 478.965 188.459 478.933 190.274L478.915 191.309C478.881 193.27 479.959 194.425 481.85 194.458C483.297 194.483 484.402 193.734 484.632 192.602L483.584 192.584ZM481.876 188.243C482.987 188.263 483.646 189.068 483.623 190.381L479.999 190.318C480.022 188.998 480.727 188.223 481.876 188.243ZM489.419 187.461C487.826 187.433 486.765 188.563 486.734 190.334L486.712 191.616C486.681 193.381 487.702 194.548 489.295 194.575C490.291 194.593 491.029 194.18 491.34 193.43L491.461 193.432L491.402 196.821L492.5 196.841L492.66 187.632L491.594 187.613L491.576 188.666L491.462 188.664C491.113 187.897 490.403 187.478 489.419 187.461ZM489.713 188.456C490.849 188.476 491.558 189.301 491.536 190.57L491.519 191.56C491.497 192.836 490.759 193.636 489.623 193.616C488.487 193.596 487.778 192.765 487.8 191.496L487.817 190.505C487.839 189.236 488.577 188.436 489.713 188.456ZM500.702 187.772L499.623 187.753L499.552 191.809C499.531 192.983 498.756 193.763 497.62 193.743C496.547 193.724 496.05 193.131 496.072 191.888L496.145 187.692L495.066 187.674L494.988 192.142C494.959 193.792 495.756 194.701 497.254 194.727C498.301 194.745 499.096 194.277 499.479 193.426L499.568 193.428L499.547 194.64L500.581 194.658L500.702 187.772ZM507.689 193.005C507.488 193.604 506.841 193.961 505.971 193.946C504.797 193.925 504.062 193.1 504.084 191.837L504.089 191.558L508.779 191.64L508.791 190.967C508.826 188.974 507.793 187.769 506.003 187.737C504.252 187.707 503.069 188.88 503.038 190.695L503.02 191.729C502.985 193.691 504.064 194.846 505.955 194.879C507.402 194.904 508.507 194.155 508.736 193.023L507.689 193.005ZM505.981 188.664C507.092 188.683 507.75 189.488 507.727 190.802L504.104 190.739C504.127 189.419 504.832 188.644 505.981 188.664ZM511.414 189.819C511.397 190.796 512.002 191.435 513.241 191.743L514.258 191.995C515.131 192.208 515.462 192.505 515.453 193.051C515.441 193.711 514.837 194.126 513.898 194.11C513.009 194.094 512.406 193.715 512.259 193.078L511.161 193.059C511.261 194.241 512.283 194.989 513.844 195.017C515.475 195.045 516.549 194.238 516.571 192.969C516.589 191.973 515.99 191.378 514.656 191.05L513.689 190.811C512.829 190.606 512.479 190.301 512.488 189.774C512.499 189.146 513.071 188.75 513.947 188.765C514.753 188.779 515.324 189.157 515.44 189.762L516.481 189.781C516.374 188.63 515.416 187.895 513.981 187.87C512.464 187.844 511.435 188.626 511.414 189.819ZM520.847 186.276L520.814 188.142L518.98 188.11L518.964 189.03L520.798 189.062L520.73 192.959C520.705 194.393 521.487 195.055 523.194 195.085C523.524 195.09 524.363 195.073 524.534 195.044L524.55 194.13C524.366 194.146 523.674 194.153 523.287 194.147C522.316 194.13 521.796 193.714 521.809 192.965L521.877 189.081L524.657 189.13L524.673 188.209L521.88 188.161L521.913 186.295L520.847 186.276ZM531.367 190.612C531.404 188.46 530.79 186.577 529.552 185.12L528.479 185.101C529.761 186.971 530.284 188.599 530.25 190.592C530.215 192.585 529.635 194.194 528.289 196.018L529.361 196.037C530.649 194.624 531.329 192.77 531.367 190.612ZM548.433 196.363L548.448 195.494L547.756 195.481C546.804 195.465 546.624 195.24 546.643 194.135L546.673 192.441C546.689 191.552 546.032 190.95 544.745 190.902L544.746 190.801C546.035 190.792 546.712 190.213 546.727 189.324L546.757 187.63C546.776 186.526 546.964 186.307 547.916 186.323L548.608 186.335L548.623 185.466L547.76 185.451C546.218 185.424 545.721 185.904 545.693 187.472L545.668 188.893C545.651 189.877 545.07 190.432 543.588 190.254L543.568 191.402C545.055 191.276 545.617 191.857 545.6 192.835L545.575 194.256C545.547 195.824 546.028 196.321 547.57 196.348L548.433 196.363ZM106.677 198.897L105.598 198.878L105.527 202.934C105.507 204.108 104.731 204.888 103.595 204.868C102.523 204.849 102.025 204.256 102.047 203.013L102.12 198.817L101.041 198.799L100.963 203.267C100.934 204.917 101.731 205.826 103.229 205.852C104.276 205.87 105.072 205.402 105.455 204.551L105.543 204.553L105.522 205.765L106.557 205.783L106.677 198.897ZM109.355 200.804C109.337 201.781 109.942 202.42 111.181 202.728L112.199 202.98C113.071 203.192 113.403 203.49 113.393 204.036C113.381 204.696 112.777 205.111 111.838 205.094C110.95 205.079 110.347 204.7 110.199 204.063L109.101 204.044C109.201 205.226 110.223 205.974 111.784 206.001C113.415 206.03 114.49 205.223 114.512 203.954C114.529 202.957 113.93 202.363 112.596 202.035L111.629 201.796C110.769 201.59 110.419 201.286 110.428 200.759C110.439 200.131 111.011 199.734 111.887 199.75C112.693 199.764 113.264 200.142 113.381 200.747L114.421 200.765C114.315 199.614 113.356 198.88 111.922 198.855C110.405 198.829 109.375 199.611 109.355 200.804ZM121.699 204.27C121.498 204.869 120.851 205.226 119.981 205.211C118.807 205.191 118.073 204.365 118.095 203.102L118.099 202.823L122.79 202.905L122.801 202.232C122.836 200.239 121.803 199.034 120.014 199.003C118.262 198.972 117.08 200.145 117.048 201.96L117.03 202.995C116.996 204.956 118.074 206.111 119.965 206.144C121.412 206.169 122.517 205.42 122.746 204.288L121.699 204.27ZM119.991 199.929C121.102 199.949 121.761 200.754 121.738 202.067L118.114 202.004C118.137 200.684 118.842 199.909 119.991 199.929ZM127.624 203.065C127.655 201.314 128.575 200.276 130.098 200.302C130.472 200.309 130.915 200.393 131.231 200.513L131.252 199.3C131.025 199.201 130.652 199.138 130.258 199.131C128.932 199.108 128.063 199.753 127.787 201.024L127.647 201.022L127.678 199.263L125.108 199.219L125.093 200.082L126.622 200.108L126.532 205.268L125.142 205.244L125.127 206.107L129.703 206.187L129.718 205.324L127.586 205.287L127.624 203.065ZM147.358 201.512L147.376 200.464L140.661 200.347L140.643 201.394L147.358 201.512ZM147.307 204.406L147.326 203.358L140.611 203.241L140.592 204.288L147.307 204.406ZM192.207 202.44C192.836 202.451 193.365 201.927 193.377 201.286C193.388 200.645 192.877 200.103 192.248 200.092C191.62 200.081 191.09 200.605 191.079 201.246C191.068 201.887 191.579 202.429 192.207 202.44ZM192.122 207.315C192.75 207.326 193.28 206.808 193.291 206.161C193.303 205.52 192.791 204.984 192.163 204.973C191.535 204.962 191.005 205.48 190.994 206.121C190.983 206.768 191.494 207.304 192.122 207.315ZM200.242 202.581C200.87 202.592 201.4 202.068 201.411 201.427C201.423 200.786 200.911 200.243 200.283 200.232C199.655 200.221 199.125 200.746 199.114 201.387C199.103 202.028 199.614 202.57 200.242 202.581ZM200.157 207.455C200.785 207.466 201.315 206.948 201.326 206.301C201.338 205.66 200.826 205.124 200.198 205.113C199.57 205.102 199.04 205.62 199.029 206.261C199.018 206.908 199.529 207.444 200.157 207.455ZM255.099 203.792C255.061 205.95 255.676 207.827 256.914 209.284L257.986 209.302C256.705 207.433 256.181 205.805 256.216 203.812C256.25 201.819 256.831 200.21 258.177 198.386L257.104 198.367C255.816 199.78 255.136 201.641 255.099 203.792ZM261.331 206.066C261.4 207.572 262.475 208.568 264.154 208.724L264.142 209.429L264.897 209.442L264.91 208.731C266.607 208.628 267.703 207.631 267.73 206.12C267.754 204.756 267.024 203.988 265.211 203.505L265.002 203.444L265.06 200.151C265.959 200.293 266.552 200.869 266.645 201.721L267.648 201.738C267.596 200.341 266.591 199.371 265.076 199.205L265.089 198.494L264.333 198.481L264.321 199.192C262.707 199.29 261.661 200.244 261.636 201.678C261.613 202.998 262.38 203.805 264.099 204.26L264.232 204.294L264.171 207.772C263.132 207.634 262.432 206.999 262.347 206.084L261.331 206.066ZM262.678 201.664C262.693 200.795 263.306 200.228 264.304 200.137L264.25 203.241C263.107 202.897 262.664 202.451 262.678 201.664ZM266.694 206.153C266.679 207.054 265.976 207.683 264.926 207.786L264.984 204.498C266.203 204.837 266.709 205.328 266.694 206.153ZM272.253 205.59C272.283 203.838 273.203 202.8 274.726 202.827C275.101 202.833 275.544 202.917 275.859 203.037L275.88 201.825C275.653 201.726 275.28 201.662 274.886 201.655C273.56 201.632 272.692 202.277 272.415 203.548L272.276 203.546L272.307 201.788L269.736 201.743L269.721 202.606L271.251 202.633L271.161 207.793L269.771 207.769L269.756 208.632L274.332 208.712L274.347 207.848L272.214 207.811L272.253 205.59ZM282.397 207.075C282.197 207.674 281.549 208.031 280.68 208.016C279.505 207.996 278.771 207.17 278.793 205.907L278.798 205.628L283.488 205.71L283.5 205.037C283.534 203.044 282.502 201.839 280.712 201.808C278.96 201.777 277.778 202.95 277.746 204.765L277.728 205.8C277.694 207.761 278.772 208.916 280.663 208.949C282.11 208.974 283.215 208.225 283.445 207.093L282.397 207.075ZM280.689 202.734C281.8 202.754 282.459 203.559 282.436 204.872L278.812 204.809C278.835 203.489 279.54 202.714 280.689 202.734ZM288.232 201.952C286.639 201.924 285.578 203.054 285.548 204.825L285.525 206.107C285.494 207.872 286.515 209.039 288.108 209.066C289.105 209.084 289.842 208.671 290.153 207.921L290.274 207.923L290.215 211.312L291.313 211.332L291.474 202.123L290.407 202.104L290.389 203.157L290.275 203.155C289.926 202.388 289.216 201.969 288.232 201.952ZM288.526 202.947C289.662 202.967 290.371 203.792 290.349 205.061L290.332 206.051C290.31 207.327 289.572 208.127 288.436 208.107C287.3 208.087 286.591 207.256 286.613 205.987L286.63 204.996C286.652 203.727 287.39 202.927 288.526 202.947ZM299.515 202.263L298.436 202.244L298.365 206.3C298.345 207.474 297.569 208.254 296.433 208.234C295.36 208.215 294.863 207.622 294.885 206.379L294.958 202.183L293.879 202.165L293.801 206.633C293.772 208.283 294.569 209.192 296.067 209.218C297.114 209.236 297.909 208.768 298.292 207.917L298.381 207.919L298.36 209.131L299.395 209.149L299.515 202.263ZM306.502 207.496C306.301 208.095 305.654 208.452 304.784 208.437C303.61 208.416 302.875 207.591 302.897 206.328L302.902 206.049L307.593 206.131L307.604 205.458C307.639 203.465 306.606 202.26 304.816 202.228C303.065 202.198 301.883 203.371 301.851 205.186L301.833 206.22C301.799 208.182 302.877 209.337 304.768 209.37C306.215 209.395 307.32 208.646 307.549 207.514L306.502 207.496ZM304.794 203.155C305.905 203.174 306.564 203.979 306.541 205.293L302.917 205.23C302.94 203.91 303.645 203.135 304.794 203.155ZM310.227 204.31C310.21 205.287 310.815 205.927 312.054 206.234L313.072 206.486C313.944 206.699 314.275 206.996 314.266 207.542C314.254 208.202 313.65 208.617 312.711 208.601C311.822 208.585 311.219 208.206 311.072 207.569L309.974 207.55C310.074 208.732 311.096 209.48 312.657 209.508C314.288 209.536 315.362 208.729 315.385 207.46C315.402 206.464 314.803 205.869 313.469 205.541L312.502 205.302C311.642 205.097 311.292 204.792 311.301 204.265C311.312 203.637 311.884 203.241 312.76 203.256C313.566 203.27 314.137 203.648 314.253 204.253L315.294 204.272C315.187 203.121 314.229 202.386 312.794 202.361C311.278 202.335 310.248 203.117 310.227 204.31ZM319.66 200.767L319.627 202.633L317.793 202.601L317.777 203.521L319.611 203.553L319.543 207.45C319.518 208.885 320.3 209.546 322.007 209.576C322.337 209.581 323.176 209.564 323.348 209.535L323.363 208.622C323.179 208.637 322.487 208.644 322.1 208.638C321.129 208.621 320.609 208.205 320.622 207.456L320.69 203.572L323.47 203.621L323.486 202.7L320.693 202.652L320.726 200.786L319.66 200.767ZM332.136 206.159L332.153 205.156L325.439 205.039L325.421 206.042L332.136 206.159ZM334.136 203.216L338.454 205.711L338.452 205.825L334.05 208.167L334.029 209.379L339.543 206.257L339.559 205.317L334.157 202.004L334.136 203.216ZM415.797 206.597C415.759 208.755 416.374 210.632 417.612 212.089L418.684 212.107C417.403 210.238 416.879 208.61 416.914 206.617C416.949 204.624 417.529 203.015 418.875 201.191L417.802 201.172C416.514 202.585 415.834 204.446 415.797 206.597ZM426.599 206.786C426.636 204.634 426.022 202.751 424.784 201.294L423.711 201.275C424.993 203.145 425.517 204.773 425.482 206.766C425.447 208.759 424.867 210.368 423.521 212.192L424.593 212.211C425.881 210.798 426.561 208.944 426.599 206.786ZM434.634 206.926C434.671 204.774 434.057 202.891 432.819 201.434L431.746 201.416C433.028 203.286 433.551 204.914 433.517 206.906C433.482 208.899 432.901 210.508 431.555 212.332L432.628 212.351C433.916 210.938 434.596 209.084 434.634 206.926ZM441.289 206.788C441.918 206.799 442.447 206.275 442.459 205.634C442.47 204.993 441.959 204.451 441.33 204.44C440.702 204.429 440.172 204.953 440.161 205.594C440.15 206.235 440.661 206.777 441.289 206.788ZM440.616 213.728L441.881 209.617L440.453 209.592L439.594 213.71L440.616 213.728ZM127.3 237.313C127.928 237.324 128.458 236.8 128.469 236.159C128.48 235.518 127.969 234.976 127.341 234.965C126.712 234.954 126.183 235.478 126.171 236.119C126.16 236.76 126.671 237.302 127.3 237.313ZM127.215 242.187C127.843 242.198 128.373 241.681 128.384 241.033C128.395 240.392 127.884 239.856 127.255 239.845C126.627 239.834 126.098 240.352 126.086 240.993C126.075 241.64 126.586 242.176 127.215 242.187ZM135.335 237.453C135.963 237.464 136.493 236.94 136.504 236.299C136.515 235.658 136.004 235.116 135.376 235.105C134.747 235.094 134.218 235.618 134.206 236.259C134.195 236.9 134.706 237.442 135.335 237.453ZM135.25 242.327C135.878 242.338 136.407 241.821 136.419 241.173C136.43 240.532 135.919 239.997 135.29 239.986C134.662 239.975 134.132 240.492 134.121 241.133C134.11 241.781 134.621 242.317 135.25 242.327ZM158.051 238.104C158.014 240.262 158.628 242.139 159.866 243.595L160.939 243.614C159.657 241.744 159.134 240.116 159.168 238.123C159.203 236.13 159.784 234.522 161.13 232.698L160.057 232.679C158.769 234.091 158.089 235.952 158.051 238.104ZM178.363 236.154L177.284 236.135L177.213 240.19C177.193 241.365 176.417 242.145 175.281 242.125C174.209 242.106 173.711 241.513 173.733 240.269L173.806 236.074L172.727 236.055L172.649 240.523C172.62 242.174 173.417 243.083 174.915 243.109C175.962 243.127 176.757 242.658 177.14 241.808L177.229 241.81L177.208 243.022L178.243 243.04L178.363 236.154ZM181.04 238.061C181.023 239.038 181.628 239.677 182.867 239.984L183.885 240.237C184.757 240.449 185.088 240.747 185.079 241.293C185.067 241.953 184.463 242.368 183.524 242.351C182.636 242.336 182.033 241.957 181.885 241.319L180.787 241.3C180.887 242.483 181.909 243.231 183.47 243.258C185.101 243.287 186.176 242.48 186.198 241.211C186.215 240.214 185.616 239.62 184.282 239.292L183.315 239.053C182.455 238.847 182.105 238.543 182.114 238.016C182.125 237.387 182.697 236.991 183.573 237.006C184.379 237.021 184.95 237.399 185.066 238.004L186.107 238.022C186 236.871 185.042 236.137 183.608 236.112C182.091 236.085 181.061 236.867 181.04 238.061ZM193.385 241.527C193.184 242.126 192.537 242.483 191.667 242.468C190.493 242.447 189.758 241.622 189.78 240.359L189.785 240.08L194.476 240.162L194.487 239.489C194.522 237.496 193.489 236.291 191.699 236.259C189.948 236.229 188.766 237.402 188.734 239.217L188.716 240.251C188.682 242.213 189.76 243.368 191.651 243.401C193.098 243.426 194.203 242.677 194.432 241.545L193.385 241.527ZM191.677 237.186C192.788 237.205 193.447 238.01 193.424 239.324L189.8 239.261C189.823 237.941 190.528 237.166 191.677 237.186ZM199.31 240.322C199.341 238.57 200.261 237.533 201.784 237.559C202.158 237.566 202.601 237.65 202.917 237.769L202.938 236.557C202.711 236.458 202.337 236.394 201.944 236.388C200.617 236.364 199.749 237.009 199.473 238.281L199.333 238.278L199.364 236.52L196.794 236.475L196.779 237.339L198.308 237.365L198.218 242.525L196.828 242.501L196.813 243.364L201.389 243.444L201.404 242.581L199.272 242.543L199.31 240.322ZM210.984 240.05L211.001 239.047L204.287 238.93L204.269 239.933L210.984 240.05ZM212.984 237.107L217.302 239.601L217.3 239.716L212.898 242.058L212.877 243.27L218.391 240.147L218.407 239.208L213.005 235.895L212.984 237.107ZM265.272 239.975C265.31 237.824 264.695 235.94 263.457 234.484L262.385 234.465C263.666 236.335 264.19 237.963 264.155 239.956C264.12 241.949 263.54 243.557 262.194 245.381L263.267 245.4C264.555 243.988 265.235 242.133 265.272 239.975ZM275.263 241.172L275.281 240.169L268.566 240.052L268.548 241.055L275.263 241.172ZM277.264 238.229L281.582 240.723L281.58 240.838L277.177 243.18L277.156 244.392L282.67 241.269L282.687 240.33L277.285 237.017L277.264 238.229ZM318.75 240.909C318.712 243.067 319.327 244.944 320.565 246.4L321.637 246.419C320.356 244.549 319.832 242.921 319.867 240.928C319.901 238.935 320.482 237.327 321.828 235.503L320.755 235.484C319.467 236.896 318.787 238.757 318.75 240.909ZM474.18 243.622C474.217 241.47 473.603 239.587 472.365 238.13L471.292 238.112C472.574 239.981 473.098 241.609 473.063 243.602C473.028 245.595 472.448 247.204 471.102 249.028L472.174 249.047C473.462 247.634 474.142 245.78 474.18 243.622ZM480.836 243.484C481.464 243.495 481.994 242.971 482.005 242.33C482.016 241.689 481.505 241.147 480.877 241.136C480.248 241.125 479.719 241.649 479.707 242.29C479.696 242.931 480.207 243.473 480.836 243.484ZM480.162 250.424L481.428 246.313L480 246.288L479.14 250.406L480.162 250.424ZM147.586 276.091C147.655 277.597 148.729 278.594 150.409 278.75L150.397 279.454L151.152 279.468L151.165 278.757C152.861 278.653 153.958 277.656 153.984 276.146C154.008 274.781 153.279 274.013 151.465 273.531L151.257 273.47L151.314 270.176C152.213 270.319 152.806 270.894 152.899 271.746L153.902 271.764C153.85 270.366 152.845 269.397 151.331 269.23L151.343 268.52L150.588 268.506L150.576 269.217C148.961 269.316 147.916 270.269 147.891 271.703C147.868 273.024 148.635 273.831 150.354 274.286L150.486 274.32L150.426 277.798C149.387 277.659 148.687 277.025 148.601 276.109L147.586 276.091ZM148.933 271.69C148.948 270.82 149.561 270.253 150.559 270.163L150.505 273.266C149.362 272.923 148.919 272.477 148.933 271.69ZM152.949 276.179C152.933 277.08 152.23 277.709 151.181 277.811L151.238 274.524C152.458 274.862 152.963 275.354 152.949 276.179ZM161.665 271.868L160.586 271.849L160.515 275.904C160.495 277.079 159.719 277.859 158.583 277.839C157.51 277.82 157.013 277.227 157.035 275.983L157.108 271.788L156.029 271.769L155.951 276.237C155.922 277.888 156.719 278.797 158.217 278.823C159.264 278.841 160.059 278.372 160.442 277.522L160.531 277.524L160.51 278.736L161.545 278.754L161.665 271.868ZM164.342 273.775C164.325 274.752 164.93 275.391 166.169 275.698L167.187 275.951C168.059 276.163 168.39 276.461 168.381 277.007C168.369 277.667 167.765 278.082 166.826 278.065C165.937 278.05 165.335 277.671 165.187 277.033L164.089 277.014C164.189 278.197 165.211 278.945 166.772 278.972C168.403 279.001 169.477 278.194 169.5 276.925C169.517 275.928 168.918 275.334 167.584 275.006L166.617 274.767C165.757 274.561 165.407 274.257 165.416 273.73C165.427 273.102 165.999 272.705 166.875 272.72C167.681 272.735 168.252 273.113 168.368 273.718L169.409 273.736C169.302 272.585 168.344 271.851 166.909 271.826C165.393 271.799 164.363 272.581 164.342 273.775ZM176.687 277.241C176.486 277.84 175.839 278.197 174.969 278.182C173.795 278.161 173.06 277.336 173.082 276.073L173.087 275.794L177.777 275.876L177.789 275.203C177.824 273.21 176.791 272.005 175.001 271.974C173.25 271.943 172.067 273.116 172.036 274.931L172.018 275.966C171.983 277.927 173.062 279.082 174.953 279.115C176.4 279.14 177.505 278.391 177.734 277.259L176.687 277.241ZM174.979 272.9C176.09 272.919 176.748 273.724 176.725 275.038L173.102 274.975C173.125 273.655 173.83 272.88 174.979 272.9ZM182.612 276.036C182.643 274.284 183.562 273.247 185.086 273.273C185.46 273.28 185.903 273.364 186.218 273.483L186.24 272.271C186.013 272.172 185.639 272.108 185.246 272.102C183.919 272.078 183.051 272.723 182.775 273.995L182.635 273.992L182.666 272.234L180.096 272.189L180.08 273.053L181.61 273.079L181.52 278.239L180.13 278.215L180.115 279.078L184.691 279.158L184.706 278.295L182.574 278.258L182.612 276.036ZM190.951 274.429C191.579 274.44 192.109 273.916 192.12 273.275C192.131 272.634 191.62 272.092 190.992 272.081C190.363 272.07 189.834 272.594 189.822 273.235C189.811 273.876 190.322 274.419 190.951 274.429ZM190.277 281.369L191.543 277.259L190.115 277.234L189.255 281.352L190.277 281.369ZM59.5032 295.845L60.3663 295.86C61.9086 295.887 62.4058 295.407 62.4332 293.839L62.458 292.418C62.4751 291.44 63.0562 290.879 64.5387 291.057L64.5587 289.909C63.071 290.035 62.5096 289.46 62.5268 288.476L62.5516 287.055C62.579 285.487 62.0988 284.99 60.5566 284.963L59.6934 284.948L59.6782 285.817L60.37 285.83C61.322 285.846 61.5022 286.071 61.4829 287.176L61.4533 288.87C61.4378 289.759 62.0939 290.361 63.3818 290.415L63.38 290.517C62.0912 290.519 61.4145 291.098 61.3989 291.987L61.3694 293.681C61.3501 294.785 61.1622 295.004 60.2102 294.988L59.5184 294.976L59.5032 295.845ZM71.4921 290.601C71.5296 288.449 70.9149 286.566 69.677 285.11L68.6044 285.091C69.8859 286.961 70.4098 288.589 70.375 290.582C70.3402 292.574 69.7598 294.183 68.4138 296.007L69.4864 296.026C70.7745 294.614 71.4544 292.759 71.4921 290.601ZM78.1478 290.463C78.7761 290.474 79.3059 289.95 79.3171 289.309C79.3282 288.668 78.8171 288.126 78.1888 288.115C77.5605 288.104 77.0307 288.628 77.0196 289.269C77.0084 289.91 77.5195 290.452 78.1478 290.463ZM77.4743 297.403L78.7396 293.292L77.3116 293.267L76.4525 297.385L77.4743 297.403Z"
                                fill="#DFDFDF" />
                            <path
                                d="M121.445 100.61C123.311 100.643 124.432 99.6975 124.461 98.0791L124.581 91.193L123.515 91.1744L123.496 92.2406L123.375 92.2385C123.09 91.4907 122.342 91.0396 121.346 91.0222C119.734 90.9941 118.661 92.1181 118.63 93.8888L118.608 95.1264C118.577 96.8908 119.604 98.0579 121.197 98.0857C122.2 98.1032 122.969 97.6785 123.287 96.9603L123.401 96.9623L123.382 98.0349C123.363 99.1392 122.686 99.7369 121.48 99.7158C120.56 99.6998 119.874 99.3132 119.745 98.7396L118.679 98.721C118.798 99.8658 119.852 100.583 121.445 100.61ZM119.696 94.9931L119.712 94.0474C119.734 92.7844 120.485 91.9785 121.627 91.9985C122.763 92.0183 123.479 92.8434 123.457 94.1128L123.44 95.0584C123.418 96.3278 122.674 97.1337 121.538 97.1139C120.396 97.094 119.674 96.2561 119.696 94.9931ZM131.619 96.4265C131.418 97.0261 130.771 97.383 129.901 97.3678C128.727 97.3473 127.992 96.5219 128.014 95.2589L128.019 94.9796L132.709 95.0615L132.721 94.3888C132.756 92.3959 131.723 91.1907 129.933 91.1594C128.182 91.1289 126.999 92.3018 126.968 94.1169L126.95 95.1514C126.915 97.1125 127.994 98.2678 129.885 98.3008C131.332 98.326 132.437 97.5771 132.666 96.4447L131.619 96.4265ZM129.911 92.0859C131.021 92.1053 131.68 92.9104 131.657 94.2242L128.034 94.1609C128.057 92.8408 128.762 92.0659 129.911 92.0859ZM136.742 89.5578L136.709 91.4237L134.875 91.3917L134.859 92.312L136.693 92.344L136.625 96.2409C136.6 97.6752 137.382 98.3364 139.089 98.3662C139.419 98.372 140.258 98.3549 140.429 98.3261L140.445 97.4122C140.261 97.428 139.569 97.435 139.182 97.4282C138.211 97.4113 137.691 96.9959 137.704 96.247L137.772 92.3628L140.552 92.4113L140.568 91.4911L137.775 91.4423L137.808 89.5764L136.742 89.5578Z"
                                fill="#CE7EFF" />
                            <path
                                d="M154.498 93.5753L154.571 89.4436L153.415 89.4235L153.343 93.5552L154.498 93.5753ZM160.146 99.5718L164.804 88.7525L163.744 88.734L159.092 99.5534L160.146 99.5718ZM172.841 92.0354L171.762 92.0165L171.691 96.0721C171.671 97.2462 170.895 98.0262 169.759 98.0064C168.687 97.9877 168.189 97.3949 168.211 96.151L168.284 91.9558L167.205 91.937L167.127 96.4051C167.098 98.0552 167.895 98.9643 169.393 98.9904C170.44 99.0087 171.236 98.5401 171.619 97.6897L171.708 97.6912L171.686 98.9035L172.721 98.9215L172.841 92.0354ZM175.519 93.9422C175.502 94.9196 176.106 95.5587 177.345 95.866L178.363 96.1187C179.235 96.3307 179.567 96.6285 179.557 97.1743C179.546 97.8344 178.942 98.2492 178.002 98.2328C177.114 98.2173 176.511 97.8386 176.363 97.2011L175.265 97.182C175.365 98.3646 176.387 99.1125 177.948 99.1397C179.579 99.1682 180.654 98.3616 180.676 97.0923C180.693 96.0959 180.094 95.5013 178.76 95.1733L177.793 94.9342C176.933 94.7288 176.583 94.4243 176.592 93.8975C176.603 93.2692 177.175 92.8728 178.051 92.8881C178.857 92.9022 179.428 93.2804 179.545 93.8855L180.586 93.9037C180.479 92.7527 179.52 92.0186 178.086 91.9936C176.569 91.9671 175.54 92.7491 175.519 93.9422ZM187.863 97.4082C187.662 98.0078 187.015 98.3647 186.146 98.3496C184.971 98.3291 184.237 97.5036 184.259 96.2406L184.264 95.9614L188.954 96.0432L188.966 95.3705C189 93.3776 187.967 92.1724 186.178 92.1412C184.426 92.1106 183.244 93.2835 183.212 95.0987L183.194 96.1332C183.16 98.0943 184.238 99.2495 186.129 99.2825C187.576 99.3078 188.681 98.5589 188.911 97.4265L187.863 97.4082ZM186.155 93.0677C187.266 93.0871 187.925 93.8922 187.902 95.2059L184.278 95.1427C184.301 93.8225 185.006 93.0476 186.155 93.0677ZM193.789 96.2038C193.819 94.4521 194.739 93.4143 196.262 93.4409C196.636 93.4474 197.079 93.5314 197.395 93.6511L197.416 92.4389C197.189 92.3397 196.816 92.2761 196.422 92.2692C195.096 92.2461 194.227 92.8912 193.951 94.1624L193.812 94.16L193.842 92.4019L191.272 92.3571L191.257 93.2202L192.786 93.2469L192.696 98.4068L191.306 98.3825L191.291 99.2457L195.867 99.3255L195.882 98.4624L193.75 98.4252L193.789 96.2038ZM199.623 94.363C199.606 95.3404 200.211 95.9795 201.45 96.2868L202.468 96.5394C203.34 96.7515 203.671 97.0493 203.662 97.5951C203.65 98.2552 203.046 98.67 202.107 98.6536C201.218 98.6381 200.616 98.2593 200.468 97.6219L199.37 97.6027C199.47 98.7853 200.492 99.5332 202.053 99.5605C203.684 99.589 204.758 98.7824 204.781 97.513C204.798 96.5166 204.199 95.9221 202.865 95.5941L201.898 95.355C201.038 95.1495 200.688 94.845 200.697 94.3182C200.708 93.6899 201.28 93.2936 202.156 93.3089C202.962 93.323 203.533 93.7011 203.649 94.3063L204.69 94.3245C204.583 93.1735 203.625 92.4394 202.191 92.4143C200.674 92.3879 199.644 93.1698 199.623 94.363ZM208.355 100.413L213.013 89.594L211.953 89.5755L207.302 100.395L208.355 100.413ZM220.572 100.627L220.588 99.757L219.896 99.745C218.944 99.7283 218.764 99.503 218.783 98.3987L218.813 96.7041C218.828 95.8156 218.172 95.2137 216.884 95.1658L216.886 95.0643C218.175 95.055 218.851 94.4764 218.867 93.5879L218.896 91.8933C218.916 90.789 219.104 90.5701 220.056 90.5867L220.747 90.5988L220.763 89.7293L219.9 89.7142C218.357 89.6873 217.86 90.1674 217.833 91.7351L217.808 93.1567C217.791 94.1405 217.21 94.6954 215.727 94.5171L215.707 95.6659C217.195 95.5395 217.756 96.1206 217.739 97.098L217.714 98.5197C217.687 100.087 218.167 100.585 219.709 100.611L220.572 100.627ZM229.085 93.0171L228.007 92.9983L227.936 97.0538C227.915 98.2279 227.14 99.008 226.004 98.9882C224.931 98.9694 224.434 98.3767 224.455 97.1327L224.529 92.9376L223.45 92.9187L223.372 97.3868C223.343 99.0369 224.14 99.946 225.637 99.9722C226.685 99.9904 227.48 99.5218 227.863 98.6714L227.952 98.673L227.931 99.8852L228.965 99.9033L229.085 93.0171ZM231.763 94.924C231.746 95.9014 232.351 96.5405 233.59 96.8478L234.607 97.1004C235.48 97.3125 235.811 97.6103 235.801 98.1561C235.79 98.8162 235.186 99.231 234.247 99.2146C233.358 99.1991 232.755 98.8203 232.608 98.1829L231.51 98.1637C231.61 99.3463 232.631 100.094 234.193 100.121C235.824 100.15 236.898 99.3434 236.92 98.074C236.938 97.0776 236.339 96.4831 235.005 96.1551L234.038 95.916C233.178 95.7105 232.828 95.406 232.837 94.8792C232.848 94.2509 233.42 93.8546 234.295 93.8699C235.102 93.884 235.673 94.2621 235.789 94.8673L236.83 94.8855C236.723 93.7345 235.765 93.0004 234.33 92.9753C232.813 92.9489 231.784 93.7308 231.763 94.924ZM244.108 98.39C243.907 98.9896 243.259 99.3465 242.39 99.3313C241.216 99.3108 240.481 98.4854 240.503 97.2224L240.508 96.9431L245.198 97.025L245.21 96.3522C245.245 94.3594 244.212 93.1542 242.422 93.1229C240.67 93.0924 239.488 94.2653 239.456 96.0804L239.438 97.1149C239.404 99.076 240.482 100.231 242.374 100.264C243.821 100.29 244.926 99.5406 245.155 98.4082L244.108 98.39ZM242.4 94.0494C243.51 94.0688 244.169 94.8739 244.146 96.1877L240.522 96.1244C240.545 94.8043 241.251 94.0294 242.4 94.0494ZM250.033 97.1856C250.064 95.4339 250.983 94.3961 252.506 94.4227C252.881 94.4292 253.324 94.5131 253.639 94.6329L253.66 93.4207C253.433 93.3215 253.06 93.2578 252.667 93.251C251.34 93.2278 250.472 93.8729 250.196 95.1442L250.056 95.1417L250.087 93.3837L247.516 93.3388L247.501 94.202L249.031 94.2287L248.941 99.3885L247.551 99.3643L247.536 100.227L252.112 100.307L252.127 99.4441L249.994 99.4069L250.033 97.1856ZM255.797 101.241L256.66 101.256C258.202 101.283 258.699 100.803 258.727 99.2356L258.751 97.8139C258.768 96.8365 259.35 96.2753 260.832 96.4535L260.852 95.3048C259.364 95.4312 258.803 94.8563 258.82 93.8726L258.845 92.4509C258.872 90.8833 258.392 90.3861 256.85 90.3592L255.987 90.3441L255.972 91.2136L256.663 91.2257C257.615 91.2423 257.796 91.4676 257.776 92.572L257.747 94.2665C257.731 95.1551 258.387 95.7569 259.675 95.8112L259.673 95.9127C258.385 95.9156 257.708 96.4942 257.692 97.3828L257.663 99.0773C257.643 100.182 257.456 100.401 256.504 100.384L255.812 100.372L255.797 101.241ZM266.987 95.5388L267.059 91.4071L265.904 91.387L265.832 95.5187L266.987 95.5388ZM160.963 183.702L161.035 179.57L159.88 179.55L159.808 183.682L160.963 183.702ZM166.61 189.698L171.268 178.879L170.208 178.861L165.556 189.68L166.61 189.698ZM179.305 182.162L178.226 182.143L178.156 186.199C178.135 187.373 177.36 188.153 176.224 188.133C175.151 188.114 174.653 187.521 174.675 186.278L174.748 182.082L173.669 182.064L173.591 186.532C173.563 188.182 174.359 189.091 175.857 189.117C176.904 189.135 177.7 188.667 178.083 187.816L178.172 187.818L178.151 189.03L179.185 189.048L179.305 182.162ZM181.983 184.069C181.966 185.046 182.57 185.685 183.809 185.993L184.827 186.245C185.7 186.457 186.031 186.755 186.021 187.301C186.01 187.961 185.406 188.376 184.466 188.359C183.578 188.344 182.975 187.965 182.827 187.328L181.73 187.309C181.829 188.491 182.851 189.239 184.413 189.266C186.044 189.295 187.118 188.488 187.14 187.219C187.157 186.222 186.558 185.628 185.225 185.3L184.257 185.061C183.398 184.855 183.047 184.551 183.057 184.024C183.068 183.396 183.639 182.999 184.515 183.015C185.321 183.029 185.892 183.407 186.009 184.012L187.05 184.03C186.943 182.879 185.984 182.145 184.55 182.12C183.033 182.094 182.004 182.876 181.983 184.069ZM194.328 187.535C194.127 188.134 193.479 188.491 192.61 188.476C191.436 188.456 190.701 187.63 190.723 186.367L190.728 186.088L195.418 186.17L195.43 185.497C195.465 183.504 194.432 182.299 192.642 182.268C190.89 182.237 189.708 183.41 189.676 185.225L189.658 186.26C189.624 188.221 190.702 189.376 192.593 189.409C194.04 189.434 195.146 188.685 195.375 187.553L194.328 187.535ZM192.619 183.194C193.73 183.214 194.389 184.019 194.366 185.332L190.742 185.269C190.765 183.949 191.471 183.174 192.619 183.194ZM200.253 186.33C200.283 184.579 201.203 183.541 202.726 183.567C203.101 183.574 203.544 183.658 203.859 183.778L203.88 182.565C203.653 182.466 203.28 182.403 202.886 182.396C201.56 182.373 200.692 183.018 200.415 184.289L200.276 184.287L200.306 182.528L197.736 182.484L197.721 183.347L199.251 183.373L199.16 188.533L197.771 188.509L197.756 189.372L202.331 189.452L202.347 188.589L200.214 188.552L200.253 186.33ZM206.088 184.49C206.071 185.467 206.675 186.106 207.914 186.413L208.932 186.666C209.804 186.878 210.136 187.176 210.126 187.722C210.115 188.382 209.511 188.797 208.571 188.78C207.683 188.765 207.08 188.386 206.932 187.748L205.834 187.729C205.934 188.912 206.956 189.66 208.517 189.687C210.148 189.716 211.223 188.909 211.245 187.64C211.262 186.643 210.663 186.049 209.329 185.721L208.362 185.482C207.502 185.276 207.152 184.972 207.161 184.445C207.172 183.816 207.744 183.42 208.62 183.435C209.426 183.449 209.997 183.828 210.114 184.433L211.154 184.451C211.048 183.3 210.089 182.566 208.655 182.541C207.138 182.514 206.108 183.296 206.088 184.49ZM217.207 184.684L217.279 180.552L216.124 180.532L216.052 184.663L217.207 184.684Z"
                                fill="#9775FA" />
                            <path
                                d="M289.411 100.958L290.49 100.977L290.594 95.0303L293.621 95.0832L293.637 94.1629L290.597 94.1098L290.61 93.399C290.622 92.7072 291.136 92.3607 292.094 92.3774C292.481 92.3842 293.369 92.4251 293.667 92.462L293.682 91.5798C293.454 91.5441 292.497 91.4956 292.097 91.4886C290.402 91.4591 289.566 92.0666 289.543 93.3994L289.531 94.0912L287.684 94.059L287.668 94.9793L289.515 95.0115L289.411 100.958ZM301.4 94.2794L300.321 94.2605L300.25 98.3161C300.229 99.4902 299.454 100.27 298.318 100.25C297.245 100.232 296.748 99.6389 296.769 98.395L296.843 94.1998L295.764 94.181L295.686 98.6491C295.657 100.299 296.454 101.208 297.952 101.234C298.999 101.253 299.794 100.784 300.177 99.9337L300.266 99.9352L300.245 101.147L301.279 101.166L301.4 94.2794ZM303.678 101.207L304.757 101.226L304.828 97.1707C304.849 95.9966 305.624 95.2165 306.76 95.2363C307.833 95.2551 308.33 95.8478 308.309 97.0918L308.235 101.287L309.314 101.306L309.392 96.8377C309.421 95.1876 308.624 94.2785 307.127 94.2523C306.079 94.2341 305.284 94.7027 304.901 95.5531L304.812 95.5515L304.833 94.3393L303.799 94.3212L303.678 101.207ZM317.483 96.7059C317.33 95.2875 316.304 94.4062 314.781 94.3796C312.909 94.3469 311.797 95.4766 311.762 97.4504L311.747 98.3517C311.712 100.325 312.784 101.493 314.656 101.526C316.179 101.553 317.241 100.714 317.437 99.3144L316.371 99.2958C316.224 100.08 315.542 100.57 314.654 100.555C313.454 100.534 312.802 99.7097 312.828 98.2309L312.839 97.6089C312.865 96.1301 313.545 95.323 314.745 95.344C315.633 95.3595 316.297 95.879 316.417 96.6873L317.483 96.7059ZM321.545 92.7835L321.512 94.6495L319.678 94.6174L319.662 95.5377L321.496 95.5697L321.428 99.4666C321.403 100.901 322.185 101.562 323.892 101.592C324.222 101.598 325.06 101.581 325.232 101.552L325.248 100.638C325.064 100.654 324.372 100.661 323.985 100.654C323.014 100.637 322.494 100.222 322.507 99.4727L322.575 95.5886L325.355 95.6371L325.371 94.7168L322.578 94.6681L322.611 92.8022L321.545 92.7835ZM330.871 93.1051C331.379 93.1139 331.773 92.7399 331.782 92.2321C331.791 91.7308 331.41 91.3432 330.902 91.3343C330.395 91.3255 330.001 91.6995 329.992 92.2009C329.983 92.7086 330.364 93.0962 330.871 93.1051ZM333.609 101.73L333.625 100.835L331.347 100.795L331.451 94.8039L328.043 94.7444L328.027 95.6393L330.369 95.6802L330.28 100.777L327.919 100.735L327.904 101.63L333.609 101.73ZM338.634 101.945C340.455 101.976 341.638 100.81 341.67 98.9502L341.688 97.9093C341.721 96.0497 340.58 94.8426 338.758 94.8108C336.937 94.779 335.755 95.9456 335.722 97.8052L335.704 98.846C335.672 100.706 336.812 101.913 338.634 101.945ZM338.742 95.7628C339.922 95.7834 340.644 96.6341 340.62 97.9859L340.605 98.83C340.582 100.188 339.831 101.007 338.651 100.986C337.47 100.966 336.748 100.121 336.772 98.7631L336.787 97.919C336.81 96.5671 337.561 95.7422 338.742 95.7628ZM343.853 101.909L344.932 101.927L345.003 97.8719C345.023 96.6978 345.799 95.9178 346.935 95.9376C348.007 95.9563 348.505 96.5491 348.483 97.793L348.41 101.988L349.489 102.007L349.567 97.5389C349.596 95.8888 348.799 94.9797 347.301 94.9536C346.254 94.9353 345.459 95.4039 345.075 96.2543L344.987 96.2528L345.008 95.0405L343.973 95.0225L343.853 101.909ZM97.0556 112.518C97.0862 110.766 98.0058 109.729 99.529 109.755C99.9034 109.762 100.346 109.846 100.662 109.965L100.683 108.753C100.456 108.654 100.083 108.59 99.6891 108.583C98.3626 108.56 97.4943 109.205 97.2182 110.477L97.0786 110.474L97.1092 108.716L94.5388 108.671L94.5238 109.534L96.0533 109.561L95.9633 114.721L94.5733 114.697L94.5583 115.56L99.1342 115.64L99.1493 114.777L97.0168 114.739L97.0556 112.518ZM107.2 114.003C106.999 114.603 106.352 114.96 105.482 114.944C104.308 114.924 103.573 114.098 103.595 112.835L103.6 112.556L108.291 112.638L108.302 111.965C108.337 109.972 107.304 108.767 105.514 108.736C103.763 108.705 102.581 109.878 102.549 111.693L102.531 112.728C102.497 114.689 103.575 115.844 105.466 115.877C106.913 115.903 108.018 115.154 108.247 114.021L107.2 114.003ZM105.492 109.662C106.603 109.682 107.262 110.487 107.239 111.801L103.615 111.737C103.638 110.417 104.343 109.642 105.492 109.662ZM112.323 107.134L112.29 109L110.456 108.968L110.44 109.888L112.274 109.92L112.206 113.817C112.181 115.252 112.963 115.913 114.67 115.943C115 115.948 115.839 115.931 116.011 115.903L116.027 114.989C115.842 115.005 115.15 115.012 114.763 115.005C113.792 114.988 113.272 114.572 113.285 113.824L113.353 109.939L116.133 109.988L116.149 109.068L113.356 109.019L113.389 107.153L112.323 107.134ZM124.318 109.191L123.239 109.172L123.168 113.228C123.147 114.402 122.372 115.182 121.236 115.162C120.163 115.143 119.666 114.551 119.687 113.307L119.761 109.112L118.682 109.093L118.604 113.561C118.575 115.211 119.372 116.12 120.869 116.146C121.917 116.164 122.712 115.696 123.095 114.845L123.184 114.847L123.163 116.059L124.197 116.077L124.318 109.191ZM129.195 113.079C129.226 111.327 130.145 110.29 131.669 110.316C132.043 110.323 132.486 110.407 132.801 110.526L132.823 109.314C132.596 109.215 132.222 109.151 131.829 109.144C130.502 109.121 129.634 109.766 129.358 111.038L129.218 111.035L129.249 109.277L126.678 109.232L126.663 110.095L128.193 110.122L128.103 115.282L126.713 115.258L126.698 116.121L131.274 116.201L131.289 115.338L129.156 115.3L129.195 113.079ZM134.631 116.259L135.71 116.278L135.781 112.223C135.801 111.049 136.577 110.269 137.713 110.288C138.786 110.307 139.283 110.9 139.261 112.144L139.188 116.339L140.267 116.358L140.345 111.89C140.374 110.24 139.577 109.331 138.079 109.304C137.032 109.286 136.237 109.755 135.854 110.605L135.765 110.604L135.786 109.391L134.751 109.373L134.631 116.259ZM239.631 190.103L240.71 190.122L240.814 184.175L243.841 184.228L243.857 183.308L240.817 183.255L240.829 182.544C240.842 181.852 241.355 181.505 242.314 181.522C242.701 181.529 243.589 181.57 243.887 181.607L243.902 180.725C243.674 180.689 242.717 180.64 242.317 180.633C240.622 180.604 239.786 181.211 239.763 182.544L239.751 183.236L237.904 183.204L237.888 184.124L239.735 184.156L239.631 190.103ZM251.619 183.424L250.541 183.405L250.47 187.461C250.449 188.635 249.674 189.415 248.538 189.395C247.465 189.376 246.968 188.784 246.989 187.54L247.063 183.345L245.984 183.326L245.906 187.794C245.877 189.444 246.674 190.353 248.171 190.379C249.219 190.397 250.014 189.929 250.397 189.078L250.486 189.08L250.465 190.292L251.499 190.31L251.619 183.424ZM253.898 190.352L254.977 190.371L255.048 186.315C255.069 185.141 255.844 184.361 256.98 184.381C258.053 184.4 258.55 184.993 258.528 186.237L258.455 190.432L259.534 190.451L259.612 185.982C259.641 184.332 258.844 183.423 257.346 183.397C256.299 183.379 255.504 183.847 255.121 184.698L255.032 184.696L255.053 183.484L254.019 183.466L253.898 190.352ZM267.703 185.851C267.55 184.432 266.524 183.551 265.001 183.524C263.128 183.492 262.017 184.621 261.982 186.595L261.966 187.496C261.932 189.47 263.004 190.638 264.876 190.671C266.399 190.697 267.461 189.859 267.657 188.459L266.591 188.441C266.444 189.225 265.762 189.715 264.874 189.699C263.674 189.678 263.022 188.854 263.048 187.376L263.059 186.754C263.085 185.275 263.765 184.468 264.965 184.489C265.853 184.504 266.517 185.024 266.636 185.832L267.703 185.851ZM271.764 181.928L271.732 183.794L269.898 183.762L269.882 184.683L271.716 184.715L271.648 188.611C271.623 190.046 272.405 190.707 274.112 190.737C274.442 190.743 275.28 190.725 275.452 190.697L275.468 189.783C275.284 189.799 274.592 189.806 274.205 189.799C273.233 189.782 272.714 189.366 272.727 188.618L272.795 184.733L275.575 184.782L275.591 183.862L272.798 183.813L272.831 181.947L271.764 181.928ZM281.091 182.25C281.599 182.259 281.993 181.885 282.002 181.377C282.01 180.876 281.63 180.488 281.122 180.479C280.614 180.47 280.221 180.844 280.212 181.346C280.203 181.853 280.583 182.241 281.091 182.25ZM283.829 190.875L283.845 189.98L281.566 189.94L281.671 183.949L278.263 183.889L278.247 184.784L280.589 184.825L280.5 189.921L278.139 189.88L278.124 190.775L283.829 190.875ZM288.854 191.089C290.675 191.121 291.857 189.955 291.89 188.095L291.908 187.054C291.94 185.195 290.8 183.987 288.978 183.956C287.157 183.924 285.975 185.09 285.942 186.95L285.924 187.991C285.891 189.85 287.032 191.058 288.854 191.089ZM288.962 184.908C290.142 184.928 290.864 185.779 290.84 187.131L290.825 187.975C290.802 189.333 290.051 190.152 288.87 190.131C287.69 190.11 286.968 189.266 286.992 187.908L287.007 187.064C287.03 185.712 287.781 184.887 288.962 184.908ZM294.073 191.053L295.152 191.072L295.223 187.017C295.243 185.843 296.019 185.063 297.155 185.082C298.227 185.101 298.725 185.694 298.703 186.938L298.63 191.133L299.709 191.152L299.787 186.684C299.816 185.034 299.019 184.125 297.521 184.098C296.474 184.08 295.678 184.549 295.295 185.399L295.206 185.398L295.228 184.185L294.193 184.167L294.073 191.053ZM325.27 245.606L326.349 245.625L326.42 241.57C326.44 240.395 327.216 239.615 328.352 239.635C329.424 239.654 329.922 240.247 329.9 241.491L329.827 245.686L330.906 245.705L330.984 241.237C331.013 239.586 330.216 238.677 328.718 238.651C327.671 238.633 326.876 239.102 326.492 239.952L326.404 239.95L326.425 238.738L325.39 238.72L325.27 245.606ZM338.014 244.051C337.813 244.651 337.165 245.008 336.296 244.992C335.122 244.972 334.387 244.146 334.409 242.883L334.414 242.604L339.104 242.686L339.116 242.013C339.15 240.02 338.118 238.815 336.328 238.784C334.576 238.753 333.394 239.926 333.362 241.741L333.344 242.776C333.31 244.737 334.388 245.892 336.279 245.925C337.726 245.951 338.831 245.202 339.061 244.069L338.014 244.051ZM336.305 239.711C337.416 239.73 338.075 240.535 338.052 241.849L334.428 241.785C334.451 240.465 335.157 239.69 336.305 239.711ZM347.997 239.115L346.944 239.096L345.914 244.602L345.8 244.6L344.786 239.065L343.77 239.047L342.563 244.543L342.449 244.541L341.612 239.003L340.559 238.985L341.917 245.897L342.952 245.915L344.213 240.566L344.29 240.567L345.364 245.957L346.398 245.975L347.997 239.115ZM94.2283 274.493C94.2589 272.742 95.1785 271.704 96.7017 271.73C97.0761 271.737 97.5191 271.821 97.8344 271.941L97.8556 270.729C97.6288 270.629 97.2553 270.566 96.8618 270.559C95.5354 270.536 94.667 271.181 94.3909 272.452L94.2513 272.45L94.282 270.692L91.7115 270.647L91.6965 271.51L93.226 271.537L93.136 276.696L91.746 276.672L91.731 277.535L96.3069 277.615L96.322 276.752L94.1895 276.715L94.2283 274.493ZM104.373 275.978C104.172 276.578 103.524 276.935 102.655 276.92C101.481 276.899 100.746 276.074 100.768 274.811L100.773 274.531L105.463 274.613L105.475 273.941C105.51 271.948 104.477 270.743 102.687 270.711C100.936 270.681 99.7532 271.854 99.7215 273.669L99.7035 274.703C99.6693 276.664 100.747 277.82 102.639 277.853C104.086 277.878 105.191 277.129 105.42 275.997L104.373 275.978ZM102.665 271.638C103.775 271.657 104.434 272.462 104.411 273.776L100.787 273.713C100.81 272.393 101.516 271.618 102.665 271.638ZM109.495 269.11L109.463 270.976L107.629 270.944L107.613 271.864L109.447 271.896L109.379 275.793C109.354 277.227 110.136 277.888 111.843 277.918C112.173 277.924 113.011 277.907 113.183 277.878L113.199 276.964C113.015 276.98 112.323 276.987 111.936 276.98C110.965 276.963 110.445 276.548 110.458 275.799L110.526 271.915L113.306 271.963L113.322 271.043L110.529 270.994L110.562 269.128L109.495 269.11ZM121.49 271.166L120.411 271.148L120.34 275.203C120.32 276.377 119.545 277.157 118.408 277.138C117.336 277.119 116.838 276.526 116.86 275.282L116.933 271.087L115.854 271.068L115.776 275.536C115.748 277.186 116.544 278.095 118.042 278.121C119.089 278.14 119.885 277.671 120.268 276.821L120.357 276.822L120.336 278.035L121.37 278.053L121.49 271.166ZM126.368 275.054C126.399 273.303 127.318 272.265 128.841 272.291C129.216 272.298 129.659 272.382 129.974 272.502L129.995 271.29C129.768 271.19 129.395 271.127 129.001 271.12C127.675 271.097 126.807 271.742 126.531 273.013L126.391 273.011L126.422 271.253L123.851 271.208L123.836 272.071L125.366 272.098L125.276 277.257L123.886 277.233L123.871 278.096L128.447 278.176L128.462 277.313L126.329 277.276L126.368 275.054ZM131.804 278.235L132.883 278.254L132.954 274.198C132.974 273.024 133.75 272.244 134.886 272.264C135.958 272.282 136.456 272.875 136.434 274.119L136.361 278.314L137.44 278.333L137.518 273.865C137.547 272.215 136.75 271.306 135.252 271.28C134.205 271.261 133.409 271.73 133.026 272.58L132.938 272.579L132.959 271.367L131.924 271.349L131.804 278.235Z"
                                fill="#FF8787" />
                            <path
                                d="M407.844 100.607C407.913 102.113 408.988 103.109 410.668 103.265L410.655 103.97L411.411 103.983L411.423 103.272C413.12 103.168 414.217 102.172 414.243 100.661C414.267 99.2968 413.537 98.5286 411.724 98.0462L411.515 97.9854L411.573 94.6915C412.472 94.8341 413.065 95.4095 413.158 96.2618L414.161 96.2794C414.109 94.8818 413.104 93.9119 411.589 93.7458L411.602 93.035L410.846 93.0218L410.834 93.7326C409.22 93.8314 408.175 94.7845 408.15 96.2189C408.127 97.539 408.893 98.3459 410.612 98.8013L410.745 98.8354L410.684 102.313C409.646 102.175 408.946 101.54 408.86 100.625L407.844 100.607ZM409.191 96.2053C409.206 95.3358 409.819 94.7688 410.818 94.6783L410.763 97.7818C409.62 97.4381 409.177 96.9923 409.191 96.2053ZM413.208 100.694C413.192 101.595 412.489 102.224 411.44 102.327L411.497 99.0389C412.716 99.3777 413.222 99.869 413.208 100.694ZM150.413 114.116C150.482 115.622 151.557 116.618 153.236 116.775L153.224 117.479L153.979 117.492L153.992 116.781C155.689 116.678 156.785 115.681 156.812 114.171C156.836 112.806 156.106 112.038 154.293 111.555L154.084 111.495L154.142 108.201C155.041 108.343 155.634 108.919 155.727 109.771L156.729 109.789C156.678 108.391 155.673 107.421 154.158 107.255L154.17 106.544L153.415 106.531L153.403 107.242C151.789 107.341 150.743 108.294 150.718 109.728C150.695 111.048 151.462 111.855 153.181 112.311L153.314 112.345L153.253 115.823C152.214 115.684 151.514 115.049 151.429 114.134L150.413 114.116ZM151.76 109.715C151.775 108.845 152.388 108.278 153.386 108.188L153.332 111.291C152.189 110.947 151.746 110.502 151.76 109.715ZM155.776 114.203C155.761 115.105 155.058 115.733 154.008 115.836L154.066 112.548C155.285 112.887 155.791 113.378 155.776 114.203ZM92.5982 203.121C92.6671 204.626 93.7417 205.623 95.4214 205.779L95.4091 206.484L96.1643 206.497L96.1767 205.786C97.8736 205.682 98.9703 204.686 98.9966 203.175C99.0205 201.811 98.2911 201.042 96.4774 200.56L96.269 200.499L96.3265 197.205C97.2255 197.348 97.8186 197.923 97.9116 198.776L98.9144 198.793C98.8626 197.396 97.8574 196.426 96.343 196.26L96.3554 195.549L95.6002 195.536L95.5877 196.246C93.9735 196.345 92.9284 197.298 92.9033 198.733C92.8803 200.053 93.6471 200.86 95.366 201.315L95.4987 201.349L95.438 204.827C94.3992 204.688 93.6992 204.054 93.6137 203.138L92.5982 203.121ZM93.9447 198.719C93.9599 197.85 94.5729 197.283 95.5712 197.192L95.5171 200.296C94.374 199.952 93.931 199.506 93.9447 198.719ZM97.9612 203.208C97.9455 204.109 97.2425 204.738 96.1932 204.84L96.2506 201.553C97.47 201.891 97.9756 202.383 97.9612 203.208ZM164.284 240.377C164.353 241.883 165.428 242.88 167.107 243.036L167.095 243.74L167.85 243.754L167.863 243.043C169.56 242.939 170.656 241.942 170.683 240.432C170.706 239.067 169.977 238.299 168.163 237.817L167.955 237.756L168.012 234.462C168.911 234.605 169.504 235.18 169.598 236.032L170.6 236.05C170.549 234.652 169.543 233.682 168.029 233.516L168.041 232.806L167.286 232.792L167.274 233.503C165.659 233.602 164.614 234.555 164.589 235.989C164.566 237.31 165.333 238.117 167.052 238.572L167.185 238.606L167.124 242.084C166.085 241.945 165.385 241.311 165.3 240.395L164.284 240.377ZM165.631 235.976C165.646 235.106 166.259 234.539 167.257 234.449L167.203 237.552C166.06 237.209 165.617 236.763 165.631 235.976ZM169.647 240.465C169.631 241.366 168.928 241.995 167.879 242.097L167.937 238.81C169.156 239.148 169.662 239.64 169.647 240.465ZM225.525 242.088C225.324 242.687 224.676 243.044 223.807 243.029C222.633 243.008 221.898 242.183 221.92 240.92L221.925 240.641L226.615 240.723L226.627 240.05C226.662 238.057 225.629 236.852 223.839 236.82C222.087 236.79 220.905 237.963 220.873 239.778L220.855 240.812C220.821 242.774 221.899 243.929 223.791 243.962C225.238 243.987 226.343 243.238 226.572 242.106L225.525 242.088ZM223.817 237.747C224.927 237.766 225.586 238.571 225.563 239.885L221.939 239.822C221.962 238.502 222.668 237.727 223.817 237.747ZM235.077 238.959C235.099 237.684 234.609 237.008 233.651 236.992C232.959 236.98 232.4 237.389 232.211 238.046L232.096 238.044C231.962 237.362 231.512 236.954 230.865 236.943C230.218 236.932 229.715 237.329 229.532 238.018L229.418 238.016L229.435 237.045L228.47 237.028L228.35 243.914L229.321 243.931L229.402 239.286C229.417 238.429 229.807 237.909 230.416 237.919C231 237.93 231.297 238.373 231.283 239.204L231.199 243.964L232.164 243.981L232.245 239.335C232.26 238.478 232.637 237.958 233.24 237.969C233.818 237.979 234.115 238.422 234.1 239.26L234.017 244.013L234.988 244.03L235.077 238.959ZM239.004 244.221C240.007 244.239 240.763 243.839 241.106 243.109L241.213 243.111L241.195 244.145L242.224 244.163L242.306 239.447C242.331 238.013 241.419 237.172 239.8 237.144C238.391 237.119 237.312 237.856 237.166 238.958L238.226 238.976C238.414 238.389 238.978 238.062 239.771 238.076C240.73 238.093 241.248 238.578 241.233 239.441L241.222 240.063L239.329 240.126C237.76 240.181 236.872 240.889 236.85 242.107C236.829 243.358 237.69 244.198 239.004 244.221ZM239.331 243.281C238.462 243.266 237.93 242.812 237.943 242.088C237.955 241.371 238.47 240.968 239.436 240.94L241.208 240.888L241.194 241.701C241.178 242.621 240.372 243.299 239.331 243.281ZM248.009 235.681C248.517 235.689 248.911 235.315 248.92 234.808C248.928 234.306 248.548 233.919 248.04 233.91C247.532 233.901 247.139 234.275 247.13 234.776C247.121 235.284 247.501 235.672 248.009 235.681ZM250.747 244.305L250.763 243.411L248.484 243.371L248.589 237.379L245.181 237.32L245.165 238.215L247.507 238.256L247.418 243.352L245.057 243.311L245.042 244.206L250.747 244.305ZM258.782 244.446L258.798 243.551L256.526 243.511L256.677 234.816L253.263 234.757L253.247 235.651L255.583 235.692L255.447 243.492L253.092 243.451L253.076 244.346L258.782 244.446Z"
                                fill="#74C0FC" />
                            <path
                                d="M120.677 181.024C119.693 181.007 118.969 181.401 118.594 182.156L118.479 182.154L118.498 181.101L117.431 181.082L117.271 190.291L118.369 190.31L118.428 186.921L118.548 186.923C118.834 187.684 119.556 188.122 120.552 188.139C122.145 188.167 123.206 187.036 123.237 185.272L123.259 183.99C123.29 182.219 122.27 181.052 120.677 181.024ZM120.348 182.009C121.484 182.029 122.194 182.854 122.172 184.123L122.154 185.113C122.132 186.383 121.394 187.189 120.258 187.169C119.122 187.149 118.413 186.324 118.435 185.048L118.452 184.058C118.475 182.789 119.212 181.989 120.348 182.009ZM128.155 188.284C129.977 188.316 131.159 187.15 131.192 185.29L131.21 184.249C131.242 182.39 130.102 181.182 128.28 181.151C126.459 181.119 125.276 182.285 125.244 184.145L125.226 185.186C125.193 187.045 126.334 188.253 128.155 188.284ZM128.263 182.103C129.444 182.123 130.165 182.974 130.142 184.326L130.127 185.17C130.103 186.528 129.353 187.347 128.172 187.326C126.992 187.305 126.27 186.461 126.294 185.103L126.308 184.259C126.332 182.907 127.083 182.082 128.263 182.103ZM133.773 183.227C133.756 184.205 134.361 184.844 135.6 185.151L136.618 185.404C137.49 185.616 137.821 185.914 137.812 186.459C137.8 187.119 137.196 187.534 136.257 187.518C135.368 187.502 134.766 187.124 134.618 186.486L133.52 186.467C133.62 187.65 134.642 188.398 136.203 188.425C137.834 188.453 138.908 187.647 138.931 186.377C138.948 185.381 138.349 184.786 137.015 184.458L136.048 184.219C135.188 184.014 134.838 183.709 134.847 183.183C134.858 182.554 135.43 182.158 136.306 182.173C137.112 182.187 137.683 182.565 137.799 183.171L138.84 183.189C138.733 182.038 137.775 181.304 136.341 181.279C134.824 181.252 133.794 182.034 133.773 183.227ZM143.206 179.684L143.173 181.55L141.339 181.518L141.323 182.439L143.157 182.471L143.089 186.367C143.064 187.802 143.846 188.463 145.553 188.493C145.883 188.499 146.722 188.481 146.894 188.453L146.91 187.539C146.725 187.555 146.033 187.562 145.646 187.555C144.675 187.538 144.155 187.122 144.168 186.374L144.236 182.489L147.016 182.538L147.032 181.618L144.24 181.569L144.272 179.703L143.206 179.684ZM211.144 202.866C210.991 201.448 209.965 200.566 208.442 200.54C206.57 200.507 205.458 201.637 205.424 203.611L205.408 204.512C205.374 206.486 206.445 207.654 208.317 207.686C209.841 207.713 210.903 206.874 211.099 205.475L210.032 205.456C209.885 206.241 209.204 206.73 208.315 206.715C207.116 206.694 206.464 205.87 206.489 204.391L206.5 203.769C206.526 202.29 207.207 201.483 208.406 201.504C209.295 201.52 209.959 202.039 210.078 202.848L211.144 202.866ZM216.008 204.608C216.039 202.856 216.959 201.819 218.482 201.845C218.856 201.852 219.299 201.936 219.615 202.055L219.636 200.843C219.409 200.744 219.036 200.68 218.642 200.674C217.316 200.65 216.447 201.295 216.171 202.567L216.031 202.564L216.062 200.806L213.492 200.761L213.477 201.625L215.006 201.651L214.916 206.811L213.526 206.787L213.511 207.65L218.087 207.73L218.102 206.867L215.97 206.829L216.008 204.608ZM226.153 206.093C225.952 206.693 225.305 207.05 224.435 207.034C223.261 207.014 222.526 206.188 222.548 204.925L222.553 204.646L227.243 204.728L227.255 204.055C227.29 202.062 226.257 200.857 224.467 200.826C222.716 200.795 221.533 201.968 221.502 203.783L221.484 204.818C221.449 206.779 222.528 207.934 224.419 207.967C225.866 207.993 226.971 207.244 227.2 206.111L226.153 206.093ZM224.445 201.752C225.556 201.772 226.214 202.577 226.192 203.891L222.568 203.827C222.591 202.507 223.296 201.732 224.445 201.752ZM231.597 208.086C232.6 208.104 233.356 207.704 233.699 206.974L233.807 206.976L233.789 208.01L234.817 208.028L234.899 203.313C234.924 201.878 234.012 201.037 232.394 201.009C230.985 200.984 229.905 201.721 229.759 202.823L230.819 202.841C231.007 202.254 231.571 201.928 232.365 201.942C233.323 201.958 233.841 202.443 233.826 203.307L233.816 203.929L231.923 203.991C230.354 204.046 229.465 204.754 229.444 205.973C229.422 207.223 230.283 208.063 231.597 208.086ZM231.925 207.146C231.055 207.131 230.523 206.677 230.536 205.954C230.549 205.236 231.064 204.833 232.029 204.805L233.801 204.754L233.787 205.566C233.771 206.486 232.965 207.164 231.925 207.146ZM239.311 199.365L239.278 201.231L237.444 201.199L237.428 202.119L239.262 202.151L239.194 206.048C239.169 207.482 239.951 208.143 241.658 208.173C241.988 208.179 242.827 208.162 242.998 208.133L243.014 207.219C242.83 207.235 242.138 207.242 241.751 207.235C240.78 207.218 240.26 206.803 240.273 206.054L240.341 202.17L243.121 202.218L243.137 201.298L240.344 201.249L240.377 199.383L239.311 199.365ZM250.258 206.514C250.057 207.113 249.409 207.47 248.54 207.455C247.366 207.435 246.631 206.609 246.653 205.346L246.658 205.067L251.348 205.149L251.36 204.476C251.395 202.483 250.362 201.278 248.572 201.247C246.82 201.216 245.638 202.389 245.606 204.204L245.588 205.239C245.554 207.2 246.632 208.355 248.524 208.388C249.971 208.413 251.076 207.664 251.305 206.532L250.258 206.514ZM248.55 202.173C249.66 202.193 250.319 202.998 250.296 204.311L246.672 204.248C246.695 202.928 247.401 202.153 248.55 202.173ZM341.796 203.001L344.196 209.931L345.383 209.952L348.016 203.11L346.867 203.089L344.857 208.787L344.775 208.786L342.952 203.021L341.796 203.001ZM352.121 210.19C353.124 210.208 353.88 209.808 354.223 209.078L354.33 209.08L354.312 210.114L355.341 210.132L355.423 205.416C355.448 203.982 354.536 203.141 352.917 203.113C351.508 203.088 350.429 203.825 350.283 204.927L351.343 204.945C351.531 204.358 352.095 204.031 352.888 204.045C353.847 204.062 354.365 204.547 354.35 205.41L354.339 206.032L352.446 206.095C350.877 206.15 349.989 206.858 349.967 208.076C349.946 209.327 350.807 210.167 352.121 210.19ZM352.448 209.25C351.579 209.235 351.047 208.781 351.06 208.057C351.072 207.34 351.587 206.937 352.553 206.909L354.325 206.857L354.311 207.67C354.295 208.59 353.489 209.268 352.448 209.25ZM363.864 210.274L363.88 209.38L361.608 209.34L361.76 200.645L358.345 200.585L358.329 201.48L360.665 201.521L360.529 209.321L358.174 209.28L358.159 210.175L363.864 210.274ZM369.161 201.79C369.669 201.799 370.063 201.425 370.071 200.917C370.08 200.416 369.7 200.028 369.192 200.019C368.684 200.01 368.29 200.384 368.282 200.886C368.273 201.393 368.653 201.781 369.161 201.79ZM371.899 210.415L371.915 209.52L369.636 209.48L369.741 203.489L366.333 203.429L366.317 204.324L368.659 204.365L368.57 209.461L366.209 209.42L366.193 210.315L371.899 210.415ZM376.492 210.609C377.476 210.626 378.207 210.233 378.575 209.477L378.696 209.479L378.677 210.533L379.737 210.551L379.905 200.962L378.807 200.942L378.741 204.712L378.627 204.71C378.342 203.95 377.613 203.512 376.616 203.494C375.023 203.467 373.962 204.597 373.932 206.362L373.909 207.644C373.878 209.414 374.899 210.581 376.492 210.609ZM376.827 209.631C375.691 209.611 374.975 208.78 374.997 207.51L375.014 206.52C375.037 205.251 375.781 204.451 376.917 204.471C378.046 204.491 378.762 205.316 378.74 206.585L378.723 207.575C378.7 208.851 377.956 209.651 376.827 209.631ZM384.26 210.751C385.263 210.769 386.019 210.369 386.362 209.639L386.47 209.641L386.452 210.675L387.48 210.693L387.562 205.977C387.588 204.543 386.675 203.702 385.057 203.674C383.648 203.649 382.569 204.386 382.422 205.488L383.482 205.506C383.67 204.919 384.235 204.592 385.028 204.606C385.986 204.623 386.505 205.108 386.49 205.971L386.479 206.593L384.586 206.656C383.017 206.711 382.128 207.419 382.107 208.637C382.085 209.888 382.947 210.728 384.26 210.751ZM384.588 209.811C383.718 209.796 383.187 209.342 383.199 208.618C383.212 207.901 383.727 207.498 384.692 207.47L386.464 207.418L386.45 208.231C386.434 209.151 385.629 209.829 384.588 209.811ZM391.974 202.029L391.941 203.895L390.107 203.863L390.091 204.784L391.925 204.816L391.857 208.712C391.832 210.147 392.614 210.808 394.321 210.838C394.651 210.844 395.49 210.826 395.662 210.798L395.678 209.884C395.493 209.9 394.801 209.907 394.414 209.9C393.443 209.883 392.923 209.467 392.936 208.719L393.004 204.834L395.784 204.883L395.8 203.963L393.008 203.914L393.04 202.048L391.974 202.029ZM402.921 209.179C402.72 209.778 402.073 210.135 401.203 210.12C400.029 210.099 399.294 209.274 399.316 208.011L399.321 207.732L404.011 207.814L404.023 207.141C404.058 205.148 403.025 203.943 401.235 203.911C399.484 203.881 398.301 205.054 398.27 206.869L398.252 207.903C398.217 209.865 399.296 211.02 401.187 211.053C402.634 211.078 403.739 210.329 403.968 209.197L402.921 209.179ZM401.213 204.838C402.324 204.857 402.982 205.662 402.96 206.976L399.336 206.913C399.359 205.593 400.064 204.818 401.213 204.838ZM408.632 211.17C409.616 211.187 410.346 210.794 410.715 210.038L410.835 210.04L410.817 211.094L411.877 211.112L412.044 201.523L410.946 201.503L410.881 205.273L410.766 205.271C410.481 204.511 409.752 204.073 408.756 204.055C407.163 204.028 406.102 205.158 406.071 206.923L406.049 208.205C406.018 209.975 407.039 211.142 408.632 211.17ZM408.966 210.192C407.83 210.172 407.115 209.341 407.137 208.071L407.154 207.081C407.176 205.812 407.92 205.012 409.056 205.032C410.186 205.052 410.902 205.877 410.88 207.146L410.862 208.136C410.84 209.412 410.096 210.212 408.966 210.192ZM142.263 233.676L142.231 235.542L140.397 235.51L140.381 236.43L142.215 236.462L142.147 240.359C142.122 241.794 142.904 242.455 144.611 242.485C144.941 242.49 145.779 242.473 145.951 242.444L145.967 241.531C145.783 241.546 145.091 241.553 144.704 241.547C143.733 241.53 143.213 241.114 143.226 240.365L143.294 236.481L146.074 236.53L146.09 235.609L143.297 235.561L143.33 233.695L142.263 233.676ZM151.318 242.697C153.139 242.729 154.321 241.562 154.354 239.702L154.372 238.662C154.405 236.802 153.264 235.595 151.442 235.563C149.621 235.531 148.439 236.698 148.406 238.557L148.388 239.598C148.356 241.458 149.496 242.665 151.318 242.697ZM151.426 236.515C152.606 236.536 153.328 237.386 153.304 238.738L153.289 239.582C153.266 240.941 152.515 241.759 151.335 241.738C150.154 241.718 149.432 240.874 149.456 239.515L149.471 238.671C149.494 237.319 150.245 236.495 151.426 236.515ZM285.494 239.884C285.477 240.861 286.082 241.5 287.321 241.808L288.339 242.06C289.211 242.272 289.542 242.57 289.533 243.116C289.521 243.776 288.917 244.191 287.978 244.174C287.089 244.159 286.486 243.78 286.339 243.143L285.241 243.124C285.341 244.306 286.363 245.054 287.924 245.081C289.555 245.11 290.629 244.303 290.651 243.034C290.669 242.037 290.07 241.443 288.736 241.115L287.769 240.876C286.909 240.67 286.559 240.366 286.568 239.839C286.579 239.211 287.151 238.814 288.027 238.83C288.833 238.844 289.404 239.222 289.52 239.827L290.561 239.845C290.454 238.694 289.496 237.96 288.061 237.935C286.545 237.909 285.515 238.691 285.494 239.884ZM297.839 243.35C297.638 243.949 296.991 244.306 296.121 244.291C294.947 244.271 294.212 243.445 294.234 242.182L294.239 241.903L298.929 241.985L298.941 241.312C298.976 239.319 297.943 238.114 296.153 238.083C294.402 238.052 293.219 239.225 293.188 241.04L293.17 242.075C293.135 244.036 294.214 245.191 296.105 245.224C297.552 245.249 298.657 244.5 298.886 243.368L297.839 243.35ZM296.131 239.009C297.241 239.029 297.9 239.834 297.877 241.147L294.253 241.084C294.276 239.764 294.982 238.989 296.131 239.009ZM301.165 245.185L302.244 245.204L302.315 241.149C302.336 239.975 303.111 239.195 304.247 239.214C305.32 239.233 305.817 239.826 305.795 241.07L305.722 245.265L306.801 245.284L306.879 240.816C306.908 239.166 306.111 238.257 304.613 238.23C303.566 238.212 302.771 238.681 302.388 239.531L302.299 239.53L302.32 238.317L301.286 238.299L301.165 245.185ZM311.585 245.482C312.568 245.499 313.299 245.105 313.668 244.35L313.788 244.352L313.77 245.405L314.83 245.424L314.997 235.834L313.899 235.815L313.833 239.585L313.719 239.583C313.434 238.822 312.705 238.384 311.709 238.367C310.116 238.339 309.055 239.47 309.024 241.234L309.002 242.516C308.971 244.287 309.992 245.454 311.585 245.482ZM311.919 244.503C310.783 244.484 310.067 243.652 310.09 242.383L310.107 241.393C310.129 240.123 310.873 239.324 312.009 239.344C313.139 239.363 313.855 240.188 313.832 241.458L313.815 242.448C313.793 243.723 313.049 244.523 311.919 244.503Z"
                                fill="#CE7EFF" />
                            <path
                                d="M41.4978 61.0097L41.515 60.0259L38.9382 59.9809L39.0809 51.8064L37.9829 51.7872L35.2229 53.5103L35.2021 54.7035L37.8529 53.0547L37.9544 53.0565L37.8339 59.9617L35.1302 59.9145L35.113 60.8982L41.4978 61.0097ZM34.9201 72.3141L34.9194 72.3521L35.9984 72.371L35.999 72.3329C36.0179 71.254 36.7283 70.5617 37.7819 70.5801C38.8481 70.5987 39.5286 71.2581 39.5114 72.2418C39.4988 72.9654 39.211 73.4492 38.0269 74.73L34.8695 78.1222L34.856 78.8965L40.6505 78.9976L40.6683 77.9821L36.4731 77.9089L36.475 77.801L38.6738 75.4904C40.1614 73.9229 40.6062 73.1688 40.6229 72.2168C40.6496 70.6873 39.5126 69.6262 37.8308 69.5969C36.1616 69.5677 34.9482 70.702 34.9201 72.3141ZM36.3677 92.6784L37.4149 92.6967C38.6842 92.7188 39.4784 93.412 39.4598 94.4782C39.4417 95.5127 38.6498 96.1465 37.3931 96.1245C36.2507 96.1046 35.4494 95.4557 35.3649 94.4766L34.305 94.4581C34.36 96.0398 35.5984 97.1026 37.4072 97.1342C39.2351 97.1661 40.5619 96.0783 40.589 94.5233C40.6109 93.273 39.9023 92.4036 38.6865 92.2237L38.6883 92.1221C39.6762 91.8981 40.2675 91.1212 40.2868 90.0169C40.311 88.6269 39.1604 87.6228 37.523 87.5942C35.8284 87.5647 34.6942 88.5289 34.5586 90.1137L35.6312 90.1324C35.7372 89.1502 36.4332 88.5593 37.4614 88.5772C38.4959 88.5953 39.1706 89.2229 39.1543 90.1558C39.1376 91.1142 38.4086 91.7744 37.3805 91.7565L36.3841 91.7391L36.3677 92.6784ZM38.169 114.96L39.1908 114.978L39.2246 113.042L40.6272 113.066L40.6444 112.083L39.2481 112.058L39.2936 109.456L38.2781 109.438L38.2324 112.053L35.2305 112.001L35.2319 111.918L38.405 105.803L37.2626 105.783L34.0425 112.044L34.0267 112.951L38.2028 113.024L38.169 114.96ZM36.7029 133.121C38.5625 133.154 39.8474 131.919 39.8798 130.066C39.9112 128.263 38.7528 126.98 37.0582 126.95C36.2522 126.936 35.5935 127.21 35.1333 127.748L35.0318 127.746L35.3378 124.761L39.4632 124.833L39.4808 123.824L34.4733 123.737L33.9197 128.901L34.9796 128.92C35.3526 128.279 36.0383 127.916 36.857 127.931C38.0311 127.951 38.8096 128.815 38.7877 130.072C38.766 131.316 37.9645 132.134 36.784 132.113C35.7114 132.094 34.9042 131.42 34.8194 130.46L33.7404 130.441C33.8082 132.017 34.9956 133.091 36.7029 133.121ZM39.661 148.052C39.6902 146.383 38.5059 145.124 36.8748 145.096C36.2909 145.085 35.6261 145.347 35.3468 145.71L35.2524 145.658C35.2986 145.557 35.2728 145.582 35.5589 145.193L38.1195 141.803L36.8311 141.781C36.766 141.875 34.8154 144.507 34.7305 144.646C33.8324 145.906 33.4537 146.871 33.4349 147.943C33.4031 149.765 34.6814 151.095 36.4838 151.126C38.299 151.158 39.6293 149.867 39.661 148.052ZM36.5076 150.13C35.3588 150.11 34.4987 149.193 34.5192 148.019C34.5398 146.839 35.4314 145.953 36.5801 145.973C37.7352 145.993 38.5954 146.91 38.5748 148.09C38.5543 149.264 37.6627 150.15 36.5076 150.13ZM33.958 168.895L35.1512 168.915L39.3993 160.863L39.4174 159.829L33.3055 159.722L33.288 160.725L38.2575 160.812L38.256 160.894L33.958 168.895ZM35.868 187.134C37.772 187.167 39.1112 186.098 39.1385 184.537C39.1586 183.382 38.4199 182.423 37.3133 182.169L37.3151 182.067C38.2526 181.823 38.8311 181.053 38.8484 180.056C38.8734 178.628 37.7042 177.598 36.035 177.569C34.3658 177.54 33.155 178.528 33.1301 179.956C33.1127 180.953 33.6765 181.75 34.5923 182.02L34.5906 182.121C33.4561 182.375 32.7037 183.288 32.6839 184.424C32.6566 185.986 33.964 187.101 35.868 187.134ZM35.9635 181.663C34.9036 181.644 34.21 181.01 34.2264 180.071C34.2427 179.138 34.958 178.528 36.0179 178.547C37.0778 178.565 37.7651 179.199 37.7488 180.132C37.7324 181.072 37.0234 181.681 35.9635 181.663ZM35.885 186.163C34.641 186.141 33.7969 185.403 33.8151 184.355C33.8334 183.308 34.7028 182.6 35.9468 182.621C37.1907 182.643 38.0349 183.381 38.0166 184.429C37.9984 185.476 37.1289 186.184 35.885 186.163ZM32.5053 198.653C32.4761 200.329 33.6541 201.581 35.2916 201.609C35.8691 201.619 36.5213 201.358 36.8006 200.994L36.8949 201.047C36.836 201.147 36.7901 201.229 36.5757 201.511L34.0215 204.901L35.3036 204.923C35.375 204.829 37.3192 202.197 37.4042 202.059C38.3282 200.767 38.7133 199.803 38.7314 198.762C38.7634 196.934 37.485 195.61 35.6762 195.578C33.8674 195.547 32.537 196.838 32.5053 198.653ZM35.6524 196.575C36.8075 196.595 37.6677 197.511 37.6472 198.686C37.6266 199.866 36.735 200.752 35.5799 200.732C34.4311 200.712 33.571 199.795 33.5916 198.615C33.6121 197.441 34.5037 196.555 35.6524 196.575ZM30.6356 222.845L30.6528 221.861L28.076 221.816L28.2187 213.641L27.1207 213.622L24.3607 215.345L24.3399 216.539L26.9907 214.89L27.0922 214.892L26.9717 221.797L24.268 221.75L24.2508 222.733L30.6356 222.845ZM35.2142 223.134C37.2008 223.169 38.3348 221.487 38.3886 218.403C38.4425 215.318 37.3678 213.598 35.3813 213.563C33.3884 213.529 32.2608 215.21 32.2069 218.295C32.1531 221.379 33.2214 223.099 35.2142 223.134ZM33.3176 218.314C33.361 215.826 34.0693 214.531 35.364 214.553C36.2272 214.569 36.8136 215.163 37.092 216.304L33.3444 219.324C33.3245 219.013 33.3113 218.676 33.3176 218.314ZM35.2315 222.144C34.3684 222.129 33.7883 221.535 33.5096 220.406L37.245 217.361C37.2712 217.679 37.278 218.015 37.2716 218.383C37.2283 220.865 36.5263 222.167 35.2315 222.144ZM30.3214 240.842L30.3386 239.858L27.7619 239.813L27.9046 231.639L26.8066 231.62L24.0466 233.343L24.0258 234.536L26.6765 232.887L26.7781 232.889L26.6575 239.794L23.9539 239.747L23.9367 240.731L30.3214 240.842ZM38.3564 240.982L38.3735 239.999L35.7968 239.954L35.9395 231.779L34.8415 231.76L32.0815 233.483L32.0607 234.676L34.7114 233.027L34.813 233.029L34.6924 239.934L31.9888 239.887L31.9716 240.871L38.3564 240.982ZM30.0073 258.839L30.0245 257.856L27.4477 257.811L27.5904 249.636L26.4924 249.617L23.7324 251.34L23.7116 252.533L26.3624 250.884L26.4639 250.886L26.3434 257.791L23.6397 257.744L23.6225 258.728L30.0073 258.839ZM31.7787 252.287L31.778 252.325L32.8569 252.344L32.8576 252.305C32.8764 251.227 33.5869 250.534 34.6404 250.553C35.7067 250.571 36.3872 251.231 36.37 252.214C36.3574 252.938 36.0696 253.422 34.8854 254.703L31.7281 258.095L31.7146 258.869L37.5091 258.97L37.5268 257.955L33.3317 257.882L33.3335 257.774L35.5324 255.463C37.0199 253.895 37.4648 253.141 37.4814 252.189C37.5081 250.66 36.3712 249.599 34.6893 249.569C33.0202 249.54 31.8068 250.675 31.7787 252.287ZM29.6932 276.837L29.7103 275.853L27.1336 275.808L27.2763 267.633L26.1783 267.614L23.4183 269.337L23.3975 270.53L26.0482 268.882L26.1498 268.883L26.0293 275.789L23.3256 275.741L23.3084 276.725L29.6932 276.837ZM33.2262 272.651L34.2734 272.669C35.5428 272.691 36.3369 273.385 36.3183 274.451C36.3003 275.485 35.5083 276.119 34.2517 276.097C33.1093 276.077 32.308 275.428 32.2235 274.449L31.1636 274.431C31.2185 276.012 32.457 277.075 34.2658 277.107C36.0936 277.139 37.4205 276.051 37.4476 274.496C37.4694 273.246 36.7609 272.376 35.5451 272.196L35.5468 272.095C36.5348 271.871 37.1261 271.094 37.1453 269.989C37.1696 268.6 36.019 267.595 34.3815 267.567C32.687 267.537 31.5528 268.501 31.4172 270.086L32.4898 270.105C32.5958 269.123 33.2918 268.532 34.3199 268.55C35.3544 268.568 36.0291 269.195 36.0129 270.128C35.9961 271.087 35.2672 271.747 34.239 271.729L33.2426 271.712L33.2262 272.651ZM29.379 294.834L29.3962 293.85L26.8194 293.805L26.9621 285.631L25.8641 285.611L23.1042 287.334L23.0833 288.528L25.7341 286.879L25.8356 286.881L25.7151 293.786L23.0114 293.739L22.9942 294.722L29.379 294.834ZM35.0276 294.932L36.0494 294.95L36.0832 293.014L37.4858 293.039L37.503 292.055L36.1067 292.031L36.1521 289.429L35.1366 289.411L35.091 292.026L32.089 291.973L32.0905 291.891L35.2636 285.775L34.1212 285.755L30.9011 292.016L30.8852 292.924L35.0614 292.997L35.0276 294.932Z"
                                fill="#423F3E" />
                        </svg>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Write code for the joy of it.</h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">Laravel values beauty. We love clean code just as
                            much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every
                            feature has been thoughtfully considered to provide a wonderful developer experience.</p>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Start Learning
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden pt-12 pb-16 md:pt-24 lg:pt-48">
        <div class="max-w-screen-xl w-full mx-auto px-5 grid gap-12 lg:grid-cols-2">
            <div class="flex justify-center items-center">
                <svg class="text-red-500 w-[302px] lg:w-[454px]" width="454" height="219" viewBox="0 0 454 219"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="2"
                        d="M215 124h100v86H215zM1 124h100v86H1zM345 124h100v86H345zM131 124h54v86h-54z" />
                    <path fill="#fff" stroke="#565454" stroke-width="2"
                        d="M223 132h100v86H223zM9 132h100v86H9zM353 132h100v86H353zM139 132h54v86h-54z" />
                    <path
                        d="M278.571 177.947c-4.461 7.651-10.385 12.535-13.232 10.907-2.846-1.627-1.538-9.15 2.924-16.801 4.46-7.651 10.385-12.535 13.231-10.907 2.847 1.627 1.539 9.15-2.923 16.801Z"
                        stroke="#232323" stroke-width="1.667" />
                    <path
                        d="M257.167 175c0 3.222 7.089 5.833 15.833 5.833 8.745 0 15.833-2.611 15.833-5.833s-7.088-5.833-15.833-5.833c-8.744 0-15.833 2.611-15.833 5.833Z"
                        stroke="#232323" stroke-width="1.667" />
                    <path
                        d="M267.429 177.947c4.461 7.651 10.385 12.535 13.232 10.907 2.847-1.627 1.538-9.15-2.923-16.801-4.461-7.651-10.385-12.535-13.232-10.907-2.847 1.627-1.538 9.15 2.923 16.801Z"
                        stroke="#232323" stroke-width="1.667" />
                    <path d="M273 177.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" stroke="#232323" stroke-width="1.667" />
                    <path d="m403 165.678-2.938-4.845H395.5l7.5 12.5 7.5-12.5h-4.563l-2.938 4.845H403Z" stroke="#232323"
                        stroke-width="1.667" stroke-linejoin="round" />
                    <path d="M414.173 160.833 403 179.152l-11.173-18.319H385.5l17.5 28.334 17.5-28.334h-6.327Z"
                        stroke="#232323" stroke-width="1.667" stroke-linejoin="round" />
                    <path stroke="#565454" stroke-width="2" d="M229 138h5" />
                    <path
                        d="M219.625 39.375v7.875m-15.75-34.875 7.875-4.5 7.875 4.5-7.875 4.5-7.875-4.5Zm15.75 0v18-18Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M203.875 12.375V38.25l15.75 9 15.75-9V21.375" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M211.75 16.875v18l7.875 4.5 23.625-13.5v-9" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="m227.5 16.875 7.875-4.5 7.875 4.5-7.875 4.5-7.875-4.5Zm0 0v9m0 0 7.875 4.5m-7.875-4.5-15.75 9"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path stroke="#565454" stroke-width="2"
                        d="M237 138h5M163 139h6M245 138h5M15 138h5M359 138h5M23 138h5M367 138h5M31 138h5M375 138h5" />
                    <path stroke="currentColor" stroke-width="2"
                        d="M394 124V94M264 124V94M50 124V94M222 94V64M157 124V94M49 94h346" />
                    <path
                        d="M71.69 185.017c-.086.134-.177.281-.259.415l-.134.217a4.263 4.263 0 0 1-.372.523c-.221.254-.41.357-.683.357-.473 0-.755-.311-1.33-1.153l-.059-.086c-.466-.686-1.22-1.794-2.652-1.794-1.458 0-2.156 1.144-2.574 1.83l-.052.085c-.518.844-.755 1.118-1.202 1.118-.473 0-.755-.311-1.33-1.153l-.059-.086c-.466-.686-1.22-1.794-2.651-1.794-1.46 0-2.157 1.144-2.575 1.83l-.052.085c-.518.844-.755 1.118-1.202 1.118-.473 0-.755-.311-1.33-1.153l-.059-.086c-.466-.686-1.22-1.794-2.651-1.794-1.46 0-2.156 1.144-2.575 1.83l-.052.085c-.518.844-.755 1.118-1.202 1.118-.273 0-.488-.106-.74-.371a15.965 15.965 0 0 1-2.06-7.892c0-8.561 6.603-15.431 14.665-15.431s14.665 6.87 14.665 15.431c0 2.423-.53 4.714-1.474 6.751Z"
                        stroke="#232323" stroke-width="1.67" />
                    <path
                        d="M64.494 174.755c0 2.088-.534 3.748-1.586 4.881-1.041 1.122-2.707 1.852-5.24 1.852-2.531 0-4.197-.73-5.238-1.852-1.052-1.133-1.586-2.793-1.586-4.881 0-4.084 3.154-7.693 6.825-7.693 3.671 0 6.825 3.609 6.825 7.693Z"
                        stroke="#232323" stroke-width="1.67" />
                    <path
                        d="M55.609 175.006c1.586 0 2.872-1.419 2.872-3.17s-1.286-3.171-2.872-3.171c-1.587 0-2.873 1.42-2.873 3.171s1.287 3.17 2.873 3.17Z"
                        fill="#232323" />
                    <path
                        d="M55.13 172.567c.793 0 1.436-.655 1.436-1.463s-.643-1.463-1.436-1.463c-.793 0-1.436.655-1.436 1.463s.643 1.463 1.436 1.463Z"
                        fill="#fff" />
                </svg>
            </div>
            <div class="w-full flex justify-center items-center">
                <div class="sm:max-w-[480px]">
                    <h2 class="text-4xl font-bold md:text-5xl">Monolith or API — the choice is yours.</h2>
                    <p class="mt-6 text-gray-700 leading-relaxed">Build robust, full-stack applications in PHP using
                        Laravel and <a class="underline" href="https://laravel-livewire.com">Livewire</a>. Love
                        JavaScript? Build a monolithic JavaScript driven frontend by pairing Laravel with <a
                            class="underline" href="https://inertiajs.com">Inertia</a>.</p>
                    <p class="mt-6 text-gray-700 leading-relaxed">Or, let Laravel serve as a robust backend API for your
                        Next.js application, mobile application, or other frontend. Either way, our starter kits will
                        have you productive in minutes.</p>
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                        href="docs/9.x/starter-kits.html">
                        <span
                            class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Starter Kits
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden py-16 md:pt-48">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex right-[-20%] top-0 w-[640px] h-[640px]"></span>
        <div class="max-w-screen-xl w-full mx-auto px-5">
            <h2 class="text-4xl font-bold max-w-lg md:text-5xl">Everything you need to be amazing.</h2>
            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#F9322C" d="M.5.5h31v31H.5z" />
                        <path
                            d="M8 11v10c0 2.21 3.582 4 8 4s8-1.79 8-4V11M8 11c0 2.21 3.582 4 8 4s8-1.79 8-4M8 11c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"
                            stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mt-5 text-xl font-bold">Database</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Laravel's <a class="underline"
                            href="docs/9.x/eloquent.html">"Eloquent" ORM</a> provides best-in-class database abstraction
                        without the headaches. Query and update your data without breaking a sweat. Eloquent pairs
                        perfectly with MySQL, Postgres, SQLite, and SQL Server.</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                        <path
                            d="M23 15H9m14 0a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2m14 0v-2a2 2 0 0 0-2-2M9 15v-2a2 2 0 0 1 2-2m10 0V9a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v2m10 0H11"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mt-5 text-xl font-bold">Queues</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Dispatch background jobs to perform slow tasks
                        like sending emails and generating reports while maintaining blazing fast response times.
                        Laravel's <a class="underline" href="docs/9.x/queues.html">robust queue system</a> can process
                        jobs using Redis, Amazon SQS, or even MySQL and Postgres.</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#F9322C" d="M.5.5h31v31H.5z" />
                        <path
                            d="m10.171 15.828-2.12 2.122M19 19l-2 5-4-11 11 4-5 2Zm0 0 5 5-5-5ZM11.188 6.239l.777 2.897-.777-2.897Zm-2.052 5.726-2.898-.777 2.898.777ZM17.95 8.05l-2.122 2.122L17.95 8.05Z"
                            stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mt-5 text-xl font-bold">WebSockets</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed"><a class="underline"
                            href="docs/9.x/broadcasting.html">Laravel Echo</a> and event broadcasting make it a cinch to
                        build modern, realtime user experiences. Create amazing realtime applications while powering
                        your WebSockets with pure PHP, Node.js, or serverless solutions like <a class="underline"
                            href="https://pusher.com">Pusher</a> and <a class="underline"
                            href="https://ably.com">Ably</a>.</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#F9322C" d="M.5.5h31v31H.5z" />
                        <path
                            d="M19 11a2 2 0 0 1 2 2l-2-2Zm6 2a6 6 0 0 1-7.743 5.743L15 21h-2v2h-2v2H8a1 1 0 0 1-1-1v-2.586a1 1 0 0 1 .293-.707l5.964-5.964A6 6 0 1 1 25 13v0Z"
                            stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="mt-5 text-xl font-bold">Authentication</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Stop sweating authentication. Laravel provides
                        scaffolding for secure, session based authentication, while <a class="underline"
                            href="docs/9.x/sanctum.html">Laravel Sanctum</a> provides painless authentication for APIs
                        and mobile applications.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="relative overflow-hidden pt-16 pb-24 lg:pt-48">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex left-[-20%] top-0 w-[640px] h-[640px]"></span>
        <div class="hidden lg:block absolute right-16 top-40 pointer-events-none md:right-auto md:left-1/2">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 2000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="hidden lg:block absolute -left-2 top-64 pointer-events-none md:top-auto md:bottom-64 md:left-2">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div
            class="hidden lg:block absolute top-[480px] right-1/3 pointer-events-none lg:top-auto lg:bottom-12 lg:right-auto lg:left-1/3">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 1000);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="relative max-w-screen-xl w-full mx-auto xl:px-5">
            <div class="relative w-full grid gap-12 lg:grid-cols-2">
                <div class="overflow-hidden flex justify-center">
                    <div class="translate-x-20 sm:translate-x-0">
                        <svg width="485" height="290" viewBox="0 0 485 290" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="9.20996" width="480" height="280" rx="8" transform="rotate(-1 0 9.20996)"
                                fill="#161414" />
                            <circle cx="14.537" cy="22.4582" r="3" transform="rotate(-1 14.537 22.4582)"
                                stroke="#FA615B" />
                            <circle cx="26.5352" cy="22.2487" r="3" transform="rotate(-1 26.5352 22.2487)"
                                stroke="#FCBB40" />
                            <circle cx="38.5333" cy="22.0392" r="3" transform="rotate(-1 38.5333 22.0392)"
                                stroke="#41C84A" />
                            <rect x="17.4287" y="90.9182" width="40" height="16" transform="rotate(-1 17.4287 90.9182)"
                                fill="#38D9A9" />
                            <path
                                d="M26.3269 63.7587L26.3101 62.795L23.8632 62.8377L23.6998 53.4739L20.0226 53.5381L20.0394 54.5018L22.5546 54.4579L22.7013 62.858L20.1655 62.9022L20.1823 63.866L26.3269 63.7587ZM30.9906 63.8072C32.0705 63.7884 32.8693 63.33 33.2108 62.531L33.327 62.5289L33.3465 63.643L34.4537 63.6237L34.3651 58.5454C34.3381 57.0007 33.3247 56.1296 31.5818 56.16C30.0645 56.1865 28.9304 57.0199 28.8145 58.2115L29.9559 58.1916C30.1362 57.5526 30.7313 57.1799 31.5857 57.165C32.6178 57.1469 33.194 57.6497 33.2102 58.5792L33.2219 59.249L31.1869 59.3871C29.5002 59.5054 28.5706 60.3011 28.5935 61.6134C28.617 62.9598 29.5758 63.8319 30.9906 63.8072ZM31.3077 62.783C30.3713 62.7993 29.782 62.331 29.7684 61.5518C29.7549 60.7795 30.294 60.3257 31.332 60.2597L33.2374 60.1376L33.2527 61.0124C33.27 62.0035 32.4286 62.7634 31.3077 62.783ZM40.0413 60.1966C40.0083 58.3101 40.9591 57.1586 42.5995 57.13C43.0027 57.1229 43.4826 57.1966 43.8265 57.3137L43.8037 56.0082C43.5558 55.91 43.1515 55.8555 42.7277 55.8629C41.2993 55.8878 40.389 56.6147 40.1395 57.9933L39.9892 57.996L39.9561 56.1027L37.188 56.151L37.2042 57.0806L38.8514 57.0518L38.9484 62.6086L37.4516 62.6347L37.4678 63.5642L42.3958 63.4782L42.3795 62.5487L40.083 62.5888L40.0413 60.1966ZM48.2965 63.5051C49.3765 63.4863 50.1752 63.0279 50.5168 62.2289L50.633 62.2269L50.6524 63.3409L51.7597 63.3216L51.671 58.2433C51.6441 56.6986 50.6307 55.8275 48.8878 55.8579C47.3704 55.8844 46.2364 56.7178 46.1204 57.9094L47.2619 57.8895C47.4421 57.2505 48.0373 56.8778 48.8916 56.8629C49.9237 56.8449 50.5 57.3476 50.5162 58.2771L50.5279 58.9469L48.4929 59.085C46.8062 59.2033 45.8766 59.999 45.8995 61.3113C45.923 62.6578 46.8817 63.5298 48.2965 63.5051ZM48.6137 62.4809C47.6773 62.4972 47.088 62.0289 47.0744 61.2498C47.0609 60.4774 47.5999 60.0236 48.638 59.9576L50.5434 59.8355L50.5587 60.7103C50.576 61.7014 49.7346 62.4613 48.6137 62.4809ZM54.2205 55.8537L57.0634 63.2222L58.3416 63.1999L60.9187 55.7368L59.6816 55.7584L57.7321 61.9662L57.6432 61.9678L55.4645 55.832L54.2205 55.8537ZM68.3213 61.1113C68.1276 61.7642 67.4442 62.1727 66.5078 62.1891C65.2433 62.2111 64.4215 61.3503 64.3978 59.9902L64.3926 59.6895L69.4435 59.6013L69.4309 58.8768C69.3934 56.7306 68.2365 55.4723 66.3091 55.506C64.4227 55.5389 63.1943 56.8457 63.2284 58.8005L63.2479 59.9145C63.2847 62.0265 64.4885 63.2293 66.5253 63.1938C68.0837 63.1666 69.2449 62.319 69.449 61.0917L68.3213 61.1113ZM66.3197 56.504C67.5158 56.4831 68.2552 57.3248 68.2799 58.7396L64.3772 58.8078C64.3524 57.3861 65.0826 56.5256 66.3197 56.504ZM78.2448 62.8525L78.228 61.8888L75.7811 61.9315L75.6176 52.5677L71.9405 52.6319L71.9573 53.5956L74.4725 53.5517L74.6191 61.9518L72.0834 61.996L72.1002 62.9597L78.2448 62.8525ZM87.2068 58.8605L87.1879 57.7806L79.9566 57.9068L79.9754 58.9867L87.2068 58.8605ZM91.5614 62.7499C92.6414 62.7311 93.4401 62.2727 93.7817 61.4737L93.8979 61.4717L93.9173 62.5858L95.0246 62.5664L94.9359 57.4881C94.909 55.9434 93.8956 55.0723 92.1527 55.1027C90.6353 55.1292 89.5013 55.9626 89.3853 57.1543L90.5267 57.1343C90.707 56.4953 91.3022 56.1226 92.1565 56.1077C93.1886 56.0897 93.7649 56.5924 93.7811 57.5219L93.7928 58.1918L91.7578 58.3298C90.0711 58.4481 89.1415 59.2438 89.1644 60.5561C89.1879 61.9026 90.1466 62.7746 91.5614 62.7499ZM91.8786 61.7257C90.9422 61.742 90.3529 61.2737 90.3393 60.4946C90.3258 59.7222 90.8648 59.2684 91.9029 59.2024L93.8083 59.0803L93.8236 59.9552C93.8409 60.9462 92.9995 61.7061 91.8786 61.7257ZM101.297 54.9089C100.238 54.9274 99.4731 55.3783 99.0978 56.2053L98.9748 56.2075L98.9549 55.0729L97.8067 55.0929L97.9798 65.0103L99.1622 64.9897L99.0985 61.3399L99.2284 61.3376C99.5638 62.1453 100.358 62.5896 101.431 62.5708C103.146 62.5409 104.246 61.2842 104.213 59.3841L104.189 58.0035C104.155 56.0965 103.013 54.879 101.297 54.9089ZM100.981 55.981C102.204 55.9596 102.999 56.8209 103.023 58.1879L103.041 59.2541C103.065 60.6211 102.301 61.5164 101.078 61.5378C99.8544 61.5591 99.06 60.6979 99.036 59.3241L99.0174 58.2578C98.9935 56.8908 99.7574 56.0024 100.981 55.981ZM109.95 54.7579C108.891 54.7764 108.126 55.2273 107.751 56.0543L107.628 56.0564L107.608 54.9218L106.46 54.9419L106.633 64.8593L107.815 64.8387L107.752 61.1888L107.881 61.1866C108.217 61.9943 109.011 62.4385 110.084 62.4198C111.799 62.3899 112.899 61.1332 112.866 59.2331L112.842 57.8524C112.808 55.9455 111.666 54.7279 109.95 54.7579ZM109.634 55.83C110.857 55.8086 111.652 56.6699 111.676 58.0369L111.694 59.1031C111.718 60.4701 110.954 61.3654 109.731 61.3867C108.507 61.4081 107.713 60.5468 107.689 59.173L107.67 58.1068C107.646 56.7398 108.41 55.8513 109.634 55.83ZM67.6516 103.043L67.4988 94.288L70.4788 94.236L70.4595 93.1287L63.2965 93.2537L63.3159 94.361L66.2959 94.309L66.4487 103.064L67.6516 103.043ZM77.6724 100.954C77.4787 101.607 76.7952 102.016 75.8589 102.032C74.5944 102.054 73.7726 101.193 73.7489 99.8331L73.7436 99.5323L78.7946 99.4442L78.782 98.7197C78.7445 96.5735 77.5876 95.3152 75.6602 95.3488C73.7737 95.3818 72.5454 96.6886 72.5795 98.6433L72.5989 99.7574C72.6358 101.869 73.8396 103.072 75.8764 103.037C77.4348 103.009 78.5959 102.162 78.8001 100.935L77.6724 100.954ZM75.6708 96.3468C76.8669 96.326 77.6063 97.1677 77.631 98.5825L73.7282 98.6506C73.7034 97.229 74.4336 96.3684 75.6708 96.3468ZM81.5619 97.3858C81.5802 98.4384 82.255 99.1034 83.6 99.3876L84.7049 99.6213C85.6518 99.8167 86.0195 100.125 86.0298 100.713C86.0422 101.423 85.4077 101.893 84.3961 101.91C83.4392 101.927 82.7762 101.542 82.5934 100.861L81.4109 100.882C81.563 102.151 82.6908 102.918 84.3722 102.888C86.1287 102.858 87.2547 101.949 87.2308 100.582C87.2121 99.5092 86.545 98.8918 85.0971 98.5889L84.0471 98.368C83.114 98.1791 82.7257 97.8646 82.7158 97.2973C82.7039 96.6206 83.3046 96.1726 84.2478 96.1561C85.1159 96.141 85.7448 96.5265 85.8928 97.1735L87.0137 97.1539C86.8554 95.9192 85.7962 95.1651 84.2515 95.192C82.618 95.2205 81.5394 96.1008 81.5619 97.3858ZM91.5805 93.2181L91.6156 95.2276L89.6403 95.2621L89.6576 96.2531L91.6329 96.2186L91.7061 100.415C91.7331 101.96 92.5996 102.642 94.4382 102.61C94.7936 102.604 95.6952 102.554 95.8792 102.517L95.862 101.532C95.6641 101.556 94.9195 101.59 94.5026 101.597C93.4568 101.615 92.8819 101.188 92.8678 100.381L92.7948 96.1984L95.7885 96.1461L95.7712 95.155L92.7638 95.2075L92.7287 93.1981L91.5805 93.2181ZM98.8678 97.0837C98.8862 98.1363 99.561 98.8014 100.906 99.0856L102.011 99.3192C102.958 99.5147 103.325 99.8227 103.336 100.411C103.348 101.121 102.714 101.591 101.702 101.608C100.745 101.625 100.082 101.24 99.8993 100.559L98.7169 100.58C98.8689 101.849 99.9968 102.616 101.678 102.586C103.435 102.556 104.561 101.647 104.537 100.28C104.518 99.2071 103.851 98.5897 102.403 98.2868L101.353 98.0659C100.42 97.8771 100.032 97.5625 100.022 96.9952C100.01 96.3185 100.611 95.8705 101.554 95.854C102.422 95.8389 103.051 96.2244 103.199 96.8714L104.32 96.8518C104.161 95.6171 103.102 94.863 101.557 94.89C99.9239 94.9185 98.8454 95.7988 98.8678 97.0837ZM108.493 103.267L113.1 91.4478L111.958 91.4677L107.358 103.287L108.493 103.267ZM117.587 102.172L117.512 97.8727L121.723 97.7992L121.704 96.7261L117.494 96.7996L117.435 93.4163L122.041 93.3359L122.022 92.2287L116.205 92.3302L116.378 102.193L117.587 102.172ZM129.59 100.048C129.397 100.701 128.713 101.109 127.777 101.126C126.512 101.148 125.69 100.287 125.667 98.9268L125.662 98.6261L130.712 98.5379L130.7 97.8134C130.662 95.6673 129.505 94.409 127.578 94.4426C125.692 94.4755 124.463 95.7823 124.497 97.7371L124.517 98.8512C124.554 100.963 125.757 102.166 127.794 102.13C129.353 102.103 130.514 101.256 130.718 100.028L129.59 100.048ZM127.589 95.4406C128.785 95.4197 129.524 96.2615 129.549 97.6763L125.646 97.7444C125.621 96.3227 126.352 95.4622 127.589 95.4406ZM135.524 101.989C136.604 101.97 137.403 101.511 137.745 100.712L137.861 100.71L137.88 101.824L138.988 101.805L138.899 96.7268C138.872 95.1821 137.859 94.311 136.116 94.3414C134.598 94.3679 133.464 95.2013 133.348 96.393L134.49 96.373C134.67 95.7341 135.265 95.3613 136.12 95.3464C137.152 95.3284 137.728 95.8311 137.744 96.7606L137.756 97.4305L135.721 97.5685C134.034 97.6869 133.104 98.4825 133.127 99.7948C133.151 101.141 134.11 102.013 135.524 101.989ZM135.842 100.964C134.905 100.981 134.316 100.512 134.302 99.7333C134.289 98.9609 134.828 98.5071 135.866 98.4411L137.771 98.319L137.787 99.1939C137.804 100.185 136.962 100.945 135.842 100.964ZM143.498 92.3119L143.533 94.3213L141.558 94.3558L141.575 95.3469L143.551 95.3124L143.624 99.509C143.651 101.054 144.517 101.736 146.356 101.704C146.711 101.698 147.613 101.648 147.797 101.61L147.78 100.626C147.582 100.65 146.837 100.684 146.42 100.691C145.375 100.709 144.8 100.282 144.786 99.4751L144.713 95.2921L147.706 95.2399L147.689 94.2488L144.682 94.3013L144.647 92.2918L143.498 92.3119ZM156.485 94.0748L155.323 94.095L155.4 98.4625C155.422 99.727 154.616 100.596 153.393 100.617C152.238 100.637 151.68 100.018 151.657 98.6783L151.578 94.1604L150.416 94.1807L150.5 98.9925C150.531 100.77 151.423 101.718 153.036 101.69C154.163 101.67 155.002 101.136 155.382 100.206L155.478 100.205L155.501 101.51L156.615 101.491L156.485 94.0748ZM161.881 98.0759C161.848 96.1895 162.799 95.038 164.439 95.0093C164.843 95.0023 165.322 95.076 165.666 95.193L165.643 93.8876C165.396 93.7893 164.991 93.7349 164.568 93.7423C163.139 93.7672 162.229 94.4941 161.979 95.8727L161.829 95.8753L161.796 93.9821L159.028 94.0304L159.044 94.9599L160.691 94.9312L160.788 100.488L159.291 100.514L159.308 101.444L164.236 101.358L164.219 100.428L161.923 100.468L161.881 98.0759ZM172.855 99.2928C172.661 99.9457 171.978 100.354 171.042 100.371C169.777 100.393 168.955 99.5318 168.932 98.1716L168.926 97.8709L173.977 97.7827L173.965 97.0582C173.927 94.9121 172.77 93.6538 170.843 93.6874C168.957 93.7203 167.728 95.0271 167.762 96.9819L167.782 98.096C167.819 100.208 169.022 101.411 171.059 101.375C172.618 101.348 173.779 100.5 173.983 99.2731L172.855 99.2928ZM170.854 94.6854C172.05 94.6645 172.789 95.5063 172.814 96.9211L168.911 96.9892C168.886 95.5675 169.616 94.707 170.854 94.6854ZM177.717 102.059L182.324 90.2394L181.182 90.2594L176.582 102.079L177.717 102.059ZM188.793 100.929L188.641 92.1734L191.621 92.1214L191.601 91.0142L184.438 91.1392L184.458 92.2465L187.438 92.1944L187.59 100.95L188.793 100.929ZM196.847 100.925C198.809 100.891 200.037 99.5909 200.002 97.5883L199.983 96.4674C199.948 94.4647 198.675 93.2084 196.713 93.2427C194.752 93.2769 193.523 94.5769 193.558 96.5795L193.578 97.7004C193.613 99.7031 194.886 100.959 196.847 100.925ZM196.731 94.2679C198.002 94.2457 198.811 95.1341 198.836 96.5899L198.852 97.499C198.878 98.9616 198.101 99.8708 196.829 99.893C195.558 99.9152 194.749 99.0337 194.724 97.571L194.708 96.662C194.683 95.2062 195.46 94.2901 196.731 94.2679ZM205.035 100.769C206.095 100.75 206.866 100.299 207.235 99.4721L207.364 99.4698L207.384 100.604L208.526 100.585L208.345 90.257L207.163 90.2776L207.234 94.3376L207.111 94.3397C206.775 93.532 205.975 93.0879 204.901 93.1066C203.186 93.1365 202.087 94.3932 202.12 96.2933L202.144 97.674C202.177 99.5809 203.32 100.798 205.035 100.769ZM205.358 99.7031C204.135 99.7245 203.334 98.8565 203.31 97.4895L203.291 96.4233C203.267 95.0563 204.038 94.1677 205.261 94.1464C206.478 94.1251 207.279 94.9863 207.303 96.3533L207.322 97.4195C207.346 98.7933 206.575 99.6819 205.358 99.7031ZM214.153 100.623C216.115 100.589 217.343 99.2888 217.308 97.2862L217.289 96.1653C217.254 94.1627 215.981 92.9064 214.019 92.9406C212.057 92.9748 210.829 94.2748 210.864 96.2774L210.884 97.3983C210.918 99.401 212.192 100.657 214.153 100.623ZM214.037 93.9658C215.308 93.9436 216.117 94.832 216.142 96.2878L216.158 97.1969C216.184 98.6596 215.406 99.5688 214.135 99.591C212.864 99.6131 212.055 98.7316 212.03 97.2689L212.014 96.3599C211.989 94.9041 212.766 93.988 214.037 93.9658ZM223.405 100.325L223.252 91.5693L226.232 91.5173L226.213 90.41L219.05 90.535L219.069 91.6423L222.049 91.5903L222.202 100.346L223.405 100.325ZM233.426 98.2355C233.232 98.8884 232.549 99.2969 231.612 99.3132C230.348 99.3353 229.526 98.4745 229.503 97.1144L229.497 96.8136L234.548 96.7255L234.536 96.001C234.498 93.8548 233.341 92.5965 231.414 92.6301C229.527 92.6631 228.299 93.9699 228.333 95.9246L228.353 97.0387C228.389 99.1507 229.593 100.354 231.63 100.318C233.188 100.291 234.35 99.4432 234.554 98.2158L233.426 98.2355ZM231.424 93.6282C232.62 93.6073 233.36 94.449 233.385 95.8638L229.482 95.9319C229.457 94.5103 230.187 93.6497 231.424 93.6282ZM237.315 94.6671C237.334 95.7197 238.009 96.3848 239.354 96.6689L240.458 96.9026C241.405 97.098 241.773 97.4061 241.783 97.9939C241.796 98.7048 241.161 99.1739 240.15 99.1916C239.193 99.2083 238.53 98.8233 238.347 98.1428L237.165 98.1634C237.317 99.4325 238.444 100.199 240.126 100.17C241.882 100.139 243.008 99.2306 242.984 97.8636C242.966 96.7905 242.299 96.1731 240.851 95.8702L239.801 95.6493C238.868 95.4604 238.479 95.1459 238.469 94.5786C238.458 93.9019 239.058 93.4539 240.001 93.4374C240.869 93.4223 241.498 93.8078 241.646 94.4548L242.767 94.4352C242.609 93.2005 241.55 92.4464 240.005 92.4733C238.372 92.5019 237.293 93.3821 237.315 94.6671ZM247.334 90.4994L247.369 92.5089L245.394 92.5434L245.411 93.5344L247.386 93.4999L247.46 97.6966C247.487 99.2413 248.353 99.9235 250.192 99.8914C250.547 99.8852 251.449 99.8353 251.633 99.7979L251.616 98.8137C251.418 98.8376 250.673 98.8711 250.256 98.8784C249.21 98.8967 248.636 98.4691 248.621 97.6626L248.548 93.4797L251.542 93.4274L251.525 92.4364L248.517 92.4888L248.482 90.4794L247.334 90.4994ZM40.3607 134.118L40.3958 136.128L38.4205 136.162L38.4378 137.153L40.4131 137.119L40.4863 141.315C40.5133 142.86 41.3798 143.542 43.2184 143.51C43.5738 143.504 44.4754 143.454 44.6594 143.417L44.6422 142.432C44.4444 142.456 43.6997 142.49 43.2828 142.497C42.237 142.516 41.6621 142.088 41.648 141.281L41.575 137.098L44.5687 137.046L44.5514 136.055L41.544 136.108L41.509 134.098L40.3607 134.118ZM49.6927 143.493C50.7726 143.474 51.5714 143.016 51.913 142.217L52.0292 142.215L52.0486 143.329L53.1559 143.309L53.0672 138.231C53.0403 136.686 52.0269 135.815 50.284 135.846C48.7666 135.872 47.6326 136.706 47.5166 137.897L48.658 137.877C48.8383 137.238 49.4335 136.866 50.2878 136.851C51.3199 136.833 51.8962 137.335 51.9124 138.265L51.9241 138.935L49.8891 139.073C48.2024 139.191 47.2728 139.987 47.2957 141.299C47.3192 142.646 48.2779 143.518 49.6927 143.493ZM50.0099 142.469C49.0735 142.485 48.4842 142.017 48.4706 141.238C48.4571 140.465 48.9961 140.011 50.0342 139.945L51.9396 139.823L51.9548 140.698C51.9721 141.689 51.1308 142.449 50.0099 142.469ZM56.301 137.833C56.3194 138.885 56.9942 139.55 58.3392 139.835L59.444 140.068C60.3909 140.264 60.7587 140.572 60.7689 141.16C60.7813 141.87 60.1469 142.34 59.1353 142.357C58.1784 142.374 57.5153 141.989 57.3325 141.309L56.1501 141.329C56.3021 142.598 57.43 143.365 59.1113 143.335C60.8679 143.305 61.9938 142.396 61.97 141.029C61.9512 139.956 61.2841 139.339 59.8362 139.036L58.7863 138.815C57.8532 138.626 57.4648 138.312 57.4549 137.744C57.4431 137.068 58.0438 136.62 58.987 136.603C59.855 136.588 60.4839 136.974 60.632 137.62L61.7529 137.601C61.5946 136.366 60.5354 135.612 58.9907 135.639C57.3571 135.668 56.2786 136.548 56.301 137.833ZM66.4398 138.982L66.351 138.984L66.242 132.744L65.0801 132.764L65.2604 143.091L66.4223 143.071L66.3752 140.371L67.3832 139.369L69.9764 143.009L71.3571 142.985L68.1964 138.562L71.0226 135.573L69.6146 135.597L66.4398 138.982ZM88.0545 137.586C87.8365 136.065 86.6993 135.155 85.059 135.184C83.0427 135.219 81.8887 136.477 81.9258 138.603L81.9427 139.573C81.9798 141.699 83.177 142.915 85.1933 142.88C86.8337 142.851 87.9453 141.909 88.1035 140.395L86.9552 140.415C86.8265 141.265 86.1114 141.818 85.1545 141.835C83.8628 141.857 83.1298 140.995 83.102 139.402L83.0903 138.733C83.0625 137.14 83.7648 136.246 85.0566 136.223C86.0135 136.207 86.7475 136.741 86.9062 137.606L88.0545 137.586ZM92.9576 142.738C94.0375 142.719 94.8363 142.261 95.1779 141.462L95.2941 141.459L95.3135 142.574L96.4208 142.554L96.3321 137.476C96.3052 135.931 95.2918 135.06 93.5489 135.091C92.0315 135.117 90.8975 135.95 90.7815 137.142L91.9229 137.122C92.1032 136.483 92.6984 136.11 93.5527 136.096C94.5848 136.077 95.161 136.58 95.1773 137.51L95.189 138.18L93.154 138.318C91.4673 138.436 90.5377 139.232 90.5606 140.544C90.5841 141.89 91.5428 142.762 92.9576 142.738ZM93.2748 141.714C92.3384 141.73 91.7491 141.262 91.7355 140.482C91.722 139.71 92.261 139.256 93.2991 139.19L95.2045 139.068L95.2197 139.943C95.237 140.934 94.3957 141.694 93.2748 141.714ZM99.3255 142.497L100.487 142.476L100.411 138.109C100.389 136.844 101.194 135.976 102.418 135.954C103.573 135.934 104.131 136.554 104.154 137.893L104.233 142.411L105.395 142.391L105.311 137.579C105.28 135.802 104.388 134.853 102.775 134.882C101.647 134.901 100.809 135.436 100.429 136.365L100.333 136.367L100.31 135.061L99.196 135.081L99.3255 142.497ZM120.133 142.257C121.849 142.227 122.948 140.97 122.915 139.063L122.891 137.682C122.857 135.782 121.715 134.565 119.999 134.595C118.926 134.613 118.148 135.085 117.834 135.904L117.711 135.906L117.64 131.846L116.458 131.867L116.638 142.195L117.78 142.175L117.76 141.04L117.89 141.038C118.287 141.851 119.074 142.275 120.133 142.257ZM119.773 141.203C118.556 141.224 117.762 140.363 117.738 138.989L117.719 137.923C117.695 136.556 118.459 135.668 119.676 135.646C120.906 135.625 121.701 136.486 121.724 137.853L121.743 138.919C121.767 140.286 121.003 141.182 119.773 141.203ZM130.288 140.042C130.095 140.695 129.411 141.103 128.475 141.12C127.21 141.142 126.389 140.281 126.365 138.921L126.36 138.62L131.411 138.532L131.398 137.807C131.36 135.661 130.204 134.403 128.276 134.437C126.39 134.469 125.161 135.776 125.195 137.731L125.215 138.845C125.252 140.957 126.456 142.16 128.492 142.124C130.051 142.097 131.212 141.25 131.416 140.022L130.288 140.042ZM128.287 135.435C129.483 135.414 130.222 136.255 130.247 137.67L126.344 137.738C126.319 136.317 127.05 135.456 128.287 135.435ZM144.876 141.832C145.955 141.813 146.754 141.354 147.096 140.555L147.212 140.553L147.231 141.667L148.339 141.648L148.25 136.57C148.223 135.025 147.21 134.154 145.467 134.184C143.949 134.211 142.815 135.044 142.699 136.236L143.841 136.216C144.021 135.577 144.616 135.204 145.471 135.189C146.503 135.171 147.079 135.674 147.095 136.604L147.107 137.273L145.072 137.411C143.385 137.53 142.456 138.325 142.478 139.638C142.502 140.984 143.461 141.856 144.876 141.832ZM145.193 140.807C144.256 140.824 143.667 140.355 143.653 139.576C143.64 138.804 144.179 138.35 145.217 138.284L147.122 138.162L147.138 139.037C147.155 140.028 146.314 140.788 145.193 140.807ZM153.815 141.669C154.875 141.65 155.646 141.199 156.015 140.372L156.145 140.37L156.164 141.505L157.306 141.485L157.126 131.157L155.943 131.178L156.014 135.238L155.891 135.24C155.556 134.432 154.755 133.988 153.682 134.007C151.966 134.037 150.867 135.293 150.9 137.193L150.924 138.574C150.957 140.481 152.1 141.699 153.815 141.669ZM154.139 140.603C152.915 140.625 152.114 139.757 152.09 138.39L152.071 137.323C152.047 135.956 152.818 135.068 154.042 135.047C155.258 135.025 156.06 135.886 156.083 137.253L156.102 138.32C156.126 139.693 155.355 140.582 154.139 140.603ZM162.468 141.518C163.528 141.499 164.299 141.048 164.668 140.221L164.798 140.219L164.817 141.354L165.959 141.334L165.779 131.006L164.596 131.027L164.667 135.087L164.544 135.089C164.209 134.281 163.408 133.837 162.335 133.856C160.619 133.886 159.52 135.142 159.553 137.042L159.577 138.423C159.61 140.33 160.753 141.548 162.468 141.518ZM162.792 140.452C161.568 140.474 160.767 139.606 160.743 138.239L160.724 137.172C160.7 135.805 161.471 134.917 162.695 134.895C163.911 134.874 164.713 135.735 164.736 137.102L164.755 138.169C164.779 139.542 164.008 140.431 162.792 140.452ZM173.553 139.287C173.36 139.94 172.676 140.348 171.74 140.364C170.475 140.386 169.653 139.526 169.63 138.166L169.624 137.865L174.675 137.777L174.663 137.052C174.625 134.906 173.468 133.648 171.541 133.681C169.655 133.714 168.426 135.021 168.46 136.976L168.48 138.09C168.517 140.202 169.72 141.405 171.757 141.369C173.316 141.342 174.477 140.494 174.681 139.267L173.553 139.287ZM171.552 134.679C172.748 134.658 173.487 135.5 173.512 136.915L169.609 136.983C169.584 135.561 170.315 134.701 171.552 134.679ZM179.774 141.216C180.834 141.197 181.605 140.746 181.974 139.919L182.104 139.917L182.123 141.051L183.265 141.032L183.085 130.704L181.902 130.725L181.973 134.785L181.85 134.787C181.515 133.979 180.714 133.535 179.641 133.554C177.925 133.584 176.826 134.84 176.859 136.74L176.883 138.121C176.916 140.028 178.059 141.245 179.774 141.216ZM180.098 140.15C178.874 140.172 178.073 139.304 178.049 137.937L178.03 136.87C178.006 135.503 178.777 134.615 180.001 134.593C181.217 134.572 182.019 135.433 182.042 136.8L182.061 137.867C182.085 139.24 181.314 140.129 180.098 140.15ZM40.7098 154.115L40.7448 156.125L38.7695 156.159L38.7868 157.15L40.7621 157.116L40.8354 161.312C40.8623 162.857 41.7289 163.539 43.5675 163.507C43.9229 163.501 44.8245 163.451 45.0084 163.414L44.9913 162.429C44.7934 162.453 44.0488 162.487 43.6318 162.494C42.5861 162.512 42.0112 162.085 41.9971 161.278L41.9241 157.095L44.9177 157.043L44.9005 156.052L41.8931 156.105L41.858 154.095L40.7098 154.115ZM50.0418 163.49C51.1217 163.471 51.9205 163.013 52.262 162.214L52.3782 162.212L52.3977 163.326L53.5049 163.306L53.4163 158.228C53.3893 156.683 52.3759 155.812 50.633 155.843C49.1157 155.869 47.9816 156.703 47.8657 157.894L49.0071 157.874C49.1874 157.235 49.7825 156.863 50.6369 156.848C51.669 156.83 52.2452 157.332 52.2614 158.262L52.2731 158.932L50.2381 159.07C48.5514 159.188 47.6218 159.984 47.6447 161.296C47.6682 162.643 48.627 163.515 50.0418 163.49ZM50.3589 162.466C49.4225 162.482 48.8332 162.014 48.8196 161.235C48.8061 160.462 49.3452 160.008 50.3832 159.942L52.2886 159.82L52.3039 160.695C52.3212 161.686 51.4798 162.446 50.3589 162.466ZM56.6501 157.83C56.6684 158.882 57.3432 159.547 58.6882 159.832L59.7931 160.065C60.74 160.261 61.1077 160.569 61.118 161.157C61.1304 161.867 60.4959 162.337 59.4843 162.354C58.5275 162.371 57.8644 161.986 57.6816 161.305L56.4991 161.326C56.6512 162.595 57.779 163.362 59.4604 163.332C61.217 163.302 62.3429 162.393 62.319 161.026C62.3003 159.953 61.6332 159.336 60.1853 159.033L59.1354 158.812C58.2022 158.623 57.8139 158.309 57.804 157.741C57.7922 157.065 58.3928 156.617 59.336 156.6C60.2041 156.585 60.833 156.971 60.981 157.617L62.1019 157.598C61.9436 156.363 60.8844 155.609 59.3397 155.636C57.7062 155.665 56.6276 156.545 56.6501 157.83ZM66.7889 158.979L66.7 158.981L66.5911 152.74L65.4291 152.761L65.6094 163.088L66.7713 163.068L66.7242 160.368L67.7323 159.366L70.3255 163.006L71.7061 162.982L68.5455 158.559L71.3716 155.57L69.9637 155.594L66.7889 158.979ZM88.4035 157.583C88.1855 156.062 87.0484 155.152 85.408 155.181C83.3917 155.216 82.2377 156.474 82.2748 158.599L82.2918 159.57C82.3289 161.696 83.5261 162.912 85.5424 162.877C87.1827 162.848 88.2944 161.906 88.4526 160.392L87.3043 160.412C87.1756 161.262 86.4605 161.815 85.5036 161.832C84.2118 161.854 83.4789 160.992 83.4511 159.399L83.4394 158.73C83.4116 157.137 84.1139 156.243 85.4056 156.22C86.3625 156.204 87.0966 156.738 87.2553 157.603L88.4035 157.583ZM93.3067 162.735C94.3866 162.716 95.1854 162.258 95.5269 161.458L95.6431 161.456L95.6626 162.571L96.7698 162.551L96.6812 157.473C96.6542 155.928 95.6408 155.057 93.8979 155.087C92.3806 155.114 91.2465 155.947 91.1306 157.139L92.272 157.119C92.4523 156.48 93.0474 156.107 93.9018 156.092C94.9339 156.074 95.5101 156.577 95.5263 157.507L95.538 158.177L93.503 158.315C91.8163 158.433 90.8867 159.229 90.9096 160.541C90.9331 161.887 91.8919 162.759 93.3067 162.735ZM93.6238 161.71C92.6874 161.727 92.0981 161.259 92.0845 160.479C92.071 159.707 92.6101 159.253 93.6481 159.187L95.5535 159.065L95.5688 159.94C95.5861 160.931 94.7447 161.691 93.6238 161.71ZM99.6745 162.494L100.836 162.473L100.76 158.106C100.738 156.841 101.543 155.973 102.767 155.951C103.922 155.931 104.48 156.55 104.503 157.89L104.582 162.408L105.744 162.388L105.66 157.576C105.629 155.799 104.737 154.85 103.124 154.879C101.996 154.898 101.158 155.433 100.778 156.362L100.682 156.364L100.659 155.058L99.5451 155.078L99.6745 162.494ZM120.482 162.254C122.198 162.224 123.297 160.967 123.264 159.06L123.24 157.679C123.206 155.779 122.064 154.562 120.348 154.592C119.275 154.61 118.497 155.082 118.183 155.901L118.06 155.903L117.989 151.843L116.807 151.864L116.987 162.191L118.129 162.172L118.109 161.037L118.239 161.035C118.636 161.848 119.423 162.272 120.482 162.254ZM120.122 161.2C118.905 161.221 118.111 160.36 118.087 158.986L118.068 157.92C118.044 156.553 118.808 155.665 120.025 155.643C121.255 155.622 122.05 156.483 122.073 157.85L122.092 158.916C122.116 160.283 121.352 161.179 120.122 161.2ZM130.637 160.039C130.444 160.692 129.76 161.1 128.824 161.117C127.559 161.139 126.738 160.278 126.714 158.918L126.709 158.617L131.76 158.529L131.747 157.804C131.71 155.658 130.553 154.4 128.625 154.433C126.739 154.466 125.51 155.773 125.545 157.728L125.564 158.842C125.601 160.954 126.805 162.157 128.841 162.121C130.4 162.094 131.561 161.247 131.765 160.019L130.637 160.039ZM128.636 155.431C129.832 155.411 130.571 156.252 130.596 157.667L126.693 157.735C126.668 156.314 127.399 155.453 128.636 155.431ZM148.974 156.526C148.756 155.005 147.619 154.095 145.979 154.124C143.963 154.159 142.809 155.417 142.846 157.542L142.863 158.513C142.9 160.638 144.097 161.855 146.113 161.82C147.754 161.791 148.865 160.849 149.023 159.335L147.875 159.355C147.746 160.205 147.031 160.758 146.074 160.774C144.783 160.797 144.05 159.935 144.022 158.342L144.01 157.672C143.982 156.08 144.685 155.186 145.976 155.163C146.933 155.146 147.667 155.68 147.826 156.546L148.974 156.526ZM154.629 161.671C156.591 161.637 157.82 160.337 157.785 158.334L157.765 157.213C157.73 155.211 156.457 153.954 154.495 153.989C152.534 154.023 151.305 155.323 151.34 157.326L151.36 158.446C151.395 160.449 152.668 161.705 154.629 161.671ZM154.513 155.014C155.785 154.992 156.593 155.88 156.619 157.336L156.634 158.245C156.66 159.708 155.883 160.617 154.611 160.639C153.34 160.661 152.532 159.78 152.506 158.317L152.49 157.408C152.465 155.952 153.242 155.036 154.513 155.014ZM166.759 155.86C166.735 154.486 166.183 153.778 165.151 153.796C164.406 153.809 163.819 154.27 163.64 154.985L163.517 154.987C163.347 154.258 162.848 153.836 162.15 153.848C161.453 153.86 160.928 154.307 160.756 155.055L160.633 155.058L160.615 154.012L159.576 154.03L159.705 161.446L160.751 161.428L160.664 156.424C160.648 155.502 161.048 154.927 161.704 154.916C162.333 154.905 162.669 155.371 162.685 156.266L162.774 161.392L163.813 161.374L163.726 156.371C163.71 155.448 164.096 154.874 164.746 154.863C165.368 154.852 165.704 155.318 165.72 156.22L165.809 161.339L166.855 161.321L166.759 155.86ZM172.266 153.685C171.207 153.704 170.442 154.155 170.067 154.982L169.944 154.984L169.924 153.849L168.776 153.869L168.949 163.787L170.131 163.766L170.068 160.116L170.197 160.114C170.533 160.922 171.327 161.366 172.4 161.347C174.116 161.317 175.215 160.061 175.182 158.161L175.158 156.78C175.124 154.873 173.982 153.655 172.266 153.685ZM171.95 154.757C173.173 154.736 173.968 155.597 173.992 156.964L174.01 158.031C174.034 159.398 173.27 160.293 172.047 160.314C170.823 160.336 170.029 159.474 170.005 158.101L169.986 157.034C169.963 155.667 170.726 154.779 171.95 154.757ZM183.826 161.025L183.809 160.061L181.362 160.104L181.199 150.74L177.521 150.804L177.538 151.768L180.054 151.724L180.2 160.124L177.664 160.168L177.681 161.132L183.826 161.025ZM191.208 158.982C191.015 159.634 190.331 160.043 189.395 160.059C188.13 160.081 187.308 159.221 187.285 157.86L187.28 157.56L192.33 157.472L192.318 156.747C192.28 154.601 191.123 153.343 189.196 153.376C187.31 153.409 186.081 154.716 186.115 156.671L186.135 157.785C186.172 159.897 187.375 161.1 189.412 161.064C190.971 161.037 192.132 160.189 192.336 158.962L191.208 158.982ZM189.207 154.374C190.403 154.353 191.142 155.195 191.167 156.61L187.264 156.678C187.239 155.256 187.97 154.396 189.207 154.374ZM196.463 151.397L196.498 153.406L194.523 153.44L194.54 154.432L196.516 154.397L196.589 158.594C196.616 160.138 197.482 160.821 199.321 160.789C199.677 160.782 200.578 160.732 200.762 160.695L200.745 159.711C200.547 159.735 199.802 159.768 199.385 159.776C198.34 159.794 197.765 159.366 197.751 158.56L197.678 154.377L200.671 154.325L200.654 153.333L197.647 153.386L197.612 151.376L196.463 151.397ZM208.514 158.68C208.32 159.332 207.637 159.741 206.701 159.757C205.436 159.779 204.614 158.918 204.591 157.558L204.585 157.258L209.636 157.169L209.624 156.445C209.586 154.299 208.429 153.04 206.502 153.074C204.616 153.107 203.387 154.414 203.421 156.369L203.441 157.483C203.478 159.595 204.681 160.797 206.718 160.762C208.277 160.735 209.438 159.887 209.642 158.66L208.514 158.68ZM206.513 154.072C207.709 154.051 208.448 154.893 208.473 156.308L204.57 156.376C204.545 154.954 205.275 154.094 206.513 154.072ZM214.735 160.608C215.795 160.59 216.566 160.139 216.935 159.312L217.065 159.31L217.084 160.444L218.226 160.424L218.046 150.097L216.863 150.117L216.934 154.177L216.811 154.18C216.476 153.372 215.675 152.928 214.602 152.946C212.886 152.976 211.787 154.233 211.82 156.133L211.844 157.514C211.877 159.421 213.02 160.638 214.735 160.608ZM215.059 159.543C213.835 159.564 213.034 158.696 213.01 157.329L212.991 156.263C212.967 154.896 213.738 154.008 214.962 153.986C216.178 153.965 216.979 154.826 217.003 156.193L217.022 157.259C217.046 158.633 216.275 159.522 215.059 159.543ZM41.0588 174.112L41.0939 176.122L39.1186 176.156L39.1359 177.147L41.1112 177.113L41.1844 181.309C41.2114 182.854 42.0779 183.536 43.9165 183.504C44.2719 183.498 45.1735 183.448 45.3575 183.411L45.3403 182.426C45.1424 182.45 44.3978 182.484 43.9809 182.491C42.9351 182.509 42.3602 182.082 42.3461 181.275L42.2731 177.092L45.2668 177.04L45.2495 176.049L42.2421 176.102L42.2071 174.092L41.0588 174.112ZM50.3908 183.487C51.4707 183.468 52.2695 183.01 52.6111 182.211L52.7273 182.209L52.7467 183.323L53.854 183.303L53.7653 178.225C53.7384 176.68 52.725 175.809 50.9821 175.84C49.4647 175.866 48.3307 176.7 48.2147 177.891L49.3561 177.871C49.5364 177.232 50.1316 176.86 50.9859 176.845C52.018 176.827 52.5942 177.329 52.6105 178.259L52.6222 178.929L50.5872 179.067C48.9005 179.185 47.9709 179.981 47.9938 181.293C48.0173 182.639 48.976 183.512 50.3908 183.487ZM50.708 182.463C49.7716 182.479 49.1823 182.011 49.1687 181.231C49.1552 180.459 49.6942 180.005 50.7323 179.939L52.6377 179.817L52.6529 180.692C52.6702 181.683 51.8289 182.443 50.708 182.463ZM56.9991 177.827C57.0175 178.879 57.6923 179.544 59.0373 179.829L60.1421 180.062C61.089 180.258 61.4568 180.566 61.467 181.154C61.4794 181.864 60.845 182.334 59.8334 182.351C58.8765 182.368 58.2134 181.983 58.0306 181.302L56.8482 181.323C57.0002 182.592 58.1281 183.359 59.8094 183.329C61.566 183.299 62.6919 182.39 62.6681 181.023C62.6493 179.95 61.9822 179.333 60.5343 179.03L59.4844 178.809C58.5513 178.62 58.1629 178.306 58.153 177.738C58.1412 177.062 58.7419 176.614 59.6851 176.597C60.5531 176.582 61.182 176.967 61.33 177.614L62.451 177.595C62.2927 176.36 61.2335 175.606 59.6888 175.633C58.0552 175.661 56.9767 176.542 56.9991 177.827ZM67.1379 178.976L67.049 178.978L66.9401 172.737L65.7782 172.758L65.9585 183.085L67.1204 183.065L67.0733 180.365L68.0813 179.363L70.6745 183.003L72.0552 182.979L68.8945 178.556L71.7207 175.567L70.3127 175.591L67.1379 178.976ZM88.7526 177.58C88.5346 176.059 87.3974 175.149 85.7571 175.178C83.7408 175.213 82.5868 176.471 82.6239 178.596L82.6408 179.567C82.6779 181.693 83.8751 182.909 85.8914 182.874C87.5318 182.845 88.6434 181.903 88.8016 180.389L87.6533 180.409C87.5246 181.259 86.8095 181.812 85.8526 181.829C84.5608 181.851 83.8279 180.989 83.8001 179.396L83.7884 178.727C83.7606 177.134 84.4629 176.24 85.7547 176.217C86.7116 176.2 87.4456 176.735 87.6043 177.6L88.7526 177.58ZM93.6557 182.732C94.7356 182.713 95.5344 182.254 95.876 181.455L95.9922 181.453L96.0116 182.567L97.1189 182.548L97.0302 177.47C97.0033 175.925 95.9899 175.054 94.247 175.084C92.7296 175.111 91.5955 175.944 91.4796 177.136L92.621 177.116C92.8013 176.477 93.3965 176.104 94.2508 176.089C95.2829 176.071 95.8591 176.574 95.8754 177.504L95.8871 178.173L93.8521 178.312C92.1654 178.43 91.2358 179.226 91.2587 180.538C91.2822 181.884 92.2409 182.756 93.6557 182.732ZM93.9729 181.707C93.0365 181.724 92.4472 181.255 92.4336 180.476C92.4201 179.704 92.9591 179.25 93.9972 179.184L95.9026 179.062L95.9178 179.937C95.9351 180.928 95.0938 181.688 93.9729 181.707ZM100.024 182.491L101.186 182.47L101.109 178.103C101.087 176.838 101.892 175.97 103.116 175.948C104.271 175.928 104.829 176.547 104.852 177.887L104.931 182.405L106.093 182.385L106.009 177.573C105.978 175.796 105.086 174.847 103.473 174.876C102.345 174.895 101.507 175.429 101.127 176.359L101.031 176.361L101.008 175.055L99.8941 175.075L100.024 182.491ZM120.831 182.25C122.547 182.221 123.646 180.964 123.613 179.057L123.589 177.676C123.555 175.776 122.413 174.559 120.697 174.589C119.624 174.607 118.846 175.079 118.532 175.898L118.409 175.9L118.339 171.84L117.156 171.861L117.336 182.188L118.478 182.168L118.458 181.034L118.588 181.032C118.985 181.845 119.772 182.269 120.831 182.25ZM120.471 181.197C119.254 181.218 118.46 180.357 118.436 178.983L118.417 177.917C118.393 176.55 119.157 175.662 120.374 175.64C121.604 175.619 122.399 176.48 122.423 177.847L122.441 178.913C122.465 180.28 121.701 181.176 120.471 181.197ZM130.986 180.036C130.793 180.689 130.109 181.097 129.173 181.114C127.908 181.136 127.087 180.275 127.063 178.915L127.058 178.614L132.109 178.526L132.096 177.801C132.059 175.655 130.902 174.397 128.974 174.43C127.088 174.463 125.859 175.77 125.894 177.725L125.913 178.839C125.95 180.951 127.154 182.154 129.19 182.118C130.749 182.091 131.91 181.243 132.114 180.016L130.986 180.036ZM128.985 175.428C130.181 175.408 130.92 176.249 130.945 177.664L127.042 177.732C127.017 176.311 127.748 175.45 128.985 175.428ZM145.861 181.814C146.92 181.795 147.691 181.344 148.06 180.517L148.19 180.515L148.21 181.65L149.351 181.63L149.171 171.302L147.988 171.323L148.059 175.383L147.936 175.385C147.601 174.577 146.8 174.133 145.727 174.152C144.011 174.182 142.912 175.438 142.945 177.338L142.969 178.719C143.002 180.626 144.145 181.844 145.861 181.814ZM146.184 180.748C144.96 180.77 144.159 179.902 144.135 178.535L144.116 177.468C144.093 176.101 144.863 175.213 146.087 175.191C147.303 175.17 148.105 176.031 148.129 177.398L148.147 178.465C148.171 179.838 147.4 180.727 146.184 180.748ZM156.945 179.583C156.752 180.236 156.068 180.644 155.132 180.66C153.867 180.682 153.046 179.822 153.022 178.462L153.017 178.161L158.068 178.073L158.055 177.348C158.018 175.202 156.861 173.944 154.933 173.977C153.047 174.01 151.818 175.317 151.853 177.272L151.872 178.386C151.909 180.498 153.113 181.701 155.149 181.665C156.708 181.638 157.869 180.79 158.073 179.563L156.945 179.583ZM154.944 174.975C156.14 174.954 156.879 175.796 156.904 177.211L153.001 177.279C152.976 175.857 153.707 174.997 154.944 174.975ZM166.869 181.324L166.852 180.36L164.405 180.403L164.242 171.039L160.565 171.103L160.581 172.067L163.097 172.023L163.243 180.423L160.707 180.467L160.724 181.431L166.869 181.324ZM174.251 179.281C174.058 179.934 173.374 180.342 172.438 180.358C171.173 180.38 170.352 179.52 170.328 178.159L170.323 177.859L175.374 177.771L175.361 177.046C175.323 174.9 174.167 173.642 172.239 173.675C170.353 173.708 169.124 175.015 169.158 176.97L169.178 178.084C169.215 180.196 170.419 181.399 172.455 181.363C174.014 181.336 175.175 180.488 175.379 179.261L174.251 179.281ZM172.25 174.673C173.446 174.652 174.185 175.494 174.21 176.909L170.307 176.977C170.282 175.555 171.013 174.695 172.25 174.673ZM179.506 171.696L179.542 173.705L177.566 173.739L177.584 174.731L179.559 174.696L179.632 178.893C179.659 180.437 180.526 181.12 182.364 181.088C182.72 181.081 183.621 181.031 183.805 180.994L183.788 180.01C183.59 180.034 182.845 180.067 182.429 180.075C181.383 180.093 180.808 179.665 180.794 178.859L180.721 174.676L183.714 174.624L183.697 173.632L180.69 173.685L180.655 171.676L179.506 171.696ZM191.557 178.979C191.364 179.631 190.68 180.04 189.744 180.056C188.479 180.078 187.658 179.218 187.634 177.857L187.629 177.557L192.68 177.468L192.667 176.744C192.629 174.598 191.473 173.34 189.545 173.373C187.659 173.406 186.43 174.713 186.464 176.668L186.484 177.782C186.521 179.894 187.725 181.097 189.761 181.061C191.32 181.034 192.481 180.186 192.685 178.959L191.557 178.979ZM189.556 174.371C190.752 174.35 191.491 175.192 191.516 176.607L187.613 176.675C187.588 175.253 188.319 174.393 189.556 174.371ZM197.778 180.907C198.838 180.889 199.609 180.438 199.978 179.611L200.108 179.609L200.127 180.743L201.269 180.723L201.089 170.396L199.906 170.416L199.977 174.476L199.854 174.479C199.519 173.671 198.718 173.227 197.645 173.245C195.929 173.275 194.83 174.532 194.863 176.432L194.887 177.813C194.92 179.72 196.063 180.937 197.778 180.907ZM198.102 179.842C196.878 179.863 196.077 178.995 196.053 177.628L196.034 176.562C196.01 175.195 196.781 174.307 198.005 174.285C199.221 174.264 200.023 175.125 200.046 176.492L200.065 177.558C200.089 178.932 199.318 179.821 198.102 179.842ZM26.481 223.78L26.3282 215.025L29.3082 214.973L29.2889 213.866L22.1259 213.991L22.1452 215.098L25.1253 215.046L25.2781 223.801L26.481 223.78ZM36.5018 221.691C36.308 222.344 35.6246 222.752 34.6883 222.769C33.4238 222.791 32.602 221.93 32.5783 220.57L32.573 220.269L37.624 220.181L37.6114 219.457C37.5739 217.31 36.417 216.052 34.4896 216.086C32.6031 216.119 31.3748 217.425 31.4089 219.38L31.4283 220.494C31.4652 222.606 32.669 223.809 34.7058 223.774C36.2642 223.746 37.4253 222.899 37.6295 221.671L36.5018 221.691ZM34.5001 217.084C35.6963 217.063 36.4357 217.905 36.4604 219.319L32.5576 219.388C32.5328 217.966 33.263 217.105 34.5001 217.084ZM40.3912 218.123C40.4096 219.175 41.0844 219.84 42.4294 220.125L43.5343 220.358C44.4812 220.554 44.8489 220.862 44.8592 221.45C44.8716 222.16 44.2371 222.63 43.2255 222.647C42.2686 222.664 41.6056 222.279 41.4228 221.598L40.2403 221.619C40.3924 222.888 41.5202 223.655 43.2016 223.625C44.9581 223.595 46.0841 222.686 46.0602 221.319C46.0415 220.246 45.3743 219.629 43.9265 219.326L42.8765 219.105C41.9434 218.916 41.5551 218.601 41.5452 218.034C41.5333 217.358 42.134 216.909 43.0772 216.893C43.9453 216.878 44.5742 217.263 44.7222 217.91L45.8431 217.891C45.6848 216.656 44.6256 215.902 43.0809 215.929C41.4474 215.957 40.3688 216.838 40.3912 218.123ZM50.4099 213.955L50.445 215.964L48.4697 215.999L48.487 216.99L50.4623 216.956L50.5355 221.152C50.5625 222.697 51.429 223.379 53.2676 223.347C53.623 223.341 54.5246 223.291 54.7086 223.253L54.6914 222.269C54.4935 222.293 53.7489 222.327 53.332 222.334C52.2862 222.352 51.7113 221.925 51.6972 221.118L51.6242 216.935L54.6179 216.883L54.6006 215.892L51.5932 215.944L51.5581 213.935L50.4099 213.955ZM26.8301 243.777L26.6773 235.022L29.6573 234.97L29.6379 233.863L22.475 233.988L22.4943 235.095L25.4743 235.043L25.6271 243.798L26.8301 243.777ZM34.8503 234.401C35.3971 234.391 35.8068 233.974 35.7973 233.427C35.7879 232.887 35.3638 232.484 34.817 232.494C34.2702 232.503 33.8604 232.921 33.8698 233.461C33.8794 234.007 34.3035 234.41 34.8503 234.401ZM38.1213 243.58L38.1045 242.617L35.6508 242.659L35.5382 236.207L31.8678 236.271L31.8846 237.235L34.4067 237.191L34.5025 242.679L31.9599 242.724L31.9768 243.688L38.1213 243.58ZM47.0139 237.962C46.9899 236.588 46.4374 235.88 45.4054 235.898C44.6604 235.911 44.0736 236.373 43.8946 237.087L43.7716 237.089C43.6016 236.36 43.102 235.938 42.4048 235.951C41.7077 235.963 41.1822 236.41 41.0107 237.158L40.8876 237.16L40.8694 236.114L39.8305 236.132L39.9599 243.548L41.0057 243.53L40.9183 238.527C40.9022 237.604 41.3024 237.03 41.9586 237.018C42.5874 237.007 42.9237 237.473 42.9393 238.368L43.0288 243.495L44.0677 243.476L43.9804 238.473C43.9643 237.551 44.3508 236.976 45.0001 236.965C45.6221 236.954 45.9584 237.42 45.9741 238.322L46.0635 243.442L47.1092 243.423L47.0139 237.962ZM54.1568 241.386C53.9631 242.039 53.2796 242.447 52.3433 242.464C51.0788 242.486 50.257 241.625 50.2333 240.265L50.228 239.964L55.279 239.876L55.2664 239.151C55.2289 237.005 54.072 235.747 52.1446 235.781C50.2581 235.814 49.0298 237.12 49.0639 239.075L49.0833 240.189C49.1202 242.301 50.324 243.504 52.3608 243.468C53.9192 243.441 55.0803 242.594 55.2845 241.366L54.1568 241.386ZM52.1552 236.779C53.3513 236.758 54.0907 237.599 54.1154 239.014L50.2126 239.082C50.1878 237.661 50.918 236.8 52.1552 236.779ZM78.1573 243.107C80.2966 243.07 81.4539 241.217 81.3959 237.895C81.3379 234.574 80.1167 232.763 77.9773 232.8C75.8312 232.837 74.6807 234.69 74.7387 238.012C74.7967 241.333 76.0111 243.145 78.1573 243.107ZM75.9348 237.991C75.888 235.311 76.6016 233.891 77.996 233.866C78.9255 233.85 79.579 234.468 79.9216 235.685L76.0016 239.077C75.9684 238.742 75.9416 238.38 75.9348 237.991ZM78.1386 242.041C77.2091 242.057 76.5625 241.439 76.2201 240.235L80.1259 236.817C80.166 237.158 80.186 237.52 80.193 237.916C80.2396 240.589 79.533 242.016 78.1386 242.041ZM86.8002 242.772C87.4768 242.76 88.0274 242.183 88.0152 241.486C88.0032 240.795 87.4328 240.238 86.7562 240.25C86.0795 240.261 85.5289 240.838 85.541 241.529C85.5532 242.226 86.1235 242.783 86.8002 242.772ZM96.6075 242.559L97.708 242.54L97.6716 240.456L99.1821 240.429L99.1636 239.37L97.6599 239.396L97.611 236.594L96.5174 236.613L96.5666 239.429L93.3337 239.485L93.3321 239.396L96.5174 232.695L95.2871 232.717L92.0567 239.576L92.0738 240.553L96.5712 240.475L96.6075 242.559ZM107.83 242.363L107.812 241.304L105.037 241.353L104.883 232.549L103.701 232.57L100.795 234.528L100.818 235.813L103.609 233.939L103.718 233.937L103.848 241.373L100.936 241.424L100.955 242.484L107.83 242.363ZM109.964 236.911C109.982 237.964 110.657 238.629 112.002 238.913L113.107 239.147C114.054 239.342 114.422 239.65 114.432 240.238C114.444 240.949 113.81 241.418 112.798 241.436C111.842 241.453 111.178 241.068 110.996 240.387L109.813 240.408C109.965 241.677 111.093 242.443 112.774 242.414C114.531 242.383 115.657 241.475 115.633 240.108C115.614 239.035 114.947 238.417 113.499 238.114L112.449 237.894C111.516 237.705 111.128 237.39 111.118 236.823C111.106 236.146 111.707 235.698 112.65 235.682C113.518 235.667 114.147 236.052 114.295 236.699L115.416 236.679C115.258 235.445 114.198 234.691 112.654 234.718C111.02 234.746 109.942 235.626 109.964 236.911Z"
                                fill="#DFDFDF" />
                            <path
                                d="M124.401 56.9396C125.556 56.9194 126.252 56.1005 126.23 54.8087L126.218 54.1047C126.195 52.8266 125.464 52.0326 124.315 52.0527C123.167 52.0727 122.457 52.8919 122.479 54.17L122.491 54.874C122.514 56.1658 123.245 56.9598 124.401 56.9396ZM131.077 52.0645L122.578 61.0189L122.596 62.0783L131.096 53.1239L131.077 52.0645ZM124.386 56.0784C123.729 56.0899 123.379 55.6242 123.364 54.7288L123.356 54.2983C123.341 53.4029 123.674 52.9253 124.33 52.9139C124.98 52.9025 125.33 53.3682 125.345 54.2635L125.353 54.6941C125.368 55.5895 125.035 56.0671 124.386 56.0784ZM129.358 62.0902C130.514 62.07 131.217 61.251 131.195 59.9592L131.182 59.2552C131.16 57.9839 130.421 57.1832 129.273 57.2032C128.125 57.2233 127.421 58.0492 127.444 59.3205L127.456 60.0245C127.478 61.3162 128.203 62.1104 129.358 62.0902ZM129.344 61.2358C128.694 61.2472 128.344 60.7747 128.328 59.8793L128.321 59.4487C128.305 58.5533 128.639 58.0758 129.288 58.0644C129.944 58.053 130.294 58.5186 130.31 59.414L130.317 59.8446C130.333 60.74 130 61.2244 129.344 61.2358Z"
                                fill="#8C8888" />
                            <path
                                d="M143.479 61.8437C144.559 61.8249 145.358 61.3665 145.7 60.5675L145.816 60.5654L145.835 61.6795L146.942 61.6602L146.854 56.5819C146.827 55.0372 145.813 54.1661 144.071 54.1965C142.553 54.223 141.419 55.0564 141.303 56.248L142.445 56.2281C142.625 55.5891 143.22 55.2164 144.074 55.2015C145.106 55.1834 145.683 55.6862 145.699 56.6157L145.711 57.2855L143.676 57.4236C141.989 57.5419 141.059 58.3376 141.082 59.6499C141.106 60.9963 142.064 61.8684 143.479 61.8437ZM143.796 60.8195C142.86 60.8358 142.271 60.3675 142.257 59.5883C142.244 58.816 142.783 58.3622 143.821 58.2962L145.726 58.1741L145.741 59.0489C145.759 60.04 144.917 60.7999 143.796 60.8195ZM152.53 58.2331C152.497 56.3466 153.448 55.1951 155.088 55.1665C155.491 55.1594 155.971 55.2331 156.315 55.3502L156.292 54.0447C156.045 53.9465 155.64 53.892 155.216 53.8994C153.788 53.9243 152.878 54.6512 152.628 56.0298L152.478 56.0325L152.445 54.1392L149.677 54.1875L149.693 55.1171L151.34 55.0883L151.437 60.6451L149.94 60.6712L149.957 61.6008L154.884 61.5147L154.868 60.5852L152.572 60.6253L152.53 58.2331ZM160.106 52.0159L160.141 54.0254L158.166 54.0598L158.183 55.0509L160.159 55.0164L160.232 59.213C160.259 60.7577 161.125 61.44 162.964 61.4079C163.319 61.4017 164.221 61.3518 164.405 61.3144L164.388 60.3301C164.19 60.3541 163.445 60.3876 163.028 60.3949C161.983 60.4131 161.408 59.9856 161.394 59.1791L161.321 54.9961L164.314 54.9439L164.297 53.9528L161.29 54.0053L161.254 51.9959L160.106 52.0159ZM170.157 52.0114C170.703 52.0019 171.113 51.5845 171.104 51.0377C171.094 50.4977 170.67 50.0949 170.123 50.1045C169.576 50.114 169.167 50.5314 169.176 51.0713C169.186 51.6181 169.61 52.0209 170.157 52.0114ZM173.428 61.1911L173.411 60.2273L170.957 60.2702L170.844 53.818L167.174 53.8821L167.191 54.8458L169.713 54.8018L169.809 60.2902L167.266 60.3346L167.283 61.2983L173.428 61.1911ZM176.047 55.7305C176.065 56.783 176.74 57.4481 178.085 57.7323L179.19 57.966C180.136 58.1614 180.504 58.4695 180.514 59.0573C180.527 59.7681 179.892 60.2373 178.881 60.2549C177.924 60.2716 177.261 59.8867 177.078 59.2062L175.896 59.2268C176.048 60.4958 177.175 61.2624 178.857 61.233C180.613 61.2024 181.739 60.2939 181.715 58.9269C181.697 57.8539 181.03 57.2365 179.582 56.9336L178.532 56.7126C177.599 56.5238 177.21 56.2092 177.2 55.6419C177.189 54.9653 177.789 54.5172 178.733 54.5008C179.601 54.4856 180.229 54.8712 180.377 55.5181L181.498 55.4986C181.34 54.2638 180.281 53.5097 178.736 53.5367C177.103 53.5652 176.024 54.4455 176.047 55.7305ZM186.744 61.0885C187.824 61.0697 188.623 60.6113 188.964 59.8123L189.081 59.8102L189.1 60.9243L190.207 60.905L190.119 55.8267C190.092 54.282 189.078 53.4109 187.335 53.4413C185.818 53.4678 184.684 54.3012 184.568 55.4928L185.71 55.4729C185.89 54.8339 186.485 54.4612 187.339 54.4463C188.371 54.4282 188.948 54.931 188.964 55.8605L188.976 56.5303L186.941 56.6684C185.254 56.7867 184.324 57.5824 184.347 58.8947C184.371 60.2411 185.329 61.1132 186.744 61.0885ZM187.061 60.0643C186.125 60.0806 185.536 59.6123 185.522 58.8331C185.509 58.0608 186.048 57.607 187.086 57.541L188.991 57.4189L189.006 58.2937C189.024 59.2848 188.182 60.0447 187.061 60.0643ZM193.112 60.8475L194.274 60.8272L194.198 56.4597C194.176 55.1952 194.981 54.3266 196.204 54.3052C197.36 54.285 197.917 54.9043 197.941 56.2439L198.02 60.7618L199.181 60.7415L199.097 55.9298C199.066 54.1527 198.175 53.2042 196.562 53.2324C195.434 53.2521 194.595 53.7863 194.215 54.716L194.119 54.7176L194.097 53.4122L192.983 53.4316L193.112 60.8475ZM212.024 51.1097L212.059 53.1191L210.084 53.1536L210.101 54.1447L212.076 54.1102L212.15 58.3068C212.177 59.8515 213.043 60.5338 214.882 60.5017C215.237 60.4955 216.139 60.4455 216.323 60.4081L216.306 59.4239C216.108 59.4479 215.363 59.4814 214.946 59.4887C213.9 59.5069 213.325 59.0794 213.311 58.2729L213.238 54.0899L216.232 54.0377L216.215 53.0466L213.207 53.0991L213.172 51.0896L212.024 51.1097ZM224.075 58.3927C223.881 59.0455 223.198 59.454 222.261 59.4704C220.997 59.4924 220.175 58.6316 220.151 57.2715L220.146 56.9708L225.197 56.8826L225.185 56.1581C225.147 54.0119 223.99 52.7536 222.063 52.7873C220.176 52.8202 218.948 54.127 218.982 56.0818L219.001 57.1959C219.038 59.3078 220.242 60.5106 222.279 60.4751C223.837 60.4479 224.998 59.6004 225.203 58.373L224.075 58.3927ZM222.073 53.7853C223.269 53.7644 224.009 54.6061 224.034 56.0209L220.131 56.0891C220.106 54.6674 220.836 53.8069 222.073 53.7853ZM227.964 54.8242C227.983 55.8768 228.658 56.5419 230.003 56.8261L231.107 57.0598C232.054 57.2552 232.422 57.5633 232.432 58.1511C232.445 58.8619 231.81 59.331 230.799 59.3487C229.842 59.3654 229.179 58.9804 228.996 58.2999L227.813 58.3206C227.966 59.5896 229.093 60.3562 230.775 60.3268C232.531 60.2961 233.657 59.3877 233.633 58.0207C233.615 56.9476 232.947 56.3303 231.5 56.0274L230.45 55.8064C229.517 55.6176 229.128 55.303 229.118 54.7357C229.106 54.0591 229.707 53.611 230.65 53.5945C231.518 53.5794 232.147 53.965 232.295 54.6119L233.416 54.5923C233.258 53.3576 232.199 52.6035 230.654 52.6305C229.021 52.659 227.942 53.5393 227.964 54.8242ZM237.983 50.6566L238.018 52.666L236.043 52.7005L236.06 53.6916L238.035 53.6571L238.109 57.8537C238.136 59.3984 239.002 60.0806 240.841 60.0485C241.196 60.0423 242.098 59.9924 242.282 59.955L242.265 58.9708C242.067 58.9948 241.322 59.0283 240.905 59.0355C239.859 59.0538 239.284 58.6263 239.27 57.8198L239.197 53.6368L242.191 53.5845L242.174 52.5935L239.166 52.646L239.131 50.6365L237.983 50.6566Z"
                                fill="#FFA94D" />
                            <path
                                d="M20.6399 93.9983L20.8121 103.861L22.0219 103.84L21.9601 100.299L24.0037 100.264C25.9311 100.23 27.1738 98.9573 27.1405 97.0504C27.1071 95.1366 25.8345 93.9076 23.9207 93.941L20.6399 93.9983ZM21.8684 95.0503L23.6387 95.0194C25.074 94.9943 25.8935 95.7252 25.917 97.0717C25.9404 98.4114 25.1469 99.1704 23.7116 99.1955L21.9413 99.2264L21.8684 95.0503ZM34.9877 103.614L36.259 103.591L32.9086 93.7842L31.6236 93.8066L28.6175 103.725L29.841 103.703L30.6528 100.859L34.0839 100.799L34.9877 103.614ZM32.2572 95.245L32.2914 95.2444L33.7515 99.7723L30.9492 99.8212L32.2572 95.245ZM37.669 100.941C37.802 102.689 39.1537 103.746 41.1905 103.71C43.2546 103.674 44.5678 102.523 44.5369 100.753C44.511 99.27 43.6899 98.4502 41.7679 98.012L40.9029 97.8083C39.6123 97.5095 39.0569 97.027 39.042 96.1726C39.0245 95.1679 39.7727 94.5532 41.0371 94.5311C42.199 94.5108 42.9614 95.0992 43.1022 96.1154L44.2778 96.0949C44.1671 94.4559 42.8703 93.4052 41.0112 93.4376C39.0427 93.472 37.7972 94.5808 37.8266 96.2622C37.8515 97.6907 38.6937 98.5443 40.5336 98.9771L41.3848 99.1742C42.7233 99.479 43.3064 99.9816 43.3213 100.836C43.3398 101.895 42.4905 102.594 41.1782 102.617C39.8659 102.64 38.9865 101.999 38.8446 100.921L37.669 100.941ZM46.322 100.79C46.455 102.538 47.8067 103.595 49.8435 103.559C51.9076 103.523 53.2207 102.372 53.1898 100.602C53.1639 99.119 52.3429 98.2992 50.4209 97.861L49.5559 97.6573C48.2653 97.3585 47.7099 96.8759 47.695 96.0216C47.6775 95.0168 48.4256 94.4021 49.6901 94.38C50.852 94.3598 51.6144 94.9481 51.7552 95.9644L52.9308 95.9438C52.8201 94.3049 51.5233 93.2541 49.6642 93.2866C47.6957 93.3209 46.4502 94.4298 46.4796 96.1111C46.5045 97.5396 47.3467 98.3932 49.1865 98.826L50.0378 99.0231C51.3763 99.3279 51.9594 99.8305 51.9743 100.685C51.9928 101.744 51.1435 102.443 49.8312 102.466C48.5189 102.489 47.6394 101.848 47.4976 100.77L46.322 100.79Z"
                                fill="#161414" />
                            <path
                                d="M23.2831 142.409L28.6889 136.797L27.93 136.017L23.2555 140.83L20.8085 138.514L20.0773 139.32L23.2831 142.409ZM23.6321 162.406L29.0379 156.794L28.2791 156.014L23.6046 160.827L21.1575 158.511L20.4264 159.317L23.6321 162.406ZM23.9812 182.403L29.387 176.791L28.6281 176.011L23.9536 180.824L21.5066 178.508L20.7754 179.314L23.9812 182.403ZM76.5147 218.333L77.6424 218.313C79.0094 218.29 79.8902 219.006 79.9103 220.154C79.9297 221.268 79.1012 221.98 77.7479 222.004C76.5176 222.025 75.6308 221.357 75.5031 220.306L74.3616 220.326C74.4802 222.026 75.8531 223.124 77.801 223.09C79.7695 223.055 81.1566 221.835 81.1273 220.16C81.1038 218.814 80.3086 217.905 78.9933 217.757L78.9914 217.647C80.0462 217.369 80.6534 216.511 80.6327 215.321C80.6065 213.824 79.3304 212.787 77.567 212.818C75.7421 212.85 74.5577 213.93 74.4713 215.641L75.6264 215.621C75.7036 214.56 76.4304 213.897 77.5377 213.878C78.6518 213.859 79.4015 214.509 79.419 215.513C79.4371 216.546 78.6774 217.283 77.5701 217.303L76.497 217.322L76.5147 218.333ZM95.4366 215.036C94.3772 215.054 93.6125 215.505 93.2372 216.332L93.1142 216.334L93.0944 215.2L91.9461 215.22L92.1192 225.137L93.3016 225.116L93.2379 221.467L93.3678 221.464C93.7032 222.272 94.4972 222.716 95.5703 222.698C97.2859 222.668 98.3852 221.411 98.352 219.511L98.3279 218.13C98.2947 216.223 97.1521 215.006 95.4366 215.036ZM95.1203 216.108C96.3437 216.086 97.1382 216.948 97.162 218.315L97.1806 219.381C97.2045 220.748 96.4407 221.643 95.2173 221.664C93.9938 221.686 93.1994 220.825 93.1754 219.451L93.1568 218.384C93.1329 217.017 93.8968 216.129 95.1203 216.108ZM103.007 222.575C104.087 222.556 104.885 222.097 105.227 221.298L105.343 221.296L105.363 222.41L106.47 222.391L106.381 217.313C106.354 215.768 105.341 214.897 103.598 214.927C102.081 214.954 100.947 215.787 100.831 216.979L101.972 216.959C102.152 216.32 102.748 215.947 103.602 215.932C104.634 215.914 105.21 216.417 105.226 217.347L105.238 218.016L103.203 218.154C101.516 218.273 100.587 219.068 100.61 220.381C100.633 221.727 101.592 222.599 103.007 222.575ZM103.324 221.55C102.388 221.567 101.798 221.098 101.785 220.319C101.771 219.547 102.31 219.093 103.348 219.027L105.254 218.905L105.269 219.78C105.286 220.771 104.445 221.531 103.324 221.55ZM109.615 216.914C109.633 217.967 110.308 218.632 111.653 218.916L112.758 219.15C113.705 219.345 114.073 219.653 114.083 220.241C114.095 220.952 113.461 221.421 112.449 221.439C111.492 221.456 110.829 221.071 110.647 220.39L109.464 220.411C109.616 221.68 110.744 222.446 112.425 222.417C114.182 222.386 115.308 221.478 115.284 220.111C115.265 219.038 114.598 218.42 113.15 218.118L112.1 217.897C111.167 217.708 110.779 217.393 110.769 216.826C110.757 216.149 111.358 215.701 112.301 215.685C113.169 215.67 113.798 216.055 113.946 216.702L115.067 216.682C114.909 215.448 113.849 214.694 112.305 214.721C110.671 214.749 109.593 215.629 109.615 216.914ZM118.268 216.763C118.286 217.816 118.961 218.481 120.306 218.765L121.411 218.999C122.358 219.194 122.726 219.502 122.736 220.09C122.748 220.801 122.114 221.27 121.102 221.288C120.145 221.305 119.482 220.92 119.3 220.239L118.117 220.26C118.269 221.529 119.397 222.295 121.078 222.266C122.835 222.235 123.961 221.327 123.937 219.96C123.918 218.887 123.251 218.269 121.803 217.966L120.753 217.746C119.82 217.557 119.432 217.242 119.422 216.675C119.41 215.998 120.011 215.55 120.954 215.534C121.822 215.519 122.451 215.904 122.599 216.551L123.72 216.531C123.562 215.297 122.502 214.543 120.958 214.57C119.324 214.598 118.246 215.478 118.268 216.763ZM131.685 220.03C131.491 220.683 130.807 221.091 129.871 221.107C128.607 221.129 127.785 220.269 127.761 218.909L127.756 218.608L132.807 218.52L132.794 217.795C132.757 215.649 131.6 214.391 129.672 214.424C127.786 214.457 126.558 215.764 126.592 217.719L126.611 218.833C126.648 220.945 127.852 222.148 129.889 222.112C131.447 222.085 132.608 221.237 132.812 220.01L131.685 220.03ZM129.683 215.422C130.879 215.401 131.618 216.243 131.643 217.658L127.74 217.726C127.716 216.304 128.446 215.444 129.683 215.422ZM137.906 221.959C138.965 221.94 139.737 221.489 140.105 220.662L140.235 220.66L140.255 221.794L141.396 221.775L141.216 211.447L140.033 211.468L140.104 215.528L139.981 215.53C139.646 214.722 138.845 214.278 137.772 214.297C136.056 214.327 134.957 215.583 134.99 217.483L135.014 218.864C135.048 220.771 136.19 221.988 137.906 221.959ZM138.229 220.893C137.005 220.915 136.204 220.047 136.18 218.68L136.162 217.613C136.138 216.246 136.908 215.358 138.132 215.336C139.349 215.315 140.15 216.176 140.174 217.543L140.192 218.61C140.216 219.983 139.446 220.872 138.229 220.893Z"
                                fill="#38D9A9" />
                        </svg>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Move fast...<br />with confidence.</h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">Laravel is committed to delivering the best
                            testing experience you can imagine. No more brittle tests that are a nightmare to maintain.
                            Beautiful testing APIs, database seeding, and painless browser testing let you ship with
                            confidence.</p>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x/http-tests.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Learn More
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-5 pt-16 pb-24 md:pt-24 lg:pt-48">
        <div class="sm:max-w-xl">
            <h2 class="text-4xl font-bold md:text-5xl">Enterprise scale without the enterprise complexity.</h2>
            <p class="mt-6 text-gray-700 leading-relaxed">Our vast library of meticulously maintained packages means
                you're ready for anything. Let <a class="underline" href="docs/9.x/octane.html">Laravel Octane</a>
                supercharge your application's performance, and experience infinite scale on <a class="underline"
                    href="https://vapor.laravel.com">Laravel Vapor</a>, our serverless deployment platform powered by
                AWS Lambda.</p>
        </div>
        <ul class="mt-10 relative grid gap-6 md:grid-cols-2">
            <li>
                <a href="https://forge.laravel.com"
                    class="flex items-start pt-4 pb-6 px-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-forge flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/forge.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Forge</div>
                        <div class="mt-1 text-sm text-gray-700">Server management doesn't have to be a nightmare.
                            Provision and deploy unlimited PHP applications on DigitalOcean, Linode, Vultr, Amazon,
                            Hetzner and more.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://vapor.laravel.com"
                    class="flex items-start pt-4 pb-6 px-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-vapor flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/vapor.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Vapor</div>
                        <div class="mt-1 text-sm text-gray-700">Laravel Vapor is a serverless deployment platform for
                            Laravel, powered by AWS. Launch your Laravel infrastructure on Vapor and fall in love with
                            the scalable simplicity of serverless.</div>
                    </div>
                </a>
            </li>
        </ul>

        <ul class="mt-10 relative grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li>
                <a href="docs/9.x/starter-kits.html#laravel-breeze"
                    class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-breeze flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/breeze.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Breeze</div>
                        <div class="mt-1 text-sm text-gray-700">Lightweight starter kit scaffolding for new applications
                            with Blade or Inertia.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/billing.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-cashier flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/cashier.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Cashier</div>
                        <div class="mt-1 text-sm text-gray-700">Take the pain out of managing subscriptions on Stripe or
                            Paddle.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/dusk.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-dusk flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/dusk.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Dusk</div>
                        <div class="mt-1 text-sm text-gray-700">Automated browser testing to ship your application with
                            confidence.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/broadcasting.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-echo flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/echo.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Echo</div>
                        <div class="mt-1 text-sm text-gray-700">Listen for WebSocket events broadcast by your Laravel
                            application.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://envoyer.io" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-envoyer flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/envoyer.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Envoyer</div>
                        <div class="mt-1 text-sm text-gray-700">Deploy your Laravel applications to customers with zero
                            downtime.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/horizon.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-horizon flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/horizon.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Horizon</div>
                        <div class="mt-1 text-sm text-gray-700">Beautiful UI for monitoring your Redis driven Laravel
                            queues.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://jetstream.laravel.com" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-jetstream flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/jetstream.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Jetstream</div>
                        <div class="mt-1 text-sm text-gray-700">Robust starter kit including authentication and team
                            management.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/mix.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-mix flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/mix.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Mix</div>
                        <div class="mt-1 text-sm text-gray-700">Compile your JavaScript and CSS using Webpack with zero
                            configuration.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://nova.laravel.com/" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-nova flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/nova.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Nova</div>
                        <div class="mt-1 text-sm text-gray-700">Thoughtfully designed administration panel for your
                            Laravel applications.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/octane.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-octane flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/octane.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Octane</div>
                        <div class="mt-1 text-sm text-gray-700">Supercharge your application's performance by keeping it
                            in memory.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/sail.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-sail flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/sail.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Sail</div>
                        <div class="mt-1 text-sm text-gray-700">Hand-crafted Laravel local development experience using
                            Docker.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/sanctum.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-sanctum flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark"
                            class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Sanctum</div>
                        <div class="mt-1 text-sm text-gray-700">API and mobile application authentication without
                            wanting to pull your hair out.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/scout.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-scout flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/scout.min.svg" alt="Laravel Scout logomark" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Scout</div>
                        <div class="mt-1 text-sm text-gray-700">Lightning fast full-text search for your application's
                            Eloquent models.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/socialite.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-socialite flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/socialite.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Socialite</div>
                        <div class="mt-1 text-sm text-gray-700">Social authentication via Facebook, Twitter, GitHub,
                            LinkedIn, and more.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://spark.laravel.com" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-spark flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/spark.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Spark</div>
                        <div class="mt-1 text-sm text-gray-700">Launch your next business with our fully-featured,
                            drop-in billing portal.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/telescope.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-telescope flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/telescope.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Telescope</div>
                        <div class="mt-1 text-sm text-gray-700">Debug your application using our debugging and insight
                            UI.</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="docs/9.x/valet.html" class="flex p-4 border border-gray-200 border-opacity-60">
                    <div
                        class="relative shrink-0 bg-valet flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                        <span
                            class="absolute w-full h-full inset-0 bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                        <img src="main/img/ecosystem/valet.min.svg" alt="Icon" class="relative w-7 h-7">
                    </div>
                    <div class="ml-4 leading-5">
                        <div>Valet</div>
                        <div class="mt-1 text-sm text-gray-700">The fastest Laravel local development experience -
                            exclusively for macOS.</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="relative max-w-screen-xl mx-auto px-5 pt-16 md:pt-24 lg:pt-36 pb-24">
        <div class="absolute right-[12%] -translate-y-20 pointer-events-none">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="absolute right-0 bottom-12 pointer-events-none">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="absolute -left-6 top-24 pointer-events-none">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 1500);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <h2 class="text-4xl font-bold max-w-4xl mx-auto text-center md:text-5xl">
            Loved by thousands of developers around the world.
        </h2>
        <div class="mt-14 relative columns-1 gap-5 space-y-5 sm:columns-2 lg:columns-3">
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“I’ve been using Laravel for nearly a decade and never been tempted to switch to
                    anything else.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/adam-wathan.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Adam Wathan">
                    <div class="text-xs">
                        <cite class="not-italic">Adam Wathan</cite>
                        <p class="text-gray-700">Creator of <a href="https://tailwindcss.com/" target="_blank"
                                class="text-red-500">Tailwind CSS</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel takes the pain out of building modern, scalable web apps.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/aaron-francis.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Aaron Francis">
                    <div class="text-xs">
                        <cite class="not-italic">Aaron Francis</cite>
                        <p class="text-gray-700">Creator of <a href="https://torchlight.dev" target="_blank"
                                class="text-red-500">Torchlight</a> and <a
                                href="https://github.com/hammerstonedev/sidecar" target="_blank"
                                class="text-red-500">Sidecar</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel grew out to be an amazing innovative and active community. Laravel is so
                    much more than just a PHP framework.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/bobby-bouwmann.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Bobby Bouwmann">
                    <div class="text-xs">
                        <cite class="not-italic">Bobby Bouwmann</cite>
                        <p class="text-gray-700">Elite Developer at <a href="https://enrise.com/" target="_blank"
                                class="text-red-500">Enrise</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“As an old school PHP developer, I have tried many frameworks; none has given me the
                    development speed and enjoyment of use that I found with Laravel. It is a breath of fresh air in the
                    PHP ecosystem, with a brilliant community around it.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/erika-heidi.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Erika Heidi">
                    <div class="text-xs">
                        <cite class="not-italic">Erika Heidi</cite>
                        <p class="text-gray-700">Creator of <a href="https://github.com/minicli/minicli" target="_blank"
                                class="text-red-500">Minicli</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel is nothing short of a delight. It allows me to build any web-y thing I want
                    in record speed with joy.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/caleb-porzio.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Caleb Porzio">
                    <div class="text-xs">
                        <cite class="not-italic">Caleb Porzio</cite>
                        <p class="text-gray-700">Creator of <a href="https://laravel-livewire.com" target="_blank"
                                class="text-red-500">Livewire</a> and <a href="https://alpinejs.dev" target="_blank"
                                class="text-red-500">Alpine.js</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel and its community inspire me to be a better developer and allow me to focus
                    on the unique parts of my apps.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/jess-archer.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Jess Archer">
                    <div class="text-xs">
                        <cite class="not-italic">Jess Archer</cite>
                        <p class="text-gray-700">Full-Stack Developer</p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel’s best-in-class testing tools give me the peace of mind to ship robust apps
                    quickly.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/michael-dyrynda.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Michael Dyrynda">
                    <div class="text-xs">
                        <cite class="not-italic">Michael Dyrynda</cite>
                        <p class="text-gray-700">Laravel Artisan + Laracon AU Organizer</p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel has been like rocket fuel for my career and business.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/chris-arter.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Chris Arter">
                    <div class="text-xs">
                        <cite class="not-italic">Chris Arter</cite>
                        <p class="text-gray-700">Developer at <a href="https://www.bankrate.com" target="_blank"
                                class="text-red-500">Bankrate</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“I&#039;ve been using Laravel for over 10 years and I can&#039;t imagine using PHP
                    without it.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/eric-l-barnes.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Eric L. Barnes">
                    <div class="text-xs">
                        <cite class="not-italic">Eric L. Barnes</cite>
                        <p class="text-gray-700">Founder of <a href="https://laravel-news.com/" target="_blank"
                                class="text-red-500">Laravel News</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“I&#039;ve been enjoying Laravel&#039;s focus on pushing developer experience to the
                    next level for many years. All pieces of the ecosystem are powerful, well designed, fun to work
                    with, and have stellar documentation. The surrounding friendly and helpful community is a joy to be
                    a part of.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/freek-van-der-herten.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Freek Van der Herten">
                    <div class="text-xs">
                        <cite class="not-italic">Freek Van der Herten</cite>
                        <p class="text-gray-700">Owner of <a href="https://spatie.be" target="_blank"
                                class="text-red-500">Spatie</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel and its ecosystem of tools help me build client projects faster, more
                    secure, and higher quality than any other tools out there.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/jason-beggs.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Jason Beggs">
                    <div class="text-xs">
                        <cite class="not-italic">Jason Beggs</cite>
                        <p class="text-gray-700">Owner of <a href="https://roasted.dev" target="_blank"
                                class="text-red-500">roasted.dev</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“I didn&#039;t fully appreciate Laravel&#039;s one-stop-shop, all-encompassing
                    solution, until I tried (many) different ecosystems. Laravel is in a class of its own!“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/joseph-silber.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Joseph Silber">
                    <div class="text-xs">
                        <cite class="not-italic">Joseph Silber</cite>
                        <p class="text-gray-700">Creator of <a href="https://github.com/JosephSilber/bouncer"
                                target="_blank" class="text-red-500">Bouncer</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel has helped me launch products quicker than any other solution, allowing me
                    to get to market faster and faster as the community has evolved.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/steve-mcdougall.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Steve McDougall">
                    <div class="text-xs">
                        <cite class="not-italic">Steve McDougall</cite>
                        <p class="text-gray-700">Creator of <a
                                href="https://github.com/JustSteveKing/laravel-transporter" target="_blank"
                                class="text-red-500">Laravel Transporter</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“I&#039;ve been using Laravel for every project over the past ten years in a time
                    where a new framework launches every day. To this date, there&#039;s just nothing like it.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/philo-hermans.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Philo Hermans">
                    <div class="text-xs">
                        <cite class="not-italic">Philo Hermans</cite>
                        <p class="text-gray-700">Laravel Developer</p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel is for developers who write code because they can rather than because they
                    have to.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/luke-downing.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Luke Downing">
                    <div class="text-xs">
                        <cite class="not-italic">Luke Downing</cite>
                        <p class="text-gray-700">Maker + Developer</p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“Laravel makes building web apps exciting! It has also helped me to become a better
                    developer 🤙“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/tony-lea.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Tony Lea">
                    <div class="text-xs">
                        <cite class="not-italic">Tony Lea</cite>
                        <p class="text-gray-700">Founder of <a href="https://devdojo.com" class="text-red-500"
                                target="_blank">DevDojo</a></p>
                    </div>
                </div>
            </blockquote>
            <blockquote class="relative w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
                <h2 class="text-sm">“The Laravel ecosystem has been integral to the success of our business. The
                    framework allows us to move fast and ship regularly, and Laravel Vapor has allowed us to operate at
                    an incredible scale with ease.“</h2>
                <div class="mt-5 flex items-start gap-4">
                    <img src="main/images/testimonials/jack-ellis.jpg" class="w-10 h-10 object-cover object-center"
                        alt="Jack Ellis">
                    <div class="text-xs">
                        <cite class="not-italic">Jack Ellis</cite>
                        <p class="text-gray-700">Co-founder of <a href="https://usefathom.com" class="text-red-500"
                                target="_blank">Fathom Analytics</a></p>
                    </div>
                </div>
            </blockquote>
        </div>
    </div>

    <div class="relative">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex left-[-20%] -top-24 w-[640px] h-[640px]"></span>
        <div class="relative max-w-screen-xl mx-auto grid gap-12 px-5 pt-16 md:pt-24 pb-24 lg:grid-cols-2 lg:pt-16">
            <div class="flex items-center justify-center lg:justify-start">
                <div class="sm:max-w-xl">
                    <h2 class="text-4xl font-bold md:text-5xl">A community built for people like you.</h2>
                    <p class="mt-6 text-gray-700 leading-relaxed">Laravel is for everyone — whether you have been
                        programming for 20 years or 20 minutes. It's for architecture astronauts and weekend hackers.
                        For those with degrees and for those who dropped out to chase their dreams. Together, we create
                        amazing things.</p>
                    <div class="mt-10 grid grid-cols-2 gap-10 md:grid-cols-3">
                        <a href="https://blog.laravel.com" target="_blank" class="inline-flex items-center">
                            <svg class="text-red-600 w-8 h-8" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                                <path
                                    d="M10 9c7.18 0 13 5.82 13 13m-13-7a7 7 0 0 1 7 7m-6 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ml-3 text-sm">Blog</span>
                        </a>
                        <a href="https://laracasts.com/discuss" target="_blank" class="inline-flex items-center">
                            <svg class="text-red-600 w-8 h-8" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                                <path
                                    d="M11 12h10-10Zm0 4h4-4Zm5 8-4-4H9a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3l-4 4Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ml-3 text-sm">Forums</span>
                        </a>
                        <a href="https://larajobs.com" target="_blank" class="inline-flex items-center">
                            <svg class="text-red-600 w-8 h-8" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                                <path
                                    d="M25 17.255A23.93 23.93 0 0 1 16 19c-3.183 0-6.22-.62-9-1.745M16 16h.01M20 10V8a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2h8ZM9 24h14a2 2 0 0 0 2-2V12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ml-3 text-sm">Jobs</span>
                        </a>
                        <a href="https://laravel-news.com" target="_blank" class="inline-flex items-center">
                            <svg class="text-red-600 w-8 h-8" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                                <path
                                    d="M23 24H9a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1m2 13a2 2 0 0 1-2-2V11m2 13a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2h-2m-4-3h-4m-2 12h6m-6-8h6v4h-6v-4Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ml-3 text-sm">Laravel News</span>
                        </a>
                        <a href="https://laracasts.com" target="_blank" class="inline-flex items-center">
                            <svg class="text-red-600 w-8 h-8" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                                <path
                                    d="m18.752 15.168-3.197-2.132A1 1 0 0 0 14 13.87v4.263a1 1 0 0 0 1.555.832l3.197-2.132a.998.998 0 0 0 0-1.664v-.001Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25 16a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ml-3 text-sm">Laracasts</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end">
                <div
                    class="max-w-sm w-full pt-8 pb-12 px-6 border border-gray-200 -rotate-1 lg:px-12 lg:border-red-600">
                    <img src="main/images/laracon.png" class="max-w-[218px] w-full mx-auto" />
                    <h3 class="mt-8 font-bold text-red-700 uppercase text-xs">Watch us on YouTube</h3>
                    <h2 class="mt-3 font-bold text-4xl">Tune In</h2>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">The official Laravel YouTube channel includes
                        free videos and tutorials covering the entire Laravel ecosystem. Stay up to date by watching our
                        latest videos.</p>
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-8"
                        href="https://youtube.com/laravelphp">
                        <span
                            class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Start Watching
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden">
        <div class="absolute top-[45%] -left-2 pointer-events-none sm:left-[12%] lg:top-2/3 lg:left-[12%] xl:top-3/4">
            <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 1500);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" />
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" />
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
            </svg>
        </div>
        <div class="max-w-screen-xl mx-auto grid gap-6 px-5 pt-16 md:pt-24 pb-24 lg:grid-cols-2 lg:pt-48 lg:pb-64">
            <div class="relative flex items-center justify-center">
                <div class="absolute right-8 top-0 -translate-y-12 pointer-events-none">
                    <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600" width="46" height="53"
                        viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" />
                        <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                            stroke-linejoin="bevel" />
                        <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z" />
                        <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor"
                            stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z" />
                    </svg>
                </div>
                <img class="relative max-w-[480px] w-full lg:rotate-1" src="main/images/partners.png" />
            </div>
            <div class="relative flex justify-center lg:justify-end">
                <div class="sm:max-w-md">
                    <h2 class="mt-8 font-bold text-4xl">Hire a partner for your next project</h2>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Laravel Partners are elite shops providing
                        top-notch Laravel development and consulting. Each of our partners can help you craft a
                        beautiful, well-architected project.</p>
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-8"
                        href="https://partners.laravel.com">
                        <span
                            class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Browse Partners
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="relative pt-12 ">
        <div class="max-w-screen-2xl mx-auto w-full px-5">
            <div>
                <a href="index.html" class="inline-flex">
                    <img class="w-16 h-16" src="main/img/logomark.min.svg" alt="Laravel" loading="lazy">
                </a>
            </div>

            <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
                <div class="col-span-12 lg:col-span-4">
                    <p class="max-w-sm text-xs text-gray-700 sm:text-sm ">Laravel is a web application framework with
                        expressive, elegant syntax. We believe development must be an enjoyable and creative experience
                        to be truly fulfilling. Laravel attempts to take the pain out of development by easing common
                        tasks used in most web projects.</p>
                    <ul class="mt-6 flex items-center space-x-3">
                        <li>
                            <a href="https://twitter.com/laravelphp">
                                <img id="footer__twitter_dark" class="hidden w-6 h-6"
                                    src="main/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20"
                                    loading="lazy">
                                <img id="footer__twitter" class="inline-block w-6 h-6" src="main/img/social/twitter.min.svg"
                                    alt="Twitter" width="24" height="20" loading="lazy">
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/laravel">
                                <img id="footer__github_dark" class="hidden w-6 h-6"
                                    src="main/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24"
                                    loading="lazy">
                                <img id="footer__github" class="inline-block w-6 h-6" src="main/img/social/github.min.svg"
                                    alt="GitHub" width="24" height="24" loading="lazy">
                            </a>
                        </li>
                        <li>
                            <a href="https://discord.gg/mPZNm7A">
                                <img id="footer__discord_dark" class="hidden w-6 h-6"
                                    src="main/img/social/discord.dark.min.svg" alt="Discord" width="21" height="24"
                                    loading="lazy">
                                <img id="footer__discord" class="inline-block w-6 h-6" src="main/img/social/discord.min.svg"
                                    alt="Discord" width="21" height="24" loading="lazy">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/laravelphp">
                                <img id="footer__youtube_dark" class="hidden w-6 h-6"
                                    src="main/img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150"
                                    loading="lazy">
                                <img id="footer__youtube" class="inline-block w-6 h-6" src="main/img/social/youtube.min.svg"
                                    alt="YouTube" width="169" height="150" loading="lazy">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Highlights</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="team.html" class="transition-colors hover:text-gray-600 ">Our Team</a>
                            </li>
                            <li>
                                <a href="docs/9.x/releases.html" class="transition-colors hover:text-gray-600 ">Release
                                    Notes</a>
                            </li>
                            <li>
                                <a href="docs/9.x/installation.html"
                                    class="transition-colors hover:text-gray-600 ">Getting Started</a>
                            </li>
                            <li>
                                <a href="docs/9.x/routing.html"
                                    class="transition-colors hover:text-gray-600 ">Routing</a>
                            </li>
                            <li>
                                <a href="docs/9.x/blade.html" class="transition-colors hover:text-gray-600 ">Blade
                                    Templates</a>
                            </li>
                            <li>
                                <a href="docs/9.x/authentication.html"
                                    class="transition-colors hover:text-gray-600 ">Authentication</a>
                            </li>
                            <li>
                                <a href="docs/9.x/authorization.html"
                                    class="transition-colors hover:text-gray-600 ">Authorization</a>
                            </li>
                            <li>
                                <a href="docs/9.x/artisan.html" class="transition-colors hover:text-gray-600 ">Artisan
                                    Console</a>
                            </li>
                            <li>
                                <a href="docs/9.x/database.html"
                                    class="transition-colors hover:text-gray-600 ">Database</a>
                            </li>
                            <li>
                                <a href="docs/9.x/eloquent.html" class="transition-colors hover:text-gray-600 ">Eloquent
                                    ORM</a>
                            </li>
                            <li>
                                <a href="docs/9.x/testing.html"
                                    class="transition-colors hover:text-gray-600 ">Testing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Resources</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="https://laracasts.com"
                                    class="transition-colors hover:text-gray-600 ">Laracasts</a>
                            </li>
                            <li>
                                <a href="https://laravel-news.com"
                                    class="transition-colors hover:text-gray-600 ">Laravel News</a>
                            </li>
                            <li>
                                <a href="https://laracon.us" class="transition-colors hover:text-gray-600 ">Laracon</a>
                            </li>
                            <li>
                                <a href="https://laracon.eu/" class="transition-colors hover:text-gray-600 ">Laracon
                                    EU</a>
                            </li>
                            <li>
                                <a href="https://larajobs.com" class="transition-colors hover:text-gray-600 ">Jobs</a>
                            </li>
                            <li>
                                <a href="https://certification.laravel.com/"
                                    class="transition-colors hover:text-gray-600 ">Certification</a>
                            </li>
                            <li>
                                <a href="https://laracasts.com/discuss"
                                    class="transition-colors hover:text-gray-600 ">Forums</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Partners</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="https://vehikl.com" class="transition-colors hover:text-gray-600 ">Vehikl</a>
                            </li>
                            <li>
                                <a href="https://tighten.co" class="transition-colors hover:text-gray-600 ">Tighten</a>
                            </li>
                            <li>
                                <a href="https://64robots.com/" class="transition-colors hover:text-gray-600 ">64
                                    Robots</a>
                            </li>
                            <li>
                                <a href="https://kirschbaumdevelopment.com/"
                                    class="transition-colors hover:text-gray-600 ">Kirschbaum</a>
                            </li>
                            <li>
                                <a href="https://www.curotec.com/services/technologies/laravel/"
                                    class="transition-colors hover:text-gray-600 ">Curotec</a>
                            </li>
                            <li>
                                <a href="https://jump24.co.uk/"
                                    class="transition-colors hover:text-gray-600 ">Jump24</a>
                            </li>
                            <li>
                                <a href="https://www.a2design.biz/" class="transition-colors hover:text-gray-600 ">A2
                                    Design</a>
                            </li>
                            <li>
                                <a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&utm_medium=socialgroups&utm_campaign=tech"
                                    class="transition-colors hover:text-gray-600 ">ABOUT YOU</a>
                            </li>
                            <li>
                                <a href="https://www.byte5.net/" class="transition-colors hover:text-gray-600 ">Byte
                                    5</a>
                            </li>
                            <li>
                                <a href="https://cubettech.com/"
                                    class="transition-colors hover:text-gray-600 ">Cubet</a>
                            </li>
                            <li>
                                <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship"
                                    class="transition-colors hover:text-gray-600 ">Cyber-Duck</a>
                            </li>
                            <li>
                                <a href="https://devsquad.com/"
                                    class="transition-colors hover:text-gray-600 ">DevSquad</a>
                            </li>
                            <li>
                                <a href="https://www.ideil.com/"
                                    class="transition-colors hover:text-gray-600 ">Ideil</a>
                            </li>
                            <li>
                                <a href="https://romegadigital.com/"
                                    class="transition-colors hover:text-gray-600 ">Romega Software</a>
                            </li>
                            <li>
                                <a href="https://www.worksome.com/"
                                    class="transition-colors hover:text-gray-600 ">Worksome</a>
                            </li>
                            <li>
                                <a href="https://webreinvent.com/?utm_source=laravel&utm_medium=laravel.com&utm_campaign=patreon-sponsors"
                                    class="transition-colors hover:text-gray-600 ">WebReinvent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Ecosystem</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="docs/9.x/billing.html"
                                    class="transition-colors hover:text-gray-600 ">Cashier</a>
                            </li>
                            <li>
                                <a href="docs/9.x/dusk.html" class="transition-colors hover:text-gray-600 ">Dusk</a>
                            </li>
                            <li>
                                <a href="docs/9.x/broadcasting.html"
                                    class="transition-colors hover:text-gray-600 ">Echo</a>
                            </li>
                            <li>
                                <a href="https://envoyer.io" class="transition-colors hover:text-gray-600 ">Envoyer</a>
                            </li>
                            <li>
                                <a href="https://forge.laravel.com"
                                    class="transition-colors hover:text-gray-600 ">Forge</a>
                            </li>
                            <li>
                                <a href="docs/9.x/homestead.html"
                                    class="transition-colors hover:text-gray-600 ">Homestead</a>
                            </li>
                            <li>
                                <a href="docs/9.x/horizon.html"
                                    class="transition-colors hover:text-gray-600 ">Horizon</a>
                            </li>
                            <li>
                                <a href="docs/9.x/mix.html" class="transition-colors hover:text-gray-600 ">Mix</a>
                            </li>
                            <li>
                                <a href="https://nova.laravel.com"
                                    class="transition-colors hover:text-gray-600 ">Nova</a>
                            </li>
                            <li>
                                <a href="docs/9.x/passport.html"
                                    class="transition-colors hover:text-gray-600 ">Passport</a>
                            </li>
                            <li>
                                <a href="docs/9.x/scout.html" class="transition-colors hover:text-gray-600 ">Scout</a>
                            </li>
                            <li>
                                <a href="docs/9.x/socialite.html"
                                    class="transition-colors hover:text-gray-600 ">Socialite</a>
                            </li>
                            <li>
                                <a href="https://spark.laravel.com"
                                    class="transition-colors hover:text-gray-600 ">Spark</a>
                            </li>
                            <li>
                                <a href="docs/9.x/telescope.html"
                                    class="transition-colors hover:text-gray-600 ">Telescope</a>
                            </li>
                            <li>
                                <a href="docs/9.x/valet.html" class="transition-colors hover:text-gray-600 ">Valet</a>
                            </li>
                            <li>
                                <a href="https://vapor.laravel.com"
                                    class="transition-colors hover:text-gray-600 ">Vapor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10 border-t pt-6 pb-16 border-gray-200 ">
                <p class="text-xs text-gray-700 ">
                    Laravel is a Trademark of Taylor Otwell. Copyright &copy; 2011-2022 Laravel LLC.
                </p>
                <p class="mt-6 text-xs text-gray-700 ">
                    Code highlighting provided by <a href="https://torchlight.dev">Torchlight</a>
                </p>
            </div>
        </div>
    </footer>

    <div x-data="searchComponent()" @toggle-search-modal.window="open = !open" @keydown.window.escape="close"
        @keydown.window="handleKeydown" @keydown.escape.prevent.stop="close" x-show="open" x-cloak
        x-trap.noscroll.inert="open" role="dialog" aria-modal="true" x-id="['search-modal']"
        :aria-labelledby="$id('search-modal')" class="fixed inset-0 z-50 text-gray-400 overflow-y-auto">
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-dark-900 bg-opacity-80"></div>

        <div x-show="open" x-transition @click="close()"
            class="relative min-h-screen flex items-start justify-center p-4 lg:py-20">
            <div @click.stop class="relative max-w-2xl w-full bg-dark-700 pt-8 px-8 pb-16">
                <div
                    class="relative w-full border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 focus-within:border-gray-600">
                    <svg class="absolute inset-y-0 left-0 mt-1 w-5 h-5 text-gray-500 pointer-events-none" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input x-model.debouce.200ms="search" x-ref="searchInput"
                        class="flex-1 w-full pl-8 pr-4 py-1 tracking-wide text-gray-400 placeholder-gray-500 bg-transparent focus:outline-none"
                        placeholder="Search Docs (Press '/')" aria-label="Search in the documentation"
                        @keydown.arrow-up.prevent="focusPreviousResult()"
                        @keydown.arrow-down.prevent="focusNextResult()">
                </div>

                <div x-show="search">
                    <div x-show="hits.length" x-cloak class="mt-5 divide-y divide-gray-700 z-30">
                        <template x-for="(hit, index) in hits" :key="index" hidden>
                            <div>
                                <a :id="'search-result-' + index" :href="hit.url"
                                    class="search-result -mx-2 block p-3 text-gray-400 transition-colors duration-200 focus:outline-none focus:bg-dark-800 focus:text-gray-200 hover:text-gray-200"
                                    @keydown.arrow-up.prevent="focusPreviousResult(index)"
                                    @keydown.arrow-down.prevent="focusNextResult(index)">
                                    <div x-show="hit._highlightResult.hierarchy.lvl0" class="text-sm font-medium"
                                        x-html="hit._highlightResult.hierarchy.lvl0 ? hit._highlightResult.hierarchy.lvl0.value : ''">
                                    </div>
                                    <div class="mt-2">
                                        <div x-show="hit._highlightResult.hierarchy.lvl1" class="text-sm">
                                            <span class="text-red-600 opacity-75">#</span> <span
                                                x-html="hit._highlightResult.hierarchy.lvl1 ? hit._highlightResult.hierarchy.lvl1.value : ''"></span>
                                        </div>

                                        <div x-show="hit._highlightResult.hierarchy.lvl2" class="text-sm">
                                            > <span
                                                x-html="hit._highlightResult.hierarchy.lvl2 ? hit._highlightResult.hierarchy.lvl2.value : ''"></span>
                                        </div>

                                        <div x-show="hit._highlightResult.hierarchy.lvl3" class="text-sm">
                                            > <span
                                                x-html="hit._highlightResult.hierarchy.lvl3 ? hit._highlightResult.hierarchy.lvl3.value : ''"></span>
                                        </div>

                                        <div x-show="hit._highlightResult.hierarchy.lvl4" class="text-sm">
                                            > <span
                                                x-html="hit._highlightResult.hierarchy.lvl4 ? hit._highlightResult.hierarchy.lvl4.value : ''"></span>
                                        </div>

                                        <div x-show="hit._highlightResult.hierarchy.lvl5" class="text-sm">
                                            > <span
                                                x-html="hit._highlightResult.hierarchy.lvl5 ? hit._highlightResult.hierarchy.lvl5.value : ''"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </template>
                    </div>

                    <div x-show="! hits.length" x-cloak class="mt-8 pb-32">
                        <div x-text="`We didn't find any result for '${search}'. Sorry!`"></div>
                    </div>
                </div>

                <div x-show="! search" class="mt-8 pb-32">
                    <p>Enter a search term to find results in the documentation.</p>
                </div>

                <div class="absolute bottom-0 inset-x-0 border-t border-dark-800 text-gray-400 flex justify-end">
                    <a class="px-4 py-2 inline-block" target="_blank"
                        href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                        <img width="105" src="main/img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark"
                            alt="Algolia">
                    </a>
                </div>
            </div>

            <button x-show="open" x-transition.opacity class="absolute top-8 right-8 text-gray-400"
                @click.prevent="close">
                <span class="sr-only">Close search</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- <script>
        var algolia_app_id = 'E3MIRNPJH5';
        var algolia_search_key = '1fa3a8fec06eb1858d6ca137211225c0';
        var version = '9.x';
    </script> -->

    <script src="main/js/app-id=100f797fd909ecd1c2f2.js"></script>

    
</body>

</html>