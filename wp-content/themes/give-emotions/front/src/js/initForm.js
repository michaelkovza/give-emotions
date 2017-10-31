import $ from 'jquery';
import 'jquery-validation';

const initForm = ({userDataSelector, feedbackWrapperSelector, feedbackMessageSelector, activeClassToShowMessage}) => {

    /*console.log(userDataSelector);
     console.log(feedbackWrapperSelector);
     console.log(feedbackMessageSelector);
     console.log(activeClassToShowMessage);*/

    const message = (textContent) => {
        feedbackMessageSelector.text(textContent)
    };

    const showMessage = (itemToShow, activeClass) => {
        itemToShow.addClass(activeClass);
    };

    if (!userDataSelector.length) return;

    $.validator.addMethod('email', function (value) {

        const emailTest = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return emailTest.test(value);
    }, 'Введите корректный e-mail');

    $.validator.addMethod('phone', function (value) {
        const phoneTest = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        return phoneTest.test(value);
    }, 'Введите корректный номер телефона');

    userDataSelector.each(function () {
        $(this)
            .submit(function () {
                return false;
            })
            .validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    phone: {
                        required: true,
                        phone: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    name: {
                        required: 'Укажите имя',
                        minlength: 'Поле не может содержать один символ',
                    },
                    phone: {
                        required: 'Укажите номер телефона',
                        phone: 'Введите корректный номер телефона'
                    },
                    email: {
                        required: 'Укажите e-mail',
                        email: 'Введите корректный e-mail'
                    }
                },
                submitHandler: function (form) {
                    const $form = $(form);
                    $.ajax(({
                        url: form.getAttribute('action'),
                        type: form.getAttribute('method'),
                        data: $form.serialize(),
                        dataType: 'json',
                        success: function (response) {
                            let jsonResponseParse = {
                                status: 'success'
                            };
                            if (jsonResponseParse.status === 'success') {
                                const textContent = 'Спасибо! Мы свяжемся с вами в ближайшее время.';
                                console.log(userDataSelector, 'userDataSelectoruserDataSelectoruserDataSelectoruserDataSelectoruserDataSelector');
                                userDataSelector[0].reset();
                                message(textContent);
                                showMessage(feedbackWrapperSelector, activeClassToShowMessage);
                            } else {
                                const textContent = 'Произошла ошибка. Пожалуйста, попробуйте снова.';
                                console.log(userDataSelector, 'userDataSelectoruserDataSelectoruserDataSelectoruserDataSelectoruserDataSelector');
                                userDataSelector[0].reset();
                                message(textContent);
                                showMessage(feedbackWrapperSelector, activeClassToShowMessage);
                            }
                        },
                        error: function () {

                            const textContent = 'Произошла ошибка сервера. Пожалуйста, перезагрузите страницу и попробуйте снова.';
                            message(textContent);
                            showMessage(feedbackWrapperSelector, activeClassToShowMessage);
                            console.log(userDataSelector, 'userDataSelectoruserDataSelectoruserDataSelectoruserDataSelectoruserDataSelector');
                            userDataSelector[0].reset();
                        }
                    }));
                }
            });
    });
};

export default initForm;