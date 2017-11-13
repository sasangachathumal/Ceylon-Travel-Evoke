$(document).ready(function ($) {
    function interface() {
        var skin = "blue";
        var layout = "layout-semiboxed";
        var bg = "none";
        var themepanel = "1";
        $(".skin").attr("href", "css/skins/" + skin + "/" + skin + ".css");
        $("#layout").addClass(layout);
        $("body").addClass(bg);
        $("#theme-options").css('opacity', themepanel);
        return false;
    }

    interface();
    $('.wide').click(function () {
        $('.boxed').removeClass('active');
        $('.boxed-margin').removeClass('active');
        $('.semiboxed').removeClass('active');
        $(this).addClass('active');
        $('.patterns').css('display', 'none');
        $('#layout').removeClass('layout-semiboxed').removeClass('layout-boxed').removeClass('layout-boxed-margin').addClass('layout-wide');
    });
    $('.semiboxed').click(function () {
        $('.wide').removeClass('active');
        $('.boxed').removeClass('active');
        $('.boxed-margin').removeClass('active');
        $(this).addClass('active');
        $('.patterns').css('display', 'block');
        $('#layout').removeClass('layout-wide').removeClass('layout-boxed').removeClass('layout-boxed-margin').addClass('layout-semiboxed');
    });
    $('.boxed').click(function () {
        $('.wide').removeClass('active');
        $('.boxed-margin').removeClass('active');
        $('.semiboxed').removeClass('active');
        $(this).addClass('active');
        $('.patterns').css('display', 'block');
        $('#layout').removeClass('layout-semiboxed').removeClass('layout-boxed-margin').removeClass('layout-wide').addClass('layout-boxed');
    });
    $('.boxed-margin').click(function () {
        $('.boxed').removeClass('active');
        $('.wide').removeClass('active');
        $('.semiboxed').removeClass('active');
        $(this).addClass('active');
        $('.patterns').css('display', 'block');
        $('#layout').removeClass('layout-semiboxed').removeClass('layout-wide').removeClass('layout-boxed').addClass('layout-boxed-margin');
    });
    $(".red").click(function () {
        $(".skin").attr("href", "css/skins/red/red.css");
        return false;
    });
    $(".blue").click(function () {
        $(".skin").attr("href", "css/skins/blue/blue.css");
        return false;
    });
    $(".yellow").click(function () {
        $(".skin").attr("href", "css/skins/yellow/yellow.css");
        return false;
    });
    $(".green").click(function () {
        $(".skin").attr("href", "css/skins/green/green.css");
        return false;
    });
    $(".orange").click(function () {
        $(".skin").attr("href", "css/skins/orange/orange.css");
        return false;
    });
    $(".purple").click(function () {
        $(".skin").attr("href", "css/skins/purple/purple.css");
        return false;
    });
    $(".pink").click(function () {
        $(".skin").attr("href", "css/skins/pink/pink.css");
        return false;
    });
    $(".cocoa").click(function () {
        $(".skin").attr("href", "css/skins/cocoa/cocoa.css");
        return false;
    });
    $('#theme-options ul.backgrounds li').click(function () {
        var $bgSrc = $(this).css('background-image');
        if ($(this).attr('class') == 'bgnone')
            $bgSrc = "none";
        $('body').css('background-image', $bgSrc);
        $.cookie('background', $bgSrc);
        $.cookie('backgroundclass', $(this).attr('class').replace(' active', ''));
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.openclose').click(function () {
        if ($('#theme-options').css('left') == "-220px") {
            $left = "0px";
            $.cookie('displayoptions', "0");
        } else {
            $left = "-220px";
            $.cookie('displayoptions', "1");
        }
        $('#theme-options').animate({left: $left}, {duration: 500});
    });
    $(function () {
        $('#theme-options').fadeIn();
        $bgSrc = $.cookie('background');
        $('body').css('background-image', $bgSrc);
        if ($.cookie('displayoptions') == "1") {
            $('#theme-options').css('left', '-220px');
        } else if ($.cookie('displayoptions') == "0") {
            $('#theme-options').css('left', '0');
        } else {
            $('#theme-options').delay(800).animate({left: "-220px"}, {duration: 500});
            $.cookie('displayoptions', "1");
        }
        $('#theme-options ul.backgrounds').find('li.' + $.cookie('backgroundclass')).addClass('active');
    });
});