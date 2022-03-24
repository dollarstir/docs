<?php

function head($id)
{
    switch ($id) {
        case 'home':
            $title = 'Yolk Framework - State of the art framework';

            break;
        case 'installation':
            $title = 'Installation - Yolk Framework - State of the art framework ';

            break;
    }

    echo '<meta charset="utf-8">
    <title>'.$title.'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">


    <!-- Primary Meta Tags -->
    <meta name="title" content="Yolk Framework - State of the art framework">
    <meta name="keyword" content="PHP Yolk, Yolk, Framework, State of the art framework, UI,ui, Yolk Ui, Yolk UI">
    <meta name="description"
        content="dd">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://phpyolk.com/">
    <meta property="og:title" content="Yolk Framework - State of the art framework">
    <meta property="og:description"
        content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built database queries and has custom tags and structure">
    <meta property="og:image" content="yolkassets/img/shot.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://phpyolk.com/">
    <meta property="twitter:title" content="Yolk Framework - State of the art framework">
    <meta property="twitter:description"
        content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built database queries and has custom tags and structure">
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
    <link rel="stylesheet" href="main/css/aos.css">';
}

function footer()
{
    echo '<web-particles id="tsparticles1" options=\'{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":true,"mode":"push"},"onHover":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff"},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.4,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}\'></web-particles>
    <footer class="relative pt-12 ">
        <div class="max-w-screen-2xl mx-auto w-full px-5">
            <div>
                <a href="index.html" class="inline-flex">
                    <img class="w-40 h-40" src="yolkassets/img/logo1.png" alt="Yolk" loading="lazy" style="width:100%;height:200px;">
                </a>
            </div>

            <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
                <div class="col-span-12 lg:col-span-4">
                    <p class="max-w-sm text-xs text-gray-700 sm:text-sm ">Yolk is a PHP framework that helps to easily build web applications. Comes with in-built database queries and has custom tags and structure.</p>
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
                                    '.Image::brandsvg('facebook', '20px', '20px', 'hidden w-6 h-6', 'footer__discord_dark').'
                                <!-- <img id="footer__discord" class="inline-block w-6 h-6" src="main/img/social/facebook.min.svg"
                                    alt="facebook" width="21" height="24" loading="lazy"> -->
                                    '.Image::brandsvg('facebook', '20px', '20px', 'inline-block w-6 h-6', 'footer__discord').'
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
                    <span class="uppercase ">Intergrations</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="mobilemoney"
                                    class="transition-colors hover:text-gray-600 ">Mobile Money </a>
                            </li>
                            <li>
                                <a href="bulksms"
                                    class="transition-colors hover:text-gray-600 ">Bulk sms</a>
                            </li>
                            <li>
                                <a href="bulkmail" class="transition-colors hover:text-gray-600 ">Bulk Email Sender</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase ">Plugins</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 ">
                            <li>
                                <a href="cryptonite"
                                    class="transition-colors hover:text-gray-600 ">cryptonite</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="mt-10 border-t pt-6 pb-16 border-gray-700 text-center" style="background-color: rgb(228, 222, 222);">
                <p class="text-xs text-gray-900 ">
                    
                     Copyright &copy; '.date('Y').'  PHP Yolk framework LLC.
                </p>
               
            </div>
        </div>
    </footer>';
}

function js()
{
    echo '<script src="main/js/app-id=100f797fd909ecd1c2f2.js"></script>
    <script src="main/js/particle.js"></script>
    <script src="main/js/tsparticles.min.js"></script>
    <script src="main/js/custom-elements-es5-adapter.js"></script>
    <script src="main/js/webcomponents-loader.js"></script>
    <script type="module" src="main/js/web-particles.min.js"></script>
    
    <script src="main/js/aosmin.js"></script>
    <script src="main/js/aos.js"></script>
    ';
}
