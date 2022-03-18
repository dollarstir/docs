<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    
    <!-- Primary Meta Tags -->
    <meta name="title" content="Laravel - The PHP Framework For Web Artisans">
    <meta name="description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://laravel.com/">
    <meta property="og:title" content="Laravel - The PHP Framework For Web Artisans">
    <meta property="og:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
    <meta property="og:image" content="https://laravel.com/img/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://laravel.com/">
    <meta property="twitter:title" content="Laravel - The PHP Framework For Web Artisans">
    <meta property="twitter:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
    <meta property="twitter:image" content="https://laravel.com/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
    <link rel="stylesheet" type="text/css" href="css/app-id=b59affd817f095c5db73.css">

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
<body
    x-data="{
        navIsOpen: false,
        searchIsOpen: false,
        search: '',
    }"
    class="language-php h-full w-full font-sans text-gray-900 antialiased"
>

    <header
    x-trap.inert.noscroll="navIsOpen"
    class="relative z-50 text-gray-700"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <div class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
        <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
            <div class="flex-1">
                <a href="index.html" class="inline-flex items-center">
                    <img class="w-12" src="img/logomark.min.svg" alt="Laravel" width="50" height="52">
                    <img class="ml-5 sm:block" src="img/logotype.min.svg" alt="Laravel" width="114" height="29">
                </a>
            </div>
            <ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10">
                <li><a href="https://forge.laravel.com">Forge</a></li>
                <li><a href="https://vapor.laravel.com">Vapor</a></li>
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center" @click="expanded = !expanded">
                        Ecosystem
                        <span class="ml-3 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-28 z-20 transition transform -translate-x-1/2"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div
                            class="mt-4 w-224 p-8 bg-white shadow-lg transform transition-transform origin-top"
                            @click.away="expanded = false"
                        >
                            <ul class="grid gap-6 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="docs/9.x/starter-kits.html#laravel-breeze" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-breeze flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/breeze.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Breeze</div>
                                            <span class="text-gray-700 text-xs">Lightweight starter kit scaffolding for new applications with Blade or Inertia.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/billing.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-cashier flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/cashier.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Cashier</div>
                                            <span class="text-gray-700 text-xs">Take the pain out of managing subscriptions on Stripe or Paddle.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/dusk.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-dusk flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/dusk.min.svg" alt="Icon" class="w-7 h-7" width="45" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Dusk</div>
                                            <span class="text-gray-700 text-xs">Automated browser testing to ship your application with confidence.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/broadcasting.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-echo flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/echo.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Echo</div>
                                            <span class="text-gray-700 text-xs">Listen for WebSocket events broadcast by your Laravel application.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-envoyer flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/envoyer.min.svg" alt="Icon" class="w-7 h-7" width="41" height="50">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Envoyer</div>
                                            <span class="text-gray-700 text-xs">Deploy your Laravel applications to customers with zero downtime.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-forge flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/forge.min.svg" alt="Icon" class="w-7 h-7" width="41" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Forge</div>
                                            <span class="text-gray-700 text-xs">Server management doesn't have to be a nightmare.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/horizon.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-horizon flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/horizon.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Horizon</div>
                                            <span class="text-gray-700 text-xs">Beautiful UI for monitoring your Redis driven Laravel queues.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-jetstream flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/jetstream.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Jetstream</div>
                                            <span class="text-gray-700 text-xs">Robust starter kit including authentication and team management.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/mix.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-mix flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/mix.min.svg" alt="Icon" class="w-7 h-7" width="48" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Mix</div>
                                            <span class="text-gray-700 text-xs">Compile your JavaScript and CSS using Webpack with zero configuration.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-nova flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/nova.min.svg" alt="Icon" class="w-7 h-7" width="39" height="40">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Nova</div>
                                            <span class="text-gray-700 text-xs">Thoughtfully designed administration panel for your Laravel applications.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/octane.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-octane flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/octane.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Octane</div>
                                            <span class="text-gray-700 text-xs">Supercharge your application's performance by keeping it in memory.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/sail.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-sail flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/sail.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sail</div>
                                        <span class="text-xs text-g7ay-600">Hand-crafted Laravel local development experience using Docker.</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/sanctum.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-sanctum flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sanctum</div>
                                            <span class="text-xs te7t-gray-600">API and mobile application authentication without wanting to pull your hair out.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/scout.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-scout flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/scout.min.svg" alt="Icon" class="w-7 h-7" width="36" height="36">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Scout</div>
                                            <span class="text-gray-700 text-xs">Lightning fast full-text search for your application's Eloquent models.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/socialite.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-socialite flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/socialite.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Socialite</div>
                                            <span class="text-gray-700 text-xs">Social authentication via Facebook, Twitter, GitHub, LinkedIn, and more.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-spark flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/spark.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Spark</div>
                                            <span class="text-gray-700 text-xs">Launch your next business with our fully-featured, drop-in billing portal.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/telescope.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-telescope flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/telescope.min.svg" alt="Icon" class="w-7 h-7" width="42" height="43">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Telescope</div>
                                            <span class="text-gray-700 text-xs">Debug your application using our debugging and insight UI.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/9.x/valet.html" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-valet flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/valet.min.svg" alt="Icon" class="w-7 h-7" width="40" height="26">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Valet</div>
                                            <span class="text-gray-700 text-xs">The fastest Laravel local development experience - exclusively for macOS.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-vapor flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="img/ecosystem/vapor.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Vapor</div>
                                            <span class="text-gray-700 text-xs">Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS.</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="https://laravel-news.com">News</a></li>
                <li><a href="https://partners.laravel.com">Partners</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <button @click.prevent="$dispatch('toggle-search-modal')">
                    <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <a class="group relative inline-flex border border-red-600 focus:outline-none hidden lg:ml-4 lg:inline-flex" href="docs/9.x.html">
    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
        Documentation
    </span>
