$(function () {

    let header = $('header');
    let chevron = $('div.sidebar-mode-toggle');

    header.find('div.sidebar-mode-toggle').on('click', (e) => {
        header.toggleClass("folded");
    });

    chevron.on('click', (e) => {
        chevron.find('i').toggleClass("fa-chevron-left fa-chevron-right")
    });

});
