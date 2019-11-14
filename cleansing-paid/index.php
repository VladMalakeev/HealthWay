<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta property="og:image" content="images/photo7.jpg" />
    <title>Путь здоровья | Оплата успешна</title>
    <link rel="stylesheet" type="text/css" href="../css/payment.css">
    <?
        include('../text.php');
    ?>
</head>
<body>
    <div class="paymentWrap">
        <div class="topImage"></div>
        <div class="paymentBlock">
            <div class="paymentHeader">
                <p><? echo $CLEANSING_PAID_HEADER ?></p>
            </div>
            <div class="paymentTextWrap">
                <p class="paymentTextInfo">
                    <? echo $CLEANSING_PAID_DESCRIPTION ?>
                </p>
                <p class="paymentTextLast"> <? echo $PAID_END ?> </p>
            </div>
            <div class="paymentLinks">

                <p class="linkHeader"><? echo $PAID_QUESTIONS ?></p>
                <div class="linkWrap">
                    <a class="socLink telegram" target="_blank" href="https://t.me/Oleg_Dudko">
                        <img src="../images/telegram.png">
                        <span>Telegram</span>
                    </a>
                    <a class="socLink instagram" target="_blank" href="https://www.instagram.com/_pythonic/">
                        <img src="../images/instagram.png">
                        <span>Instagram</span>
                    </a>
                    <a class="socLink viber" target="_blank" href="viber://chat?number=380997230571">
                        <img src="../images/viber.png">
                        <span>Viber</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footerImage"></div>
    </div>
</body>
</html>