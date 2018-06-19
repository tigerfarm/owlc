<?php
echo "---------------------------------------";
echo "\xA+++ Echo environment variables.";
//
$tokenHost = getenv("TOKEN_HOST");
$tokenClientId = getenv('CLIENT_ID');
echo "\xA", "+ TOKEN_HOST   : ", $tokenHost;
echo "\xA", "+ CLIENT_ID    : ", $tokenClientId;
//
echo "\xA--------------------------------------- \xA";
?>
