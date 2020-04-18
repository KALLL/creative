<?php
/**
 * Created by PhpStorm.
 * User: Kaleab Yalewdeg
 * Date: 6/13/2019
 * Time: 11:58 AM
 */

$page = "home";
include "configuration/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<!--    region HEAD-->
<head>

    <link rel="stylesheet" type="text/css" href="assets/css/admin-styles.css"/>
    <link rel="stylesheet" href="/css/accordion.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/checkbox.css">

    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/file_input.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"/>
    <script type="text/javascript" src="js/jquery.amsify.suggestags.js"></script>
    <link rel="stylesheet" type="text/css" href="css/amsify.suggestags.css">
    <link rel="stylesheet" type="text/css" href="css/file_input.css">
    <style>
        h1, h2 {
            margin: 15px 5px;
            text-align: center;

        }
    </style>

</head>
<body style="background-color:#d2d2d2; margin-left: 3%; min-height: 800px;   ">
<h3 class="accordion-non-capitalized" style="text-align: left; margin-top: 1%">Creative System Admin</h3>
<form id="1upload" action="uploadAsset.php" method="post" enctype="multipart/form-data">
    <div class="row" style="margin-top: 1%; height: 100%;">
        <div class="col-md-7"
             style="min-height:700px;border-right:6px; background-color: white; margin-right: auto;padding: 2%">
            <div class="accordion" id="accorID">
                <div class="card ">
                    <div class="card-header" id="headerOne">
                        <div class="row">
                            <div class="col-md-6">
                                <button id="collapse1" title="Ayrıntıları görmek için tıklayınız." type="button"
                                        class="btn btn-light accordion-non-capitalized"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" style="color: #46474b;
    font-size: 20px;">Creative Assets
                                </button>
                            </div>
                            <div class="col-md-6" style="text-align: right">
                                <button id="collapse1" title="Ayrıntıları görmek için tıklayınız." type="button"
                                        class="btn btn-light accordion-non-capitalized"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" style="color: #46474b;
    font-size: 20px;">1/3
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="collapse show" id="collapseOne" aria-labelledby="headerOne" data-parent="#accorID">
                    <div class="card-body" style="width: 100%;">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <!--                        <ol class="carousel-indicators">-->
                            <!--                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>-->
                            <!--                            <li data-target="#blogCarousel" data-slide-to="1"></li>-->
                            <!--                        </ol>-->

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-6 ">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">Reference image</h3>
                                                <div>
                                                    <img class="img-preview" id="preview1" alt="Select File"
                                                         src="images/reference.svg"
                                                         style="cursor: pointer;" data-role="0">
                                                </div>
                                                <input name="referenceImage" type="file" id="FileUpload1" data-id="1"
                                                       style="display: none"/>
                                                <div class="team-content">
                                                    <span class="spn-file-path" id="spnFilePath1"></span>
                                                </div>

                                                <div class="social imgFileUpload" data-id="1">
                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">Email</h3>
                                                <div>
                                                    <img class="img-preview" id="preview2" src="images/email.svg"
                                                         data-role="0">
                                                </div>
                                                <input name="emailImage" type="file" id="FileUpload2" data-id="2"
                                                       style="display: none"/>
                                                <div class="team-content">
                                                    <span class="spn-file-path" id="spnFilePath2"></span>
                                                </div>
                                                <div class="social imgFileUpload" data-id="2">

                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">Email Congrads</h3>
                                                <div>
                                                    <img class="img-preview" id="preview3"
                                                         src="images/email_comgrads.svg" data-role="0">
                                                </div>
                                                <input name="emailCongImage" type="file" id="FileUpload3" data-id="3"
                                                       style="display: none"/>

                                                <div class="team-content">

                                                    <span class="spn-file-path" id="spnFilePath3" data-id="3"></span>
                                                </div>
                                                <div class="social imgFileUpload" data-id="3">

                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">OMG pc</h3>
                                                <div>
                                                    <img class="img-preview" id="preview4" src="images/omg.svg"
                                                         data-role="0">
                                                </div>
                                                <input name="omgPcImage" type="file" id="FileUpload4" data-id="4"
                                                       style="display: none"/>

                                                <div class="team-content">

                                                    <span class="spn-file-path" id="spnFilePath4" data-id="4"></span>
                                                </div>
                                                <div class="social imgFileUpload" data-id="4">

                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">OMG pc wide</h3>
                                                <div>
                                                    <img class="img-preview" id="preview5" src="images/omg_wide.svg"
                                                         data-role="0">
                                                </div>
                                                <input name="omgPcWideImage" type="file" id="FileUpload5" data-id="5"
                                                       style="display: none"/>
                                                <div class="team-content">
                                                    <span class="spn-file-path" id="spnFilePath5" data-id="5"></span>
                                                </div>
                                                <div class="social imgFileUpload" data-id="5">

                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="our-team">
                                                <h3 style="margin-top: 10%" class="title">OMG mobile</h3>
                                                <div>
                                                    <img class="img-preview" id="preview6" src="images/omg_mobile.svg"
                                                         data-role="0">
                                                </div>
                                                <input name="omgMobileImage" type="file" id="FileUpload6" data-id="6"
                                                       style="display: none"/>
                                                <div class="team-content">
                                                    <span class="spn-file-path" id="spnFilePath6" data-id="6"></span>
                                                </div>
                                                <div class="social imgFileUpload" data-id="6">

                                                    <img style="width=50%;top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto; "
                                                         class="mx-auto d-block" src="images/add2.svg"
                                                         alt="Responsive image">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="margin-top:2%; text-align: center; width: 100%;">
                                        <button id="step-1-next" type="button"
                                                style="alignment: center; padding-left: 3em; padding-right: 3em;"
                                                class="btn btn-dark">NEXT
                                        </button>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->


                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->
                        <!--                    <div style="text-align: center; width: 100%;">-->
                        <!--                        <button type="button" style="alignment: center; padding-left: 3em; padding-right: 3em;"-->
                        <!--                                class="btn btn-dark">NEXT-->
                        <!--                        </button>-->
                        <!--                    </div>-->
                    </div>
                </div>


            </div>

            <div class="card ">
                <div class="card-header" id="headerTwo">
                    <div class="row">
                        <div class="col-md-6">
                            <button id="collapse2" title="Ayrıntıları görmek için tıklayınız." type="button"
                                    class="btn btn-light accordion-non-capitalized"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" style="color: #46474b;
    font-size: 20px;">Information
                            </button>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <button id="collapse2"
                                    title="Ayrıntıları görmek için tıklayınız."
                                    type="button"
                                    class="btn btn-light accordion-non-capitalized"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" style="color: #46474b;
    font-size: 20px;">2/3
                            </button>
                        </div>
                    </div>


                </div>
                <div class="collapse" id="collapseTwo" aria-labelledby="headerTwo" data-parent="#accorID">

                    <div style="margin-left: 2%; width: 80%;" class="card-body">
                        <h5 style="margin-top: 2%;  color: #787c7f;">TITLE</h5>
                        <input type="text" style="width: 100%; " name="title" required>
                        <h5 style="margin-top: 2%;  color: #787c7f;">JIRA#</h5>
                        <input type="text" style="width: 100%; " name="jira" required>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 style="margin-top: 2%;color: #787c7f; " for="bootcamplocation">DESIGNER</h5>
                                    <select class="form-control" id="bootcamplocation" name="designer">
                                        <option value="">Select designer</option>
                                        <option value="Adrian">Adrian</option>
                                        <option value="Ali">Ali</option>
                                        <option value="Ana">Ana</option>
                                        <option value="Asaf">Asaf</option>
                                        <option value="Inbal">Inbal</option>
                                        <option value="Irina">Irina</option>
                                        <option value="Kfir">Kfir</option>
                                        <option value="Liat">Liat</option>
                                        <option value="Mike">Mike</option>
                                        <option value="Mor">Mor</option>
                                        <option value="Ran">Ran</option>
                                        <option value="Razvan">Razvan</option>
                                        <option value="Other">Other</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 style="margin-top: 2%; color: #787c7f;" for="bootcamplocation">CHANNEL</h5>
                                    <select class="form-control" id="bootcamplocation" name="channel">
                                        <option value="">Select Channel</option>
                                        <option value="AFF">AFF</option>
                                        <option value="CONVERSION">CONVERSION</option>
                                        <option value="CRM">CRM</option>
                                        <option value="CVM">CVM</option>
                                        <option value="MB">MB</option>
                                        <option value="SEM">SEM</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SOCIAL">SOCIAL</option>
                                        <option value="VIP">VIP</option>
                                    </select>
                                </div>
                            </div>
                            <div style="text-align: center; width: 100%;">
                                <button id="step-2-next" type="button" style="alignment: center; padding-left: 3em; padding-right: 3em;"
                                        class="btn btn-dark">NEXT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div style="elevation: below" class="card-header" id="headerThree">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" id="collapse3" title="Ayrıntıları görmek için tıklayınız."
                                    class="btn btn-light accordion-non-capitalized"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree" style="color: #46474b;
    font-size: 20px;">Tags
                            </button>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <button type="button" id="collapse3" title="Ayrıntıları görmek için tıklayınız."
                                    class="btn btn-light"
                                    style="color: #46474b;
    font-size: 20px;"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">3/3
                            </button>
                        </div>
                    </div>
                </div>
                <div class="collapse" style="margin: 2%;" id="collapseThree" aria-labelledby="headerThree"
                     data-parent="#accorID">
                    <div class="col-md-12" style=" background-color: white; ">
                        <h5 style="margin-top: 2%; color: #787c7f;" for="bootcamplocation">BRAND:</h5></div>
                    <button type="button" class="my-tags" data-role="777">777</button>
                    <button type="button" class="my-tags" data-role="888">888</button>
                    <button type="button" class="my-tags" data-role="VIP">VIP</button>
                    <div class="col-md-12" style=" background-color: white; margin: auto; margin-right: unset">
                        <h5 style="margin-top: 2%; color: #787c7f;" for="bootcamplocation">ASSETS:</h5></div>
                    <button type="button" class="my-tags" data-role="BANNERS">BANNERS</button>
                    <button type="button" class="my-tags" data-role="EMAIL">EMAIL</button>
                    <button type="button" class="my-tags" data-role="LP">LP</button>
                    <button type="button" class="my-tags" data-role="MAIN-BANNER">MAIN-BANNER</button>
                    <button type="button" class="my-tags" data-role="MID-BANNER">MID-BANNER</button>
                    <button type="button" class="my-tags" data-role="OMG">OMG</button>
                    <button type="button" class="my-tags" data-role="PROMO-PAGE">PROMO-PAGE</button>
                    <button type="button" class="my-tags" data-role="SOCIAL">SOCIAL</button>
                    <button type="button" class="my-tags" data-role="OTHER">OTHER</button>
                </div>
            </div>
        </div>
        <div id="mainPreviewContainer" class="col-md-3"
             style="height: 700px; background-color: white; margin: auto; margin-right: unset; visibility: hidden ">
            <div class="shadow-sm  mb-3 bg-white rounded" style="align-items: center; height: 40%; ">
                <img id="mainPreview" width="100%" height="100%" class="mx-auto d-block" src="images/placeholder.svg"
                     alt="Responsive image">
            </div>
            <div class="row check-row">
                <input class="my-checkbox" type="checkbox" aria-label="Checkbox for following text input"><span><h6
                            class="img-attributes">PATH</h6></span>
            </div>
            <div class="row check-row">
                <input class="my-checkbox" type="checkbox" aria-label="Checkbox for following text input"><span><h6
                            class="img-attributes">TITLE</h6></span>
            </div>
            <div class="row check-row">
                <input class="my-checkbox" type="checkbox" aria-label="Checkbox for following text input"><span><h6
                            class="img-attributes">JIRA#</h6></span>
            </div>
            <div class="row check-row">
                <input class="my-checkbox" type="checkbox" aria-label="Checkbox for following text input"><span><h6
                            class="img-attributes">DESIGNER</h6></span>
            </div>
            <div class="row check-row">
                <input class="my-checkbox" type="checkbox" aria-label="Checkbox for following text input"><span><h6
                            class="img-attributes">CHANNEL</h6></span>
            </div>
            <h6 style="color: #46474b;
    font-size: 20px; margin-top: 2%">TAGS</h6>
            <span id="picture-tags"></span>
            <div style="text-align: center; width: 100%; position: absolute;
