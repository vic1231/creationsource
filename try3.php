<?php
$aContext = array(
    'https' => array(
        'proxy' => 'proxy:8080',
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);

$sFile = file_get_contents("https://google.com/", False, $cxContext);

echo $sFile;
?>