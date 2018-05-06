"use strict";

class CSettings
{
    constructor()
    {
        this.mSettingsFields = [
            'lastname','firstname', 'patronymic', 'email', 'password', 'avatar'
        ];

        this.mStatuses = {
            "ok/registration": "Регистация прошла успешно, войдите.",

            "error/registration": "Сервера при регистрации.",
            "error/exists": "Эта электронная почта уже используется.",
            "error/fields": "Не все поля заполнены правильно.",
            "error/login": "Неправильный логин или пароль.",
            // "ok/login": ""
        };

        this.months = {
            ru: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
        };

        this.years = aux.range(1997, 2002);
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

    statusHandler(status, item)
    {
        let statusMessage = this.mStatuses[`${status}/${item}`];
        if (!!statusMessage)
        {
            let statusType = (status === "ok" ? "Инфо" : "Ошибка");
            Notify.show(statusType, statusMessage, 5);
        }
    }

    initializeDateFields(registration)
    {
        let years = this.years.map(e => $('<option/>', { value: e, text: e}));
        registration.find('select[name=year]').append(years);

        let months = this.months['ru'].map((e, i) => $('<option/>', { value: (i + 1), text: e}));
        registration.find('select[name=month]').append(months);

        let days = aux.range(1, (new Date(this.years[0], 1, 0).getDate()) + 1);
        registration.find('select[name=day]').append(
            days.map( e => $('<option/>', { value: e, text: e}))
        );
    }

    run()
    {
        let message = cookie.get('msg');

        if (!!message)
        {
            let m = decodeURIComponent(message).split(',');
            this.statusHandler(m[0], m[1])
        }

        let settingsForm = $('#settings-form');
        this.initializeDateFields(settingsForm);

        settingsForm.on('submit', (evt) => {
            return CSettings.validate(evt.currentTarget, this.mSettingsFields);
        });

        settingsForm.find('select').on('change', function(evt) {
            let target = $(evt.target);
            let parent = $(this).parent();
            let year = parent.find('select[name=year]');
            let month = parent.find('select[name=month]');
            let day = parent.find('select[name=day]');

            if (target.attr('name') !== day.attr('name'))
            {
                let days = aux.range(1, (new Date(year.val(), month.val(), 0).getDate()) + 1);

                day.empty();
                day.append(days.map( e => $('<option/>', { value: e, text: e})));
            }
        });

    }
}

$(function () {
    let app = new CSettings();
    app.run();
});
