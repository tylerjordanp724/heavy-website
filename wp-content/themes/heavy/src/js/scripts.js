function header_scroll() {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();
    
    $(window).scroll(function(){
        didScroll = true;
    });

    setInterval(function(){
        if(didScroll) {
            hasScrolled();
            didScroll = false;
        }
    },250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        if(Math.abs(lastScrollTop - st) <= delta) {
            return;
        }

        // If current position > last position AND scrolled past navbar...
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            // If did not scroll past the document (possible on mac)...
            if(st + $(window).height() < $(document).height()) { 
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }
}

function careers() {
    var $career_item = $('.career__title-list ul li');
        $first_nav_item = $('.career__title-list ul li:first');
        $first_item =  $('.career__desc-container:first');
        max_height = 0;
    
    $first_nav_item.addClass('active');

    if($first_nav_item.hasClass('active')) {
        max_height +=  $first_item.outerHeight();
    
        $first_item.addClass('active');

        $('.career__desc').css({'height': max_height});
    }

    $(window).resize(function(){
        var item_height = $('.career__desc-container.active').outerHeight();
        $('.career__desc').css({'height': item_height});

    });
    

    $career_item.click(function(){
        var $curr_item = $('#' + $(this).attr('data-title'));
            $curr_item_height = $curr_item.outerHeight();
            $item_parent = $('.career__desc');

        max_height =  $curr_item.outerHeight();

        $('.career__title-list ul li').removeClass('active');
        $('.career__desc-container').removeClass('active');
        $curr_item.addClass('active');
        $(this).addClass('active');
        $('.career__desc').css({'height': max_height});
    });
}

function case_study_caorusel() {
    $('.carousel .carousel__container').flickity({
        cellAlign: 'right'
    });
} 

function content_carousel() {
    $('.carousel--content, .post-block-carousel__inner').flickity({
        cellAlign: 'center'
    });
}

function grid_sort() {
    var $grid = $('.grid-sort__wrapper').isotope({
        itemSelector: '.grid-item',
        resize: true,
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });

    $('.btn--filter:first').addClass('active');

    $('.btn--filter').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        $('.btn--filter').removeClass('active');
        $(this).addClass('active');

        $grid.isotope({
            filter: filterValue
        });
    });   

}

function gt_hover() {
    $(".left-col").hover(function () {
        $(this).toggleClass("active");
        $(this).next().toggleClass("push-r");
    });
    
    $(".right-col").hover(function () {
        $(this).toggleClass("active");
        $(this).prev().toggleClass("push-l");
    });
}

function contact_modal() {
    var $modal_trigger = $('.btn--modal');
        $modal_close = $('.btn--close');

    $modal_trigger.click(function(e){
        e.preventDefault();

        $('body').find('.modal').addClass('open');
    });

    $modal_close.click(function(){
        $('.modal').removeClass('open');
    });
}

$(document).ready(function() {
    header_scroll();
    careers();
    case_study_caorusel();
    content_carousel();
    grid_sort();
    gt_hover();
});