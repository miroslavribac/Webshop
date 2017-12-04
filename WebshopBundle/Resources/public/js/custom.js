$(document).ready(function(){

    $(window).scroll(function(){
        if($(this).scrollTop() < 800){
            $(".chevron").css("display", "none");
        } else{
            $(".chevron").css("display", "block");
        }
    });

    $(".chevron").click(function(e){
        e.preventDefault();
        var i = $(window).scrollTop();
        var int = setInterval(function() {
            window.scrollTo(0, i);
            i -= 80;
            if (i <= -111) clearInterval(int);
        }, 40);
    });

});