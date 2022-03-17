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
    <script src="main/js/particle.js"></script>
    <script src="main/js/tsparticles.min.js"></script>
<script src="main/js/custom-elements-es5-adapter.js"></script>
<script src="main/js/webcomponents-loader.js"></script>
<script type="module" src="main/js/web-particles.min.js"></script>

    
</body>

</html>