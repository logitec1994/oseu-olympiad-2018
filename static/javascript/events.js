
$(function () {

    $("div.nav-section").on('click', '.section-title', function () {
        $("div.nav-section .section-title").removeClass('nav-active');
        $(this).addClass('nav-active');

        let name = $(this).data("name");
        $("div.presentation-wrapper").attr("data-current", name);

        $("div.presentation-section").removeClass('section-active');
        $(`div.presentation-section.named--${name}`).addClass('section-active');
    });

});