right:    0;
bottom:   0;">
                <input id="tags-holder" name="selected-tags" value="" type="text" style="visibility: hidden"/>
                <button type="submit" style=" padding-left: 3em; padding-right: 3em; margin-bottom: 1em"
                        class="btn btn-dark">SAVE
                </button>
            </div>
        </div>

    </div>
</form>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        var selected = false;
        var selectedTags = []
        var indexAt;

        function readURL(input, itemNo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview' + itemNo).attr('src', e.target.result);
                    if (itemNo === "1") {
                        $('#mainPreview').attr('src', e.target.result);
                    }

                }
                $('#preview' + itemNo).attr('data-role', '1');
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        function checkRole(role, arr) {
            var status = false;

            for (var i = 0; i < arr.length; i++) {
                var name = arr[i];
                if (name === role) {
                    status = true;
                    selectedTags.splice(i, 1);
                    break;
                }
            }
            if (status === false) {
                selectedTags.push(role)
                $('#tags-holder').attr('value', selectedTags);
                $('#picture-tags').text(selectedTags.toString());
            }
        }

        var image_reference = $(".imgFileUpload");
        image_reference.click(function () {
            var itemSpecifier = $(this).attr("data-id");
            var fileupload = $("#FileUpload" + itemSpecifier);
            const filePath = $("#spnFilePath" + itemSpecifier);
            fileupload.click();
            fileupload.change(function () {
                readURL(this, itemSpecifier);
                var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                filePath.html("<b>Selected File: </b><br>" + fileName);
            });
        });
        $(".my-tags").click(function () {
            // $(this).toggleClass("my-tags", remove_tags($(this).attr("data-role")))
            $(this).toggleClass("my-tags-clicked", checkRole($(this).attr("data-role"), selectedTags))
        });
        $("#step-1-next").click(function () {
            $("#collapse2").click()
            var prev1 = $("#preview1").attr("data-role")
            if (prev1 !== "0") {
                $("#mainPreviewContainer").css("visibility", "visible");
            }
        })
        $("#step-2-next").click(function () {
            $("#collapse2").click()
            $("#collapse3").click()
        })


    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"
        type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

</body>
</html>
