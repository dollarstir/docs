<?php


function head($id){
    switch($id){
        case 'home':
            echo '<meta charset="utf-8">
            <title>Yolk Framework - State of the art framework</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        
        
            <!-- Primary Meta Tags -->
            <meta name="title" content="Yolk Framework - State of the art framework">
            <meta name="keyword" content="PHP Yolk, Yolk, Framework, State of the art framework, UI,ui, Yolk Ui, Yolk UI">
            <meta name="description"
                content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built database queries and has custom tags and structure ">
        
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
            break;
        case "installation":
            echo '<meta charset="utf-8">
            <title>Yolk Framework - State of the art framework</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        
        
            <!-- Primary Meta Tags -->
            <meta name="title" content="Yolk Framework - State of the art framework">
            <meta name="keyword" content="PHP Yolk, Yolk, Framework, State of the art framework, UI,ui, Yolk Ui, Yolk UI">
            <meta name="description"
                content="Yolk is a PHP framework that helps to easily build web apps. Comes with in-built database queries and has custom tags and structure ">
        
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
            break;
        
    }
}