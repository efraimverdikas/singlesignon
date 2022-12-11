<?php

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;


$tenant = "common";
$client_id = "6978c3de-9bff-478f-8eb5-4013bd19c63a";
$client_secret = "_Ax8Q~01cBUBWP.az8vKBxpth~5_GK3SJi3w1bjN";
$callback = "http://localhost/sso/callback.php";
$scopes = ["User.Read"];

$microsoft = new Auth($tenant,$client_id,$client_secret,$callback,$scopes);

header("location: " . $microsoft->getAuthUrl());