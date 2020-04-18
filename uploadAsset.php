<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: hi
 * Date: 13/04/2020
 * Time: 11:39 PM
 */
//if ( isset( $_POST['reference_image'] ) && isset( $_POST['email_image'] )&& isset( $_POST['emailCong_image'] )&& isset( $_POST['omgPc_image'] )&& isset( $_POST['omgPcWide_image'] )&& isset( $_POST['omgMobile_image'] )&& isset( $_POST['tags'] )) {
//    $image      = $_FILES['image']['name'];
//    $move_image = $_FILES['image']['tmp_name'];
//    $result     = $zenbil_coupon->changeProfile( $image, $move_image );
//}
?>

<?php
include "configuration/header.php";
$config['base_url'] = 'http://localhost/creative/';
//$config['base_url'] = 'http://www.example.com/';
global $database;
//require_once('../system/config-admin.php');

//
//    if (empty($_POST['tags'])) {
//        echo '<span class="text-danger">tags are required.</span>';
//        die();
//    }

if (!isset($_POST['title'])) {
    echo 'You don\'t have title';
    die();
}
if ($_FILES['referenceImage']['size'] < 1) {
    echo 'The referenceImage file needs to br uploaded and must be .zip';
    die();
}
if ($_FILES['emailImage']['size'] < 1) {
    echo 'The emailImage file needs to br uploaded';
    die();
}
if ($_FILES['emailCongImage']['size'] < 1) {
    echo 'The emailCongImage file needs to br uploaded';
    die();
}
if ($_FILES['omgPcImage']['size'] < 1) {
    echo 'The omgPcImage file needs to br uploaded';
    die();
}
if ($_FILES['omgPcWideImage']['size'] < 1) {
    echo 'The omgPcWideImage file needs to br uploaded';
    die();
}
if ($_FILES['omgMobileImage']['size'] < 1) {
    echo 'The omgMobileImage file needs to br uploaded';
    die();
}/*

if($_FILES['file']['size'] < 1)
{
echo 'You need to upload a file! Please try again!';
die();
}*/

$tags = $_POST['selected-tags'];
$title=$_POST['title'];
$jira=$_POST['jira'];
$designer=$_POST['designer'];
$channel=$_POST['channel'];
if (isset($_FILES['referenceImage'])) {
    $tmpReferenceImageName = $_FILES['referenceImage']['tmp_name'];
    $tmpEmailImageName = $_FILES['emailImage']['tmp_name'];
    $tmpEmailCongImageName = $_FILES['emailCongImage']['tmp_name'];
    $tmpOmgPcImageName = $_FILES['omgPcImage']['tmp_name'];
    $tmpOmgPcWideImageName = $_FILES['omgPcWideImage']['tmp_name'];
    $tmpOmgMobileImageName = $_FILES['omgMobileImage']['tmp_name'];

    $reference_image_type = pathinfo($_FILES['referenceImage']['name']);
    $reference_image_type = $reference_image_type['extension'];

    $email_image_type = pathinfo($_FILES['emailImage']['name']);
    $email_image_type = $email_image_type['extension'];

    $email_cong_image_type = pathinfo($_FILES['emailCongImage']['name']);
    $email_cong_image_type = $email_cong_image_type['extension'];

    $omg_pc_image_type = pathinfo($_FILES['omgPcImage']['name']);
    $omg_pc_image_type = $omg_pc_image_type['extension'];

    $omg_pc_wide_image_type = pathinfo($_FILES['omgPcWideImage']['name']);
    $omg_pc_wide_image_type = $omg_pc_wide_image_type['extension'];

    $omg_mobile_image_type = pathinfo($_FILES['omgMobileImage']['name']);
    $omg_mobile_image_type = $omg_mobile_image_type['extension'];

$creativeAsset->addAsset($title,$jira,$designer,$channel,$tags,$reference_image_type,$email_image_type,$email_cong_image_type,$omg_pc_image_type,$omg_pc_wide_image_type,$omg_mobile_image_type, $tmpReferenceImageName,$tmpEmailImageName, $tmpEmailCongImageName, $tmpOmgPcImageName, $tmpOmgPcWideImageName, $tmpOmgMobileImageName);




} else {
    echo '<span class="text-danger"> No files selected.</span>';
}

?>