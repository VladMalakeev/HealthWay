<div id="modal-close-default"  class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div id="successWindow">
            <img class="successImage" src="images/check.png"/>
            <p id="successText"></p>
        </div>
        <div id="errorWindow">
            <img class="warningImage" src="images/warning.png"/>
            <p id="warningText"></p>
        </div>
            <form id="question">
                <p class="questionText"><? echo $QUESTION?></p>
            <div class="mediaWrap">
                <div class="mediaBlock">
                    <div class="mediaImage">
                        <img src="images/insta.jpg"/>
                    </div>
                </div>
                <div class="mediaBlock">
                    <div class="mediaImage">
                        <img src="images/youtube.jpg"/>
                    </div>
                </div>
            </div>
            <div class="mediaLabel">
                <label class="formLaber" id="instagramLabel"><input class="uk-radio" type="radio" value="1" name="media" > <span class="labelText">Instagram</span></label>
                <label class="formLaber" id="thirdLabel"><input class="uk-radio" type="radio" name="media" value="3" checked><span class="labelText">Устраивают оба варианта</span></label>
                <label class="formLaber" id="youtubeLabel"><input class="uk-radio" type="radio" value="2" name="media" > <span class="labelText">Youtube</span></label>
            </div>
            <div class="submitButton">
                <input type="button" value="Отправить" class="sendFormButton" onclick="sendRequest(this.form)"/>
            </div>
            </form>
    </div>
</div>