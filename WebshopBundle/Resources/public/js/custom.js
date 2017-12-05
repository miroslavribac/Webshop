$(document).ready(function(){

// Set css to scroll button and scroll up
    function pageScrollUp() {
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
    }
    pageScrollUp();



     // Open - close search field in header
    function openClosesearchField() {
        $(".header__search.search.search__open").click(function(){
            $( "body" ).toggleClass( "search__box__show__hide");
        });
        $(".search__close__btn_icon").click(function(){
            $( "body" ).toggleClass( "search__box__show__hide");
        });
    }
    openClosesearchField();



});