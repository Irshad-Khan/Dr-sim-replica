// ------------step-wizard-------------
$(document).ready(function() {
    $('.navbar-toggler').on('click', function() {
        $('#navbarSupportedContent').addClass('show')
    })
    $('.closeNavbar').on('click', function() {
        $('#navbarSupportedContent').removeClass('show')
    })
    $(".next-step").click(function(e) {
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
        console.log('csd')
    });
    $(".prev-step").click(function(e) {
        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);
    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
    console.log($(elem))
}

function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.wizard .nav-tabs').on('click', 'li', function() {
    $('.wizard  .nav-tabs li.active').removeClass('active');
    $(this).prevAll().removeClass('active').addClass('completed');
    $(this).addClass('active');
});