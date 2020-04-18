<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: Kaleab Yalewdeg
 * Date: 6/14/2019
 * Time: 10:14 AM
 */

$page = "login";
include "configuration/header.php";

// if asset is logged in, exit from login page

// initiate error variables
$isError = 0;
$errorMessage = "";

// get asset login info (email or phone)
$email = $url->getHttpHeaderData('email');
$password = $url->getHttpHeaderData('password');
// attempt to login asset
echo $user->logout();
// check weather login was successful or not
if ($user->isError == 0) {
    exit();
}