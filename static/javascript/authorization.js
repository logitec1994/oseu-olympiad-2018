"use strict";

class CAuthorization
{
    constructor()
    {
        this.mLoginFields = [
            'email', 'password'
        ];

        this.mRegistrationFields = [
            'lastname','firstname', 'patronymic', 'email', 'password', 're-password'
        ];

        this.mStatuses = {
            "ok/registration": "Регистация прошла успешно, войдите.",
            "error/registration": "Сервера при регистрации.",
            "error/exists": "Эта электронная почта уже используется.",
            "error/fields": "Не все поля заполнены правильно.",
            "error/login": "Неправильный логин или пароль.",
            // "ok/login": ""
        };
    }

    static validate(form, inputs)
    {
        for (let field in inputs)
        {
            if (inputs.hasOwnProperty(field))
            {
                let object = $(form).find(`input[name=${inputs[field]}]`);

                if (!object && !object.length)
                {
                    return false;
                }

                object.removeClass('invalid');
                if (!object.val())
                {
                    object.addClass('invalid');
                    return false;
                }
            }
        }
        return true;
    }

    registration(form)
    {
        let status = CAuthorization.validate(form, this.mRegistrationFields);
        let password = $(form).find('input[name=password]');
        let re_password = $(form).find('input[name=re-password]');

        status = (status && (password.val() === re_password.val()));

        if (!status)
        {
            password.addClass('invalid');
            re_password.addClass('invalid');
        }

        return status;
    }

    login(form)
    {
        return CIndex.validate(form, this.mLoginFields);
    }

    statusHandler(status, item)
    {

        let statusMessage = this.mStatuses[`${status}/${item}`];
        if (!!statusMessage)
        {
            let statusType = (status === "ok" ? "Инфо" : "Ошибка");
            Notify.show(statusType, statusMessage, 5);
        }
    }

    run()
    {
        let message = cookie.get('msg');

        if (!!message)
        {
            let m = decodeURIComponent(message).split(',');
           this.statusHandler(m[0], m[1])
        }

        $('#registration-form').on('submit', (evt) => {
            return this.registration(evt.currentTarget);
        });

        $('#login-form').on('submit', (evt) => {
            return this.login(evt.currentTarget);
        });
    }
}

$(function () {
    let app = new CAuthorization();
    app.run();
});
