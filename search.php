<?php

include "configuration/header.php";

if (isset($_POST['query']) || isset($_POST['tags'])) {

    echo json_encode($creativeAsset->searchAssets($_POST['query'],$_POST['tags']));

    exit();
}else{

}


?>
