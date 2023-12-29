$(function() {
    $("#menu button").click(function() {
        $("#menu button").removeClass("menu-active");         
        $(this).toggleClass("menu-active");
    })
});