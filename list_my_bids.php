<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: hi
 * Date: 10/31/2019
 * Time: 11:19 PM
 */


$page = "list_my_bids";
include "configuration/header.php";

// if asset is not logged in forward asset to login page

if ($user->userExists == 0) {
    $response = array();
    echo json_encode(array("server_response" => "no_user"));
    exit();
} else {
  $bid->view_my_bids();
    exit();
}

