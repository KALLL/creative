<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: Kaleab Yalewdeg
 * Date: 6/13/2019
 * Time: 12:00 PM
 */
        ini_set('display_errors', TRUE);
        error_reporting(E_ALL ^ E_NOTICE);

        include "config.php";
        include "classes/database/Database.php";
        include "classes/asset/CreativeAsset.php";
        include "classes/url/Url.php";

        include "functions/global/Functions.php";

// initiate database connection
        $database = new Database(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// create a url object
        $url = new Url();

// create a asset object and attempt to login asset
        $creativeAsset = new CreativeAsset();







