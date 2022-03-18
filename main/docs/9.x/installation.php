<!DOCTYPE html>
<html lang="en">

<head>
    <?php head('installation');?>

    <script>

    toLightMode()
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

    <a
    id="skip-to-content-link"
    href="installation#main-content"
    class="absolute bg-gray-100 px-4 py-2 top-3 left-3 text-gray-700 shadow-xl"
>
    Skip to content
</a>
    <div class="relative overflow-auto dark:bg-dark-700" id="docsScreen">
        <div class="relative lg:flex lg:items-start">
            <aside
                x-data="{
                    navIsOpen: false,
                    init() {
                        this.$watch('navIsOpen', (val) => {
                            if (val) {
                                document.body.classList.add('overflow-hidden');
                            } else {
                                document.body.classList.remove('overflow-hidden');
                            }
                        });
                    }
                }"
                class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700"
                :class="{ 'w-64': navIsOpen }"
                @click.away="navIsOpen = false"
                @keydown.window.escape="navIsOpen = false"
            >
                <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                    <a href="home" class="flex items-center py-8 px-4 lg:px-8 xl:px-16">
                        <img
                            class="w-8 h-8 shrink-0 transition-all duration-300 lg:w-12 lg:h-12"
                            :class="{ 'w-12 h-12': navIsOpen }"
                            src="yolkassets/img/logo.png"
                            alt="Yolk Framework"
                            width="50"
                            height="52"
                        >
                        <img
                            x-show="navIsOpen"
                            x-cloak
                            class="ml-4 transition-all duration-300 lg:hidden"
                            x-transition:enter="duration-250 ease-out"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-250 ease-in"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            src="yolkassets/img/logo.png"
                            alt="Yolk Framework"
                            width="114"
                            height="29"
                        >
                        <img
                            src="yolkassets/img/logo.png"
                            alt="Yol Framework"
                            class="hidden ml-4 lg:block"
                            width="114"
                            height="29"
                        >
                    </a>
                    <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                        <nav x-show="navIsOpen" x-cloak class="mt-4 lg:hidden">
                            <div class="docs_sidebar">
                                <ul>
<li>
<h2>Prologue</h2>
<ul>
<li>
<a href="releases">Release Notes</a>
</li>
<li>
<a href="upgrade">Upgrade Guide</a>
</li>
<li>
<a href="contributions">Contribution Guide</a>
</li>
</ul>
</li>
<li>
<h2>Getting Started</h2>
<ul>
<li>
<a href="installation">Installation</a>
</li>
<li>
<a href="configuration">Configuration</a>
</li>
<li>
<a href="structure">Directory Structure</a>
</li>
<li>
<a href="starter-kits">Starter Kits</a>
</li>
<li>
<a href="deployment">Deployment</a>
</li>
</ul>
</li>
<li>
<h2>Architecture Concepts</h2>
<ul>
<li>
<a href="lifecycle">Request Lifecycle</a>
</li>
<li>
<a href="container">Service Container</a>
</li>
<li>
<a href="providers">Service Providers</a>
</li>
<li>
<a href="facades">Facades</a>
</li>
</ul>
</li>
<li>
<h2>The Basics</h2>
<ul>
<li>
<a href="routing">Routing</a>
</li>
<li>
<a href="middleware">Middleware</a>
</li>
<li>
<a href="csrf">CSRF Protection</a>
</li>
<li>
<a href="controllers">Controllers</a>
</li>
<li>
<a href="requests">Requests</a>
</li>
<li>
<a href="responses">Responses</a>
</li>
<li>
<a href="views">Views</a>
</li>
<li>
<a href="blade">Blade Templates</a>
</li>
<li>
<a href="urls">URL Generation</a>
</li>
<li>
<a href="session">Session</a>
</li>
<li>
<a href="validation">Validation</a>
</li>
<li>
<a href="errors">Error Handling</a>
</li>
<li>
<a href="logging">Logging</a>
</li>
</ul>
</li>
<li>
<h2>Digging Deeper</h2>
<ul>
<li>
<a href="artisan">Artisan Console</a>
</li>
<li>
<a href="broadcasting">Broadcasting</a>
</li>
<li>
<a href="cache">Cache</a>
</li>
<li>
<a href="collections">Collections</a>
</li>
<li>
<a href="mix">Compiling Assets</a>
</li>
<li>
<a href="contracts">Contracts</a>
</li>
<li>
<a href="events">Events</a>
</li>
<li>
<a href="filesystem">File Storage</a>
</li>
<li>
<a href="helpers">Helpers</a>
</li>
<li>
<a href="http-client">HTTP Client</a>
</li>
<li>
<a href="localization">Localization</a>
</li>
<li>
<a href="mail">Mail</a>
</li>
<li>
<a href="notifications">Notifications</a>
</li>
<li>
<a href="packages">Package Development</a>
</li>
<li>
<a href="queues">Queues</a>
</li>
<li>
<a href="rate-limiting">Rate Limiting</a>
</li>
<li>
<a href="scheduling">Task Scheduling</a>
</li>
</ul>
</li>
<li>
<h2>Security</h2>
<ul>
<li>
<a href="authentication">Authentication</a>
</li>
<li>
<a href="authorization">Authorization</a>
</li>
<li>
<a href="verification">Email Verification</a>
</li>
<li>
<a href="encryption">Encryption</a>
</li>
<li>
<a href="hashing">Hashing</a>
</li>
<li>
<a href="passwords">Password Reset</a>
</li>
</ul>
</li>
<li>
<h2>Database</h2>
<ul>
<li>
<a href="database">Getting Started</a>
</li>
<li>
<a href="queries">Query Builder</a>
</li>
<li>
<a href="pagination">Pagination</a>
</li>
<li>
<a href="migrations">Migrations</a>
</li>
<li>
<a href="seeding">Seeding</a>
</li>
<li>
<a href="redis">Redis</a>
</li>
</ul>
</li>
<li>
<h2>Eloquent ORM</h2>
<ul>
<li>
<a href="eloquent">Getting Started</a>
</li>
<li>
<a href="eloquent-relationships">Relationships</a>
</li>
<li>
<a href="eloquent-collections">Collections</a>
</li>
<li>
<a href="eloquent-mutators">Mutators / Casts</a>
</li>
<li>
<a href="eloquent-resources">API Resources</a>
</li>
<li>
<a href="eloquent-serialization">Serialization</a>
</li>
</ul>
</li>
<li>
<h2>Testing</h2>
<ul>
<li>
<a href="testing">Getting Started</a>
</li>
<li>
<a href="http-tests">HTTP Tests</a>
</li>
<li>
<a href="console-tests">Console Tests</a>
</li>
<li>
<a href="dusk">Browser Tests</a>
</li>
<li>
<a href="database-testing">Database</a>
</li>
<li>
<a href="mocking">Mocking</a>
</li>
</ul>
</li>
<li>
<h2>Packages</h2>
<ul>
<li>
<a href="starter-kits#laravel-breeze">Breeze</a>
</li>
<li>
<a href="billing">Cashier (Stripe)</a>
</li>
<li>
<a href="cashier-paddle">Cashier (Paddle)</a>
</li>
<li>
<a href="dusk">Dusk</a>
</li>
<li>
<a href="envoy">Envoy</a>
</li>
<li>
<a href="fortify">Fortify</a>
</li>
<li>
<a href="homestead">Homestead</a>
</li>
<li>
<a href="horizon">Horizon</a>
</li>
<li>
<a href="https://jetstream.laravel.com">Jetstream</a>
</li>
<li>
<a href="octane">Octane</a>
</li>
<li>
<a href="passport">Passport</a>
</li>
<li>
<a href="sail">Sail</a>
</li>
<li>
<a href="sanctum">Sanctum</a>
</li>
<li>
<a href="scout">Scout</a>
</li>
<li>
<a href="socialite">Socialite</a>
</li>
<li>
<a href="telescope">Telescope</a>
</li>
<li>
<a href="valet">Valet</a>
</li>
</ul>
</li>
<li>
<a href="../../api/9.x/index">API Documentation</a>
</li>
</ul>

                            </div>
                        </nav>
                        <nav id="indexed-nav" class="hidden lg:block lg:mt-4">
                            <div class="docs_sidebar">
                                <ul>
