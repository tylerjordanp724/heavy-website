function headerScroll() {
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
    var $careerItem = $('.career__title-list ul li');
        $firstNavItem = $('.career__title-list ul li:first');
        $firstItem =  $('.career__desc-container:first');
        maxHeight = 0;
    
    $firstNavItem.addClass('active');

    if($firstNavItem.hasClass('active')) {
        maxHeight +=  $firstItem.outerHeight();
    
        $firstItem.addClass('active');

        $('.career__desc').css({'height': maxHeight});
        //maxHeight += 
    }

    $(window).resize(function(){
        var itemHeight = $('.career__desc-container.active').outerHeight();
        $('.career__desc').css({'height': itemHeight});

    });
    
    

    $careerItem.click(function(){
        var $currItem = $('#' + $(this).attr('data-title'));
            $currItemHeight = $currItem.outerHeight();
            $itemParent = $('.career__desc');

        maxHeight =  $currItem.outerHeight();

        $('.career__title-list ul li').removeClass('active');
        $('.career__desc-container').removeClass('active');
        $currItem.addClass('active');
        $(this).addClass('active');
        $('.career__desc').css({'height': maxHeight});
        // $itemParent.css({'height': ''+$currItemHeight+'px'});
    });
}

function case_study_caorusel() {
    $('.carousel .carousel__container').flickity({
        cellAlign: 'right'
    });
} 

function content_carousel() {
    $('.carousel--content').flickity({
        cellAlign: 'center'
    });
}

function gridSort() {
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

$(document).ready(function() {
    headerScroll();
    careers();
    case_study_caorusel();
    content_carousel();
    gridSort();
});