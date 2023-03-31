<?php include("phpfunctions.inc") ?>
<?php
    HTMLStart("Road Kill Grill");
?>
    <link rel="stylesheet" href="../css/mapStyle.css">
<?php 
    HTMLStartCont();
    PageNav();
    PageHeader("Map");
?>
    <main class="middle" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div class="map" id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
        </div>
        <script>(function () {
            var setting = {
                "zoom":17,
                "queryString":"U.S. Route 66, Lupton, AZ, USA",
                "place_id":"Eh5VLlMuIFJvdXRlIDY2LCBMdXB0b24sIEFaLCBVU0EiLiosChQKEgkxKBJWGFXahxEvhXKH-Ye7_BIUChIJaxhMy-sIK4cRcc3Bf7EnOUI",
                "satellite":true,
                "centerCoord":[34.955380211101115,-110.3179173],
                "cid":"0xfcbb87f98772852f",
                "lang":"en",
                "cityUrl":"/us/az/holbrook-1525",
                "cityAnchorText":"Map of Holbrook, Arizona, United States",
                "id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                "embed_id":"881148"
            };
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=881148';
            s.async = true;
            s.onload = function (e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        })();
        </script>
        <a href="https://1map.com/map-embed">1 Map</a>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>