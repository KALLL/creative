<?php

include "configuration/header.php";

if (isset($_POST['id'])) {
    echo json_encode($creativeAsset->getSingleAsset($_POST['id']));
    exit();
}else{

}


?>