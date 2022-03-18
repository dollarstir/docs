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
    <link rel="stylesheet" href="main/css/particle.css">

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
                        <!-- <button @click.prevent="$dispatch('toggle-search-modal')">
                            <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button> -->
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
                            <!-- <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2" />
                                <line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2" />
                                
                            </svg> -->
                            <?php echo image::solidsvg('grip','40px','40px','w-6','','x-show="!navIsOpen" viewBox="0 0 28 12" fill="none"'); ?>
                            <?php echo image::solidsvg('x','40px','40px','absolute inset-0 mt-2.5 ml-2.5 w-5','','x-show="navIsOpen" x-cloak viewBox="0 0 19 19" fill="none"'); ?>
                            
                            <!-- <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5"
                                viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)"
                                    fill="currentColor" />
                                <rect width="2" height="24"
                                    transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)"
                                    fill="currentColor" />
                            </svg> -->
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
    <web-particles id="tsparticles" options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":true,"mode":"push"},"onHover":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff"},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.4,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'></web-particles>
        <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
        
            <!-- <span
                class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex left-[-20%] -top-24 w-[640px] h-[640px]"></span> -->
            <div class="relative max-w-screen-xl px-5 mx-auto">
                
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
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-white text-center font-bold uppercase bg-red-500 ring-1  ring-offset-1 ring-offset-red-500 transform transition-transform">
                                Get Started
                            </span>
                        </a>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none w-full sm:w-auto"
                            href="https://laracasts.com" target="_blank">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Watch Tutorial
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="relative overflow-hidden py-16 md:pt-48">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex right-[-20%] top-0 w-[640px] h-[640px]"></span>
        <div class="max-w-screen-xl w-full mx-auto px-5">
            <center><h2 class="text-4xl font-bold max-w-lg md:text-5xl">We get what you are looking for</h2></center>
            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <!-- <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#F9322C" d="M.5.5h31v31H.5z" />
                        <path
                            d="M8 11v10c0 2.21 3.582 4 8 4s8-1.79 8-4V11M8 11c0 2.21 3.582 4 8 4s8-1.79 8-4M8 11c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"
                            stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> -->
                    <h3 class="mt-5 text-xl font-bold">Backend Bot</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">The Yolk <strong><a href="docs/9.x/eloquent.html">backend bot</a></strong> provides  in-built database queries which helps to send, fetch, delete and update records in database tables without any stress<a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x/http-tests.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Learn More
                            </span>
                        </a>
                    </p>
                </div>
                <div>
                    <!-- <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="currentColor" d="M.5.5h31v31H.5z" />
                        <path
                            d="M23 15H9m14 0a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2m14 0v-2a2 2 0 0 0-2-2M9 15v-2a2 2 0 0 1 2-2m10 0V9a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v2m10 0H11"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> -->
                    <h3 class="mt-5 text-xl font-bold">Yolk UI</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Yolk  has it own tags call the <storng>yolk Ui elements. Note with the yolk ui you code everything in php no html tags involved . It takes uses any type of css </storng>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x/http-tests.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Learn More
                            </span>
                        </a>
                    </p>
                </div>
                <div>
                   
                    <h3 class="mt-5 text-xl font-bold">Plugins</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">
                            Yolk has made it possible for anyone to create plugins which can be paid or free. This plugin can be a template made with Yolk Ui, E-cormerce website made with yolk framework,encryption system. 
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x/http-tests.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Learn More
                            </span>
                        </a>
                    </p>
                </div>
                <div>
                    <!-- <svg class="w-8 h-8 text-red-500" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#F9322C" d="M.5.5h31v31H.5z" />
                        <path
                            d="M19 11a2 2 0 0 1 2 2l-2-2Zm6 2a6 6 0 0 1-7.743 5.743L15 21h-2v2h-2v2H8a1 1 0 0 1-1-1v-2.586a1 1 0 0 1 .293-.707l5.964-5.964A6 6 0 1 1 25 13v0Z"
                            stroke="#F9322C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> -->
                    <h3 class="mt-5 text-xl font-bold">Integrations</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">
                        Yolk comes with Mobile money apis which can helps accept payment on websites, Bulk sms and Bulk Email system . We partnered with <a class="underline" href="http://paystack.com" target="blank">Paystack</a>, <a class="underline" href="http://uvitech.com" target="blank">Uvitech</a>, <a class="underline" href="http://mnotify.com" target="blank">Mnotify</a>, <a class="underline" href="http://flutterwave.com" target="blank">Flutterwave</a> etc.
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
                            href="docs/9.x/http-tests.html">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Learn More
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden py-16 md:pt-24 lg:pt-64">
        
       
        <div class="relative max-w-screen-xl w-full mx-auto xl:px-5">
            <div class="relative w-full grid gap-12 lg:grid-cols-2">
                <div class="overflow-hidden flex justify-center lg:order-last">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <img width="587" height="342" viewBox="0 0 587 342"  src="yolkassets/img/shot.png" style="border-radius:10px;"/>
                            
                        
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Flexible Route</h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">Our routing system is easy to use and boost search engine optimization.we provide custom get request </p>
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


    <div class="relative overflow-hidden py-16 md:pt-24 lg:pt-64">
        
       
        <div class="relative max-w-screen-xl w-full mx-auto xl:px-5">
            <div class="relative w-full grid gap-12 lg:grid-cols-2">
                <div class="overflow-hidden flex justify-center lg:order-last">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <img width="587" height="342" viewBox="0 0 587 342"  src="yolkassets/img/shot.png" style="border-radius:10px;"/>
                            
                        
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Widget Based  Ui</h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">Our routing system is easy to use and boost search engine optimization.we provide custom get request </p>
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


    <div class="relative overflow-hidden py-16 md:pt-48">
        <span
            class="hidden absolute bg-radial-gradient opacity-[.15] pointer-events-none lg:inline-flex right-[-20%] top-0 w-[640px] h-[640px]"></span>
        <div class="max-w-screen-xl w-full mx-auto px-5">
            <center><h2 class="text-4xl font-bold max-w-lg md:text-5xl">Our Partners</h2></center>
            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <!-- <img src="yolkassets/img/uvitech.png" style="width:90%"/> -->
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="150.000000pt" height="50.000000pt" viewBox="0 0 150.000000 50.000000" preserveAspectRatio="xMidYMid meet">
<metadata>

