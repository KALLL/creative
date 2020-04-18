<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: hi
 * Date: 10/31/2019
 * Time: 11:19 PM
 */


$page = "delete_bidding_info";
include "configuration/header.php";

// if asset is not logged in forward asset to login page
$bidding_id = $url->getHttpHeaderData('bidding_id');
if ($user->userExists == 0) {
    $response = array();
    echo json_encode(array("server_response" => "no_user"));
    exit();
} else {
    if ($bidding_id != "") {
        $bid->delete_bidding_info($bidding_id);
    }else{
        echo json_encode(array("server_response" => "delete_bid_error",
            "error"=>"You must specify the bid to be deleted!"));
        exit();
    }
}

