
$(function () {

    function setActive(name) {
        $("div.nav-section .section-title").removeClass('nav-active');
        $(`div.section-title[data-name=${name}]`).addClass('nav-active');
        $("div.presentation-wrapper").attr("data-current", name);
        $("div.presentation-section").removeClass('section-active');
        $(`div.presentation-section.named--${name}`).addClass('section-active');
    }

    let hash = window.location.hash;

    let slides = {
        "#01": "home-adventures",
        "#02": "to-the-stars",
        "#03": "gaudeamus-igitur"
    };

    let slide = slides[slides.hasOwnProperty(hash) ? hash : '#01'];

    $("div.nav-section").on('click', '.section-title', function () {
        setActive($(this).data("name"));
    });

    setActive(slide);
});