</a>
                <button
                    class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden"
                    aria-label="Toggle Menu"
                    @click.prevent="navIsOpen = !navIsOpen"
                >
                    <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2"/><line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2"/></svg>
                    <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)" fill="currentColor"/><rect width="2" height="24" transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)" fill="currentColor"/></svg>
                </button>
            </div>
        </div>
    </div>
    <div
        x-show="navIsOpen"
        class="lg:hidden"
        x-transition:enter="duration-150"
        x-transition:leave="duration-100 ease-in"
        x-cloak
    >
        <nav
            x-show="navIsOpen"
            x-transition.opacity
            x-cloak
            class="fixed inset-0 w-full pt-[4.2rem] z-10 pointer-events-none"
        >
            <div class="relative h-full w-full py-8 px-5 bg-white pointer-events-auto overflow-y-auto">
                <ul>
                    <li><a class="block w-full py-2" href="https://forge.laravel.com">Forge</a></li>
                    <li><a class="block w-full py-2" href="https://vapor.laravel.com">Vapor</a></li>
                    <li><a class="block w-full py-3" href="https://laravel-news.com">News</a></li>
                    <li><a class="block w-full py-3" href="https://partners.laravel.com">Partners</a></li>
                    <li class="flex sm:justify-center"><a class="group relative inline-flex border border-red-600 focus:outline-none mt-3 w-full max-w-md" href="docs/9.x.html">
    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
        Documentation
    </span>
</a>
</li>
                </ul>
            </div>
        </nav>
    </div>
