
<div id="price">
    <div class="headerWrap">
        <p class="header"><span><? echo $PRICE_HEADER ?></span></p>
    </div>
    <div class="priceBlock">
        <div class="courseContainer">
            <div class="course1Image">
                <div class="uk-inline-clip uk-transition-toggle hoverImgWrap" tabindex="0">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="../images/food.jpg" alt="">
                </div>
                <p class="courseName"><? echo $PRICE_TITLE_1 ?></p>
            </div>
            <div>
                <p class="priseDescription">Цена курса - <span><? echo $PRICE_1_UAH ?></span></p>
                <p class="priseDescription">или - <span><? echo $PRICE_1_RUR ?></span></p>
                <p class="discountDescription">Цена со скидкой - <span><? echo $DISCOUNT_1_UAH?>
                        или <? echo $DISCOUNT_1_RUR ?>
                    </span></p>
            </div>
            <a href="https://glopart.ru/buy/194931" target="_blank" class="priceButton"><? echo $PRICE_BUTTON ?></a>
        </div>

        <div class="courseContainer">
            <div class="course2Image">
                <div class="uk-inline-clip uk-transition-toggle hoverImgWrap" tabindex="0">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="../images/health2.jpg" alt="">
                </div>
                <p class="courseName"><? echo $PRICE_TITLE_2 ?></p>
            </div>
            <div>
                <div class="marketingBlock">
<!--                    <span class="firstLine"></span>-->
<!--                    <span class="secondLine"></span>-->
                <p class="priseDescription">Цена курса - <span><? echo $PRICE_2_UAH ?></span></p>
                    <p class="priseDescription">или - <span><? echo $PRICE_2_RUR ?></span></p>
                </div>
                <p class="discountDescription">Цена со скидкой - <span><? echo $DISCOUNT_2_UAH?>
                    или <? echo $DISCOUNT_2_RUR ?>
                    </span></p>
            </div>
            <a href="https://glopart.ru/buy/194932" target="_blank" class="priceButton"><? echo $PRICE_BUTTON ?></a>
        </div>
    </div>
<!--    <p class="discountText">--><?// echo $DISCOUNT_DESCRIPTION ?><!--</p>-->
</div>
