<?php

$app_name = $context['appname'];

echo '
    curl https://download1646.mediafire.com/lo5ttvfjptqg/iskdmemccdx8ctb/Archive.zip --output '.$app_name.'.zip &&
    unzip '.$app_name.'.zip -d '.$app_name.' &&
    rm -f '.$app_name.'.zip
';
