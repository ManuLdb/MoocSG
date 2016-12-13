$("#fleche").click(function() {
    $('html, body').animate({
        scrollTop: $("#test").offset().top
    }, 1500);
});