</header>

    <div class="relative overflow-hidden">
        <div class="hidden absolute right-[20%] top-12 pointer-events-nonesm:block ">
            
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 pt-32 space-y-8 md:space-y-0 md:flex md:items-end">
            <div class="md:flex-1">
                <h1 class="max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:max-w-4xl md:text-5xl md:leading-tight xl:text-6xl">The Laravel Team</h1>
                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Laravel is a team of passionate developers from all around the world. We love building tools that make your life as a developer enjoyable, fun, and fulfilling. Follow us on Twitter and GitHub to keep up with what we're working on!</p>
            </div>
        </div>

        <div class="relative max-w-screen-xl mx-auto px-5 py-12">
            <ul class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/taylorotwell" alt="Taylor Otwell">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">Taylor Otwell</h3>
                            <p class="text-gray-600">Arkansas, United States</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/taylorotwell" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/taylorotwell" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/themsaid" alt="Mohamed Said">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">Mohamed Said</h3>
                            <p class="text-gray-600">Cairo, Egypt</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/themsaid" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/themsaid" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/driesvints" alt="Dries Vints">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">Dries Vints</h3>
                            <p class="text-gray-600">Antwerp, Belgium</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/driesvints" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/driesvints" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/jbrooksuk" alt="James Brooks">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">James Brooks</h3>
                            <p class="text-gray-600">Staffordshire, United Kingdom</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/jbrooksuk" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/jbrooksuk" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/nunomaduro" alt="Nuno Maduro">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">Nuno Maduro</h3>
                            <p class="text-gray-600">Leiria, Portugal</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/enunomaduro" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/nunomaduro" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
                                <li>
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" loading="lazy" width="400" height="400" src="https://unavatar.vercel.app/github/crynobone" alt="Mior Muhammad Zaki Mior Khairuddin">
                        </div>
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <h3 class="text-red-600">Mior Muhammad Zaki Mior Khairuddin</h3>
                            <p class="text-gray-600">Selangor, Malaysia</p>
                        </div>

                        <ul class="flex space-x-5">
                                                        <li>
                                <a href="https://twitter.com/crynobone" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://github.com/crynobone" target="_blank" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </li>
                                                    </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<footer class="relative pt-12 ">
    <div class="max-w-screen-2xl mx-auto w-full px-5">
        <div>
            <a href="index.html" class="inline-flex">
                <img class="w-16 h-16" src="img/logomark.min.svg" alt="Laravel" loading="lazy">
            </a>
        </div>

        <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
            <div class="col-span-12 lg:col-span-4">
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm ">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                <ul class="mt-6 flex items-center space-x-3">
                    <li>
                        <a href="https://twitter.com/laravelphp">
                            <img id="footer__twitter_dark" class="hidden w-6 h-6" src="img/social/twitter.dark.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                            <img id="footer__twitter" class="inline-block w-6 h-6" src="img/social/twitter.min.svg" alt="Twitter" width="24" height="20" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github_dark" class="hidden w-6 h-6" src="img/social/github.dark.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                            <img id="footer__github" class="inline-block w-6 h-6" src="img/social/github.min.svg" alt="GitHub" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://discord.gg/mPZNm7A">
                            <img id="footer__discord_dark" class="hidden w-6 h-6" src="img/social/discord.dark.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                            <img id="footer__discord" class="inline-block w-6 h-6" src="img/social/discord.min.svg" alt="Discord" width="21" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/laravelphp">
                            <img id="footer__youtube_dark" class="hidden w-6 h-6" src="img/social/youtube.dark.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
                            <img id="footer__youtube" class="inline-block w-6 h-6" src="img/social/youtube.min.svg" alt="YouTube" width="169" height="150" loading="lazy">
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
                                    <a href="docs/9.x/releases.html" class="transition-colors hover:text-gray-600 ">Release Notes</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/installation.html" class="transition-colors hover:text-gray-600 ">Getting Started</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/routing.html" class="transition-colors hover:text-gray-600 ">Routing</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/blade.html" class="transition-colors hover:text-gray-600 ">Blade Templates</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/authentication.html" class="transition-colors hover:text-gray-600 ">Authentication</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/authorization.html" class="transition-colors hover:text-gray-600 ">Authorization</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/artisan.html" class="transition-colors hover:text-gray-600 ">Artisan Console</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/database.html" class="transition-colors hover:text-gray-600 ">Database</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/eloquent.html" class="transition-colors hover:text-gray-600 ">Eloquent ORM</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/testing.html" class="transition-colors hover:text-gray-600 ">Testing</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Resources</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                                                            <li>
                                    <a href="https://laracasts.com" class="transition-colors hover:text-gray-600 ">Laracasts</a>
                                </li>
                                                            <li>
                                    <a href="https://laravel-news.com" class="transition-colors hover:text-gray-600 ">Laravel News</a>
                                </li>
                                                            <li>
                                    <a href="https://laracon.us" class="transition-colors hover:text-gray-600 ">Laracon</a>
                                </li>
                                                            <li>
                                    <a href="https://laracon.eu/" class="transition-colors hover:text-gray-600 ">Laracon EU</a>
                                </li>
                                                            <li>
                                    <a href="https://larajobs.com" class="transition-colors hover:text-gray-600 ">Jobs</a>
                                </li>
                                                            <li>
                                    <a href="https://certification.laravel.com/" class="transition-colors hover:text-gray-600 ">Certification</a>
                                </li>
                                                            <li>
                                    <a href="https://laracasts.com/discuss" class="transition-colors hover:text-gray-600 ">Forums</a>
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
                                    <a href="https://64robots.com/" class="transition-colors hover:text-gray-600 ">64 Robots</a>
                                </li>
                                                            <li>
                                    <a href="https://kirschbaumdevelopment.com/" class="transition-colors hover:text-gray-600 ">Kirschbaum</a>
                                </li>
                                                            <li>
                                    <a href="https://www.curotec.com/services/technologies/laravel/" class="transition-colors hover:text-gray-600 ">Curotec</a>
                                </li>
                                                            <li>
                                    <a href="https://jump24.co.uk/" class="transition-colors hover:text-gray-600 ">Jump24</a>
                                </li>
                                                            <li>
                                    <a href="https://www.a2design.biz/" class="transition-colors hover:text-gray-600 ">A2 Design</a>
                                </li>
                                                            <li>
                                    <a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&utm_medium=socialgroups&utm_campaign=tech" class="transition-colors hover:text-gray-600 ">ABOUT YOU</a>
                                </li>
                                                            <li>
                                    <a href="https://www.byte5.net/" class="transition-colors hover:text-gray-600 ">Byte 5</a>
                                </li>
                                                            <li>
                                    <a href="https://cubettech.com/" class="transition-colors hover:text-gray-600 ">Cubet</a>
                                </li>
                                                            <li>
                                    <a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship" class="transition-colors hover:text-gray-600 ">Cyber-Duck</a>
                                </li>
                                                            <li>
                                    <a href="https://devsquad.com/" class="transition-colors hover:text-gray-600 ">DevSquad</a>
                                </li>
                                                            <li>
                                    <a href="https://www.ideil.com/" class="transition-colors hover:text-gray-600 ">Ideil</a>
                                </li>
                                                            <li>
                                    <a href="https://romegadigital.com/" class="transition-colors hover:text-gray-600 ">Romega Software</a>
                                </li>
                                                            <li>
                                    <a href="https://www.worksome.com/" class="transition-colors hover:text-gray-600 ">Worksome</a>
                                </li>
                                                            <li>
                                    <a href="https://webreinvent.com/?utm_source=laravel&utm_medium=laravel.com&utm_campaign=patreon-sponsors" class="transition-colors hover:text-gray-600 ">WebReinvent</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Ecosystem</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                                                            <li>
                                    <a href="docs/9.x/billing.html" class="transition-colors hover:text-gray-600 ">Cashier</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/dusk.html" class="transition-colors hover:text-gray-600 ">Dusk</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/broadcasting.html" class="transition-colors hover:text-gray-600 ">Echo</a>
                                </li>
                                                            <li>
                                    <a href="https://envoyer.io" class="transition-colors hover:text-gray-600 ">Envoyer</a>
                                </li>
                                                            <li>
                                    <a href="https://forge.laravel.com" class="transition-colors hover:text-gray-600 ">Forge</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/homestead.html" class="transition-colors hover:text-gray-600 ">Homestead</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/horizon.html" class="transition-colors hover:text-gray-600 ">Horizon</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/mix.html" class="transition-colors hover:text-gray-600 ">Mix</a>
                                </li>
                                                            <li>
                                    <a href="https://nova.laravel.com" class="transition-colors hover:text-gray-600 ">Nova</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/passport.html" class="transition-colors hover:text-gray-600 ">Passport</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/scout.html" class="transition-colors hover:text-gray-600 ">Scout</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/socialite.html" class="transition-colors hover:text-gray-600 ">Socialite</a>
                                </li>
                                                            <li>
                                    <a href="https://spark.laravel.com" class="transition-colors hover:text-gray-600 ">Spark</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/telescope.html" class="transition-colors hover:text-gray-600 ">Telescope</a>
                                </li>
                                                            <li>
                                    <a href="docs/9.x/valet.html" class="transition-colors hover:text-gray-600 ">Valet</a>
                                </li>
                                                            <li>
                                    <a href="https://vapor.laravel.com" class="transition-colors hover:text-gray-600 ">Vapor</a>
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

