$(document).ready(function () {
    // Tabs
    $(".wrap").on("click", ".tab", function(){
        // Remove class active
        $(".wrap .tab").removeClass("active");

        // Adding class active
        $(this).addClass("active");
    });

    $(".authorization").on("click", function() {
        $("#login-form").removeClass("hidden");
        $("#registration-form").addClass("hidden");
    });
    $(".registration").on("click", function() {
        $("#registration-form").removeClass("hidden");
        $("#login-form").addClass("hidden");
    })
});