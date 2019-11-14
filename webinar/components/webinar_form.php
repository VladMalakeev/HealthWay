<div class="bigFormWrap">
    <p class="commonHeader"><? echo $FORM ?></p>

    <form class="bigFormBody">
        <input
            class="bigFormInput"
            placeholder="Ваше имя"
            type="text"
            name="name"
            id="bigFormName"
            maxlength="25"/>
        <div class="errorWrap">
        <span id="bigFormNameError" class="error"></span>
        </div>
        <input
            class="bigFormInput"
            placeholder="Ваш e-mail"
            type="email"
            name="email"
            id="bigFormEmail"
            maxlength="50"/>
        <div class="errorWrap">
        <span id="bigFormEmailError" class="error"></span>
        </div>

        <input  class="bigFormInput" type="tel" name="phone" id="big_form_phone">
        <div class="errorWrap">
            <span id="bigFormPhoneError" class="error"></span>
        </div>
        <input
                type="button"
                onclick="submitForm(this.form)"
                class="bigFormButton"
                value=" Отправить заявку"
        />
    </form>
</div>