<li>
<h2>Prologue</h2>
<ul>
<li>
<a href="releases">Release Notes</a>
</li>
<li>
<a href="upgrade">Upgrade Guide</a>
</li>
<li>
<a href="contributions">Contribution Guide</a>
</li>
</ul>
</li>
<li>
<h2>Getting Started</h2>
<ul>
<li>
<a href="installation">Installation</a>
</li>
<li>
<a href="configuration">Configuration</a>
</li>
<li>
<a href="structure">Directory Structure</a>
</li>
<li>
<a href="starter-kits">Starter Kits</a>
</li>
<li>
<a href="deployment">Deployment</a>
</li>
</ul>
</li>
<li>
<h2>Architecture Concepts</h2>
<ul>
<li>
<a href="lifecycle">Request Lifecycle</a>
</li>
<li>
<a href="container">Service Container</a>
</li>
<li>
<a href="providers">Service Providers</a>
</li>
<li>
<a href="facades">Facades</a>
</li>
</ul>
</li>
<li>
<h2>The Basics</h2>
<ul>
<li>
<a href="routing">Routing</a>
</li>
<li>
<a href="middleware">Middleware</a>
</li>
<li>
<a href="csrf">CSRF Protection</a>
</li>
<li>
<a href="controllers">Controllers</a>
</li>
<li>
<a href="requests">Requests</a>
</li>
<li>
<a href="responses">Responses</a>
</li>
<li>
<a href="views">Views</a>
</li>
<li>
<a href="blade">Blade Templates</a>
</li>
<li>
<a href="urls">URL Generation</a>
</li>
<li>
<a href="session">Session</a>
</li>
<li>
<a href="validation">Validation</a>
</li>
<li>
<a href="errors">Error Handling</a>
</li>
<li>
<a href="logging">Logging</a>
</li>
</ul>
</li>
<li>
<h2>Digging Deeper</h2>
<ul>
<li>
<a href="artisan">Artisan Console</a>
</li>
<li>
<a href="broadcasting">Broadcasting</a>
</li>
<li>
<a href="cache">Cache</a>
</li>
<li>
<a href="collections">Collections</a>
</li>
<li>
<a href="mix">Compiling Assets</a>
</li>
<li>
<a href="contracts">Contracts</a>
</li>
<li>
<a href="events">Events</a>
</li>
<li>
<a href="filesystem">File Storage</a>
</li>
<li>
<a href="helpers">Helpers</a>
</li>
<li>
<a href="http-client">HTTP Client</a>
</li>
<li>
<a href="localization">Localization</a>
</li>
<li>
<a href="mail">Mail</a>
</li>
<li>
<a href="notifications">Notifications</a>
</li>
<li>
<a href="packages">Package Development</a>
</li>
<li>
<a href="queues">Queues</a>
</li>
<li>
<a href="rate-limiting">Rate Limiting</a>
</li>
<li>
<a href="scheduling">Task Scheduling</a>
</li>
</ul>
</li>
<li>
<h2>Security</h2>
<ul>
<li>
<a href="authentication">Authentication</a>
</li>
<li>
<a href="authorization">Authorization</a>
</li>
<li>
<a href="verification">Email Verification</a>
</li>
<li>
<a href="encryption">Encryption</a>
</li>
<li>
<a href="hashing">Hashing</a>
</li>
<li>
<a href="passwords">Password Reset</a>
</li>
</ul>
</li>
<li>
<h2>Database</h2>
<ul>
<li>
<a href="database">Getting Started</a>
</li>
<li>
<a href="queries">Query Builder</a>
</li>
<li>
<a href="pagination">Pagination</a>
</li>
<li>
<a href="migrations">Migrations</a>
</li>
<li>
<a href="seeding">Seeding</a>
</li>
<li>
<a href="redis">Redis</a>
</li>
</ul>
</li>
<li>
<h2>Eloquent ORM</h2>
<ul>
<li>
<a href="eloquent">Getting Started</a>
</li>
<li>
<a href="eloquent-relationships">Relationships</a>
</li>
<li>
<a href="eloquent-collections">Collections</a>
</li>
<li>
<a href="eloquent-mutators">Mutators / Casts</a>
</li>
<li>
<a href="eloquent-resources">API Resources</a>
</li>
<li>
<a href="eloquent-serialization">Serialization</a>
</li>
</ul>
</li>
<li>
<h2>Testing</h2>
<ul>
<li>
<a href="testing">Getting Started</a>
</li>
<li>
<a href="http-tests">HTTP Tests</a>
</li>
<li>
<a href="console-tests">Console Tests</a>
</li>
<li>
<a href="dusk">Browser Tests</a>
</li>
<li>
<a href="database-testing">Database</a>
</li>
<li>
<a href="mocking">Mocking</a>
</li>
</ul>
</li>
<li>
<h2>Packages</h2>
<ul>
<li>
<a href="starter-kits#laravel-breeze">Breeze</a>
</li>
<li>
<a href="billing">Cashier (Stripe)</a>
</li>
<li>
<a href="cashier-paddle">Cashier (Paddle)</a>
</li>
<li>
<a href="dusk">Dusk</a>
</li>
<li>
<a href="envoy">Envoy</a>
</li>
<li>
<a href="fortify">Fortify</a>
</li>
<li>
<a href="homestead">Homestead</a>
</li>
<li>
<a href="horizon">Horizon</a>
</li>
<li>
<a href="https://jetstream.laravel.com">Jetstream</a>
</li>
<li>
<a href="octane">Octane</a>
</li>
<li>
<a href="passport">Passport</a>
</li>
<li>
<a href="sail">Sail</a>
</li>
<li>
<a href="sanctum">Sanctum</a>
</li>
<li>
<a href="scout">Scout</a>
</li>
<li>
<a href="socialite">Socialite</a>
</li>
<li>
<a href="telescope">Telescope</a>
</li>
<li>
<a href="valet">Valet</a>
</li>
</ul>
</li>
<li>
<a href="../../api/9.x/index">API Documentation</a>
</li>
</ul>

                            </div>
                        </nav>

                        
                                                    <div :class="{ 'hidden': !navIsOpen }" x-cloak class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Forge:</span> create and manage PHP 8 servers. Deploy your Laravel applications in seconds. <a class="underline text-red-600" href="https://forge.laravel.com">Sign up now!</a>.
                            </div>
                        
                        
                                            </div>
                    <div class="sticky bottom-0 flex-1 flex flex-col justify-end lg:hidden">
                        <div class="py-4 px-4 bg-white">
                            <button class="relative ml-1 w-6 h-6 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

            <header
                class="lg:hidden"
                @keydown.window.escape="navIsOpen = false"
                @click.away="navIsOpen = false"
            >
                <div class="relative mx-auto w-full py-10 bg-white transition duration-200 dark:bg-dark-700">
                    <div class="mx-auto px-8 sm:px-16 flex items-center justify-between">
                        <a href="home" class="flex items-center">
                            <img class="" src="yolkassets/img/logo.png" alt="Yolk Framework">
                            <img class="hidden ml-5 sm:block" src="../../img/logotype.min.svg" alt="Laravel">
                        </a>
                        <div class="flex-1 flex items-center justify-end">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                            <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline" aria-label="Menu" @click.prevent="navIsOpen = !navIsOpen">
                                <svg x-show="! navIsOpen" x-transition.opacity class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <svg x-show="navIsOpen" x-transition.opacity x-cloak class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                    <span :class="{ 'shadow-sm': navIsOpen }" class="absolute inset-0 z-20 pointer-events-none"></span>
                </div>
                <div
                    x-show="navIsOpen"
                    x-transition:enter="duration-150"
                    x-transition:leave="duration-100 ease-in"
                    x-cloak
                >
                    <nav
                        x-show="navIsOpen"
                        x-cloak
                        class="absolute w-full transform origin-top shadow-sm z-10"
                        x-transition:enter="duration-150 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8 scale-75"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-100 ease-in"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 -translate-y-8 scale-75"
                    >
                        <div class="relative p-8 bg-white docs_sidebar dark:bg-dark-600">
                            <ul>