<div
    x-data="searchComponent()"
    @toggle-search-modal.window="open = !open"
    @keydown.window.escape="close"
    @keydown.window="handleKeydown"
    @keydown.escape.prevent.stop="close"
    x-show="open"
    x-cloak
    x-trap.noscroll.inert="open"
    role="dialog"
    aria-modal="true"
    x-id="['search-modal']"
    :aria-labelledby="$id('search-modal')"
    class="fixed inset-0 z-50 text-gray-400 overflow-y-auto"
>
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-dark-900 bg-opacity-80"></div>

    <div
        x-show="open"
        x-transition
        @click="close()"
        class="relative min-h-screen flex items-start justify-center p-4 lg:py-20"
    >
        <div
            @click.stop
            class="relative max-w-2xl w-full bg-dark-700 pt-8 px-8 pb-16"
        >
            <div
                class="relative w-full border-b border-gray-600 border-opacity-50 overflow-hidden transition-all duration-500 focus-within:border-gray-600"
            >
                <svg class="absolute inset-y-0 left-0 mt-1 w-5 h-5 text-gray-500 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <input
                    x-model.debouce.200ms="search"
                    x-ref="searchInput"
                    class="flex-1 w-full pl-8 pr-4 py-1 tracking-wide text-gray-400 placeholder-gray-500 bg-transparent focus:outline-none"
                    placeholder="Search Docs (Press '/')"
                    aria-label="Search in the documentation"
                    @keydown.arrow-up.prevent="focusPreviousResult()"
                    @keydown.arrow-down.prevent="focusNextResult()"
                >
            </div>

            <div x-show="search">
                <div x-show="hits.length" x-cloak class="mt-5 divide-y divide-gray-700 z-30">
                    <template x-for="(hit, index) in hits" :key="index" hidden>
                        <div>
                            <a
                                :id="'search-result-' + index"
                                :href="hit.url"
                                class="search-result -mx-2 block p-3 text-gray-400 transition-colors duration-200 focus:outline-none focus:bg-dark-800 focus:text-gray-200 hover:text-gray-200"
                                @keydown.arrow-up.prevent="focusPreviousResult(index)"
                                @keydown.arrow-down.prevent="focusNextResult(index)"
                            >
                                <div x-show="hit._highlightResult.hierarchy.lvl0" class="text-sm font-medium" x-html="hit._highlightResult.hierarchy.lvl0 ? hit._highlightResult.hierarchy.lvl0.value : ''"></div>
                                <div class="mt-2">
                                    <div x-show="hit._highlightResult.hierarchy.lvl1" class="text-sm">
                                        <span class="text-red-600 opacity-75">#</span> <span x-html="hit._highlightResult.hierarchy.lvl1 ? hit._highlightResult.hierarchy.lvl1.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl2" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl2 ? hit._highlightResult.hierarchy.lvl2.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl3" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl3 ? hit._highlightResult.hierarchy.lvl3.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl4" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl4 ? hit._highlightResult.hierarchy.lvl4.value : ''"></span>
                                    </div>

                                    <div x-show="hit._highlightResult.hierarchy.lvl5" class="text-sm">
                                        > <span x-html="hit._highlightResult.hierarchy.lvl5 ? hit._highlightResult.hierarchy.lvl5.value : ''"></span>
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
                <a class="px-4 py-2 inline-block" target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
                    <img width="105" src="img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
                </a>
            </div>
        </div>

        <button x-show="open" x-transition.opacity class="absolute top-8 right-8 text-gray-400" @click.prevent="close">
            <span class="sr-only">Close search</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<script>
    var algolia_app_id = 'E3MIRNPJH5';
    var algolia_search_key = '1fa3a8fec06eb1858d6ca137211225c0';
    var version = '9.x';
</script>

<script src="js/app-id=100f797fd909ecd1c2f2.js"></script>

<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>
</body>
</html>