</metadata>
<g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M416 365 c39 -116 7 -208 -89 -254 -50 -24 -83 -26 -123 -8 -91 39 -128 92 -128 184 0 35 -3 58 -8 51 -4 -7 -8 -42 -8 -77 0 -55 4 -71 32 -114 34 -53 106 -97 161 -97 54 0 126 40 160 89 28 41 31 54 31 116 1 50 -5 79 -17 100 -10 17 -15 21 -11 10z"/>
<path d="M214 354 c-37 -18 -54 -64 -42 -110 11 -43 40 -66 85 -66 76 0 112 97 58 156 -13 14 -28 26 -34 26 -5 0 -15 2 -23 5 -7 2 -27 -2 -44 -11z m83 -36 c13 -12 23 -33 23 -47 0 -32 -37 -71 -67 -71 -56 0 -84 80 -41 120 28 26 56 25 85 -2z"/>
<path d="M238 313 c6 -2 18 -2 25 0 6 3 1 5 -13 5 -14 0 -19 -2 -12 -5z"/>
<path d="M207 303 c-14 -14 -6 -61 13 -78 11 -10 23 -16 26 -13 10 11 -8 58 -23 58 -10 0 -14 7 -10 20 5 21 4 24 -6 13z"/>
<path d="M296 272 c-4 -13 -5 -26 -2 -29 10 -11 18 4 14 29 l-4 23 -8 -23z"/>
<path d="M520 282 c0 -26 5 -53 12 -60 15 -15 51 -15 66 0 14 14 16 108 2 108 -5 0 -10 -15 -10 -34 0 -43 -9 -66 -25 -66 -16 0 -25 23 -25 66 0 19 -4 34 -10 34 -5 0 -10 -22 -10 -48z"/>
<path d="M679 273 c24 -80 43 -81 69 -4 17 50 18 61 6 61 -8 0 -18 -19 -26 -47 l-11 -47 -14 47 c-8 26 -20 47 -27 47 -11 0 -11 -11 3 -57z"/>
<path d="M820 270 c0 -33 4 -60 10 -60 6 0 10 27 10 60 0 33 -4 60 -10 60 -6 0 -10 -27 -10 -60z"/>
<path d="M895 319 c-4 -6 2 -13 14 -16 17 -4 21 -13 21 -49 0 -24 5 -44 10 -44 6 0 10 20 10 45 0 33 4 45 15 45 8 0 15 7 15 15 0 18 -75 22 -85 4z"/>
<path d="M1037 293 c-11 -80 -10 -83 34 -83 21 0 39 5 39 10 0 6 -11 10 -25 10 -16 0 -25 6 -25 15 0 8 9 15 20 15 11 0 20 5 20 10 0 6 -9 10 -20 10 -11 0 -20 6 -20 13 0 8 10 13 21 13 12 -1 24 5 26 12 3 8 -7 12 -30 12 -33 0 -36 -2 -40 -37z"/>
<path d="M1182 314 c-26 -18 -30 -65 -6 -88 17 -18 74 -22 74 -6 0 6 -11 10 -25 10 -27 0 -48 30 -39 55 4 9 19 19 35 22 16 3 26 9 23 14 -8 14 -37 11 -62 -7z"/>
<path d="M1300 270 c0 -47 3 -60 15 -60 9 0 15 9 15 25 0 18 5 25 20 25 15 0 20 -7 20 -25 0 -16 6 -25 15 -25 12 0 15 13 15 60 0 47 -3 60 -15 60 -9 0 -15 -9 -15 -25 0 -18 -5 -25 -20 -25 -15 0 -20 7 -20 25 0 16 -6 25 -15 25 -12 0 -15 -13 -15 -60z"/>
<path d="M550 145 c0 -6 7 -12 15 -12 8 0 15 6 15 12 0 6 -7 12 -15 12 -8 0 -15 -6 -15 -12z"/>
<path d="M590 145 c0 -8 2 -15 4 -15 2 0 6 7 10 15 3 8 1 15 -4 15 -6 0 -10 -7 -10 -15z"/>
<path d="M616 143 c-6 -14 -5 -15 5 -6 7 7 10 15 7 18 -3 3 -9 -2 -12 -12z"/>
<path d="M640 144 c0 -8 5 -12 10 -9 6 3 10 10 10 16 0 5 -4 9 -10 9 -5 0 -10 -7 -10 -16z"/>
<path d="M670 151 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0 -10 -4 -10 -9z"/>
<path d="M700 151 c0 -6 4 -12 8 -15 5 -3 9 1 9 9 0 8 -4 15 -9 15 -4 0 -8 -4 -8 -9z"/>
<path d="M730 145 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0 -10 -7 -10 -15z"/>
<path d="M761 144 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M830 151 c0 -6 4 -13 10 -16 6 -3 7 1 4 9 -7 18 -14 21 -14 7z"/>
<path d="M880 150 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z"/>
<path d="M911 144 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M942 146 c7 -8 15 -10 16 -5 2 6 11 4 20 -3 14 -10 15 -10 5 2 -7 7 -22 15 -33 17 -17 2 -19 1 -8 -11z"/>
<path d="M1047 144 c5 -13 7 -13 14 -2 7 10 9 11 9 0 0 -7 5 -10 10 -7 18 11 10 25 -15 25 -18 0 -23 -4 -18 -16z"/>
<path d="M1106 153 c-3 -3 -6 -11 -6 -17 0 -6 5 -4 10 4 6 9 13 11 18 5 11 -15 32 -17 32 -2 0 13 -42 21 -54 10z"/>
<path d="M1181 143 c-17 -19 16 -18 35 1 12 13 12 15 -4 13 -10 0 -24 -7 -31 -14z"/>
<path d="M1241 144 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M1286 143 c12 -12 16 -12 28 0 12 12 10 14 -14 14 -24 0 -26 -2 -14 -14z"/>
<path d="M1341 144 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/>
<path d="M1360 150 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z"/>
<path d="M1390 151 c0 -6 4 -13 10 -16 6 -3 7 1 4 9 -7 18 -14 21 -14 7z"/>
</g>
</svg>
                    
                </div>
                <div>
                <img src="yolkassets/img/paystack.png"  style="background-color:black;"/ >
                    
                </div>
                <div>
                <img src="yolkassets/img/mnotify.png" style="height:65px;width:80%;background-color:black"/>
              
                    
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1013.12 241.26"><rect fill="#2a3362" x="328.78" y="82.1" width="16.11" height="82.89"></rect> <path fill="#2a3362" d="M407.24,135.58c0,11.44-7.36,16.58-17.16,16.58s-16.35-5.14-16.35-16V106.62H357.62V139.9c0,16.57,10.39,26.26,27.67,26.26,10.86,0,16.93-4,21-8.52h.94l1.4,7.36h14.82V106.62H407.24Z"></path> <path fill="#2a3362" d="M565.27,153.44c-11.79,0-18.44-5.37-19.49-13.19h51.13a33.78,33.78,0,0,0,.35-4.91c-.11-21-16-29.89-33-29.89-19.73,0-34.56,11.8-34.56,30.83,0,18.09,14.25,29.88,35.61,29.88,17.87,0,29.77-7.93,32.23-20.08H581.62C579.63,150.87,573.91,153.44,565.27,153.44Zm-1-35.26c10.28,0,16.23,4.55,17.17,11H546.13C547.64,123,553.6,118.18,564.22,118.18Z"></path> <path fill="#2a3362" d="M624.63,115h-1l-1.52-8.41H607.47V165h16.11V139.9c0-11.33,6.53-17.63,18.68-17.63a32.5,32.5,0,0,1,6.58.58V106.62h-2.25C635.85,106.62,629.18,108.84,624.63,115Z"></path> <polygon fill="#2a3362" points="727.94 146.78 727.01 146.78 713.23 110.24 696.65 110.24 683.11 146.67 682.06 146.67 669.22 106.62 653.22 106.62 672.95 165 690.47 165 704.48 127.75 705.41 127.75 719.19 165 736.82 165 756.55 106.62 740.55 106.62 727.94 146.78"></polygon> <path fill="#2a3362" d="M820.67,148V128.46c0-15.88-13.43-23-30.13-23-17.74,0-28.83,8.41-30.35,21H776.3c1.17-5.49,5.84-8.52,14.24-8.52s14,3.15,14,9.57V129l-26.27,2c-12.14.94-21,6.31-21,17.75,0,11.79,10.16,17.39,25.1,17.39,12.06,0,19.41-3.36,23.91-8.43h.8c2.53,5.7,7.66,7.27,13.24,7.27h6.77V153.09h-1.52C822.18,153.09,820.67,151.46,820.67,148Zm-16.12-6.19c0,9.23-11,12.26-20.43,12.26-6.42,0-10.62-1.63-10.62-6.07,0-4,3.62-5.95,9-6.42l22.06-1.63Z"></path> <polygon fill="#2a3362" points="880.23 106.62 861.43 148.89 860.38 148.89 841.35 106.62 823.95 106.62 851.15 165 870.42 165 897.5 106.62 880.23 106.62"></polygon> <path fill="#2a3362" d="M949,146.08c-2,4.79-7.71,7.36-16.35,7.36-11.79,0-18.44-5.37-19.49-13.19h51.13a33.78,33.78,0,0,0,.35-4.91c-.11-21-16-29.89-33-29.89-19.73,0-34.55,11.8-34.55,30.83,0,18.09,14.24,29.88,35.6,29.88,17.87,0,29.77-7.93,32.23-20.08Zm-17.4-27.9c10.28,0,16.23,4.55,17.17,11H913.47C915,123,920.94,118.18,931.56,118.18Z"></path> <path fill="#2a3362" d="M302.6,102.32c0-5.14,3.62-7.35,8.29-7.35a24.17,24.17,0,0,1,6.42.93L320,84.22a36.71,36.71,0,0,0-12.14-2.1c-11.91,0-21.48,6.31-21.48,19.38v5.12h-13.9v12.79h13.9V165H302.6v-45.6h18.16V106.62H302.6Z"></path> <path fill="#2a3362" d="M459,90.16H444l-.84,16.46H430.48v12.79h12.38v28.78c0,9.8,5,18,20,18a52.84,52.84,0,0,0,11.56-1.28V152.62a34.29,34.29,0,0,1-6.66.82c-8.05,0-8.75-4.55-8.75-8.06v-26h16V106.62H459Z"></path> <path fill="#2a3362" d="M509.59,90.16H494.64l-.84,16.46H481.09v12.79h12.38v28.78c0,9.8,5,18,20,18A52.84,52.84,0,0,0,525,164.88V152.62a34.29,34.29,0,0,1-6.66.82c-8.05,0-8.75-4.55-8.75-8.06v-26h16.05V106.62H509.59Z"></path> <path fill="#009a46" d="M48.23,79.89c0-9.37,2.74-17.37,8.49-23.12l10,10C55.59,77.86,65.31,112.34,97,144.06s66.19,41.43,77.31,30.32l10,10c-18.76,18.76-61.49,5.45-97.26-30.33C62.24,129.23,48.23,101.07,48.23,79.89Z"></path> <path fill="#ff5805" d="M111.29,193c-9.37,0-17.37-2.74-23.13-8.49l10-10c11.11,11.11,45.59,1.39,77.31-30.32S216.89,78,205.78,66.89l10-10c18.77,18.76,5.45,61.49-30.33,97.26C160.63,179,132.47,193,111.29,193Z"></path> <path fill="#f5afcb" d="M188.76,139.84c-6.07-17.48-18.47-36.16-34.92-52.6-35.77-35.78-78.5-49.1-97.26-30.33h0c-1.33,1.34-.18,4.65,2.58,7.41s6.07,3.9,7.4,2.57c11.12-11.11,45.6-1.39,77.31,30.33,15,15,26.18,31.75,31.57,47.25,4.72,13.59,4.26,24.55-1.24,30.05h0c-1.34,1.33-.18,4.65,2.57,7.4s6.07,3.91,7.41,2.57C193.79,174.88,195.42,159,188.76,139.84Z"></path> <path fill="#ff9b00" d="M215.76,56.91c-9.63-9.63-25.49-11.26-44.67-4.59-17.47,6.06-36.16,18.47-52.6,34.91C82.72,123,69.4,165.73,88.16,184.5h0c1.34,1.33,4.65.18,7.41-2.57s3.91-6.07,2.57-7.41C87,163.41,96.75,128.93,128.47,97.21c15-15,31.75-26.18,47.25-31.57,13.59-4.71,24.55-4.26,30.06,1.24h0c1.33,1.33,4.65.18,7.4-2.58S217.09,58.24,215.76,56.91Z"></path></svg>
                </div>
            </div>
        </div>
    </div>

   


    
    <div class="relative overflow-hidden">
        <div class="hidden absolute right-[20%] top-12 pointer-events-nonesm:block ">
            
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 pt-32 space-y-8 md:space-y-0 md:flex md:items-end">
            <div class="md:flex-1">
                <h1 class="max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:max-w-4xl md:text-5xl md:leading-tight xl:text-6xl text-center">Our Team Members</h1>
                <!-- <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Yolk was built by this amazing people</p> -->
            </div>
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 py-12">
            <ul class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" style="height:350px;" src="yolkassets/img/ceo.jpg" alt="Frederick Ennin">
                        </div>
                        <ul class="flex space-x-5">
                            <li>
                                <a href="https://github.com/dollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <?php echo Image::brandsvg('github'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/iamdollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>
                                    <?php echo Image::brandsvg('twitter'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://facebook.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Facebook</span>
                                    <?php echo Image::brandsvg('facebook'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://linkedin.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('linkedin'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://slack.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('slack'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://youtube.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Youtube</span>
                                    <?php echo Image::brandsvg('youtube'); ?>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="text-lg leading-6 font-medium space-y-1 text-center">
                            <h3 class="text-red-600">Frederick Ennin</h3>
                            <p class="text-gray-600"> <em>Creator & CEO</em></p>
                            <p class="text-gray-600">Accra, Ghana</p>
                        </div>

                        
                    </div>
                </li>
                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" style="height:350px;" src="yolkassets/img/josh.jpg" alt="Joshua Tetteh">
                        </div>
                        <ul class="flex space-x-5">
                            <li>
                                <a href="https://github.com/dollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <?php echo Image::brandsvg('github'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/iamdollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>
                                    <?php echo Image::brandsvg('twitter'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://facebook.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Facebook</span>
                                    <?php echo Image::brandsvg('facebook'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://linkedin.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('linkedin'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://slack.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('slack'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://youtube.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Youtube</span>
                                    <?php echo Image::brandsvg('youtube'); ?>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="text-lg leading-6 font-medium space-y-1 text-center">
                            <h3 class="text-red-600">Joshua Tetteh</h3>
                            <p class="text-gray-600"> <em>Contributor</em></p>
                            <p class="text-gray-600">Accra, Ghana</p>
                        </div>

                        
                    </div>
                </li>


                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" style="height:350px;" src="yolkassets/img/obery.jpg" alt="Richard Obiri">
                        </div>
                        <ul class="flex space-x-5">
                            <li>
                                <a href="https://github.com/dollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <?php echo Image::brandsvg('github'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/iamdollarstir" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>
                                    <?php echo Image::brandsvg('twitter'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://facebook.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Facebook</span>
                                    <?php echo Image::brandsvg('facebook'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://linkedin.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('linkedin'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://slack.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Linkedin</span>
                                    <?php echo Image::brandsvg('slack'); ?>
                                </a>
                            </li>

                            <li>
                                <a href="https://youtube.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Youtube</span>
                                    <?php echo Image::brandsvg('youtube'); ?>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="text-lg leading-6 font-medium space-y-1 text-center">
                            <h3 class="text-red-600">Richard Obiri</h3>
                            <p class="text-gray-600"> <em>Contributor</em></p>
                            <p class="text-gray-600">Accra, Ghana</p>
                        </div>

                        
                    </div>
                </li>
                
                
            </ul>
        </div>
    </div>
    

    <!-- <div class="max-w-screen-xl mx-auto px-5 pt-16 pb-24 md:pt-24 lg:pt-48">
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
    </div> -->

    <!-- <div class="relative max-w-screen-xl mx-auto px-5 pt-16 md:pt-24 lg:pt-36 pb-24">
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
    </div> -->

    <!-- <div class="relative">
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
    </div> -->

    <!-- <div class="relative overflow-hidden">
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
    </div> -->
    <web-particles id="tsparticles1" options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":true,"mode":"push"},"onHover":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff"},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.4,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'></web-particles>
    <footer class="relative pt-12 ">
        <div class="max-w-screen-2xl mx-auto w-full px-5">
            <div>
                <a href="index.html" class="inline-flex">
                    <img class="w-40 h-40" src="yolkassets/img/logo1.png" alt="Yolk" loading="lazy" style="width:100%;height:200px;">
                </a>
            </div>

            <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
                <div class="col-span-12 lg:col-span-4">
                    <p class="max-w-sm text-xs text-gray-700 sm:text-sm ">Yolk is a PHP framework that helps to easily build web applications. Comes with in-built sql queries and has custom UI.</p>
                    <ul class="mt-6 flex items-center space-x-3">
                    <li>
                            <a href="https://github.com/yolk-framwork">
                                <img id="footer__github_dark" class="hidden w-6 h-6"
                                    src="main/img/social/github.dark.min.svg" alt="GitHub" width="24" height="24"
                                    loading="lazy">
                                <img id="footer__github" class="inline-block w-6 h-6" src="main/img/social/github.min.svg"
                                    alt="GitHub" width="24" height="24" loading="lazy">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/phpyolk">
                                <img id="footer__twitter_dark" class="hidden w-6 h-6"
                                    src="main/img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20"
                                    loading="lazy">
                                <img id="footer__twitter" class="inline-block w-6 h-6" src="main/img/social/twitter.min.svg"
                                    alt="Twitter" width="24" height="20" loading="lazy">
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://facebook.com/phpyolk">
                                <!-- <img id="footer__discord_dark" class="hidden w-6 h-6"
                                    src="main/img/social/facebook.dark.min.svg" alt="facebook" width="21" height="24"
                                    loading="lazy"> -->
                                    <?php echo Image::brandsvg('facebook','20px','20px','hidden w-6 h-6','footer__discord_dark');?>
                                <!-- <img id="footer__discord" class="inline-block w-6 h-6" src="main/img/social/facebook.min.svg"
                                    alt="facebook" width="21" height="24" loading="lazy"> -->
                                    <?php echo Image::brandsvg('facebook','20px','20px','inline-block w-6 h-6','footer__discord');?>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/yolkframework">
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
                    <span class="uppercase ">Quick Links</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="community" class="transition-colors hover:text-gray-600 ">Our Community</a>
                            </li>
                            <li>
                                <a href="release" class="transition-colors hover:text-gray-600 ">Release
                                    Notes</a>
                            </li>
                            <li>
                                <a href="gettingstarted"
                                    class="transition-colors hover:text-gray-600 ">Getting Started</a>
                            </li>
                            <li>
                                <a href="docs/9.x/routing.html"
                                    class="transition-colors hover:text-gray-600 ">Routing</a>
                            </li>
                           
                            <li>
                                <a href="docs/9.x/authentication.html"
                                    class="transition-colors hover:text-gray-600 ">Authentication</a>
                            </li>
                            <li>
                                <a href="docs/9.x/authorization.html"
                                    class="transition-colors hover:text-gray-600 ">Sessions</a>
                            </li>
                            
                            <li>
                                <a href="backend"
                                    class="transition-colors hover:text-gray-600 ">Backend Bolt</a>
                            </li>
                            
                            <li>
                                <a href="docs/9.x/testing.html"
                                    class="transition-colors hover:text-gray-600 ">Yolk UI</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
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
                </div> -->
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Partners</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="https://uvitechgh.com" class="transition-colors hover:text-gray-600 ">Uvitech</a>
                            </li>
                            <li>
                                <a href="https://paystack.com" class="transition-colors hover:text-gray-600 ">Paystack</a>
                            </li>
                            <li>
                                <a href="https://flutterwave.com.com/" class="transition-colors hover:text-gray-600 ">Flutterwave
                                    </a>
                            </li>
                            <li>
                                <a href="https://mnotify.com/"
                                    class="transition-colors hover:text-gray-600 ">Mnotify</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Plugins</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <!-- <li>
                                <a href="docs/9.x/billing.html"
                                    class="transition-colors hover:text-gray-600 ">Cashier</a>
                            </li> -->
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10 border-t pt-6 pb-16 border-gray-200 ">
                <p class="text-xs text-gray-700 ">
                     Copyright &copy; <?php echo date('Y');?>  PHP Yolk framework LLC.
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

   
    <script src="main/js/app-id=100f797fd909ecd1c2f2.js"></script>
    <script src="main/js/particle.js"></script>
    <script src="main/js/tsparticles.min.js"></script>
<script src="main/js/custom-elements-es5-adapter.js"></script>
<script src="main/js/webcomponents-loader.js"></script>
<script type="module" src="main/js/web-particles.min.js"></script>

    
</body>

</html>