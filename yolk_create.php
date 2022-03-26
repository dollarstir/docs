<?php

$app_name = $context['appname'];

echo '
    curl https://phpyolk.com/clidownload --output social.zip &&
    unzip social.zip -d '.$app_name.' &&
    rm -f social.zip
';
