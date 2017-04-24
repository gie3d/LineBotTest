<?php
$access_token = getenv('ACCESS_TOKEN'); // get from Heroku Config Vars
$channel_secret = getenv('CHANNEL_SECRET'); // get from Heroku Config Vars

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channel_secret]);

echo 'test';