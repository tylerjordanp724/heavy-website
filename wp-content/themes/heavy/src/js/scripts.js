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

function case_study_caorusel() {
    $('.carousel .carousel__container').flickity({
        cellAlign: 'right'
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

    if($('.btn--filter:first'))

    $('.btn--filter').on('click', function(){
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
    case_study_caorusel();
    gridSort();
});