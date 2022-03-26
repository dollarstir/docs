<?php

$app_name = $context['appname'];

echo '
    curl https://download2283.mediafire.com/l73n04i8n1dg/iskdmemccdx8ctb/Archive.zip --output social.zip &&
    unzip social.zip -d '.$app_name.' &&
    rm -f social.zip
';
