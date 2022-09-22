$(document).ready(function () {
    $('.btnToggleSidebar').click(function(e){
		$("body").toggleClass("mini-sidebar");
        return false;
    });
    $('.btnMobNav').click(function(e){
		$(".at-sidebar-wrap").toggleClass("opened");
        return false;
    });
    $(document).click(function (e) {
        if (e.target.id != 'atSidebar') {
            $(".at-sidebar-wrap").removeClass("opened");
        }
    });
    $('.at-sidebar-nav .has-submenu > a').on('click', function () {
        $(this).parent().toggleClass('open');
        $(this).parent().siblings().removeClass('open');
        $(this).parent().siblings().find('.at-submenu').slideUp();
        $(this).parent().find('.at-submenu').slideToggle();
        return false;
    })
})