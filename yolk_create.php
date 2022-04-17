<?php

$app_name = $context['appname'];

echo '
    curl https://phpyolk.com/Archive.zip --output '.$app_name.'.zip &&
    unzip '.$app_name.'.zip -d '.$app_name.' &&
    rm -f '.$app_name.'.zip
';
