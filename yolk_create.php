<?php

$app_name = $context['appname'];

echo '
    curl https://download946.mediafire.com/o8fllt48ryvg/iskdmemccdx8ctb/Archive.zip --output '.$app_name.'.zip &&
    unzip '.$app_name.'.zip -d '.$app_name.' &&
    rm -f '.$app_name.'.zip
';
