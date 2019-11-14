<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta property="og:image" content="images/photo7.jpg"/>
    <meta name="description"
          content="Вы узнаете, что полезная еда тоже приносит удовольствие,научимся слышать организм, и понимать, о чём он нам сообщает, выведем накопившиеся токсины и продукты метаболизма, нормализуем обмен веществ, и, как следствие, не только улучшим свое самочувствие, но и решим проблему избыточного веса">
    <meta name="keywords"
          content="Бесплатный вебинар, программа оздоровления, правильное питание,вывод токсинов,нормализовать обмен веществ,избыточный вес, как похудеть">
    <title>Бесплатный вебинар на тему здоровья</title>
    <link rel="stylesheet" href="./css/uikit.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Marmelad&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./css/intlTelInput.css">
    <link href="./css/common.css" type="text/css" rel="stylesheet"/>
    <link href="./css/modal.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_logo.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_themes.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_format.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_author.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_time.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_form.css" type="text/css" rel="stylesheet"/>
    <link href="./css/webinar_feed.css" type="text/css" rel="stylesheet"/>
    <link href="./js/timer/demo/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="./js/timer/demo/css/timer.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="./js/form.js"></script>
    <script src="./js/uikit.min.js"></script>
    <script src="./js/uikit-icons.min.js"></script>
    <?php
    include('../services/google_statistic.html');
    include('../services/google_tag_manager_1.html');
    include('../services/yandex.html');
    ?>
</head>
<body>
<?php
include('./webinar_text.php');
include('./messages/modal.php');
include('./components/webinar_logo.php');
include('./components/webinar_author.php');
include('./components/webinar_themes.php');
include('./components/webinar_format.php');
include('./components/webinar_time.php');
include('./components/webinar_form.php');
include('./components/webinar_feed.php');
?>

<script src="js/timer/demo/js/kinetic.js"></script>
<script src="js/timer/jquery.final-countdown.js"></script>
<script src="js/intlTelInput.js"></script>
<script>
    $('document').ready(function() {
        'use strict';

        $('.countdown').final_countdown({
            'start': 1563710400,
            'end': 1564167600-10800,
            'now': Date.now()/1000
        });
    });
</script>

<script>
    $("#big_form_phone").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        preferredCountries: ['ua', 'ru','by'],
        utilsScript: "js/utils.js"
    });
</script>

<script>
    $("#logo_form_phone").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        preferredCountries: ['ua', 'ru','by'],
        utilsScript: "js/utils.js"
    });
</script>
</body>
</html>