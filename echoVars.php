<?php
echo "---------------------------------------";
echo "\xA+++ Echo environment variables.";
//
$tokenHost = getenv("TOKEN_HOST");
$tokenClientId = getenv('CLIENT_ID');
$tokenPassword = getenv('TOKEN_PASSWORD');
echo "\xA", "+ TOKEN_HOST   : ", $tokenHost;
echo "\xA", "+ TOKEN_PASSWORD   : ", $tokenPassword;
echo "\xA", "+ CLIENT_ID    : ", $tokenClientId;
//
echo "\xA--------------------------------------- \xA";
?>
