"use strict";

let Notify = {

    show: function (title, msg, timeout, css)
    {
        let messageId = Math.round(new Date().getTime() / 1000);

        $("<div/>",{
            "class": "notify-msg",
            "id": `notify-${messageId}`,
            "css": (!!css ? css : {}),
            "html": [
                $("<div/>", {
                    "class": "notify-msg-title",
                    "html": title
                }),
                $("<div/>", {
                    "class": "notify-msg-body",
                    "html": msg
                })
            ]
        }).appendTo('body');

        $(`#notify-${messageId}`).fadeIn(200);

        setTimeout(() => {
            $(`#notify-${messageId}`).fadeOut(200);

            setTimeout(() => {
                $(`#notify-${messageId}`).remove();
            }, 300);

        }, (timeout * 1000));
    }
};
