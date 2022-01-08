$("#expand").click(function() {
    $("#iframe").slideToggle(200);
    $("#iframedesc").slideToggle(250);
    $("#iframe1").slideToggle(300);
    $("#iframedesc1").slideToggle(350);
    $("#iframe2").slideToggle(400);
    $("#iframedesc2").slideToggle(450);
    $("#expand").toggleClass("fas fa-compress-arrows-alt fas fa-expand-arrows-alt");
});