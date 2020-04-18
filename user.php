<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Creative Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Accordion-3338arvorept-1.css">
    <link rel="stylesheet" href="assets/css/Accordion-3338arvorept.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/admin-styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            margin-bottom: 5%;
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 0;
            top: 0;
            right: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            margin-top: 38px;
            /*padding-top: 60px;*/
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            float: left;
            position: absolute;
            top: 0;
            left: 0;
            right: 25px;
            font-size: 36px;

        }

        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            margin-left: 18%;
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;

            border-radius: 15px;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #6b6b6b;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 10px;
            top: 6px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .img-attributes {
            font-size: 12px;
        }

        .check-row {
            height: 25px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }

        }
    </style>
</head>

<body id="body" style="background-color: #e6e6e6;">
<div id="wrapper">
    <div id="sidebar-wrapper" style="background-color: white;">
        <div class="row">
            <div class="col offset-md-0 d-flex flex-grow-1 flex-shrink-1 justify-content-end align-content-end align-self-end flex-wrap mr-auto align-items-md-end"
                 style="padding-left: unset;padding-right: 0px;"><img
                        class="img-fluid d-md-flex flex-row flex-grow-0 align-items-center align-content-center align-self-end ml-auto justify-content-md-end align-items-md-center"
                        style="margin-top: 10%;" src="assets/img/icons8_Vsco_Logo.svg" width="50%"></div>
            <div class="col text-center"
                 style="padding-left: unset;"><span
                        class="d-md-flex align-content-center align-self-center flex-wrap mb-auto justify-content-md-start align-items-md-center"
                        style="padding-top: 25%;"><strong>LOGO</strong></span></div>
        </div>
        <div class="text-center text-dark mx-auto"
             style="margin-top: 3%;height: 1px;background-color: #e6e6e6;width: 80%;"></div>
        <input id="query-field" class="d-flex mx-auto" type="text" style="margin-top: 5%;">
        <button id="btn-search"
                class="btn btn-dark text-sm-center text-md-center text-lg-center text-xl-center d-flex d-print-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center align-content-center flex-wrap mx-auto justify-content-md-start align-items-md-start"
                style="padding-right: 20px;padding-left: 20px;border-radius: 100px;height: 20px;margin-top: 2%;vertical-align: center;margin-bottom: 2%;font-size: 13px;text-align: center;"
                type="button">SEARCH
        </button>
        <div class="text-center text-dark mx-auto"
             style="margin-top: 3%;height: 0.5px;background-color: #0d0606;width: 80%;"></div>
        <button id="clear_filters"
                class="btn btn-dark text-center d-flex align-content-center align-self-center flex-wrap mx-auto"
                style="padding-right: 3%;margin-top: 2%;font-size: 10px;width: 150px;height: 20px;border-radius: 100px; background-color: #6b6b6b"
                type="button"><img src="assets/img/icons8_broom_3.svg" style="height: 15px;margin-right: 5px;">CLEAR ALL
            FILTERS
        </button>
        <div
                class="row" style="margin-top: 3%;">
            <div class="col-md-8 offset-md-5 d-flex align-content-start align-self-center flex-wrap mx-auto justify-content-md-start align-items-md-end"
                 style="width: 181.6px;padding-right: 0px;"><img
                        class="d-md-flex flex-row justify-content-start align-items-start align-content-start align-self-start flex-wrap my-auto align-items-md-start"
                        src="assets/img/icons8_filter_2.svg" style="height: 13px;padding-top: 2px;"><span
                        class="d-flex align-content-center flex-wrap my-auto"
                        style="font-size: 13px;">Filters</span></div>
        </div>
        <div>
            <button class="ps-accordion" type="button">Brands</button>
            <div class="ps-panel">
                <button class="my-tags" data-role="777">777</button>
                <button class="my-tags" data-role="888">888</button>
                <button class="my-tags" data-role="VIP">VIP</button>
            </div>
            <button class="ps-accordion" type="button">Assets</button>
            <div class="ps-panel">
                <button class="my-tags" data-role="BANNERS">BANNERS</button>
                <button class="my-tags" data-role="EMAIL">EMAIL</button>
                <button class="my-tags" data-role="LP">LP</button>
                <button class="my-tags" data-role="MAIN-BANNER">MAIN-BANNER</button>
                <button class="my-tags" data-role="MID-BANNER">MID-BANNER</button>
                <button class="my-tags" data-role="OMG">OMG</button>
                <button class="my-tags" data-role="PROMO-PAGE">PROMO-PAGE</button>
                <button class="my-tags" data-role="SOCIAL">SOCIAL</button>
                <button class="my-tags" data-role="OTHER">OTHER</button>
            </div>
            <button class="ps-accordion" type="button">Country</button>
            <div class="ps-panel">
                <p><br></p>
            </div>
            <button class="ps-accordion" type="button">Languages</button>
            <div class="ps-panel">

            </div>
            <button class="ps-accordion" type="button">Games Type</button>
            <div class="ps-panel">
                <button class="my-tags" data-role="Arcade">Arcade</button>
                <button class="my-tags" data-role="Baccarat">Baccarat</button>
                <button class="my-tags" data-role="Blackjack">Blackjack</button>
                <button class="my-tags" data-role="Live-casino">Live-casino</button>
                <button class="my-tags" data-role="Poker">Poker</button>
                <button class="my-tags" data-role="Roulette">Roulette</button>
                <button class="my-tags" data-role="Scratch-card">Scratch-card</button>
                <button class="my-tags" data-role="Slot-races">Slot-races</button>
                <button class="my-tags" data-role="Slots">Slots</button>
                <button class="my-tags" data-role="Sports">Sports</button>
            </div>
            <button class="ps-accordion" type="button">Seasons & Holidays</button>
            <div class="ps-panel">

            </div>
            <button class="ps-accordion" type="button">Providers & Elements</button>
            <div class="ps-panel">

            </div>
            <button class="ps-accordion" type="button">Other</button>
            <div>
                <div class="ps-panel">

                </div>
            </div>
            <div class="ps-panel">

            </div>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i
                        class="fa fa-bars"></i></a>
            <div class="photo-gallery">
                <div class="container">

                    <div id="row-photos" class="row photos">


                    </div>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="shadow-sm  mb-3 bg-white rounded" style="align-items: center; height: 40%; ">
                            <img id="mainPreview" width="100%" height="100%" class="mx-auto d-block"
                                 src="images/placeholder.svg"
                                 alt="Responsive image">
                        </div>
                        <div style="margin-left: 20%">
                            <div class="row check-row">
                                <img src="images/hash.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_id">123445</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/image_name.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_image_name">Image Name</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/path.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_path">Path</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/jira.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_jira">Jira#</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/designer.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_designer">Designer</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/channel.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_channel">Channel</h6></span>
                            </div>
                            <div class="row check-row">
                                <img src="images/tags.svg" style="height: 18px;margin-right: 10px;"><span><h6
                                            class="img-attributes" id="spn_tags">live,888,tags</h6></span>
                            </div>
                        </div>
                        <div style="width: 100%;margin-left: 5%; bottom: 0" class="row">
                            <div id="myVariants"></div>
                        </div>
                        <div style="position: absolute; bottom: 0; width: 100%; margin-bottom: 6%">
                            <button id="add-to-collection"
                                    class="btn btn-dark text-center d-flex align-content-center align-self-center flex-wrap mx-auto"
                                    style="padding-right: 3%;margin-top: 2%;font-size: 10px;width: 180px;border-radius: 100px; background-color: #6b6b6b; margin-bottom: 38px"
                                    type="button"><img src="images/add3.svg"
                                                       style="height: 20px;margin-right: 5px;"><span
                                        style="font-size: 12px">ADD TO COLLECTION</span>
                            </button>
                        </div>
                        <nav id="bottom-nav" class="navbar fixed-bottom navbar-light bg-light"
                             style="width: 100%; height: 20%;  border: 1px black; visibility: hidden">
                            <a class="navbar-brand" href="#">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <div id="collections-container" class="row scrolling-wrapper">

                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="vertical-align: center">
                                        <button id="email-collection"
                                                class="btn btn-dark text-center d-flex align-content-center align-self-center flex-wrap mx-auto"
                                                style="padding-right: 3%;font-size: 10px;width: 140px;border-radius: 100px; background-color: #6b6b6b; margin-top: 15%"
                                                type="button"><img src="images/email3.svg"
                                                                   style="height: 14px;margin-right: 2px;"><span
                                                    style="font-size: 10px; float: right">EMAIL COLLECTION</span>
                                        </button>
                                    </div>

                                </div>
                            </a>
                        </nav>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var selected = false;
        var selectedTags = []
        var indexAt;
        var searchQuery = '';
        var generalResponse = []
        var collectionsArray = []
        var collectionsDOM = ''

        getAsset();

        $("#add-to-collection").click(function () {
            var existInColl = false;
            if (collectionsArray.length === 0) {
                $("#bottom-nav").css('visibility', 'visible');
                $("#email-collection").css('visibility', 'visible');
                collectionsDOM = '<div id="coll-' + $(this).attr("data-id") + '" class="col-sm-3 col-md-1 col-lg-2 item"\n' +
                    '                                                 style="box-shadow: black; padding-bottom: 10px; padding-top: 10px"><span\n' +
                    '                                                        style="font-size: 10px;"></span>\n' +

                    '                                                <img class="img-fluid img-at-collection" data-id="' + $(this).attr("data-id") + '"\n' +
                    '                                                     src="creativeAssets/images/' + generalResponse[parseInt($(this).attr("data-id"))]['reference_image'] + '"\n' +
                    '                                                     style="max-width:  100%"><span\n' +
                    '                                                         style="font-size: 10px; width: 100%"></span>' +
                    '                                                <img src="images/cancel.svg" class="rounded-circle remove" data-id="' + $(this).attr("data-id") + '" style="margin-left:-20px; width: 25px; bottom: 0; position: absolute;background-color: white"><div>'
                // alert(parseInt($(this).attr("data-id")))
                // alert(generalResponse[parseInt($(this).attr("data-id"))]["title"])
                collectionsArray.push($(this).attr("data-id"))
                $("#collections-container").append(collectionsDOM)
                $(".remove").click(async function () {

                    for (var i = 0; i < collectionsArray.length; i++) {
                        var name = collectionsArray[i];
                        if (name === $(this).attr("data-id")) {
                            collectionsArray.splice(i, 1);
                            if (collectionsArray.length === 0) {
                                $("#email-collection").css('visibility', 'hidden');
                                $("#bottom-nav").css('visibility', 'hidden');

                            }
                            break;
                        }
                    }
                    $("#coll-" + $(this).attr("data-id")).remove()
                })
            } else {
                for (var i = 0; i < collectionsArray.length; i++) {
                    var name = collectionsArray[i];
                    if (name === $(this).attr("data-id")) {
                        existInColl = true;
                    }
                }
                if (existInColl === false) {
                    $("#bottom-nav").css('visibility', 'visible');
                    $("#email-collection").css('visibility', 'visible');
                    collectionsDOM = '<div id="coll-' + $(this).attr("data-id") + '" class="col-sm-3 col-md-1 col-lg-2 item"\n' +
                        '                                                 style="box-shadow: black; padding-bottom: 10px; padding-top: 10px"><span\n' +
                        '                                                        style="font-size: 10px;"></span>\n' +

                        '                                                <img class="img-fluid img-at-collection" data-id="' + $(this).attr("data-id") + '"\n' +
                        '                                                     src="creativeAssets/images/' + generalResponse[parseInt($(this).attr("data-id"))]['reference_image'] + '"\n' +
                        '                                                     style="max-width:  100%"><span\n' +
                        '                                                         style="font-size: 10px; width: 100%"></span>' +
                        '                                                <img src="images/cancel.svg" class="rounded-circle remove" data-id="' + $(this).attr("data-id") + '" style="margin-left:-20px; width: 25px; bottom: 0; position: absolute;background-color: white"><div>'
                    // alert(parseInt($(this).attr("data-id")))
                    // alert(generalResponse[parseInt($(this).attr("data-id"))]["title"])
                    collectionsArray.push($(this).attr("data-id"))
                    $("#collections-container").append(collectionsDOM)
                    $(".remove").click(async function () {

                        for (var i = 0; i < collectionsArray.length; i++) {
                            var name = collectionsArray[i];
                            if (name === $(this).attr("data-id")) {
                                collectionsArray.splice(i, 1);
                                if (collectionsArray.length === 0) {
                                    $("#email-collection").css('visibility', 'hidden');
                                    $("#bottom-nav").css('visibility', 'hidden');

                                }
                                break;
                            }
                        }
                        $("#coll-" + $(this).attr("data-id")).remove()
                    })
                }


            }
        })




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
        }
    }

    $(".my-tags").click(function () {
        // $(this).toggleClass("my-tags", remove_tags($(this).attr("data-role")))
        $(this).toggleClass("my-tags-clicked", checkRole($(this).attr("data-role"), selectedTags))
    });
    $(".ps-accordion").click(function () {
        $(this).toggleClass("ps-accordion-clicked")
    })
    $("#btn-search").click(function () {
        getAsset()
    })
    $("#clear_filters").click(function () {
        selectedTags = []
        $(".my-tags").removeClass("my-tags-clicked")
    })
    // $(".remove").click(function () {
    //     alert(collectionsArray.length)
    //
    //     for (var i = 0; i < collectionsArray.length; i++) {
    //         var name = collectionsArray[i];
    //
    //         if (name === $(this).attr("data-id")) {
    //             collectionsArray.splice(i, 1);
    //             $("#coll-" + $(this).attr("data-id")).remove()
    //
    //             if (collectionsArray.length===0) {
    //                 alert("it is 0")
    //                 $("#bottom-nav").css('visibility', 'hidden');
    //             }
    //             break;
    //         }
    //     }
    // })

    function getAsset() {
        searchQuery = $("#query-field").val();


        $.ajax({
            url: "search.php",
            method: "POST",
            data: {
                query: searchQuery, tags: selectedTags
            }, headers: {
                contentType: "application/json",
            },
            beforeSend: function () {
                $("#res").html('Uploading..Please wait!');

            },
            success: function (response) {
                response = JSON.parse(response);
                generalResponse = response
                // $("#body").html('<h1>Says' + response.body + '</h1>');
                var resultDOM = '<div id="row-photos" class="row photos">';
                for (i = 0; i < response.length; i++) {
                    resultDOM += ' <div class="col-sm-6 col-md-4 col-lg-3 item"><span style="font-size: 10px;">' + response[i]['title'] + '</span>\n' +
                        '                            <button class="btn btn-primary float-right flex-row-reverse flex-grow-1 flex-shrink-0 flex-fill align-items-end align-content-end align-self-end flex-wrap mx-auto justify-content-md-center align-items-md-end coll-item"\n' +
                        '                                    type="button"\n' +
                        '                                    style="padding: 0;width: 20px;background-color: rgba(0,123,255,0); border: none rgba(12,12,12,0);" data-id="' + i + '">\n' +
                        '                                <img src="assets/img/add2.svg"></button>\n' +
                        '                            <img  class="img-fluid gallery-item"\n' +
                        '                                                                                        data-id="' + i + '"  src="creativeAssets/images/' + response[i]['reference_image'] + '" ><span\n' +
                        '                                    style="font-size: 10px;" >' + response[i]['tags'] + '</span></div>'
                }
                resultDOM += '</div>'
                $("#row-photos").replaceWith(resultDOM);
                $(".gallery-item").click(function () {
                    var picVariantDOM = '';
                    $("#mainPreview").attr('src', "creativeAssets/images/" + generalResponse[parseInt($(this).attr("data-id"))]['reference_image'] + "");
                    $("#spn_id").text(generalResponse[parseInt($(this).attr("data-id"))]['ID']);
                    $("#spn_image_name").text(generalResponse[parseInt($(this).attr("data-id"))]['title']);

                    // $("#spn_path").text(location.protocol + "//" + location.hostname + "/creative/creativeAssets/images/" + response[0]['reference_image'])
                    $("#spn_path").text("" + generalResponse[parseInt($(this).attr("data-id"))]['reference_image']);
                    $("#spn_jira").text(generalResponse[parseInt($(this).attr("data-id"))]['jira']);
                    $("#spn_designer").text(generalResponse[parseInt($(this).attr("data-id"))]['designer']);
                    $("#spn_channel").text(generalResponse[parseInt($(this).attr("data-id"))]['channel']);
                    $("#spn_tags").text(generalResponse[parseInt($(this).attr("data-id"))]['tags']);
                    $("#add-to-collection").attr("data-id", parseInt($(this).attr("data-id")));
                    openNav()
                    // if (response[0]['reference_image'] !== "") {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="checked">\n' +
                    //         '  <span class="checkmark"></span> \n' +
                    //         '</label>' +
                    //         '<div>one</div>' +
                    //         '</div>'
                    // }
                    // if (response[0]['email_image'] !== '') {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="">\n' +
                    //         '  <span class="checkmark"></span>\n' +
                    //         '</label>\n' +
                    //         '<div>EMAIL</div>\n' +
                    //         '</div>'
                    // }
                    // if (response[0]['email_cong_image'] !== '') {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="checked">\n' +
                    //         '  <span class="checkmark"></span> \n' +
                    //         '</label>\n' +
                    //         '<div>OMG</div>\n' +
                    //         '</div>'
                    // }
                    // if (response[0]['omg_pc_image_name'] !== '') {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="checked">\n' +
                    //         '  <span class="checkmark"></span>\n' +
                    //         '</label>\n' +
                    //         '<div>BANNERS</div>\n' +
                    //         '</div>'
                    // }
                    // if (response[0]['omg_pc_wide_image_name'] !== '') {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="checked">\n' +
                    //         '  <span class="checkmark"></span>\n' +
                    //         '</label>\n' +
                    //         '<div>PROMO</div>\n' +
                    //         '</div>'
                    // }
                    // if (response[0]['omg_mobile_image_name'] !== '') {
                    //     picVariantDOM += '<div class="col-md-3">' +
                    //         '<label class="container">\n' +
                    //         '  <input type="checkbox" checked="checked">\n' +
                    //         '  <span class="checkmark"></span>\n' +
                    //         '</label>\n' +
                    //         '<div>LP</div>\n' +
                    //         '</div>'
                    // }>


                })
                // $("#myVariants").replaceWith(picVariantDOM);
                $(".coll-item").click(function () {
                    $("#bottom-nav").css('visibility', 'visible');
                    $("#email-collection").css('visibility', 'visible');
                    collectionsDOM = '<div id="coll-' + $(this).attr("data-id") + '" class="col-sm-3 col-md-1 col-lg-2 item"\n' +
                        '                                                 style="box-shadow: black; padding-bottom: 10px; padding-top: 10px"><span\n' +
                        '                                                        style="font-size: 10px;"></span>\n' +

                        '                                                <img class="img-fluid img-at-collection" data-id="' + $(this).attr("data-id") + '"\n' +
                        '                                                     src="creativeAssets/images/' + generalResponse[parseInt($(this).attr("data-id"))]['reference_image'] + '"\n' +
                        '                                                     style="max-width:  100%"><span\n' +
                        '                                                         style="font-size: 10px; width: 100%"></span>' +
                        '                                                <img src="images/cancel.svg" class="rounded-circle remove" data-id="' + $(this).attr("data-id") + '" style="margin-left:-20px; width: 25px; bottom: 0; position: absolute;background-color: white"><div>'
                    // alert(parseInt($(this).attr("data-id")))
                    // alert(generalResponse[parseInt($(this).attr("data-id"))]["title"])
                    collectionsArray.push($(this).attr("data-id"))
                    $("#collections-container").append(collectionsDOM)
                    $(".remove").click(async function () {

                        for (var i = 0; i < collectionsArray.length; i++) {
                            var name = collectionsArray[i];
                            if (name === $(this).attr("data-id")) {
                                collectionsArray.splice(i, 1);
                                if (collectionsArray.length === 0) {
                                    $("#email-collection").css('visibility', 'hidden');
                                    $("#bottom-nav").css('visibility', 'hidden');

                                }
                                break;
                            }
                        }
                        $("#coll-" + $(this).attr("data-id")).remove()
                    })
                })


            }

        });


    }
    })
    ;


</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        $("#row-photos").width('85%')
        $("#bottom-nav").width('75%')
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $("#row-photos").width('100%')
        $("#bottom-nav").width('100%')
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/Accordion-3338arvorept.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>