<li>
<h2>Prologue</h2>
<ul>
<li>
<a href="releases">Release Notes</a>
</li>
<li>
<a href="upgrade">Upgrade Guide</a>
</li>
<li>
<a href="contributions">Contribution Guide</a>
</li>
</ul>
</li>
<li>
<h2>Getting Started</h2>
<ul>
<li>
<a href="installation">Installation</a>
</li>
<li>
<a href="configuration">Configuration</a>
</li>
<li>
<a href="structure">Directory Structure</a>
</li>
<li>
<a href="starter-kits">Starter Kits</a>
</li>
<li>
<a href="deployment">Deployment</a>
</li>
</ul>
</li>
<li>
<h2>Architecture Concepts</h2>
<ul>
<li>
<a href="lifecycle">Request Lifecycle</a>
</li>
<li>
<a href="container">Service Container</a>
</li>
<li>
<a href="providers">Service Providers</a>
</li>
<li>
<a href="facades">Facades</a>
</li>
</ul>
</li>
<li>
<h2>The Basics</h2>
<ul>
<li>
<a href="routing">Routing</a>
</li>
<li>
<a href="middleware">Middleware</a>
</li>
<li>
<a href="csrf">CSRF Protection</a>
</li>
<li>
<a href="controllers">Controllers</a>
</li>
<li>
<a href="requests">Requests</a>
</li>
<li>
<a href="responses">Responses</a>
</li>
<li>
<a href="views">Views</a>
</li>
<li>
<a href="blade">Blade Templates</a>
</li>
<li>
<a href="urls">URL Generation</a>
</li>
<li>
<a href="session">Session</a>
</li>
<li>
<a href="validation">Validation</a>
</li>
<li>
<a href="errors">Error Handling</a>
</li>
<li>
<a href="logging">Logging</a>
</li>
</ul>
</li>
<li>
<h2>Digging Deeper</h2>
<ul>
<li>
<a href="artisan">Artisan Console</a>
</li>
<li>
<a href="broadcasting">Broadcasting</a>
</li>
<li>
<a href="cache">Cache</a>
</li>
<li>
<a href="collections">Collections</a>
</li>
<li>
<a href="mix">Compiling Assets</a>
</li>
<li>
<a href="contracts">Contracts</a>
</li>
<li>
<a href="events">Events</a>
</li>
<li>
<a href="filesystem">File Storage</a>
</li>
<li>
<a href="helpers">Helpers</a>
</li>
<li>
<a href="http-client">HTTP Client</a>
</li>
<li>
<a href="localization">Localization</a>
</li>
<li>
<a href="mail">Mail</a>
</li>
<li>
<a href="notifications">Notifications</a>
</li>
<li>
<a href="packages">Package Development</a>
</li>
<li>
<a href="queues">Queues</a>
</li>
<li>
<a href="rate-limiting">Rate Limiting</a>
</li>
<li>
<a href="scheduling">Task Scheduling</a>
</li>
</ul>
</li>
<li>
<h2>Security</h2>
<ul>
<li>
<a href="authentication">Authentication</a>
</li>
<li>
<a href="authorization">Authorization</a>
</li>
<li>
<a href="verification">Email Verification</a>
</li>
<li>
<a href="encryption">Encryption</a>
</li>
<li>
<a href="hashing">Hashing</a>
</li>
<li>
<a href="passwords">Password Reset</a>
</li>
</ul>
</li>
<li>
<h2>Database</h2>
<ul>
<li>
<a href="database">Getting Started</a>
</li>
<li>
<a href="queries">Query Builder</a>
</li>
<li>
<a href="pagination">Pagination</a>
</li>
<li>
<a href="migrations">Migrations</a>
</li>
<li>
<a href="seeding">Seeding</a>
</li>
<li>
<a href="redis">Redis</a>
</li>
</ul>
</li>
<li>
<h2>Eloquent ORM</h2>
<ul>
<li>
<a href="eloquent">Getting Started</a>
</li>
<li>
<a href="eloquent-relationships">Relationships</a>
</li>
<li>
<a href="eloquent-collections">Collections</a>
</li>
<li>
<a href="eloquent-mutators">Mutators / Casts</a>
</li>
<li>
<a href="eloquent-resources">API Resources</a>
</li>
<li>
<a href="eloquent-serialization">Serialization</a>
</li>
</ul>
</li>
<li>
<h2>Testing</h2>
<ul>
<li>
<a href="testing">Getting Started</a>
</li>
<li>
<a href="http-tests">HTTP Tests</a>
</li>
<li>
<a href="console-tests">Console Tests</a>
</li>
<li>
<a href="dusk">Browser Tests</a>
</li>
<li>
<a href="database-testing">Database</a>
</li>
<li>
<a href="mocking">Mocking</a>
</li>
</ul>
</li>
<li>
<h2>Packages</h2>
<ul>
<li>
<a href="starter-kits#laravel-breeze">Breeze</a>
</li>
<li>
<a href="billing">Cashier (Stripe)</a>
</li>
<li>
<a href="cashier-paddle">Cashier (Paddle)</a>
</li>
<li>
<a href="dusk">Dusk</a>
</li>
<li>
<a href="envoy">Envoy</a>
</li>
<li>
<a href="fortify">Fortify</a>
</li>
<li>
<a href="homestead">Homestead</a>
</li>
<li>
<a href="horizon">Horizon</a>
</li>
<li>
<a href="https://jetstream.laravel.com">Jetstream</a>
</li>
<li>
<a href="octane">Octane</a>
</li>
<li>
<a href="passport">Passport</a>
</li>
<li>
<a href="sail">Sail</a>
</li>
<li>
<a href="sanctum">Sanctum</a>
</li>
<li>
<a href="scout">Scout</a>
</li>
<li>
<a href="socialite">Socialite</a>
</li>
<li>
<a href="telescope">Telescope</a>
</li>
<li>
<a href="valet">Valet</a>
</li>
</ul>
</li>
<li>
<a href="../../api/9.x/index">API Documentation</a>
</li>
</ul>

                        </div>
                    </nav>
                </div>
            </header>

            <section class="flex-1 dark:bg-dark-700">
                <div class="max-w-screen-lg px-8 sm:px-16 lg:px-24">
                    <div class="flex flex-col items-end border-b border-gray-200 py-1 transition-colors dark:border-gray-700 lg:mt-8 lg:flex-row-reverse">
                        <div class="hidden lg:flex items-center justify-center ml-8">
                            <button id="header__sun" onclick="toSystemMode()" title="Switch to system theme" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                 </svg>
                            </button>
                            <button id="header__moon" onclick="toLightMode()" title="Switch to light mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />
                                </svg>
                            </button>
                            <button id="header__indeterminate" onclick="toDarkMode()" title="Switch to dark mode" class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z" />
                                </svg>
                            </button>
                        </div>
                        <div class="w-full lg:w-40 lg:pl-12">
                            <div>
                                <label class="text-gray-600 text-xs tracking-widest uppercase dark:text-gray-500" for="version-switcher">Version</label>
                                <div x-data class="relative w-full bg-white transition-all duration-500 focus-within:border-gray-600 dark:bg-gray-800">
                                    <select
                                        id="version-switcher"
                                        aria-label="Laravel version"
                                        class="appearance-none flex-1 w-full px-0 py-1 placeholder-gray-900 tracking-wide bg-white focus:outline-none dark:bg-dark-700 dark:text-gray-400 dark:placeholder-gray-500"
                                        @change="window.location = $event.target.value"
                                    >
                                                                                    <option  value="https://laravel.com/docs/master/installation">Master</option>
                                                                                    <option selected value="https://laravel.com/docs/9.x/installation">9.x</option>
                                                                                    <option  value="https://laravel.com/docs/8.x/installation">8.x</option>
                                                                                    <option  value="https://laravel.com/docs/7.x/installation">7.x</option>
                                                                                    <option  value="https://laravel.com/docs/6.x/installation">6.x</option>
                                                                                    <option  value="https://laravel.com/docs/5.8/installation">5.8</option>
                                                                                    <option  value="https://laravel.com/docs/5.7/installation">5.7</option>
                                                                                    <option  value="https://laravel.com/docs/5.6/installation">5.6</option>
                                                                                    <option  value="https://laravel.com/docs/5.5/installation">5.5</option>
                                                                                    <option  value="https://laravel.com/docs/5.4/installation">5.4</option>
                                                                                    <option  value="https://laravel.com/docs/5.3/installation">5.3</option>
                                                                                    <option  value="https://laravel.com/docs/5.2/installation">5.2</option>
                                                                                    <option  value="https://laravel.com/docs/5.1/installation">5.1</option>
                                                                                    <option  value="https://laravel.com/docs/5.0/installation">5.0</option>
                                                                                    <option  value="https://laravel.com/docs/4.2/installation">4.2</option>
                                                                            </select>
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow" src="../../img/icons/drop_arrow.min.svg" alt="">
                                    <img class="absolute inset-y-0 right-0 mt-2.5 w-2.5 h-2.5 text-gray-900 pointer-events-none" id="docs_search__version_arrow_dark" src="../../img/icons/drop_arrow.dark.min.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-8 flex items-center justify-end w-full h-10 lg:mt-0">
                            <div class="flex-1 flex items-center">
                                <button
                                    class="relative inline-flex items-center text-gray-800 transition-colors dark:text-gray-400 w-full"
                                    @click.prevent="$dispatch('toggle-search-modal')"
                                >
                                    <svg class="w-5 h-5 text-gray-700 pointer-events-none transition-colors dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    <span class="ml-3">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <section class="mt-8 md:mt-16">
                        <section class="docs_main max-w-prose">
                            
                                                        <div id="main-content">
    <h1>Installation</h1>
