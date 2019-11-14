var data = null;
const ajax = (data) => {

    $.ajax({
        type: "POST",
        url: "./php/form.php",
        data: data,
        success: (result) => {
            console.log(result);
            var json = JSON.parse(result);
            infoMessage(json);
        }
    });
};

const infoMessage = (data)=>{
    let form = document.getElementById('question');
    form.style.display = 'none';
  if(data.status=='true'){
     let window = document.getElementById('successWindow');
     window.style.display = 'flex';
     document.getElementById('successText').innerHTML = data.message;
  }
  else if(data.status=='false') {
      let window = document.getElementById('errorWindow');
      window.style.display = 'flex';
      document.getElementById('warningText').innerHTML = data.message;
  }
};

const showMessage = (data) =>{
    UIkit.modal(document.getElementById('modal-close-default')).show();
};

const isEmpty = (value) =>{
    if(value===''){
        return true
    }
    return false
};

const isEmail = (value) =>{
    if(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/.test(value)){
        return true
    }
    return false
};

const submitForm = (form)=>{
    let emailError;
    let nameError;
    let phoneError;
    let phoneValue;
    let phoneNumber;
    let validForm = 0;

    document.getElementById('successWindow').style.display = 'none';
    document.getElementById('errorWindow').style.display = 'none';
    document.getElementById('question').style.display = 'block';

    if(form.className == 'bigFormBody'){
        emailError = document.getElementById('bigFormEmailError');
        nameError = document.getElementById('bigFormNameError');
        phoneValue = $("#big_form_phone");
        phoneError = document.getElementById('bigFormPhoneError');
    }
    else if(form.className == 'logoForm'){
        emailError = document.getElementById('logoFormEmailError');
        nameError = document.getElementById('logoFormNameError');
        phoneValue = $("#logo_form_phone");
        phoneError = document.getElementById('logoFormPhoneError')
    }

    if(isEmpty(form.elements.name.value)){
        validForm ++;
        nameError.style.display = 'block';
        nameError.innerHTML = 'Пожалуйста введите имя'
    }else{
        nameError.style.display = 'none';
    }

    if(isEmpty(form.elements.email.value)){
        validForm ++;
        emailError.style.display = 'block';
        emailError.innerHTML = 'Пожалуйста введите e-mail'
    }else if(!isEmail(form.elements.email.value)){
        validForm++;
        emailError.style.display = 'block';
        emailError.innerHTML = 'E-mail не корректный'
    }else{
        emailError.style.display = 'none';
    }

    if(isEmpty(phoneValue.intlTelInput("getNumber"))){
        phoneError.style.display = 'block';
        phoneError.innerHTML = 'Укажите номер телефона';
        validForm++;
    }
    else if(!phoneValue.intlTelInput("isValidNumber")){
        phoneError.style.display = 'block';
        phoneError.innerHTML = 'Неверно указан номер телефона';
        validForm++;
    }else{
        phoneNumber = phoneValue.intlTelInput("getNumber");
        phoneError.style.display = 'none';
    }

    if(validForm==0){
        showMessage();
        data ={
            request:true,
            name:form.elements.name.value,
            email:form.elements.email.value,
            phone:phoneNumber
        };
    }
};

const sendRequest = (form)=>{
    data.answer = form.elements.media.value;
    ajax(data);
};
