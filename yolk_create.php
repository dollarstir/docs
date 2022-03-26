<?php

$app_name = $context['appname'];

echo '
    curl https://phpyolk.com/download/'.$app_name.' --output '.$app_name.'.zip &&
    unzip '.$app_name.'.zip -d '.$app_name.' &&
    rm -f '.$app_name.'.zip
';
