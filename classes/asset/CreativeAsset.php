<?php
/**
 * Created by PhpStorm.
 * CreativeAsset: Kaleab Yalewdeg
 * Date: 6/13/2019
 * Time: 12:27 PM
 */

class CreativeAsset
{
    // region declare asset variables
    var $isError; // determine whether error exists or not (0 - error, 1 - no error)
    var $errorMessage; // contains relevant error message
    var $userExists; // determine whether asset exists or not (0 - asset don't exist, 1 - asset exists)
    var $userData; // contains asset's information
    var $profileInfo; // contains asset's profile
    var $userSettingInfo; // contains asset's settings
    var $userSalt; // contains salt number that is used to encrypt asset's password

    //endregion

    function __construct($userUnique = Array('0', '', ''), $fieldsToSelect = Array('*', '*', '*', '*'))
    {
        global $database;
        $this->isError = 0;
        $this->errorMessage = "";

    }

    // endregion


    function searchAssets($query, $tags)
    {
        global $database;
        if (sizeof($tags) > 0) {
            $tags = implode("|", $tags);;
        } else {
            $tags = "";
        }
        $assets_selection_query = "SELECT * FROM assets WHERE (ID LIKE '%$query%' OR Title LIKE '%$query%' OR Jira LIKE '%$query%' OR Designer LIKE '%$query%' OR Channel LIKE '%$query%' OR Tags LIKE '%$query%') AND  Tags REGEXP '($tags)' ";
        $assets_selection_result = $database->dbQuery($assets_selection_query);
        $results = Array();
        if ($assets_selection_result) {
            while ($final_result = $database->dbFetchArray($assets_selection_result)) {
                array_push($results, array(
                    "ID" => $final_result['ID'],
                    "title" => $final_result['Title'],
                    "jira" => $final_result['Jira'],
                    "designer" => $final_result['Designer'],
                    "channel" => $final_result['Channel'],
                    "reference_image" => $final_result['ID_reference_image'],
                    "email_image" => $final_result['ID_email_image'],
                    "email_cong_image" => $final_result['ID_emailCong_image'],
                    "omg_pc_image_name" => $final_result['ID_omgPc_image'],
                    "omg_pc_wide_image_name" => $final_result['ID_omgPcWide_image'],
                    "omg_mobile_image_name" => $final_result['ID_omgMobile_image'],
                    "tags" => $final_result['Tags']
                ));
            }
            return $results;
        }
    }
    function getSingleAsset($id)
    {
        global $database;

        $asset_detail_selection_query = "SELECT * FROM assets WHERE ID = '$id'";
        $asset_detail_selection_result = $database->dbQuery($asset_detail_selection_query);
        $results = Array();
        if ($asset_detail_selection_result) {
            while ($final_result = $database->dbFetchArray($asset_detail_selection_result)) {
                array_push($results, array(
                    "ID" => $final_result['ID'],
                    "title" => $final_result['Title'],
                    "jira" => $final_result['Jira'],
                    "designer" => $final_result['Designer'],
                    "channel" => $final_result['Channel'],
                    "reference_image" => $final_result['ID_reference_image'],
                    "email_image" => $final_result['ID_email_image'],
                    "email_cong_image" => $final_result['ID_emailCong_image'],
                    "omg_pc_image_name" => $final_result['ID_omgPc_image'],
                    "omg_pc_wide_image_name" => $final_result['ID_omgPcWide_image'],
                    "omg_mobile_image_name" => $final_result['ID_omgMobile_image'],
                    "tags" => $final_result['Tags']
                ));
            }
            return $results;
        }
    }

    public function addAsset($title, $jira, $designer, $channel, $tags,$reference_image_type,$email_image_type,$email_cong_image_type,$omg_pc_image_type,$omg_pc_wide_image_type,$omg_mobile_image_type, $tmpReferenceImageName,$tmpEmailImageName, $tmpEmailCongImageName, $tmpOmgPcImageName, $tmpOmgPcWideImageName, $tmpOmgMobileImageName)
    {
        global $database;


        $tableCreationQuery = 'CREATE TABLE IF NOT EXISTS  assets (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ID_reference_image VARCHAR(30) NOT NULL,
ID_email_image VARCHAR(30) NOT NULL,
ID_emailCong_image VARCHAR(50),
ID_omgPc_image VARCHAR(50),
ID_omgPcWide_image VARCHAR(50),
ID_omgMobile_image VARCHAR(50),
Tags VARCHAR(50),
Title VARCHAR(50),
Jira VARCHAR(50),
Designer VARCHAR(50),
Channel VARCHAR(50)
)';
        $database->dbQuery($tableCreationQuery);

        $insertDetailInfo = "INSERT INTO assets (Title,Jira,Designer,Channel,Tags) VALUES ('$title','$jira','$designer','$channel','$tags')";
        $insertDetailResult = $database->dbQuery($insertDetailInfo);

        if ($insertDetailResult === TRUE) {

            $assetId = $database->dbInsertId();
            $referenceImageName = $assetId . "_reference_image";
            $referenceImageName = $referenceImageName . '.' . $reference_image_type;
            $emailImageName = $assetId . "_email_image";
            $emailImageName = $emailImageName . '.' . $email_image_type;
            $emailCongImageName = $assetId . "_emailCong_image";
            $emailCongImageName = $emailCongImageName . '.' . $email_cong_image_type;
            $omgPcImageName = $assetId . "_omgPc_image";
            $omgPcImageName = $omgPcImageName . '.' . $omg_pc_image_type;
            $omgPcWideImageName = $assetId . "_omgPcWide_image";
            $omgPcWideImageName = $omgPcWideImageName . '.' . $omg_pc_wide_image_type;
            $omgMobileImageName = $assetId . "_omgMobile_image";
            $omgMobileImageName = $omgMobileImageName . '.' . $omg_mobile_image_type;

            if (move_uploaded_file('' . $tmpReferenceImageName . '', 'creativeAssets/images/' . $referenceImageName) && move_uploaded_file('' . $tmpEmailImageName . '', 'creativeAssets/images/' . $emailImageName) && move_uploaded_file('' . $tmpEmailCongImageName . '', 'creativeAssets/images/' . $emailCongImageName) && move_uploaded_file('' . $tmpOmgPcImageName . '', 'creativeAssets/images/' . $omgPcImageName) && move_uploaded_file('' . $tmpOmgPcWideImageName . '', 'creativeAssets/images/' . $omgPcWideImageName) && move_uploaded_file('' . $tmpOmgMobileImageName . '', 'creativeAssets/images/' . $omgMobileImageName)) {
                $database->dbQuery("update assets SET ID_reference_image='$referenceImageName',ID_email_image='$emailImageName',ID_emailCong_image='$emailCongImageName',ID_omgPc_image='$omgPcImageName',ID_omgMobile_image='$omgMobileImageName',ID_omgPcWide_image='$omgPcWideImageName' WHERE ID='$assetId'");
                if ($database->dbAffectedRows($database->db_connection) > 0) {
                    echo json_encode(array("server_response" => "complete_task_success"));
                    exit();
                } else {
                    echo json_encode(array("server_response" => "approve_bidding_error",
                        "error" => "The task is completed before!"));
                }

                echo "Uploaded Successfully";
            }

        }else{
            echo "Upload not successful!";
        }
    }
}