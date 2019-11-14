<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta property="og:image" content="images/photo7.jpg" />
    <meta name="description" content="Путь здоровья. Вы узнаете, что полезная еда тоже приносит удовольствие,научимся слышать организм, и понимать, о чём он нам сообщает, выведем накопившиеся токсины и продукты метаболизма, нормализуем обмен веществ, и, как следствие, не только улучшим свое самочувствие, но и решим проблему избыточного веса">
    <meta name="keywords" content="путь здоровья, healthway, health-way.net, программа оздоровления, переход на ПП,вывод токсинов,нормализовать обмен веществ,избыточный вес, как похудеть">
    <title>Путь здоровья | Программа оздоровления</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/logo.css">
    <link type="text/css" rel="stylesheet" href="css/offers.css">
    <link type="text/css" rel="stylesheet" href="css/webinar.css">
    <link type="text/css" rel="stylesheet" href="css/video.css">
    <link type="text/css" rel="stylesheet" href="css/schedule.css">
    <link type="text/css" rel="stylesheet" href="css/steps.css">
    <link type="text/css" rel="stylesheet" href="css/start.css">
    <link type="text/css" rel="stylesheet" href="css/price.css">
    <link type="text/css" rel="stylesheet" href="css/feed.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Marmelad&display=swap" rel="stylesheet">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="css/dist/tinyDrawer.min.css">
    <?php
    include('services/google_statistic.html');
    include('services/google_tag_manager_1.html');
    include('services/yandex.html');
    ?>
</head>
<body>
<?php
    include('text.php');
    include('components/header.php');
    include('components/logo.php');
    include('components/offers.php');
    include('components/webinar.php');
    include('components/video.php');
    include('components/schedule.php');
    include('components/steps.php');
    include('components/start.php');
    include('components/price.php');
    include('components/feed.php');
    include('components/footer.php');
?>
<script src="/js/dist/tinyDrawer.min.js"></script>

<script>
    tinyDrawer({
        callback: function(element, action) {
            console.log(element);
            console.log(action);
        }
    });
</script>
</body>
</html>