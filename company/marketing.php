<?php

$valid_passwords = array ("jane" => "doe");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="LOGIN MARKETING EMPLOYEE"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
}

// If arrives here, is a valid user.
echo "<p>Welcome $user.</p>";
echo "<p>Successfully Logged into the MARKETING Department.</p>";

?>