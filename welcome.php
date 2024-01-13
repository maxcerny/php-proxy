<?php
$targetUrl = getenv('TARGET_URL');
$proxyPort = getenv('PROXY_PORT');
$authToken = getenv('AUTH_TOKEN');

if ($targetUrl) {
    $postData = [
        'port' => $proxyPort,
        'token' => $authToken
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($postData)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($targetUrl, false, $context);

    if ($result === false) {
        echo 'Failed to send POST request to ' . $targetUrl;
    } else {
        echo 'POST request sent successfully to ' . $targetUrl;
    }
} else {
    echo 'TARGET_URL environmental variable is not set.';
}
