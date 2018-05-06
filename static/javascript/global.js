$(function () {

    let header = $('header');
    let chevron = $('div.sidebar-mode-toggle');

    chevron.on('click', (e) => {
        header.toggleClass("folded");
        cookie.set("imf", Number(header.hasClass('folded')));
    });

    chevron.on('click', (e) => {
        chevron.find('i').toggleClass("fa-angle-double-left fa-angle-double-right")
    });
});
