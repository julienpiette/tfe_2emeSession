// CONTENT-LEGISLATION
$('#accordian ul li ul li a').click(function(){
            var contentClass = $(this).attr('class');

            var laClass = '.'+contentClass+'-content';
            $('.global .container').addClass('hide');
            $('.global .container').removeClass('show');

            $(laClass).addClass("show");
            $(laClass).removeClass("hide");

            $('#accordian li a').removeClass('h3active');
            $(this).addClass('h3active');
});

// CONTENT-LEGISLATION
$('.legislation #accordian ul li h3').click(function(){
            var contentClass = $(this).attr('class');

            var laClass = '.'+contentClass+'-content';
            $('.global .container').addClass('hide');
            $('.global .container').removeClass('show');

            $(laClass).addClass("show");
            $(laClass).removeClass("hide");

            $('.legislation #accordian ul li h3').removeClass('h3active');
            $(this).addClass('h3active');
});

// SLIDE UP
$(document).ready(function(){
        $("#accordian h3").click(function(){
            $("#accordian ul ul").slideUp();
            if(!$(this).next().is(":visible"))
            {
                $(this).next().slideDown();
            }
        })
});