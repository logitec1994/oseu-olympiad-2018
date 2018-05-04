$(function () {

    let header = $('header');

    header.find('div.sidebar-mode-toggle').on('click', (e) => {
        header.toggleClass("folded");
    });

});
