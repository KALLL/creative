<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: hi
 * Date: 10/31/2019
 * Time: 11:19 PM
 */


$page = "approve_bid";
include "configuration/header.php";

// if asset is not logged in forward asset to login page

$bidding_id = $url->getHttpHeaderData('bidding_id');
if ($user->userExists == 0) {
    $response = array();
    echo json_encode(array("server_response" => "no_user"));
    exit();
} else {
    if ($bidding_id != "") {
       $bid->approve_bidding($bidding_id);
        exit();
    }else{
        echo json_encode(array("server_response" => "approve_bid_error",
            "error" => "You must specify the bidding to be approved!"));
    }

}