<ul>
<li>
<a href="installation#meet-laravel">Meet Laravel</a>
<ul>
<li>
<a href="installation#why-laravel">Why Laravel?</a>
</li>
</ul>
</li>
<li>
<a href="installation#your-first-laravel-project">Your First Laravel Project</a>
<ul>
<li>
<a href="installation#getting-started-on-macos">Getting Started On macOS</a>
</li>
<li>
<a href="installation#getting-started-on-windows">Getting Started On Windows</a>
</li>
<li>
<a href="installation#getting-started-on-linux">Getting Started On Linux</a>
</li>
<li>
<a href="installation#choosing-your-sail-services">Choosing Your Sail Services</a>
</li>
<li>
<a href="installation#installation-via-composer">Installation Via Composer</a>
</li>
</ul>
</li>
<li>
<a href="installation#initial-configuration">Initial Configuration</a>
<ul>
<li>
<a href="installation#environment-based-configuration">Environment Based Configuration</a>
</li>
<li>
<a href="installation#directory-configuration">Directory Configuration</a>
</li>
</ul>
</li>
<li>
<a href="installation#next-steps">Next Steps</a>
<ul>
<li>
<a href="installation#laravel-the-fullstack-framework">Laravel The Full Stack Framework</a>
</li>
<li>
<a href="installation#laravel-the-api-backend">Laravel The API Backend</a>
</li>
</ul>
</li>
</ul>
<p><a name="meet-laravel"></a></p>
<h2>Meet Laravel</h2>
<p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.</p>
<p>Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.</p>
<p>Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.</p>
<p><a name="why-laravel"></a></p>
<h3>Why Laravel?</h3>
<p>There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.</p>
<h4>A Progressive Framework</h4>
<p>We like to call Laravel a &quot;progressive&quot; framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and <a href="https://laracasts.com">video tutorials</a> will help you learn the ropes without becoming overwhelmed.</p>
<p>If you're a senior developer, Laravel gives you robust tools for <a href="container">dependency injection</a>, <a href="testing">unit testing</a>, <a href="queues">queues</a>, <a href="broadcasting">real-time events</a>, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.</p>
<h4>A Scalable Framework</h4>
<p>Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.</p>
<p>Need extreme scaling? Platforms like <a href="https://vapor.laravel.com">Laravel Vapor</a> allow you to run your Laravel application at nearly limitless scale on AWS's latest serverless technology.</p>
<h4>A Community Framework</h4>
<p>Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have <a href="https://github.com/laravel/framework">contributed to the framework</a>. Who knows, maybe you'll even become a Laravel contributor.</p>
<p><a name="your-first-laravel-project"></a></p>
<h2>Your First Laravel Project</h2>
<p>We want it to be as easy as possible to get started with Laravel. There are a variety of options for developing and running a Laravel project on your own computer. While you may wish to explore these options at a later time, Laravel provides <a href="sail">Sail</a>, a built-in solution for running your Laravel project using <a href="https://www.docker.com">Docker</a>.</p>
<p>Docker is a tool for running applications and services in small, light-weight &quot;containers&quot; which do not interfere with your local computer's installed software or configuration. This means you don't have to worry about configuring or setting up complicated development tools such as web servers and databases on your personal computer. To get started, you only need to install <a href="https://www.docker.com/products/docker-desktop">Docker Desktop</a>.</p>
<p>Laravel Sail is a light-weight command-line interface for interacting with Laravel's default Docker configuration. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience.</p>
<blockquote>
<p>{tip} Already a Docker expert? Don't worry! Everything about Sail can be customized using the <code>docker-compose.yml</code> file included with Laravel.</p>
</blockquote>
<p><a name="getting-started-on-macos"></a></p>
<h3>Getting Started On macOS</h3>
<p>If you're developing on a Mac and <a href="https://www.docker.com/products/docker-desktop">Docker Desktop</a> is already installed, you can use a simple terminal command to create a new Laravel project. For example, to create a new Laravel application in a directory named &quot;example-app&quot;, you may run the following command in your terminal:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">curl </span><span style="color: #82AAFF;">-s</span><span style="color: #BFC7D5;"> </span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">https://laravel.build/example-app</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #BFC7D5;"> </span><span style="color: #89DDFF;">|</span><span style="color: #BFC7D5;"> bash</span></div></code></pre>
<p>Of course, you can change &quot;example-app&quot; in this URL to anything you like - just make sure the application name only contains alpha-numeric characters, dashes, and underscores. The Laravel application's directory will be created within the directory you execute the command from.</p>
<p>After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #89DDFF;">cd</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">./vendor/bin/sail </span><span style="color: #BFC7D5;">up</span></div></code></pre>
<p>The first time you run the Sail <code>up</code> command, Sail's application containers will be built on your machine. This could take several minutes. <strong>Don't worry, subsequent attempts to start Sail will be much faster.</strong></p>
<p>Once the application's Docker containers have been started, you can access the application in your web browser at: <a href="http://localhost">http://localhost</a>.</p>
<blockquote>
<p>{tip} To continue learning more about Laravel Sail, review its <a href="sail">complete documentation</a>.</p>
</blockquote>
<p><a name="getting-started-on-windows"></a></p>
<h3>Getting Started On Windows</h3>
<p>Before we create a new Laravel application on your Windows machine, make sure to install <a href="https://www.docker.com/products/docker-desktop">Docker Desktop</a>. Next, you should ensure that Windows Subsystem for Linux 2 (WSL2) is installed and enabled. WSL allows you to run Linux binary executables natively on Windows 10. Information on how to install and enable WSL2 can be found within Microsoft's <a href="https://docs.microsoft.com/en-us/windows/wsl/install-win10">developer environment documentation</a>.</p>
<blockquote>
<p>{tip} After installing and enabling WSL2, you should ensure that Docker Desktop is <a href="https://docs.docker.com/docker-for-windows/wsl/">configured to use the WSL2 backend</a>.</p>
</blockquote>
<p>Next, you are ready to create your first Laravel project. Launch <a href="https://www.microsoft.com/en-us/p/windows-terminal/9n0dx20hk701?rtc=1&activetab=pivot:overviewtab">Windows Terminal</a> and begin a new terminal session for your WSL2 Linux operating system. Next, you can use a simple terminal command to create a new Laravel project. For example, to create a new Laravel application in a directory named &quot;example-app&quot;, you may run the following command in your terminal:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">curl </span><span style="color: #82AAFF;">-s</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">https://laravel.build/example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #89DDFF;">|</span><span style="color: #BFC7D5;"> bash</span></div></code></pre>
<p>Of course, you can change &quot;example-app&quot; in this URL to anything you like - just make sure the application name only contains alpha-numeric characters, dashes, and underscores. The Laravel application's directory will be created within the directory you execute the command from.</p>
<p>After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #89DDFF;">cd</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">./vendor/bin/sail </span><span style="color: #BFC7D5;">up</span></div></code></pre>
<p>The first time you run the Sail <code>up</code> command, Sail's application containers will be built on your machine. This could take several minutes. <strong>Don't worry, subsequent attempts to start Sail will be much faster.</strong></p>
<p>Once the application's Docker containers have been started, you can access the application in your web browser at: <a href="http://localhost">http://localhost</a>.</p>
<blockquote>
<p>{tip} To continue learning more about Laravel Sail, review its <a href="sail">complete documentation</a>.</p>
</blockquote>
<h4>Developing Within WSL2</h4>
<p>Of course, you will need to be able to modify the Laravel application files that were created within your WSL2 installation. To accomplish this, we recommend using Microsoft's <a href="https://code.visualstudio.com">Visual Studio Code</a> editor and their first-party extension for <a href="https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack">Remote Development</a>.</p>
<p>Once these tools are installed, you may open any Laravel project by executing the <code>code .</code> command from your application's root directory using Windows Terminal.</p>
<p><a name="getting-started-on-linux"></a></p>
<h3>Getting Started On Linux</h3>
<p>If you're developing on Linux and <a href="https://docs.docker.com/compose/install/">Docker Compose</a> is already installed, you can use a simple terminal command to create a new Laravel project. For example, to create a new Laravel application in a directory named &quot;example-app&quot;, you may run the following command in your terminal:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">curl </span><span style="color: #82AAFF;">-s</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">https://laravel.build/example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #89DDFF;">|</span><span style="color: #BFC7D5;"> bash</span></div></code></pre>
<p>Of course, you can change &quot;example-app&quot; in this URL to anything you like - just make sure the application name only contains alpha-numeric characters, dashes, and underscores. The Laravel application's directory will be created within the directory you execute the command from.</p>
<p>After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #89DDFF;">cd</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">./vendor/bin/sail </span><span style="color: #BFC7D5;">up</span></div></code></pre>
<p>The first time you run the Sail <code>up</code> command, Sail's application containers will be built on your machine. This could take several minutes. <strong>Don't worry, subsequent attempts to start Sail will be much faster.</strong></p>
<p>Once the application's Docker containers have been started, you can access the application in your web browser at: <a href="http://localhost">http://localhost</a>.</p>
<blockquote>
<p>{tip} To continue learning more about Laravel Sail, review its <a href="sail">complete documentation</a>.</p>
</blockquote>
<p><a name="choosing-your-sail-services"></a></p>
<h3>Choosing Your Sail Services</h3>
<p>When creating a new Laravel application via Sail, you may use the <code>with</code> query string variable to choose which services should be configured in your new application's <code>docker-compose.yml</code> file. Available services include <code>mysql</code>, <code>pgsql</code>, <code>mariadb</code>, <code>redis</code>, <code>memcached</code>, <code>meilisearch</code>, <code>minio</code>, <code>selenium</code>, and <code>mailhog</code>:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">curl </span><span style="color: #82AAFF;">-s</span><span style="color: #BFC7D5;"> </span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">https://laravel.build/example-app?with=mysql,redis</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #BFC7D5;"> </span><span style="color: #89DDFF;">|</span><span style="color: #BFC7D5;"> bash</span></div></code></pre>
<p>If you do not specify which services you would like configured, a default stack of <code>mysql</code>, <code>redis</code>, <code>meilisearch</code>, <code>mailhog</code>, and <code>selenium</code> will be configured.</p>
<p>You may instruct Sail to install a default <a href="sail#using-devcontainers">Devcontainer</a> by adding the <code>devcontainer</code> parameter to the URL:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">curl </span><span style="color: #82AAFF;">-s</span><span style="color: #BFC7D5;"> </span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">https://laravel.build/example-app?with=mysql,redis&amp;devcontainer</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #BFC7D5;"> </span><span style="color: #89DDFF;">|</span><span style="color: #BFC7D5;"> bash</span></div></code></pre>
<p><a name="installation-via-composer"></a></p>
<h3>Installation Via Composer</h3>
<p>If your computer already has PHP and Composer installed, you may create a new Laravel project by using Composer directly. After the application has been created, you may start Laravel's local development server using the Artisan CLI's <code>serve</code> command:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">composer </span><span style="color: #BFC7D5;">create-project</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">laravel/laravel</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #89DDFF;">cd</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">php </span><span style="color: #BFC7D5;">artisan</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">serve</span></div></code></pre>
<p><a name="the-laravel-installer"></a></p>
<h4>The Laravel Installer</h4>
<p>Or, you may install the Laravel Installer as a global Composer dependency:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">composer </span><span style="color: #BFC7D5;">global</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">require</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">laravel/installer</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #89DDFF;">cd</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span></div><div class='line'>&nbsp;</div><div class='line'><span style="color: #BFC7D5;">php </span><span style="color: #BFC7D5;">artisan</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">serve</span></div></code></pre>
<p>Make sure to place Composer's system-wide vendor bin directory in your <code>$PATH</code> so the <code>laravel</code> executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:</p>
<div class="content-list" markdown="1">
<ul>
<li>macOS: <code>$HOME/.composer/vendor/bin</code>
</li>
<li>Windows: <code>%USERPROFILE%\AppData\Roaming\Composer\vendor\bin</code>
</li>
<li>GNU / Linux Distributions: <code>$HOME/.config/composer/vendor/bin</code> or <code>$HOME/.composer/vendor/bin</code>
</li>
</ul>
</div>
<p>For convenience, the Laravel installer can also create a Git repository for your new project. To indicate that you want a Git repository to be created, pass the <code>--git</code> flag when creating a new project:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--git</span></div></code></pre>
<p>This command will initialize a new Git repository for your project and automatically commit the base Laravel skeleton. The <code>git</code> flag assumes you have properly installed and configured Git. You can also use the <code>--branch</code> flag to set the initial branch name:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--git</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--branch=</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">main</span><span style="color: #D9F5DD;">&quot;</span></div></code></pre>
<p>Instead of using the <code>--git</code> flag, you may also use the <code>--github</code> flag to create a Git repository and also create a corresponding private repository on GitHub:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--github</span></div></code></pre>
<p>The created repository will then be available at <code>https://github.com/&lt;your-account&gt;/example-app</code>. The <code>github</code> flag assumes you have properly installed the <a href="https://cli.github.com">GitHub CLI</a> and are authenticated with GitHub. Additionally, you should have <code>git</code> installed and properly configured. If needed, you can pass additional flags that are supported by the GitHub CLI:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--github=</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">--public</span><span style="color: #D9F5DD;">&quot;</span></div></code></pre>
<p>You may use the <code>--organization</code> flag to create the repository under a specific GitHub organization:</p>
<pre><code data-theme="olaolu-palenight" data-lang="shell" class='torchlight' style='background-color: #292D3E; --theme-selection-background: #7580B850;'><!-- Syntax highlighted by torchlight.dev --><div class='line'><span style="color: #BFC7D5;">laravel </span><span style="color: #BFC7D5;">new</span><span style="color: #BFC7D5;"> </span><span style="color: #BFC7D5;">example-app</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--github=</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">--public</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #BFC7D5;"> </span><span style="color: #82AAFF;">--organization=</span><span style="color: #D9F5DD;">&quot;</span><span style="color: #C3E88D;">laravel</span><span style="color: #D9F5DD;">&quot;</span></div></code></pre>
<p><a name="initial-configuration"></a></p>
<h2>Initial Configuration</h2>
<p>All of the configuration files for the Laravel framework are stored in the <code>config</code> directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.</p>
<p>Laravel needs almost no additional configuration out of the box. You are free to get started developing! However, you may wish to review the <code>config/app.php</code> file and its documentation. It contains several options such as <code>timezone</code> and <code>locale</code> that you may wish to change according to your application.</p>
<p><a name="environment-based-configuration"></a></p>
<h3>Environment Based Configuration</h3>
<p>Since many of Laravel's configuration option values may vary depending on whether your application is running on your local computer or on a production web server, many important configuration values are defined using the <code>.env</code> file that exists at the root of your application.</p>
<p>Your <code>.env</code> file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gains access to your source control repository, since any sensitive credentials would get exposed.</p>
<blockquote>
<p>{tip} For more information about the <code>.env</code> file and environment based configuration, check out the full <a href="configuration#environment-configuration">configuration documentation</a>.</p>
</blockquote>
<p><a name="directory-configuration"></a></p>
<h3>Directory Configuration</h3>
<p>Laravel should always be served out of the root of the &quot;web directory&quot; configured for your web server. You should not attempt to serve a Laravel application out of a subdirectory of the &quot;web directory&quot;. Attempting to do so could expose sensitive files that exist within your application.</p>
<p><a name="next-steps"></a></p>
<h2>Next Steps</h2>
<p>Now that you have created your Laravel project, you may be wondering what to learn next. First, we strongly recommend becoming familiar with how Laravel works by reading the following documentation:</p>
<div class="content-list" markdown="1">
<ul>
<li>
<a href="lifecycle">Request Lifecycle</a>
</li>
<li>
<a href="configuration">Configuration</a>
</li>
<li>
<a href="structure">Directory Structure</a>
</li>
<li>
<a href="container">Service Container</a>
</li>
<li>
<a href="facades">Facades</a>
</li>
</ul>
</div>
<p>How you want to use Laravel will also dictate the next steps on your journey. There are a variety of ways to use Laravel, and we'll explore two primary use cases for the framework below.</p>
<p><a name="laravel-the-fullstack-framework"></a></p>
<h3>Laravel The Full Stack Framework</h3>
<p>Laravel may serve as a full stack framework. By &quot;full stack&quot; framework we mean that you are going to use Laravel to route requests to your application and render your frontend via <a href="blade">Blade templates</a> or using a single-page application hybrid technology like <a href="https://inertiajs.com">Inertia.js</a>. This is the most common way to use the Laravel framework.</p>
<p>If this is how you plan to use Laravel, you may want to check out our documentation on <a href="routing">routing</a>, <a href="views">views</a>, or the <a href="eloquent">Eloquent ORM</a>. In addition, you might be interested in learning about community packages like <a href="https://laravel-livewire.com">Livewire</a> and <a href="https://inertiajs.com">Inertia.js</a>. These packages allow you to use Laravel as a full-stack framework while enjoying many of the UI benefits provided by single-page JavaScript applications.</p>
<p>If you are using Laravel as a full stack framework, we also strongly encourage you to learn how to compile your application's CSS and JavaScript using <a href="mix">Laravel Mix</a>.</p>
<blockquote>
<p>{tip} If you want to get a head start building your application, check out one of our official <a href="starter-kits">application starter kits</a>.</p>
</blockquote>
<p><a name="laravel-the-api-backend"></a></p>
<h3>Laravel The API Backend</h3>
<p>Laravel may also serve as an API backend to a JavaScript single-page application or mobile application. For example, you might use Laravel as an API backend for your <a href="https://nextjs.org">Next.js</a> application. In this context, you may use Laravel to provide <a href="sanctum">authentication</a> and data storage / retrieval for your application, while also taking advantage of Laravel's powerful services such as queues, emails, notifications, and more.</p>
<p>If this is how you plan to use Laravel, you may want to check out our documentation on <a href="routing">routing</a>, <a href="sanctum">Laravel Sanctum</a>, and the <a href="eloquent">Eloquent ORM</a>.</p>
<blockquote>
<p>{tip} Need a head start scaffolding your Laravel backend and Next.js frontend? Laravel Breeze offers an <a href="starter-kits#breeze-and-next">API stack</a> as well as a <a href="https://github.com/laravel/breeze-next">Next.js frontend implementation</a> so you can get started in minutes.</p>
</blockquote>

                                
</div>
                        </section>
                    </section>
                </div>
            </section>
        </div>
    </div>

<?php  footer();?>

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
                    <img width="105" src="../../img/icons/algolia.dark.min.svg" id="docs_search__algolia_dark" alt="Algolia">
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

<?php js();?>


</body>
</html>
