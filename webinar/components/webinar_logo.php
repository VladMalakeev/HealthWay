<div  id="courseLink"><div class="courseIcon"><img src="images/edit.png"/></div><a href="https://my-health-way.com" class="courseText">Записаться на курс</a></div>
<div class="logoWrap">
    <div class="logoFormWrap">
        <form class="logoForm">
            <p class="logoFormHeader"><? echo $LOGO_1 ?></p>
            <p class="logoTheme"><? echo $LOGO_2 ?></p>
            <input
                class="logoFormInput"
                placeholder="Ваше имя"
                type="text"
                name="name"
                id="formName"
                maxlength="25"/>
            <div class="logoErrorWrap">
            <span id="logoFormNameError" class="logoError"></span>
            </div>

            <input
                class="logoFormInput"
                placeholder="Ваш e-mail"
                type="email"
                name="email"
                id="formEmail"
                maxlength="50"/>

            <div class="logoErrorWrap">
            <span id="logoFormEmailError" class="logoError"></span>
            </div>

            <input  class="logoFormInput" type="tel" name="phone" id="logo_form_phone">
            <div class="logoErrorWrap">
                <span id="logoFormPhoneError" class="logoError"></span>
            </div>

            <input
                    type="button"
                    onclick="submitForm(this.form)"
                    class="logoFormButton"
                    value="Хочу на вебинар"
            />
        </form>
    </div>

    <div class="logoTextWrap">
        <div class="logoFigure"></div>
        <div class="logoText">
            <div class="logoHeaderWrap">
            <p class="logoHeader"><? echo $LOGO_3_1 ?></p>
            <p class="logoHeaderQuote"><i><? echo $LOGO_3_2 ?></i></p>
            </div>
            <p class="logoDescription"><? echo $LOGO_4 ?></p>
        </div>

    </div>
</div>