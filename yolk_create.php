<?php

$app_name = $context['appname'];

echo '
    curl https://download1484.mediafire.com/sypckzctihwg/90djlwsc1591i6t/Archive.zip --output '.$app_name.'.zip &&
    unzip '.$app_name.'.zip -d '.$app_name.' &&
    rm -f '.$app_name.'.zip
';
