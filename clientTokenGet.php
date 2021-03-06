<?php

// To test:
// https://owlc.herokuapp.com/clientTokenGet.php?clientid=abc&tokenPassword=def

// Token is generated by a Twilio Function.
$tokenHost = htmlspecialchars($_GET["tokenhost"]);
if ($tokenHost == "") {
    $tokenHost = getenv('TOKEN_HOST');
    if ($tokenHost == "") {
        echo '-- TOKEN_HOST must be an environment variable.';
        return;
    }
}
$tokenClientId = htmlspecialchars($_GET["tokenhost"]);
if ($tokenClientId == "") {
    $tokenClientId = getenv('CLIENT_ID');
    if ($tokenClientId == "") {
        $tokenClientId = "owluser";
    }
}
$tokenPassword = htmlspecialchars($_GET["tokenPassword"]);
if ($tokenClientId == "") {
    echo '-- TOKEN_HOST must be an environment variable.';
    return;
}

echo "-- tokenPassword:" . $tokenPassword . ": TOKEN_PASSWORD:" . getenv('TOKEN_PASSWORD') . ":";
if ($tokenPassword != getenv('TOKEN_PASSWORD')) {
    echo "-- Password invalid.";
    return;
}
$theRequest = "https://" . $tokenHost . "/tokenclient?clientid=" . $tokenClientId;
// echo "+ $theRequest :' . $theRequest . ': ';
$token = file_get_contents($theRequest);
echo $token;
?>
