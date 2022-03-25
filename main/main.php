<!DOCTYPE html>
<html lang="en">

<head>
    <?php head('home'); ?>

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
                        <li><a href="installation">Download</a></li>
                        <!-- <li><a href="components">Components</a></li> -->
                        <li><a href="plugins">Plugins</a></li>
                        <li><a href="plugins">Community</a></li>
                        <li><a href="plugins">Store</a></li>
                        
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
                            <?php echo image::solidsvg('grip', '50px !important', '50px !important', 'w-6', '', 'x-show="!navIsOpen" viewBox="0 0 28 12" fill="none"'); ?>
                            <?php echo image::solidsvg('x', '40px', '40px', 'absolute inset-0 mt-2.5 ml-2.5 w-5', '', 'x-show="navIsOpen" x-cloak viewBox="0 0 19 19" fill="none"'); ?>
                            
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
                        Yolk is a PHP framework that helps to easily build web applications. Comes with in-built database queries and has custom tags and structure .</p>
                    <div
                        class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <a class="group relative inline-flex border border-red-500 focus:outline-none w-full sm:w-auto"
                            href="installation">
                            <span
                                class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-white text-center font-bold uppercase bg-red-500 ring-1  ring-offset-1 ring-offset-red-500 transform transition-transform">
                                Let's Start
                            </span>
                        </a>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none w-full sm:w-auto"
                            href="http://www.youtube.com" target="_blank">
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
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">The Yolk <strong><a href="docs/9.x/eloquent.html">backend bot</a></strong> provides  in-built database queries which helps to send, fetch, delete and update records in database tables without any stress<br><a class="group relative inline-flex border border-red-600 focus:outline-none mt-6"
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
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Yolk  has it own tags call the <storng>yolk Ui elements. Note with the yolk ui you code everything in php no html tags involved . It can be styled with any type of css <br></storng>
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
                   
                    <h3 class="mt-5 text-xl font-bold">Store</h3>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">
                            Yolk has made it possible for anyone to create packages which can be paid or free. This packages can be a template made with Yolk Ui, E-cormerce website made with yolk framework,encryption system. 
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
                <div class="w-full flex justify-center items-center px-5 xl:px-0" data-aos="fade-left">
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
                <div class="overflow-hidden flex justify-center lg:order-last" data-aos="fade-right">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <img width="587" height="342" viewBox="0 0 587 342"  src="yolkassets/img/ui.png" style="border-radius:10px;"/>
                            
                        
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Widget Based  Ui</h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">yolk ui has a widget based nature making it easy to write less but do more .</p>
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
                <div class="w-full flex justify-center items-center px-5 xl:px-0" data-aos="fade-left">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <img width="587" height="342" viewBox="0 0 587 342"  src="yolkassets/img/momo.png" style="border-radius:10px;"/>
                            
                        
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Accept Mobile money Payment </h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">yolk has intergrated mobile money payment which helps to easily accept money on your wesbite .</p>
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
                <div class="overflow-hidden flex justify-center lg:order-last" data-aos="fade-right">
                    <div class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0">
                        <img width="587" height="342" viewBox="0 0 587 342"  src="yolkassets/img/sms.png" style="border-radius:10px;"/>
                            
                        
                    </div>
                </div>
                <div class="w-full flex justify-center items-center px-5 xl:px-0">
                    <div class="sm:max-w-[480px]">
                        <h2 class="text-4xl font-bold md:text-5xl">Send Bulk sms  </h2>
                        <p class="mt-6 text-gray-700 leading-relaxed">yolk has intergrated bulk sms sender which helps to send bulk sms to users .</p>
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
    

   
    <?php footer(); ?>

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

<script src="main/js/aosmin.js"></script>
<script src="main/js/aos.js"></script>



    
</body>

</html>